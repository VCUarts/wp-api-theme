<?php
if (!function_exists('wp_api_encode_acf')){

  function wp_api_encode_acf($data,$post,$context){
    $data['meta'] = array_merge($data['meta'],get_fields($post['ID']));
    return $data;
  }
  
  if( function_exists('get_fields') ){
    add_filter('json_prepare_post', 'wp_api_encode_acf', 10, 3);
  }

}
