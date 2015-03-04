<?php
/**
 * @file
 * dt_block_menu_footer.features.fe_block_settings.inc
 */

/**
 * Implements hook_default_fe_block_settings().
 */
function dt_block_menu_footer_default_fe_block_settings() {
  $export = array();

  $export['version'] = '2.0';

  $export['block-footer_menu_block'] = array(
    'cache' => -1,
    'custom' => 0,
    'machine_name' => 'footer_menu_block',
    'module' => 'block',
    'node_types' => array(),
    'pages' => '',
    'roles' => array(),
    'themes' => array(
      'bartik' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bartik',
        'weight' => 0,
      ),
      'dalibert' => array(
        'region' => 'footer',
        'status' => 1,
        'theme' => 'dalibert',
        'weight' => -13,
      ),
      'seven' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'seven',
        'weight' => 0,
      ),
      'zen' => array(
        'region' => 'footer',
        'status' => 1,
        'theme' => 'zen',
        'weight' => 0,
      ),
    ),
    'title' => '<none>',
    'visibility' => 0,
  );

  return $export;
}
