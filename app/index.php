<?php

require_once 'core/Controller.php';

#here we extract the needed information from the url(controller,method)
$url = isset($_SERVER['REQUEST_URI']) ? rtrim($_SERVER['REQUEST_URI'], '/') : '';
$url = filter_var($url, FILTER_SANITIZE_URL);
$url = explode('/', $url);
$url=array_slice($url, array_search('index.php', $url)+1 );
$controller = empty($url[0]) ? 'HomeController' : ucfirst($url[0]).'Controller';
$method = isset($url[1]) ? $url[1] : 'index';
$id = isset($url[2]) ? $url[2] : null;

require_once 'controllers/' . $controller . '.php';

#a new controller is created and call the method
$controller = new $controller();
$controller->{$method}($id);
