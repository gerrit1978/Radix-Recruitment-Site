<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */


/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function radix_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  radix_preprocess_html($variables, $hook);
  radix_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */

function radix_preprocess_html(&$variables, $hook) {

  // add "hr" or "marketing" section to body classes
  $current_path = request_path();
  $path_array = explode('/', $current_path);

  $current_section = "hr";
  if (is_array($path_array)) {
    $languages = array('nl', 'en', 'fr');
    if (in_array($path_array[0], $languages) && isset($path_array[1])) {
      $current_section = $path_array[1];
    } else {
      $current_section = $path_array[0];
    }
  }

  $variables['classes_array'][] = 'main-section-' . $current_section;




  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  //$variables['classes_array'] = array_diff($variables['classes_array'], array('class-to-remove'));
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */

function radix_preprocess_page(&$variables, $hook) {

  // remove default page title
  $variables['title'] = "";
  
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */

function radix_preprocess_node(&$variables, $hook) {

  // header blocks for pages
  if ($variables['node']->type == 'page') {
  
    // if this page node has a visual + slogan, render a "block"
    $node = $variables['node'];
    
    // get slogan & visual fields
    if (is_array($node->field_page_captions) && count($node->field_page_captions)) {
      $captions_field = field_get_items('node', $node, 'field_page_captions');
		  $captions_rendered = array();
		  foreach ($captions_field as $caption) {
		    $captions_rendered[] = array('data' => $caption['safe_value'], 'class' => array('slide'));
		  }
		  if (count($captions_rendered)) {
		    $output_captions = theme('item_list', array('items' => $captions_rendered, 'attributes' => array('class' => array('slides'))));
		  }
    }
    if (is_array($node->field_page_visual) && count($node->field_page_visual)) {
      $visual_field = field_get_items('node', $node, 'field_page_visual');
      $visual = theme('image', array('path' => $visual_field[0]['uri']));
      $visual_path = file_create_url($visual_field[0]['uri']);
    }

    // put them in a "block"
    $header_block = array(
      '#prefix' => '<div class="header-block">',
      '#suffix' => '</div>',
    );
    
    $markup = '';
    if (isset($visual_path)) {
      $markup .= '<div class="visual" style="background-image: url(' . $visual_path . '); "></div>';
    }
    if (isset($output_captions)) {
      $markup .= '<div class="text"><div class="captions"><h1>' . $node->title . '</h1><h2>' . $output_captions . '</h2></div></div>';
    }
    $header_block['#markup'] = $markup;
    
    $variables['content']['header_block'] = $header_block;

  }
  
  // prev next navigation and title for references
  if ($variables['node']->type == 'referentie') {
    
    // page title and "navigation"
    $page_title = "<div class='referentie-title'>" . $variables['node']->title . "</div>";
  
    $links = array();
    $prev_nid = prev_next_nid($variables['node']->nid, 'prev');
    if ($prev_nid > 0) {
      $prev_link = l('vorige', 'node/' . $prev_nid);
      $links[] = $prev_link;
    }
    
    $next_nid = prev_next_nid($variables['node']->nid, 'next');
    if ($next_nid > 0) {
      $next_link = l('volgende', 'node/' . $next_nid);
      $links[] = $next_link;
    }
    
    if (count($links)) {
      $navigatie = theme('item_list', array('items' => $links, 'attributes' => array('class' => 'referentie-navigatie')));
    }

    $variables['content']['referentie_top'] = array(
      '#markup' => $page_title . $navigatie,
      '#prefix' => '<div class="referentie-top clearfix">',
      '#suffix' => '</div>',
    );

    // tags
    $tags = "";
    
    $tags_field = field_get_items('node', $variables['node'], 'field_referentie_tags');
    
    if (is_array($tags_field) && count($tags_field)) {
      for ($i = 0; $i < count($tags_field); $i++) {
        $tags .= "<span class='tag'>" . $tags_field[$i]['taxonomy_term']->name . "</span>";
        if (($i + 1) < count($tags_field)) {
          $tags .= "<span class='separator'>/</span>";
        }
      }
    }

    $variables['content']['referentie_tags'] = array(
      '#markup' => $tags,
      '#prefix' => '<div class="referentie-tags clearfix">',
      '#suffix' => '</div>',
    );
    
  }

  // Optionally, run node-type-specific preprocess functions, like
  // radix_preprocess_node_page() or radix_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function radix_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function radix_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--sidebar.tpl.php template for sidebars.
  //if (strpos($variables['region'], 'sidebar_') === 0) {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('region__sidebar'));
  //}
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function radix_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__no_wrapper'));
  //}
}
// */

/**
 * Override page blocks
 *
 */
function radix_preprocess_field(&$variables) {

  // preprocess the field page_block_title
  if ($variables['element']['#field_name'] == 'field_page_block_title') {
    foreach ($variables['items'] as $delta => $item) {
      $variables['items'][$delta]['#prefix'] = '<h1><span>';
      $variables['items'][$delta]['#suffix'] = '</span></h1>';      
    }
  }
  
  // preprocess the field collection page_block
  if ($variables['element']['#field_name'] == 'field_page_block') {
    $items = $variables['items'];
//    dsm($items);
    if (is_array($items) && count($items)) {
      foreach ($items as $delta => $item) {
        $highlight = 0;
      
        $field_collection_item = $item['entity']['field_collection_item'];
        if (is_array($field_collection_item) && count($field_collection_item)) {
          foreach ($field_collection_item as $entity_id => $collection_item) {
            $field = entity_metadata_wrapper('field_collection_item', $entity_id);
            $highlight = $field->field_page_block_highlight->value();
            $anchor_id = $field->field_page_block_anchor_id->value();
          }
        }

        if ($field->field_page_block_title->value()) {
          if ($highlight == 1) {
  	        $variables['items'][$delta]['#prefix'] = "<div class='highlight' id='" . $anchor_id . "'><div class='item-inner'>";
  	        $variables['items'][$delta]['#suffix'] = "</div></div>";
          } else {
  	        $variables['items'][$delta]['#prefix'] = "<div class='non-highlight' id='" . $anchor_id . "'><div class='item-inner'>";
  	        $variables['items'][$delta]['#suffix'] = "</div></div>";
          }
        }        
      }
    }
  }
}