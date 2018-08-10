<?php
/*
Title: Idioma
Post Type: mro-certification
Context: normal
Priority: high
Order: 2
*/


  piklist('field', array(
    'type' => 'radio'
    ,'field' => 'mro_lang'
    ,'label' => __('Language', 'mro-cert')
    ,'value' => 'third'
    ,'choices' => array(
      'es' => __('English', 'mro-cert')
      ,'en' => __('Spanish', 'mro-cert')
    )
    ,'value' => 'es'
  ));

  piklist('field', array(
    'type' => 'text'
    ,'field' => 'mro_lang_alt_url'
    ,'label' => __('URL of alternate language', 'mro-cert')
    ,'description' => __('Enter the URL for the page in the alternate language', 'mro-cert')
  ));