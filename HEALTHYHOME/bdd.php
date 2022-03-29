<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=id17103432_healthyhome;charset=utf8', 'id17103432_calidad', 'M|XZf{8+>EVedpiB');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}
