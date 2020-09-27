<?php

/*
   Plugin Name: Redes Soaciales
   Pluging URI: https://marlonfalcon.cl
   Description: Short Code para incluir barra de redes sociales en Wordpress
   Author: Marlon Falcon
   Version: 1.0
   Author URI: https://marlonfalcon.cl
*/



function social_plugin($atts){
    $args = shortcode_atts(array(
        'facebook' => 'http://facebook.com',
        'twitter' => 'http://twitter.com',
        'google' => 'http://google.com'
    ),$atts);

    $facebook = "<a href='".$args['facebook']."'>Facebook</a>";
    $twitter = "<a href='".$args['twitter']."'>Twitter</a>";
    $google = "<a href='".$args['google']."'>Google</a>";

    $social = $facebook . " " . $twitter . " " . $google;
    return $social;
}

add_shortcode( "social_plugin_sc", "social_plugin" );

?>