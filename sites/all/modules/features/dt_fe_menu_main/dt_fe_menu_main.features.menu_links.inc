<?php
/**
 * @file
 * dt_fe_menu_main.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function dt_fe_menu_main_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: main-menu_actualits:actualites
  $menu_links['main-menu_actualits:actualites'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'actualites',
    'router_path' => 'actualites',
    'link_title' => 'Actualités',
    'options' => array(
      'identifier' => 'main-menu_actualits:actualites',
    ),
    'module' => 'system',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => -49,
    'customized' => 1,
    'language' => 'und',
    'menu_links_customized' => 1,
  );
  // Exported menu link: main-menu_chambres:chambres
  $menu_links['main-menu_chambres:chambres'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'chambres',
    'router_path' => 'chambres',
    'link_title' => 'Chambres',
    'options' => array(
      'identifier' => 'main-menu_chambres:chambres',
    ),
    'module' => 'system',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => -48,
    'customized' => 1,
    'language' => 'und',
    'menu_links_customized' => 1,
  );
  // Exported menu link: main-menu_home:<front>
  $menu_links['main-menu_home:<front>'] = array(
    'menu_name' => 'main-menu',
    'link_path' => '<front>',
    'router_path' => '',
    'link_title' => 'Home',
    'options' => array(
      'identifier' => 'main-menu_home:<front>',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 1,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => -50,
    'customized' => 1,
    'language' => 'und',
    'menu_links_customized' => 1,
  );
  // Exported menu link: main-menu_rserver:eform/submit/reservation
  $menu_links['main-menu_rserver:eform/submit/reservation'] = array(
    'menu_name' => 'main-menu',
    'link_path' => 'eform/submit/reservation',
    'router_path' => 'eform/submit/%',
    'link_title' => 'Réserver',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'main-menu_rserver:eform/submit/reservation',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => -47,
    'customized' => 1,
    'language' => 'und',
    'menu_links_customized' => 1,
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Actualités');
  t('Chambres');
  t('Home');
  t('Réserver');


  return $menu_links;
}
