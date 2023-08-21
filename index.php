<?php

$database = require_once 'bootstrap.php';
require_once 'Task.php';



$tasks = $database->selectAll('todos');

require_once 'index.view.php';

?>
