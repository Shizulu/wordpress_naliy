<?php

add_theme_support('custom_header');

add_theme_support('menus');

register_sidebar(
      array(
            'id' => 'sidebar-1',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',   
      )
);

add_theme_support('post-thumbnails');

function shortcode_tw() {
      return '<a href="http://twitter.com/taguchi" target="blank">@taguchi</a>をフォローしてね';
}
add_shortcode('tw', 'shortcode_tw');