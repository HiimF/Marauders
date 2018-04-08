<?php

define( 'URL', get_bloginfo( 'url' ) );
define( 'THEME', get_template_directory_uri() );
define( 'CSS', THEME . '/build/css/' );
define( 'JS', THEME . '/build/js/' );
define( 'IMG', THEME . '/assets/images/' );


function get_id_by_slug( $page_slug ) {
  $page = get_page_by_path( $page_slug );
  if ( $page ) {
    return $page->ID;
  } else {
    return null;
  }
}
