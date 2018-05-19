<?php
//Connect to MySql
$con = mysql_connect("localhost","root","root","postitbrosss");

//Test Connection
if(mysqli_connect_erno()){
    echo 'Failed to connect to MySQL: '.$mysqli_connect_error();
}