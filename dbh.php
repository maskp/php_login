<?php 
//connection portal to the website
$conn = mysqli_connect("localhost","root","","logintest");

if(!$conn){
	die(mysqli_connect_error());
}