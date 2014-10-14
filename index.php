<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../yii/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
$connection = Yii::app()->db;
$transaction = $connection->beginTransaction();
try{
$sql = "SELECT * FROM slides";
		$command = $connection->createCommand($sql);
		if($command!=NULL) print "Successful!!";
$dataReader = $command->query();
foreach($dataReader as $row)
{
	if(isset($row['link']))
	{
		print($row['link']);
	}
}
} catch(Exception $e)
{
	$transaction->rollback();
}