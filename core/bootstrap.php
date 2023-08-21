<?php

use database\Connection;
use database\QueryBuilder;

$config = require_once 'database/config.php';

require_once 'database/connection.php';
require_once 'database/queryBuilder.php';

return new QueryBuilder(
    Connection::make($config['database'])
);