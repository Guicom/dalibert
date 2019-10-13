<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
<header id="navbar" role="banner" class="navbar-default col-sm-12">
  <div class="<?php print $container_class; ?>">
    <div class="navbar-header">
        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">

          <svg version="1.1" baseProfile="basic" id="Calque_1"
               xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 491.8 103.6"
               xml:space="preserve">
<g id="XMLID_70_">
  <path id="XMLID_71_" d="M42.1,62.3c0,0.5-0.2,0.9-0.5,1.2c-0.4,0.3-0.8,0.5-1.3,0.5s-0.9-0.2-1.2-0.5c-0.3-0.3-0.5-0.8-0.5-1.2
		V41.1H13.1v21.2c0,0.5-0.2,0.9-0.5,1.2c-0.3,0.3-0.8,0.5-1.2,0.5c-0.5,0-1-0.2-1.3-0.5c-0.3-0.3-0.5-0.8-0.5-1.2V20.3
		c0-0.5,0.2-0.9,0.5-1.2c0.3-0.3,0.8-0.5,1.3-0.5c0.5,0,0.9,0.2,1.2,0.5c0.3,0.3,0.5,0.8,0.5,1.2v17.3h25.4V20.3
		c0-0.5,0.2-0.9,0.5-1.2c0.3-0.3,0.8-0.5,1.2-0.5s0.9,0.2,1.3,0.5c0.4,0.3,0.5,0.8,0.5,1.2V62.3z"/>
  <path id="XMLID_73_" d="M98.6,41.3c0,3.2-0.6,6.1-1.8,8.9c-1.2,2.8-2.8,5.2-4.9,7.2c-2.1,2.1-4.5,3.7-7.2,4.9
		c-2.8,1.2-5.7,1.8-8.8,1.8c-3.2,0-6.1-0.6-8.9-1.8c-2.8-1.2-5.2-2.8-7.2-4.9c-2.1-2.1-3.7-4.5-4.9-7.2c-1.2-2.8-1.8-5.7-1.8-8.9
		c0-3.1,0.6-6.1,1.8-8.8c1.2-2.8,2.8-5.2,4.9-7.2c2.1-2.1,4.5-3.7,7.2-4.9c2.8-1.2,5.7-1.8,8.9-1.8c3.1,0,6.1,0.6,8.8,1.8
		c2.8,1.2,5.2,2.8,7.2,4.9c2.1,2.1,3.7,4.5,4.9,7.2C98,35.2,98.6,38.2,98.6,41.3z M95.2,41.3c0-2.6-0.5-5.1-1.5-7.4
		s-2.4-4.4-4.1-6.1c-1.7-1.7-3.8-3.1-6.1-4.1c-2.3-1-4.8-1.5-7.5-1.5s-5.1,0.5-7.5,1.5c-2.4,1-4.4,2.4-6.1,4.1
		c-1.7,1.7-3.1,3.8-4.1,6.1s-1.5,4.8-1.5,7.4c0,2.7,0.5,5.2,1.5,7.5s2.4,4.4,4.1,6.1C64,56.6,66,58,68.4,59c2.4,1,4.9,1.5,7.5,1.5
		S81,60,83.4,59c2.3-1,4.4-2.4,6.1-4.1c1.7-1.7,3.1-3.8,4.1-6.1S95.2,44,95.2,41.3z M83,13.8c0,0.4-0.1,0.8-0.4,1.1
		c-0.3,0.3-0.6,0.4-1.1,0.4c-0.4,0-0.7-0.1-1.1-0.4l-4.6-4.7l-4.6,4.7c-0.4,0.3-0.7,0.4-1.1,0.4c-0.4,0-0.8-0.1-1.1-0.4
		c-0.3-0.3-0.4-0.7-0.4-1.1c0-0.4,0.1-0.7,0.4-1.1l5.6-5.8c0.4-0.3,0.7-0.4,1.1-0.4s0.7,0.1,1.1,0.4l5.6,5.8
		C82.9,13.1,83,13.4,83,13.8z"/>
  <path id="XMLID_77_" d="M132.1,20.3c0,0.5-0.2,0.9-0.5,1.2c-0.3,0.3-0.8,0.5-1.2,0.5h-10.6v40.3c0,0.5-0.2,0.9-0.5,1.2
		c-0.3,0.3-0.7,0.5-1.2,0.5c-0.5,0-0.9-0.2-1.3-0.5c-0.3-0.3-0.5-0.8-0.5-1.2V22h-10.6c-0.5,0-0.9-0.2-1.2-0.5
		c-0.3-0.3-0.5-0.8-0.5-1.2s0.2-0.9,0.5-1.2c0.3-0.3,0.8-0.5,1.2-0.5h24.7c0.5,0,0.9,0.2,1.2,0.5C132,19.4,132.1,19.8,132.1,20.3z"
  />
  <path id="XMLID_79_" d="M163.6,62.3c0,0.5-0.2,0.9-0.5,1.2c-0.3,0.3-0.8,0.5-1.3,0.5h-20.6c-0.5,0-1-0.2-1.3-0.5
		c-0.3-0.3-0.5-0.8-0.5-1.2v-0.1v-0.1V20.2c0-0.5,0.2-0.9,0.5-1.2c0.3-0.3,0.8-0.5,1.3-0.5h20.6c0.5,0,0.9,0.2,1.3,0.5
		c0.3,0.3,0.5,0.8,0.5,1.2s-0.2,0.9-0.5,1.2c-0.3,0.3-0.8,0.5-1.3,0.5h-18.9v17.1h16.1c0.5,0,0.9,0.2,1.2,0.5
		c0.3,0.3,0.5,0.8,0.5,1.3c0,0.5-0.2,0.9-0.5,1.3c-0.3,0.3-0.8,0.5-1.2,0.5h-16.1v17.9h18.9c0.5,0,0.9,0.2,1.3,0.5
		C163.4,61.4,163.6,61.8,163.6,62.3z"/>
  <path id="XMLID_81_" d="M191.4,62.3c0,0.5-0.2,0.9-0.5,1.3c-0.3,0.3-0.8,0.5-1.3,0.5h-16c-0.5,0-0.9-0.2-1.2-0.5
		c-0.3-0.3-0.5-0.8-0.5-1.2V20.3c0-0.5,0.2-0.9,0.5-1.2c0.3-0.3,0.8-0.5,1.2-0.5s0.9,0.2,1.2,0.5c0.3,0.3,0.5,0.7,0.5,1.2v40.3h14.3
		c0.5,0,0.9,0.2,1.3,0.5C191.2,61.4,191.4,61.8,191.4,62.3z"/>
  <path id="XMLID_83_" d="M255.5,41c0,3.4-0.6,6.6-1.8,9.4c-1.2,2.8-2.7,5.3-4.6,7.3c-1.9,2-4,3.6-6.4,4.7c-2.4,1.1-4.8,1.6-7.3,1.6
		h-14.8c-0.7,0-1.2-0.3-1.6-1c-0.2-0.6-0.2-1.1,0-1.6V20.3c0-0.5,0.2-0.9,0.5-1.2c0.3-0.3,0.8-0.5,1.3-0.5h14.5c3,0,5.7,0.7,8.2,2
		c2.5,1.3,4.6,3,6.4,5.1c1.8,2.1,3.2,4.5,4.1,7.2C255.1,35.5,255.5,38.2,255.5,41z M252,41c0-2.4-0.4-4.7-1.2-7
		c-0.8-2.3-1.9-4.3-3.4-6.1c-1.5-1.8-3.2-3.2-5.2-4.3c-2-1.1-4.3-1.6-6.8-1.6h-12.7v38.6h12.8c2.4,0,4.7-0.6,6.7-1.8
		c2-1.2,3.8-2.7,5.2-4.6c1.5-1.9,2.6-3.9,3.4-6.3C251.6,45.6,252,43.3,252,41z"/>
  <path id="XMLID_86_" d="M267.4,24.1c0,1.2-0.3,2.4-0.8,3.5c-0.5,1.1-1.3,2-2.3,2.7c-0.4,0.3-0.8,0.4-1.1,0.4
		c-0.5,0-0.9-0.2-1.2-0.5c-0.3-0.3-0.5-0.8-0.5-1.2c0-0.3,0.1-0.6,0.2-0.8c0.1-0.2,0.3-0.4,0.5-0.6c0.6-0.6,1-1.1,1.3-1.6
		c0.3-0.5,0.5-1.1,0.5-1.9v-0.8c-0.6-0.2-1-0.5-1.3-1c-0.3-0.5-0.5-1-0.5-1.5c0-0.7,0.3-1.3,0.8-1.8c0.5-0.5,1.1-0.8,1.9-0.8
		c0.9,0,1.6,0.3,2,0.9c0.4,0.6,0.7,1.3,0.7,2.1V24.1z"/>
  <path id="XMLID_88_" d="M311.5,61.6c0.2,0.4,0.2,0.9,0,1.4c-0.2,0.5-0.5,0.8-1,1c-0.1,0-0.2,0.1-0.3,0.1c-0.1,0-0.2,0-0.3,0
		c-0.8,0-1.3-0.4-1.6-1.1l-5-11.7h-22.9l-5,11.7c-0.2,0.4-0.5,0.8-1,1c-0.4,0.2-0.9,0.2-1.3,0c-0.4-0.2-0.8-0.5-1-1
		c-0.2-0.5-0.2-0.9,0-1.4l5.5-12.8l12.7-29.6c0.3-0.7,0.8-1.1,1.6-1.1c0.8,0,1.3,0.4,1.6,1.1l12.6,29.6L311.5,61.6z M301.8,47.8
		l-10-23.4l-10,23.4H301.8z"/>
  <path id="XMLID_91_" d="M339,62.3c0,0.5-0.2,0.9-0.5,1.3c-0.3,0.3-0.8,0.5-1.3,0.5h-16c-0.5,0-0.9-0.2-1.2-0.5s-0.5-0.8-0.5-1.2
		V20.3c0-0.5,0.2-0.9,0.5-1.2c0.3-0.3,0.8-0.5,1.2-0.5c0.5,0,0.9,0.2,1.2,0.5s0.5,0.7,0.5,1.2v40.3h14.3c0.5,0,1,0.2,1.3,0.5
		C338.8,61.4,339,61.8,339,62.3z"/>
  <path id="XMLID_93_" d="M349,62.3c0,0.5-0.2,0.9-0.5,1.2c-0.3,0.3-0.8,0.5-1.2,0.5c-0.5,0-1-0.2-1.3-0.5s-0.5-0.8-0.5-1.2V20.3
		c0-0.5,0.2-0.9,0.5-1.2c0.3-0.3,0.8-0.5,1.3-0.5c0.5,0,0.9,0.2,1.2,0.5c0.3,0.3,0.5,0.8,0.5,1.2V62.3z"/>
  <path id="XMLID_95_" d="M389.9,49.6c0,2-0.4,3.9-1.1,5.6c-0.8,1.8-1.8,3.3-3.1,4.6c-1.3,1.3-2.9,2.4-4.6,3.1
		c-1.8,0.8-3.6,1.1-5.6,1.1h-12.8c-0.5,0-1-0.2-1.3-0.5s-0.5-0.8-0.5-1.2V20.3c0-0.5,0.2-0.9,0.5-1.2c0.3-0.3,0.8-0.5,1.3-0.5h8.8
		c1.4,0,2.7,0.3,4,0.8c1.2,0.5,2.3,1.3,3.2,2.2c0.9,0.9,1.7,2,2.2,3.2c0.5,1.2,0.8,2.6,0.8,4c0,2.7-0.9,5.1-2.8,7.1
		c1.6,0.4,3.1,1,4.5,1.9c1.4,0.8,2.6,1.9,3.5,3.1c1,1.2,1.7,2.5,2.3,4C389.6,46.3,389.9,47.9,389.9,49.6z M378,28.7
		c0-0.9-0.2-1.8-0.5-2.6c-0.4-0.8-0.8-1.5-1.4-2.1c-0.6-0.6-1.3-1.1-2.1-1.4s-1.7-0.5-2.6-0.5h-7v13.4h7.6c0.8,0,1.6-0.2,2.3-0.6
		c0.7-0.4,1.4-0.9,2-1.5c0.6-0.6,1-1.3,1.3-2.1C377.8,30.3,378,29.5,378,28.7z M386.3,49.6c0-1.6-0.3-3-0.9-4.3
		c-0.6-1.3-1.4-2.4-2.4-3.4c-1-0.9-2.2-1.7-3.5-2.2c-1.3-0.5-2.8-0.8-4.2-0.8h-11v21.6h11c1.5,0,2.9-0.3,4.3-0.9
		c1.3-0.6,2.5-1.4,3.5-2.3c1-1,1.8-2.1,2.3-3.5C386.1,52.5,386.3,51.1,386.3,49.6z"/>
  <path id="XMLID_99_" d="M423.2,62.3c0,0.5-0.2,0.9-0.5,1.2c-0.3,0.3-0.8,0.5-1.3,0.5h-20.6c-0.5,0-1-0.2-1.3-0.5
		c-0.3-0.3-0.5-0.8-0.5-1.2v-0.1v-0.1V20.2c0-0.5,0.2-0.9,0.5-1.2c0.3-0.3,0.8-0.5,1.3-0.5h20.6c0.5,0,0.9,0.2,1.3,0.5
		c0.3,0.3,0.5,0.8,0.5,1.2s-0.2,0.9-0.5,1.2c-0.3,0.3-0.8,0.5-1.3,0.5h-18.9v17.1h16.1c0.5,0,0.9,0.2,1.2,0.5
		c0.3,0.3,0.5,0.8,0.5,1.3c0,0.5-0.2,0.9-0.5,1.3c-0.3,0.3-0.8,0.5-1.2,0.5h-16.1v17.9h18.9c0.5,0,0.9,0.2,1.3,0.5
		C423.1,61.4,423.2,61.8,423.2,62.3z"/>
  <path id="XMLID_101_" d="M456.3,30.9c0,1.7-0.3,3.3-1,4.8s-1.6,2.8-2.7,3.9c-1.1,1.1-2.4,2-3.9,2.6c-1.5,0.6-3.1,1-4.8,1h-0.7
		L454,61.4c0.2,0.2,0.2,0.5,0.2,0.9c0,0.5-0.2,0.9-0.5,1.2c-0.3,0.3-0.8,0.5-1.2,0.5c-0.6,0-1.2-0.3-1.6-0.9l-11.9-19.9h-4v19.1
		c0,0.5-0.2,0.9-0.5,1.2c-0.3,0.3-0.8,0.5-1.2,0.5c-0.5,0-1-0.2-1.3-0.5s-0.5-0.8-0.5-1.2V20.3c0-0.5,0.2-0.9,0.5-1.2
		c0.3-0.3,0.8-0.5,1.3-0.5h10.6c1.7,0,3.3,0.3,4.8,1c1.5,0.6,2.8,1.5,3.9,2.6c1.1,1.1,2,2.4,2.7,3.9S456.3,29.2,456.3,30.9z
		 M452.8,30.9c0-1.2-0.2-2.3-0.7-3.4s-1.1-2-1.9-2.9c-0.8-0.8-1.7-1.5-2.8-1.9c-1.1-0.5-2.2-0.7-3.5-0.7h-8.8v17.7h8.8
		c1.2,0,2.4-0.2,3.5-0.7c1.1-0.5,2-1.1,2.8-1.9c0.8-0.8,1.4-1.7,1.9-2.8C452.5,33.2,452.8,32.1,452.8,30.9z"/>
  <path id="XMLID_104_" d="M487.7,20.3c0,0.5-0.2,0.9-0.5,1.2c-0.3,0.3-0.8,0.5-1.2,0.5h-10.6v40.3c0,0.5-0.2,0.9-0.5,1.2
		c-0.3,0.3-0.7,0.5-1.2,0.5c-0.5,0-0.9-0.2-1.3-0.5c-0.3-0.3-0.5-0.8-0.5-1.2V22h-10.6c-0.5,0-0.9-0.2-1.2-0.5
		c-0.3-0.3-0.5-0.8-0.5-1.2s0.2-0.9,0.5-1.2c0.3-0.3,0.8-0.5,1.2-0.5h24.7c0.5,0,0.9,0.2,1.2,0.5C487.5,19.4,487.7,19.8,487.7,20.3z
		"/>
