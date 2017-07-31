<?php
/*
Title: Ubicaciones
Order: 10
Tab: Ubicaciones
Setting: mandir_fields
Flow: Mandir Workflow
*/
?>

<div class="piklist-demo-highlight">
  <?php _e('Manage locations.', 'mro-pages');?>
</div>

<?php

piklist('field', array(
  'type' => 'text',
  'field' => 'mro_locations_map_shortcode',
  'label' => __('Maps shortcode', 'mro-pages'),
  'attributes' => array(
    'class' => 'regular-text'
  ),
));

piklist('field', array(
    'type' => 'group'
    ,'field' => 'mro_locations'
    ,'label' => __('Add locations', 'mro-pages')
    ,'columns' => 12
    ,'add_more' => true
    ,'fields' => array(
      array(
        'type' => 'text'
        ,'field' => 'title'
        ,'label' => __('Name', 'mro-pages')
        ,'columns' => 12
      )
      ,array(
        'type' => 'editor'
        ,'field' => 'address'
        ,'label' => __('Address', 'mro-pages')
        ,'columns' => 12
        ,'options' => array(
          'wpautop' => true
          ,'media_buttons' => false
          ,'tabindex' => ''
          ,'editor_css' => ''
          ,'editor_class' => ''
          ,'teeny' => true
          ,'dfw' => false
          ,'tinymce' => true
          ,'quicktags' => true
        )
      ),
      array(
        'type' => 'tel'
        ,'field' => 'phone'
        ,'label' => __('Phone number', 'mro-pages')
        ,'attributes' => array( // Pass HTML5 attributes in the attributes array
          'required' => 'required',
          'pattern' => '[\+]\d{3}[\-]\d{4}[\-]\d{4}',
          'placeholder' => '+506-0000-0000'
        )
        ,'columns' => 4
      )
    )
  ));