<?php session_start(); ?>
<!-- 
    AUTHOR: GUIDO AMAYA
    course: PROJ-216-OSD - Software Project Concepts
    date: February 19th, 2019
    purpose:this file validates the input on the login form and contrast it with the info on the database 
    NOTE: USERNAME AND PASSWORD COLUMN WAS ADDDED TO THE DATABASE IN ORDER TO LOG IN.
 -->
 <html>
    <head>

    <!-- this include the bootstrap framework which allows the modal--> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!--the script lines below conects to jquery library which allows the functionality of the modal--->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    </head>
    <?php include_once 'header.php' ?>
    
<?php 


function login(){
    $connect = mysqli_connect('localhost', 'admin', 'P@ssw0rd');

    mysqli_select_db($connect, 'travelexperts');

    $username = $_POST['username'];
    $pass = $_POST['password'];

    $s = "select * from agents where agtuser = '$username' ";
    $result = mysqli_query($connect, $s);
    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['username'] = $username;
        header('location:adminpages/newagent.php'); //this should take the logged agent to newagent page
    }else{
        header("'location:index.php'"); //in case username or password doesn't match go back to index page.
    }
}

function loginPage(){
    $connect = mysqli_connect('localhost', 'admin', 'P@ssw0rd');

    mysqli_select_db($connect, 'travelexperts');

    $username = $_POST['username'];
    $pass = $_POST['password'];

    $s = "select * from customers where customeruser = '$username' ";
    $result = mysqli_query($connect, $s);
    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['username'] = $username;
        header('location:index.php'); //this should take the logged agent to newagent page
    }else{
        echo ("The username and password doesn't match, check your information and try again"); //in case username or password doesn't match go back to index page.
    }
}

login();
loginPage();

?>