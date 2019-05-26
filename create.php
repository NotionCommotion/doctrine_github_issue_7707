<?php
ini_set('display_errors', 1);

require_once "bootstrap.php";

$mainClass = new MainClass();
$mainClass->setName('MainClassName');
$subClass=new SubClassType1();
$subClass->setSomeCommonProperty('SomeCommonProperty');
$subClass->setSomeIndividualProperty('SomeIndividualProperty');
$subClass->setMainClass($mainClass);

$entityManager->getConnection()
  ->getConfiguration()
  ->setSQLLogger(new \Doctrine\DBAL\Logging\EchoSQLLogger());

$entityManager->persist($mainClass);
$entityManager->flush();
