<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\core\Router;
use App\core\Request;


Router::load('routes.php')
    ->direct(Request::uri(), Request::method());

?>
