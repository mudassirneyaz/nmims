<?php
// initializing variables
$username = "";
$email    = "";
$errors = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');