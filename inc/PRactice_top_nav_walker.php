<?php

class PRactice_top_nav_walker extends Walker_Nav_Menu {
    
	// Displays start of an element. E.g '<li> Item Name'
    // @see Walker::start_el()
    function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
    	$object = $item->object;
    	$type = $item->type;
    	$title = $item->title;
    	$permalink = $item->url;
        $is_current_item = '';
        if(array_search('current-menu-item', $item->classes) != 0)
        {
            $is_current_item = ' active';
        }
      $output .= "<li class='nav-item ".$is_current_item."'>";
        
      //Add SPAN if no Permalink
      if( $permalink && $permalink != '#' ) {
      	$output .= '<a href="' . $permalink . '" class="nav-link">';
      } else {
      	$output .= '<span>';
      }
       
      $output .= $title;

      

      if( $permalink && $permalink != '#' ) {
      	$output .= '</a>';
      } else {
      	$output .= '</span>';
      }
    }
}