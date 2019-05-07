<?php
/*************************************************************************
 * Program: Travel Experts Assignment
 * Course Module: CPRG 210 OOSD
 * Purpose: This is the Agent page for the Travel Experts Admin Website
 * Author: : Louise Acosta
 * Date: Feb 19, 2019
 * ***********************************************************************/
?>

<?php 
include_once '../variables.php';
include_once '../header.php';
include_once '../functions.php';
include_once '../classes.php';
?>
<?php include_once 'menu-admin-top.php'; ?>   
<img class="background" src="../img/header2.jpg"
    alt="background">
        
<?php 
$list="Agent";
include_once 'menu-admin.php'; ?>   
<?php

    if(!isset($_SESSION["start_time"])){
        $_SESSION["start_time"] = time();
    }

    // if(!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] == false)
    //     header("Location: http://localhost/assignment2/login.php");

    AgentCreate();
?>

 
<!-- FORM -->
<main>
<!-- <h2 class="center"><u>Add Agent</u></h2> -->
    <form method="POST" action="#"><h2><u>Add Agent</u></h2>
        <label for="AgtFirstName">First Name:</label><br>
        <input type="text" name="AgtFirstName" required><br><br>
    
        <label for="AgtMiddleInitial">Middle Initial:</label><br>
        <input type="text" name="AgtMiddleInitial"><br><br>

        <label for="AgtLastName">Last Name:</label><br>
        <input type="text" name="AgtLastName" required><br><br>
 
        <label for="AgtBusPhone">Business Phone Number:</label><br>
        <input type="tel" name="AgtBusPhone" required><br><br>
  
        <label for="AgtEmail">Email Address:</label><br>
        <input type="text" name="AgtEmail" required><br><br>

        <label for="AgtPosition">Position:</label><br>
        <input type="text" name="AgtPosition" required><br><br>

        <label for="AgencyId">AgencyId:</label><br>
        <input type="number" name="AgencyId" min="1" max="2" required><br><br>

        <label for="AgtUsername">Username:</label><br>
        <input type="text" name="AgtUsername" required><br><br>

        <label for="AgtPassword">Password:</label><br>
        <input type="password" name="AgtPassword" required><br><br>

        <input type="submit" name="submit" value="ADD AGENT">
        <input type="reset" name="reset" value="RESET">
    </form>
</main>


<?php include_once '../footer.php' ?>