<?php
/**
 * @file
 * dt_block_actualites.features.fe_block_settings.inc
 */

/**
 * Implements hook_default_fe_block_settings().
 */
function dt_block_actualites_default_fe_block_settings() {
  $export = array();

  $export['version'] = '2.0';

  $export['views-actualites-block_1'] = array(
    'cache' => -1,
    'custom' => 0,
    'delta' => 'actualites-block_1',
    'module' => 'views',
    'node_types' => array(),
    'pages' => 'actualites/*
news/*',
    'roles' => array(),
    'themes' => array(
      'bartik' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bartik',
        'weight' => 0,
      ),
      'dalibert' => array(
        'region' => 'content',
        'status' => 1,
        'theme' => 'dalibert',
        'weight' => -11,
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
    'title' => '',
    'visibility' => 1,
  );

  return $export;
}
