<?php
/*
Title: Opciones de Pago
Order: 80
Tab: Pagos
Setting: mandir_fields
Flow: Mandir Workflow
*/
?>

<div class="piklist-demo-highlight">
  <?php _e('Manage payment options for events and certifications.', 'mro-pages');?>
</div>

<?php

piklist('field',
  array(
    'type' => 'editor',
    'field' => 'mro_payment_local',
    'template'=>'field',
    'label' => __('Local payments', 'mro-pages'),
    'options' => array(
      'wpautop' => true,
      'media_buttons' => false,
      'teeny' => true,
      // 'textarea_rows' => 5,
      'drag_drop_upload' => false,
      'tinymce' => array(
        'resize' => true,
        'wp_autoresize_on' => true,
      ),
      // 'editor_height' => 100,
    ),
));

piklist('field',
  array(
    'type' => 'editor',
    'field' => 'mro_payment_international',
    'template'=>'field',
    'label' => __('International payments', 'mro-pages'),
    'options' => array(
      'wpautop' => true,
      'media_buttons' => false,
      'teeny' => true,
      // 'textarea_rows' => 5,
      'drag_drop_upload' => false,
      'tinymce' => array(
        'resize' => true,
        'wp_autoresize_on' => true,
      ),
      // 'editor_height' => 100,
    ),
));