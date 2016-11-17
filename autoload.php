<?php

$mapping = array(
	"MyTestBundle\Client\MyTestClient" => __DIR__ . "/Client/MyTestClient.php",
	"MyTestBundle\Entity\Account" => __DIR__ . "/Entity/Account.php",
	"MyTestBundle\Client\Account\\Account" => __DIR__ . "/Client/Account/Account.php",
);

spl_autoload_register(function ($class) use ($mapping) {
	if (isset($mapping[$class])) {
		require $mapping[$class];
	}
}, true);