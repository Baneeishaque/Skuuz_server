<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//(string userid, string password, string email, string name, string security, string answer)

require_once 'dbconnection.php';
$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];
$security = $_POST['security'];
$answer = $_POST['answer'];



if (mysql_query("INSERT INTO `users`(`userid`, `name`, `gender`, `email`, `phone`, `username`, `password`, `security`, `answer`) VALUES (null,'$name','$gender','$email','$phone','$username','$password','$security','$answer')")) {
    echo 'Inserted';
} else {
    echo 'Not Inserted ' . mysql_error();
}