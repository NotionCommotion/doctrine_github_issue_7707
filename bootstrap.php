<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
$conn=parse_ini_file('../mysql.ini');
$conn['dbname']='doctrine_issue_7707';
$entityManager = EntityManager::create($conn, $config);
