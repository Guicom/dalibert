<?php
/**
 * @file
 * dt_block_sidebar.features.fe_block_settings.inc
 */

/**
 * Implements hook_default_fe_block_settings().
 */
function dt_block_sidebar_default_fe_block_settings() {
  $export = array();

  $export['version'] = '2.0';

  $export['block-block_sidebar_decouvrez'] = array(
    'cache' => -1,
    'custom' => 0,
    'machine_name' => 'block_sidebar_decouvrez',
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
        'weight' => -15,
      ),
      'seven' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'seven',
        'weight' => 0,
      ),
      'zen' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'zen',
        'weight' => 0,
      ),
    ),
    'title' => '<none>',
    'visibility' => 0,
  );

  $export['block-block_sidebar_gastro'] = array(
    'cache' => -1,
    'custom' => 0,
    'machine_name' => 'block_sidebar_gastro',
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
        'weight' => -12,
      ),
      'seven' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'seven',
        'weight' => 0,
      ),
      'zen' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'zen',
        'weight' => 0,
      ),
    ),
    'title' => '<none>',
    'visibility' => 0,
  );

  $export['block-block_sidebar_lieux'] = array(
    'cache' => -1,
    'custom' => 0,
    'machine_name' => 'block_sidebar_lieux',
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
        'weight' => -13,
      ),
      'seven' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'seven',
        'weight' => 0,
      ),
      'zen' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'zen',
        'weight' => 0,
      ),
    ),
    'title' => '<none>',
    'visibility' => 0,
  );

  $export['block-sidebar_block_vins'] = array(
    'cache' => -1,
    'custom' => 0,
    'machine_name' => 'sidebar_block_vins',
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
        'weight' => -14,
      ),
      'seven' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'seven',
        'weight' => 0,
      ),
      'zen' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'zen',
        'weight' => 0,
      ),
    ),
    'title' => '<none>',
    'visibility' => 0,
  );

  return $export;
}
