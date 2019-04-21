<?php
$conInfo=array("Database"=>"", "UID"=>"", "PWD"=>"","CharacterSet" => "UTF-8");
$conn=sqlsrv_connect("", $conInfo);
$stmt1 = sqlsrv_query($conn,$sql_name); 
$v=sqlsrv_fetch_array($stmt1, SQLSRV_FETCH_ASSOC);
