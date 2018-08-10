<?php
/*
Title: Contacto
Post Type: mro-team
Context: normal
Priority: high
Order: 4
*/ 

  piklist('field', array(
    'type' => 'group',
    // ,'field' => 'address_group'
    'label' => __('How to contact', 'piklist-demo'),
    'list' => false,
    'description' => __('A grouped field with a key set. Data is not searchable, since it is saved in an array.', 'piklist-demo'),
    'fields' => array(
      array(
        'type' => 'text',
        'field' => 'mro_team_email',
        'label' => __('Email', 'piklist-demo'),
        'columns' => 6,
        'attributes' => array(
          'placeholder' => 'nombre@correo.com',
        ),
      ),
      array(
        'type' => 'checkbox',
        'field' => 'mro_team_emailshow',
        'label' => __('Show email', 'piklist-demo'),
        'columns' => 6,
        'choices' => array(
          1 => 'Show email'
        )
      ),
      array(
        'type' => 'text',
        'field' => 'mro_team_phone',
        'label' => __('Phone number', 'piklist-demo'),
        'columns' => 10,
        'attributes' => array(
          'placeholder' => '9999-9999',
        ),
      ),
      array(
        'type' => 'text',
        'field' => 'mro_team_fb',
        'label' => __('Facebook', 'piklist-demo'),
        'columns' => 10,
        'attributes' => array(
          'placeholder' => 'URL facebook',
        ),
      ),
      array(
        'type' => 'text',
        'field' => 'mro_team_site',
        'label' => __('Website', 'piklist-demo'),
        'columns' => 10,
        'attributes' => array(
          'placeholder' => 'http://',
        ),
      ),

    ),
  ));