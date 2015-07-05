<?php
/**
 * @file
 * dt_block_reservez.features.fe_block_boxes.inc
 */

/**
 * Implements hook_default_fe_block_boxes().
 */
function dt_block_reservez_default_fe_block_boxes() {
  $export = array();

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'Bloc lien reservation';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'bloc_reservez';
  $fe_block_boxes->body = '<a class="reserver" href="/reservation" tabindex="-1">
<div class="inverse content-reserver">
<div class="reserver-content">
<span class="bold">Réservez</span>
<span class="normal">votre chambre</span>
</div>
</div>
</a>';

  $export['bloc_reservez'] = $fe_block_boxes;

  return $export;
}
