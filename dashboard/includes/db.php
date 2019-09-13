<?php 
$db_host="localhost";
$db_name="one_movies";
$db_user="one_movies_user";
$db_password="HYUSWF2uWZzgoMO3";
$db_port="3306";
$db_socket="/home/youns3510/lampstack/mysql/tmp/mysql.sock";

$con = new mysqli($db_host,$db_user,$db_password,$db_name,$db_port,$db_socket);
if(!$con){
  die('connection error'.$con->connect_error);
}