<?php

require 'core/database/connection.php';
require 'core/database/queryBuilder.php';
require 'core/request.php';

$config = require 'config.php';

require 'core/router.php';

return new QueryBuilder(
    Connection::make($config['database'])
);