</g>
            <g id="XMLID_3_">
              <path id="XMLID_4_" d="M152,78.2h4.6c5.7,0,8.7,3.3,8.7,9.1c0,5.9-3,9.3-8.6,9.3H152V78.2z M156.4,94.7c4.3,0,6.4-2.7,6.4-7.4
		c0-4.6-2.1-7.2-6.4-7.2h-2.1v14.6H156.4z"/>
              <path id="XMLID_7_" d="M174.1,82.6c3.5,0,5.4,2.5,5.4,6.4c0,0.5,0,0.9-0.1,1.3h-9.2c0.2,2.9,1.9,4.8,4.5,4.8c1.3,0,2.4-0.4,3.4-1.1
		l0.8,1.5c-1.2,0.8-2.6,1.4-4.5,1.4c-3.6,0-6.5-2.7-6.5-7.1C168,85.3,171,82.6,174.1,82.6z M177.5,88.8c0-2.8-1.2-4.3-3.4-4.3
		c-1.9,0-3.6,1.6-3.9,4.3H177.5z"/>
              <path id="XMLID_10_" d="M182.5,93.5c1.2,1,2.4,1.6,4,1.6c1.8,0,2.7-1,2.7-2.1c0-1.4-1.6-2-3.1-2.6c-1.9-0.7-4.1-1.6-4.1-3.9
		c0-2.2,1.7-3.9,4.7-3.9c1.7,0,3.2,0.7,4.2,1.5l-1.1,1.5c-0.9-0.7-1.9-1.2-3.1-1.2c-1.7,0-2.5,0.9-2.5,2c0,1.3,1.5,1.8,3,2.4
		c2,0.7,4.1,1.5,4.1,4.1c0,2.2-1.8,4.1-5,4.1c-1.9,0-3.8-0.8-5.1-1.9L182.5,93.5z"/>
              <path id="XMLID_12_" d="M199.7,82.6c3.5,0,5.4,2.5,5.4,6.4c0,0.5,0,0.9-0.1,1.3h-9.2c0.2,2.9,1.9,4.8,4.5,4.8
		c1.3,0,2.4-0.4,3.4-1.1l0.8,1.5c-1.2,0.8-2.6,1.4-4.5,1.4c-3.6,0-6.5-2.7-6.5-7.1C193.6,85.3,196.6,82.6,199.7,82.6z M203.1,88.8
		c0-2.8-1.2-4.3-3.4-4.3c-1.9,0-3.6,1.6-3.9,4.3H203.1z"/>
              <path id="XMLID_15_" d="M208.5,83h1.9l0.2,2h0.1c1.2-1.3,2.6-2.3,4.2-2.3c2.1,0,3.2,1,3.8,2.6c1.4-1.5,2.8-2.6,4.5-2.6
		c2.8,0,4.1,1.8,4.1,5.3v8.6H225v-8.3c0-2.5-0.8-3.6-2.5-3.6c-1.1,0-2.2,0.7-3.4,2.1v9.9h-2.3v-8.3c0-2.5-0.8-3.6-2.5-3.6
		c-1,0-2.2,0.7-3.4,2.1v9.9h-2.3V83z"/>
              <path id="XMLID_17_" d="M234,97.7v4.6h-2.3V83h1.9l0.2,1.6h0.1c1.2-1,2.7-1.9,4.3-1.9c3.5,0,5.4,2.7,5.4,6.9c0,4.6-2.8,7.3-5.9,7.3
		c-1.3,0-2.5-0.6-3.8-1.6L234,97.7z M237.3,95c2.2,0,3.9-2,3.9-5.4c0-3-1-5-3.6-5c-1.1,0-2.3,0.6-3.6,1.8v7.1
		C235.2,94.6,236.4,95,237.3,95z"/>
              <path id="XMLID_20_" d="M247,83h2.3v8.3c0,2.5,0.8,3.6,2.5,3.6c1.4,0,2.4-0.7,3.7-2.3V83h2.3v13.6H256l-0.2-2.1h-0.1
		c-1.3,1.5-2.6,2.5-4.5,2.5c-2.9,0-4.2-1.8-4.2-5.3V83z"/>
              <path id="XMLID_22_" d="M267.6,82.6c3.5,0,5.4,2.5,5.4,6.4c0,0.5,0,0.9-0.1,1.3h-9.2c0.2,2.9,1.9,4.8,4.5,4.8
		c1.3,0,2.4-0.4,3.4-1.1l0.8,1.5c-1.2,0.8-2.6,1.4-4.5,1.4c-3.6,0-6.5-2.7-6.5-7.1C261.5,85.3,264.5,82.6,267.6,82.6z M271,88.8
		c0-2.8-1.2-4.3-3.4-4.3c-1.9,0-3.6,1.6-3.9,4.3H271z M264.5,76.6h2.4l2.5,3.9h-1.8L264.5,76.6z"/>
              <path id="XMLID_26_" d="M275.9,78.7c0-0.9,0.7-1.5,1.6-1.5c0.9,0,1.6,0.6,1.6,1.5c0,0.9-0.7,1.5-1.6,1.5
		C276.6,80.2,275.9,79.5,275.9,78.7z M276.4,83h2.3v13.6h-2.3V83z"/>
              <path id="XMLID_29_" d="M288.8,94.7h4.1V81.5h-3.2V80c1.6-0.3,2.8-0.7,3.8-1.3h1.8v16h3.7v1.9h-10.1V94.7z"/>
              <path id="XMLID_31_" d="M303.2,93.6c0.7,0.9,1.8,1.4,2.9,1.4c2.5,0,4.6-2,4.7-7.7c-1.1,1.4-2.7,2.3-4.2,2.3c-3.1,0-5.1-1.8-5.1-5.5
		c0-3.4,2.4-5.7,5.3-5.7c3.5,0,6.2,2.9,6.2,8.6c0,7.2-3.2,9.9-6.8,9.9c-1.9,0-3.3-0.8-4.3-1.9L303.2,93.6z M310.9,85.5
		c-0.3-3.5-1.7-5.3-3.9-5.3c-1.7,0-3.1,1.6-3.1,3.9c0,2.3,1.1,3.8,3.3,3.8C308.2,87.9,309.6,87.2,310.9,85.5z"/>
              <path id="XMLID_34_" d="M316.6,94.7h4.1V81.5h-3.2V80c1.6-0.3,2.8-0.7,3.8-1.3h1.8v16h3.7v1.9h-10.1V94.7z"/>
              <path id="XMLID_36_" d="M329.5,95.2c5.4-5.3,8.4-8.6,8.4-11.5c0-2-1.1-3.5-3.4-3.5c-1.5,0-2.8,1-3.8,2.2l-1.3-1.3
		c1.5-1.6,3.1-2.7,5.4-2.7c3.3,0,5.3,2.1,5.3,5.3c0,3.4-3.1,6.7-7.3,11.1c1-0.1,2.1-0.2,3-0.2h5.2v2h-11.5V95.2z"/>
            </g>
