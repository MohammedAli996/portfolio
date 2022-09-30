<?php
  // Check if request comes from a form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"]; 
    $email = $_POST["email"];
    $subject = $_POST["subject"]; 
    $message = $_POST["message"];
    
    if (!isset($name)){
        die("Please enter your name");
    }
    if (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("Please enter your email address");
    }
    if (!isset($subject)){
        die("Please enter your subject");
    }
    if (!isset($name)){
        die("Please enter your message");
    }
    // Check if request comes from a form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mysql credentials
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "user";
    
    $name = $_POST["name"]; 
    $email = $_POST["email"];
    $subject = $_POST["subject"]; 
    $message = $_POST["message"];
    if (!isset($name)){
        die("Please enter your name");
    }
    if (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("Please enter your email address");
    }
    if (!isset($subject)){
        die("Please enter your subject");
    }
    if (!isset($name)){
        die("Please enter your message");
    }
    // Open a new connection to MySQL server
    $mysqli = new mysqli($host, $username, $password, $database);
    
    // Show any connection errors
    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }  
    
    // Prepare the statement
    $statement = $mysqli->prepare("INSERT INTO users (name, email, subject, message) VALUES(?, ?, ?, ?)"); 
    // Bind the parameteres and execute the statement
    $statement->bind_param('ssss', $name, $email, $subject, $message); 
    
    if($statement->execute()){
        print "" ;
    }else{
        print $mysqli->error; 
    }
}
    }
?>