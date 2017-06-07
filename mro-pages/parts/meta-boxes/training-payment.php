<?php
/*
Title: Inversión y forma de pago
Post Type: page
Context: normal
Priority: high
Order: 6
Template: page-templates/template-training
*/

// Reservation
piklist('field', array(
  'type' => 'group',
  'field' => 'mro_training_reserve',
  'label' =>  __('Reserve your spot', 'mro-events'),
  // 'description' => __('Add as many as needed.', 'mro-events'),
  'list' => false,
  'add_more' => false,
  'fields' => array (
    array (
      'type' => 'text',
      'field' => 'price',
      'label' => __('Reserve amount', 'mro-events'),
      // 'help' => __('Must be "100", "10.5", etc. Not "100 dollars".', 'mro-events'),
      'attributes' => array(
        'placeholder' => __('500', 'mro-pages'),
        ),
      'validate' => array(
        array(
          'type' => 'valid_number'
        )
      ),
      'columns' => 6,
    ),
    array (
      'type' => 'text',
      'field' => 'description',
      'label' => __('Descripción', 'mro-events'),
      'attributes' => array(
        'class' => 'large-text',
        'placeholder' => __('Se descuenta de los pagos restantes', 'mro-events'),
        ),
      'columns' => 12,
    ),
  ),
));

// Other pricing options
piklist('field', array(
  'type' => 'group',
  'field' => 'mro_training_payment_options',
  'label' =>  __('Payment options', 'mro-events'),
  'description' => __('Add as many as needed.', 'mro-events'),
  'list' => false,
  'add_more' => true,
  'fields' => array (
    array (
      'type' => 'text',
      'field' => 'payments',
      'label' => __('Payments', 'mro-events'),
      'attributes' => array(
        'placeholder' => __('1', 'mro-pages'),
        ),
      'validate' => array(
        array(
          'type' => 'valid_number'
        )
      ),
      'columns' => 6,
    ),
    array (
      'type' => 'text',
      'field' => 'discount',
      'label' => __('Discount amount', 'mro-events'),
      'attributes' => array(
        'placeholder' => __('100', 'mro-pages'),
        ),
      'validate' => array(
        array(
          'type' => 'valid_number'
        )
      ),
      'columns' => 6,
    ),
    array (
      'type' => 'text',
      'field' => 'description',
      'label' => __('Descripción', 'mro-events'),
      'attributes' => array(
        'class' => 'large-text',
        'placeholder' => __('Payment due on week 1', 'mro-events'),
        ),
      'columns' => 12,
    ),
  ),
));