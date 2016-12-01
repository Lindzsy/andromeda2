<?php

function add_scripts(){
  wp_enqueue_style("styles",get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "add_scripts");

 ?>
