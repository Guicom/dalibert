<?php
/**
 * @file
 * dt_block_sidebar.features.fe_block_boxes.inc
 */

/**
 * Implements hook_default_fe_block_boxes().
 */
function dt_block_sidebar_default_fe_block_boxes() {
  $export = array();

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'Block découvrez';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'block_sidebar_decouvrez';
  $fe_block_boxes->body = '<div class="inverse content-decouvrez"><span class="bold">Découvrez</span></div>';

  $export['block_sidebar_decouvrez'] = $fe_block_boxes;

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'Block gastronomie';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'block_sidebar_gastro';
  $fe_block_boxes->body = '<a class="gastro" href="/reservation">
<div class="inverse content-gastro">
<div class="gastro-content">
<span class="bold">Notre belle</span>
<span class="normal">gastronomie locale</span>
</div>
</div>
</a>';

  $export['block_sidebar_gastro'] = $fe_block_boxes;

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'Block lieux';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'block_sidebar_lieux';
  $fe_block_boxes->body = '<a class="lieux" href="/reservation">
<div class="inverse content-lieux">
<div class="lieux-content">
<span class="bold">Les lieux</span>
<span class="normal">touristiques à visiter</span>
</div>
</div>
</a>';

  $export['block_sidebar_lieux'] = $fe_block_boxes;

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'Block vins';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'sidebar_block_vins';
  $fe_block_boxes->body = '<a class="vins" href="/reservation">
<div class="inverse content-vins">
<div class="vin-content">
<span class="bold">Les vins</span>
<span class="normal">de Caunes-Minèrvois</span>
</div>
</div>
</a>';

  $export['sidebar_block_vins'] = $fe_block_boxes;

  return $export;
}
