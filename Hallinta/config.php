<html>

<HEAD>
  <!--LINK href="master.css" rel="stylesheet" type="text/css"-->
</HEAD>

<body>

  <?php

define('URL', 'http://localhost/Neilikka');
define('AURL', 'https://jounir.azurewebsites.net');

define('LOCAL_SERVER', 'localhost');
define('LOCAL_DATABASE','jrla');
define('LOCAL_USERNAME', 'root');
define('LOCAL_PASSWORD', '');

define('AZURE_SERVER', 'localhost:52365');
define('AZURE_USERNAME', 'azure');
define('AZURE_PASSWORD', '6#vWHD_$');
define('AZURE_DATABASE','neilikka');

$un = AZURE_USERNAME;
$ps = AZURE_PASSWORD;
$server = AZURE_SERVER;
$database = AZURE_DATABASE;

//show all erros if any
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  // Create connection to DB
  $link = new mysqli($server, $un, $ps, $database);
  // Check connection
  if ($link->connect_error)
  {
    print "connection error";
    die("Connection failed: " . $link->connect_error);
  }

  //print "connected";

  ?>

</body>

</html>
