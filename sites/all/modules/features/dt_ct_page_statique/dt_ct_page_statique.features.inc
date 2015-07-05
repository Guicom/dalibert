<?php
/**
 * @file
 * dt_ct_page_statique.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function dt_ct_page_statique_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function dt_ct_page_statique_node_info() {
  $items = array(
    'page_statique' => array(
      'name' => t('Page'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
