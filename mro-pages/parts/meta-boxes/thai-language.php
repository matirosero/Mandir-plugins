<?php
/*
Title: Idioma
Post Type: page
Context: normal
Priority: high
Order: 1
Template: page-templates/template-thai
*/


  piklist('field', array(
    'type' => 'radio'
    ,'field' => 'mro_lang'
    ,'label' => __('Language', 'mro-cert')
    ,'choices' => array(
      'es' => __('Spanish', 'mro-cert')
      ,'en' => __('English', 'mro-cert')
    )
    ,'value' => 'es'
  ));

  piklist('field', array(
    'type' => 'text'
    ,'field' => 'mro_lang_alt_url'
    ,'label' => __('URL of alternate language', 'mro-cert')
    ,'description' => __('Enter the URL for the page in the alternate language', 'mro-cert')
  ));