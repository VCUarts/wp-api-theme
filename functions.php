<?php
if (!function_exists('wp_rest_api_alter')){

function wp_rest_api_alter() {
  register_api_field( 'post',
      'fields',
      array(
        'get_callback'    => function($data, $field, $request, $type){
          if (function_exists('get_fields')) {
            return get_fields($data['id']);
          }
          return [];
        },
        'update_callback' => null,
        'schema'          => null,
      )
  );
}
add_action( 'rest_api_init', 'wp_rest_api_alter');
}
