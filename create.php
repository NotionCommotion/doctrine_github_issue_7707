<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set("log_errors", 1);
openlog('Testing', LOG_CONS | LOG_NDELAY | LOG_PID, LOG_USER | LOG_PERROR);

function logger($t, $f=LOG_INFO) {
    syslog($f, $t);
    echo(PHP_EOL.$t.PHP_EOL);
}

require_once "bootstrap.php";

//$entityManager->getConnection()->getConfiguration()->setSQLLogger(new \Doctrine\DBAL\Logging\EchoSQLLogger());

logger('One-to-one only', LOG_ERR);

/*
$mainClass = new MainClass();
$mainClass->setName('MainClassName');

$subClass=new SubClassNotInheritated();
$subClass->setSomeCommonProperty('SomeCommonProperty');
$subClass->setMainClass($mainClass);

$entityManager->persist($mainClass);
$entityManager->persist($subClass);
$entityManager->flush();
//exit;


logger('Inheritance only', LOG_ERR);
$subClass=new SubNewClassType1();
$subClass->setSomeCommonProperty('SomeCommonProperty');
$subClass->setSomeIndividualProperty('SomeIndividualProperty');
$entityManager->persist($subClass);
$entityManager->flush();
//exit;
*/

logger('One to One and Inheritance', LOG_ERR);

$mainClass = new MainClass();
$mainClass->setName('MainClassName');

$subClass=new SubClassType1();
$subClass->setSomeCommonProperty('SomeCommonProperty');
$subClass->setSomeIndividualProperty('SomeIndividualProperty');
$subClass->setMainClass($mainClass);

$entityManager->persist($mainClass);
$entityManager->persist($subClass);
$entityManager->flush();