<?php
/**
 *created by bah elhadj amadou
 *07-01-2019
 */

//require('../app/frontend/FrontendApplication.php');
echo 'coucou';
echo "merde";
Const DEFAULT_APP = 'Frontend';
echo "salaud";

  if(!isset($_GET['app']))
     $_GET['app'] = DEFAULT_APP;
    
     echo "patapata";
$appClassName = $_GET['app'].'Application';
echo "ahan";
$app = new $FrontendApplication();
echo "ohhh";
echo 'before run';
$app->run();
echo 'after run';