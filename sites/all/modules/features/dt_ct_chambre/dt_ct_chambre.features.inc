<?php
/**
 * @file
 * dt_ct_chambre.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function dt_ct_chambre_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function dt_ct_chambre_node_info() {
  $items = array(
    'chambre' => array(
      'name' => t('Chambre'),
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
