<?php $con = mysql_connect("localhost","root" ,"");// Check connectionif (!$con)  {  echo "Failed to connect to MySQL: " . mysql_connect_error();  }// Create database$sql="CREATE DATABASE IF NOT EXISTS my_db1";if (mysql_query($sql))  {  echo "Database my_db1 created successfully";  }else  {  echo "Error creating database: " . mysql_error();  }mysql_select_db('my_db1');$sql="DROP TABLE IF EXISTS datatable";if (mysql_query($sql))  {  echo "Table datatable droped successfully";  }else  {  echo "Error dropping table: " . mysql_error();  }  $sql="CREATE TABLE IF NOT EXISTS datatable(id varchar(30),title text,comapny text, image text, price float)";if (mysql_query($sql))  {  echo "Table datatable create successfully";  }else  {  echo "Error creating table: " . mysql_error();  }  //Inserts to the DB. $strin = file_get_contents ("data/items.json");$result = json_decode($strin, true);foreach($result as $value) {    if($value) {			$id = $value['id'];			$title = $value['title'];			$company = $value['company'];			$image = $value['image'];			$price = $value['price'];        mysql_query("INSERT INTO datatable (id, title, comapny, image,price) VALUES ('$id','$title', '$company', '$image', '$price');");    }}$sql="CREATE TABLE IF NOT EXISTS count (name VARCHAR(30),cardNum INT(11),price INT(11), markets text)";if (mysql_query($sql))  {  echo "Table count create successfully";  }else  {  echo "Error creating table: " . mysql_error();}  ?>