<?php
/**
 * created by Bah elhadj amadou
 * 07-01-2019
 */

 require('../../lib/myLib/Application.php');

 class FrontendApplication extends Application
 {
     public function __construct()
     {
        parent::__construct();
        $this->name = 'Frontend';
     }

     public function run()
     {
       // echo 'c\'est bon, on commence à avoir quelque chose';
     }
 }