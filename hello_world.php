<?php 
register_rest_route('dnode/v1', '/hello', array(
  'methods' => 'GET',
  'callback' => 'hello_world_endpoint',
));

function hello_world_endpoint() {
  return 'hello world';
}

?>