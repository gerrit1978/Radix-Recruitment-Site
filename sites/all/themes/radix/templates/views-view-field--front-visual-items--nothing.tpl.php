<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
$output_captions = "";
if (is_array($row->field_field_front_caption)) {
  $captions_rendered = array();
  foreach ($row->field_field_front_caption as $caption) {
    $captions_rendered[] = array('data' => $caption['rendered']['#markup'], 'class' => array('slide'));
  }
  if (count($captions_rendered)) {
    $output_captions = theme('item_list', array('items' => $captions_rendered, 'attributes' => array('class' => array('slides'))));
  }
}
?>

<div class="wrapper" style="background-image: url(<?php print file_create_url($row->file_managed_file_usage_uri); ?>);">
  <div class="inner">
    <div class="caption">
      <?php print $output_captions; ?>
    </div>
  </div>
</div>
