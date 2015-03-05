<?php
/**
 * @file
 * dt_block_reservez.features.fe_block_settings.inc
 */

/**
 * Implements hook_default_fe_block_settings().
 */
function dt_block_reservez_default_fe_block_settings() {
  $export = array();

  $export['version'] = '2.0';

  $export['block-bloc_reservez'] = array(
    'cache' => -1,
    'custom' => 0,
    'machine_name' => 'bloc_reservez',
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
        'region' => 'sidebar_second',
        'status' => 1,
        'theme' => 'dalibert',
        'weight' => -16,
      ),
      'seven' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'seven',
        'weight' => 0,
      ),
      'zen' => array(
        'region' => 'sidebar_second',
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
