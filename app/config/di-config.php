<?php
/**
* @Author: Adil EL Boruichi
*/

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\ORM\EntityManager;
use DI\Container;

$db_host = "127.0.0.1";
$db_name = "my_db";
$username = "admin";
$password = null;

$params = [
      "driver" => "pdo_mysql",
      "port" => 3306,
      "host" => $db_host,
      "dbname" => $db_name,
      "user" => $username,
      "password" => $password,
      "charset" => "UTF8",
];

$driver = new Doctrine\DBAL\Driver\PDOMySql\Driver();
$connection = new Doctrine\DBAL\Connection($params, $driver);

$config = new Doctrine\ORM\Configuration();
$cache = new \Doctrine\Common\Cache\ApcCache();
$config->setMetadataCacheImpl($cache);

$reader = new AnnotationReader();
$driverImpl = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($reader, array(__DIR__.'/../../src/AppBundle/Entity/'));
$config->setMetadataDriverImpl($driverImpl);

$config->setQueryCacheImpl($cache);
$config->setResultCacheImpl($cache);

$config->setProxyDir(__DIR__.'/../cache/Proxies');
$config->setProxyNamespace('HTA\Proxies');
$config->setAutoGenerateProxyClasses(true);

$manager = EntityManager::create($connection, $config);

return [
	'manager' => $manager,
];
