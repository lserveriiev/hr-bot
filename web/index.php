<?php

define('ROOT_DIR', __DIR__ . '/../');

require ROOT_DIR . 'vendor/autoload.php';

use Hrbot\Controller\StageController;
use Hrbot\Repository\StageRepository;
use Hrbot\Database\MysqlConnection;
use Hrbot\Configuration\YamlConfiguration;
use Hrbot\Database\QueryBuilder;

$mysqlConnection = new MysqlConnection(new YamlConfiguration());
$queryBuilder = new QueryBuilder($mysqlConnection);
$repository = new StageRepository($queryBuilder);
$controller = new StageController($repository);

var_dump($controller->getStatistic());
