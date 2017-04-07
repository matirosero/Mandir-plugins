<?php
/*  
Title: Schedule Settings
Method: post
Message: Each option has been updated.
Logged in: true
*/
  
  $choices = get_posts(array(
                         'post_type' => 'mro-class'
                         ,'orderby' => 'post_title'
                         ,'order' => 'ASC'
                         ,'posts_per_page' => -1
                       ), 'objects');
                 
  $choices = piklist($choices, array('ID', 'post_title'));

  foreach ($choices as $value => $choice):
    if ($choice === ''):
    	$choices[$value] = sprintf(__('#%d (no title)'), $value);
    endif;
  endforeach;
  
  $choices = array_replace(array('' => '&mdash; Select &mdash;'), $choices);

  piklist('field', array(
    'type' => 'group'
    ,'scope' => 'option'
    ,'label' => 'Front page displays'
    ,'template' => 'form_table'
    ,'position' => 'start'
    ,'fields' => array(
      array(
        'type' => 'radio'
        ,'field' => 'show_on_front'
        ,'value' => 'posts'
        ,'choices' => array(
          'posts' => 'Your latest posts'
          ,'page' => 'A <a href="edit.php?post_type=page">static page</a> (select below)'
        )
      )
      ,array(
        'type' => 'select'
        ,'label' => 'Front page'
        ,'field' => 'page_on_front'
        ,'choices' => $choices
        ,'columns' => 6
        ,'conditions' => array(
          array(
            'type' => 'disabled'
            ,'field' => 'show_on_front'
            ,'value' => 'posts'
          )
        )
      )
      ,array(
        'type' => 'select'
        ,'label' => 'Posts page'
        ,'field' => 'page_for_posts'
        ,'choices' => $choices
        ,'columns' => 6
        ,'conditions' => array(
          array(
            'type' => 'disabled'
            ,'field' => 'show_on_front'
            ,'value' => 'posts'
          )
        )
      )
    )
  ));
