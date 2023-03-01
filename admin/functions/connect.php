<?php 

// constants 

define("HOST", 'localhost');
define("USER", 'root');
define("PASSWORD", '');
define("DBNAME", 'print_project');

//connection 
$conn = new mysqli(HOST, USER , PASSWORD , DBNAME);
// arabic 
$conn -> set_charset('utf8');
