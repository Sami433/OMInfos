<?php

try {
	 $access=new pdo("mysql:host=localhost:3307;dbname=ominfos;charset=utf8", "root", "");
     
     $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} catch (Exception $e) 
{
	$e->getMessage();
}
    
     


?>