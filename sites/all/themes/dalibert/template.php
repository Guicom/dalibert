<?php
/**
 * @file
 * The primary PHP file for this theme.
 */


function dalibert_menu_link(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';
  global $language;

  if (drupal_is_front_page()) {
    $link_anchor = variable_get($variables['element']['#original_link']['mlid'] . '_' . $language->prefix. '_anchor');
    if($link_anchor != null) {
      $output = '<a href="' . $link_anchor. '">' . $element['#title'] . '</a>';
      return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
    }else {
      $output = l($element['#title'], $element['#href'], $element['#localized_options']);
      return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
    }


  }else {
    if ($element['#below']) {
      $sub_menu = drupal_render($element['#below']);
    }
    $output = l($element['#title'], $element['#href'], $element['#localized_options']);
    return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
  }
}


function dalibert_preprocess_node(&$variables) {
  $variables['view_mode'] = $variables['elements']['#view_mode'];
  // Provide a distinct $teaser boolean.
  $variables['teaser'] = $variables['view_mode'] == 'teaser';
  $variables['node'] = $variables['elements']['#node'];
  $node = $variables['node'];

  $variables['date'] = format_date($node->created);
  $variables['name'] = theme('username', array('account' => $node));

  $uri = entity_uri('node', $node);
  $variables['node_url'] = url($uri['path'], $uri['options']);
  $variables['title'] = check_plain($node->title);
  $variables['page'] = $variables['view_mode'] == 'full' && node_is_page($node);

  // Flatten the node object's member fields.
  $variables = array_merge((array) $node, $variables);

  // Helpful $content variable for templates.
  $variables += array('content' => array());
  foreach (element_children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }

  // Make the field variables available with the appropriate language.
  field_attach_preprocess('node', $node, $variables['content'], $variables);

  // Display post information only on certain node types.
  if (variable_get('node_submitted_' . $node->type, TRUE)) {
    $variables['display_submitted'] = TRUE;
    $variables['submitted'] = t('Submitted by !username on !datetime', array('!username' => $variables['name'], '!datetime' => $variables['date']));
    $variables['user_picture'] = theme_get_setting('toggle_node_user_picture') ? theme('user_picture', array('account' => $node)) : '';
  }
  else {
    $variables['display_submitted'] = FALSE;
    $variables['submitted'] = '';
    $variables['user_picture'] = '';
  }

  // Gather node classes.
  $variables['classes_array'][] = drupal_html_class('node-' . $node->type);
  if ($variables['promote']) {
    $variables['classes_array'][] = 'node-promoted';
  }
  if ($variables['sticky']) {
    $variables['classes_array'][] = 'node-sticky';
  }
  if (!$variables['status']) {
    $variables['classes_array'][] = 'node-unpublished';
  }
  if ($variables['teaser']) {
    $variables['classes_array'][] = 'node-teaser';
  }
  if (isset($variables['preview'])) {
    $variables['classes_array'][] = 'node-preview';
  }

  // Clean up name so there are no underscores.
  $variables['theme_hook_suggestions'][] = 'node__' . $node->type;
  $variables['theme_hook_suggestions'][] = 'node__' . $node->nid;

  global $language;
  global $base_url;
  $site_url = $base_url . '/' . $language->prefix;
  //Get last page visited
  if(!empty($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != $site_url) {
    $variables['last_url'] = $_SERVER['HTTP_REFERER'];
  }else {
    $view = views_get_view('chambres', TRUE);
    $path = $view->display['page']->display_options['path'];
    $variables['last_url'] = '/' . $language->prefix .'/' . $path;
  }

}


function dalibert_date_part_label_date(&$vars) {
  if ($vars['element']['#field']['field_name'] == 'field_date_d_arrivee') {
    if ($vars['element']['#date_title'] == 'Dates Start date') {
      return t('Check-in date', array(), array('context' => 'datetime'));
    } elseif ($vars['element']['#date_title'] == 'Dates End date') {
      return t('Check-out date', array(), array('context' => 'datetime'));
    }
  } else {
    return t($vars['element']['#date_title']);
  }
}