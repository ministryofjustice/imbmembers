<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' ); 
 
global $post; 
 
?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Cache-control" content="public">
    <?php wp_head(); ?>
    <title><?php echo $post ? $post->post_title . ' | ' : ''; ?><?php echo get_option('blogname'); ?></title>  
  </head>
  <body id="activate-page"> 

        <h1><?php echo get_bloginfo( 'name' ); ?></h1>