<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Europe/London');

//database credentials
//define('DBHOST','localhost');
//define('DBUSER','root');
//define('DBPASS','');
//define('DBNAME','accounts');

//database credentials
define('DBHOST','160.153.162.25');
define('DBUSER','ironhead99');
define('DBPASS','morfios99');
define('DBNAME','morfios99');

//application address
define('DIR','http://awesomeworldtop.com/');
define('SITEEMAIL','info@awesomeworldtop.com');

try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('classes/user.php');
include('classes/phpmailer/mail.php');
$user = new User($db);
?>
