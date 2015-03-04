<?php
/**
 * @file
 * dt_block_menu_footer.features.fe_block_boxes.inc
 */

/**
 * Implements hook_default_fe_block_boxes().
 */
function dt_block_menu_footer_default_fe_block_boxes() {
  $export = array();

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'Menu footer';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'footer_menu_block';
  $fe_block_boxes->body = '<div class="inverse content-footer">
<p>Copyright Hôtel d\'Aibert - 2015 - <a href="/mentions-légales">Mentions légales</a></p>
<p class="menu-footer"><a href="/mentions-légales">Accueil</a> - <a href="/mentions-légales">L\'hôtel</a> - <a href="/mentions-légales">Le restaurant</a> - <a href="/chambres">Les chambres</a> - <a href="/actualites">Actualités</a> - <a href="/reservation">Réservez</a> - <a href="/mcontact">Contactez-nous</a></p>
</div>';

  $export['footer_menu_block'] = $fe_block_boxes;

  return $export;
}
