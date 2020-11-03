<?php 

 ini_set('max_execution_time',300);
 date_default_timezone_set("Asia/Kolkata");
 
 /* Logger Declaration in JSON */ 
 // include('../../../log4php/Logger.php'); 
 // Logger::configure('../../../backend/config/log-config.xml'); 
	
  include('log4php/Logger.php'); 
  Logger::configure('log-config.xml'); 
	
 /* Database Credentials */
if(isset($_SESSION["PROJECT_MODE"]) && $_SESSION["PROJECT_MODE"]=='PROD'){
 $DB_001_SERVERNAME="148.66.138.151";
 $DB_001_NAME="kalyanaveena";
 $DB_001_USER="kalyanaveena";
 $DB_001_PASSWORD="@ANUPanup123";
}
else {
 $DB_001_SERVERNAME="localhost:3306";
 $DB_001_NAME="ecom";
 $DB_001_USER="root";
 $DB_001_PASSWORD="";
}

$database01 = new Database($DB_001_SERVERNAME,$DB_001_NAME,$DB_001_USER,$DB_001_PASSWORD);
