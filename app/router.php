<?php
  function get($route, $path_to_include){
    if( $_SERVER['REQUEST_METHOD'] == 'GET' ){ route($route, $path_to_include); }  
  }
  function post($route, $path_to_include){
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){ route($route, $path_to_include); }    
  }
  function put($route, $path_to_include){
    if( $_SERVER['REQUEST_METHOD'] == 'PUT' ){ route($route, $path_to_include); }    
  }
  function patch($route, $path_to_include){
    if( $_SERVER['REQUEST_METHOD'] == 'PATCH' ){ route($route, $path_to_include); }    
  }
  function delete($route, $path_to_include){
    if( $_SERVER['REQUEST_METHOD'] == 'DELETE' ){ route($route, $path_to_include); }    
  }
  function any($route, $path_to_include){ route($route, $path_to_include); }
  function out($text){echo htmlspecialchars($text);}
  function route($route, $path_to_include){ 
    $ROOT = $_SERVER['DOCUMENT_ROOT'];
    $cfg = $ROOT.'/application/config.php';
    $app = $ROOT.'/application';
    $views = $app.'/views';
    $models = $app.'/models';
    $controllers = $app.'/controllers';
    if($route == "/404"){
      include_once("$ROOT/$path_to_include");
      exit();
    }
    $request_url = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
    $request_url = rtrim($request_url, '/');
    $request_url = strtok($request_url, '?');
    $route_parts = explode('/', $route);
    $request_url_parts = explode('/', $request_url);
    array_shift($route_parts);
    array_shift($request_url_parts);
    if( $route_parts[0] == '' && count($request_url_parts) == 0 ){
      include_once("$ROOT/$path_to_include");
      exit();
    }
    if( count($route_parts) != count($request_url_parts) ){ return; }  
    $parameters = [];
    for( $__i__ = 0; $__i__ < count($route_parts); $__i__++ ){
      $route_part = $route_parts[$__i__];
      if( preg_match("/^[$]/", $route_part) ){
        $route_part = ltrim($route_part, '$');
        array_push($parameters, $request_url_parts[$__i__]);
        $$route_part=$request_url_parts[$__i__];
      }
      else if( $route_parts[$__i__] != $request_url_parts[$__i__] ){
        return;
      } 
    }
    if( is_callable($path_to_include) ){
      call_user_func($path_to_include);
      exit();
    }    
    include_once("$ROOT/$path_to_include");
    exit();
  }