</svg>






        </a>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>

<div class="main-container <?php print $container_class; ?> col-sm-12">

  <div class="row">

    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['front_one'])): ?>
        <?php print render($page['front_one']); ?>
      <?php endif; ?>

      <?php if (!empty($page['front_two'])): ?>
        <span class="icon-puit-dalibert"><span class="path1"></span><span class="path2"></span></span>
        <?php print render($page['front_two']); ?>
      <?php endif; ?>

      <?php if (!empty($page['front_three'])): ?>
        <span class="icon-puit-dalibert"><span class="path1"></span><span class="path2"></span></span>
        <?php print render($page['front_three']); ?>
      <?php endif; ?>

      <?php if (!empty($page['front_four'])): ?>
        <span class="icon-puit-dalibert"><span class="path1"></span><span class="path2"></span></span>
        <?php print render($page['front_four']); ?>
      <?php endif; ?>

      <?php if (!empty($page['front_five'])): ?>
        <span class="icon-puit-dalibert"><span class="path1"></span><span class="path2"></span></span>
        <?php print render($page['front_five']); ?>
      <?php endif; ?>

      <?php if (!empty($page['front_six'])): ?>
        <span class="icon-puit-dalibert"><span class="path1"></span><span class="path2"></span></span>
        <?php print render($page['front_six']); ?>
      <?php endif; ?>

      <?php if (!empty($page['front_seven'])): ?>
        <span class="icon-puit-dalibert"><span class="path1"></span><span class="path2"></span></span>
        <?php print render($page['front_seven']); ?>
      <?php endif; ?>

    </section>

  </div>
</div>

<?php if (!empty($page['footer'])): ?>
  <footer class="footer col-xs-12">
    <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>
