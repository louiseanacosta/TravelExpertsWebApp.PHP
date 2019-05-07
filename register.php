<?php
/*************************************************************************
 * Program: Travel Experts Assignment
 * Course Module: CPRG 210 OOSD
 * Purpose: This is the register page for the Travel Experts Website.
 * Author: : Louise Acosta
 * Date: Feb 19, 2019
 * ***********************************************************************/
?>

<?php include_once 'variables.php' ?>
<?php include_once 'functions.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'menu.php' ?>

<div class="background">
    <header>
        <h1 class="title" style="font-size:5vw;">Register</h1>
        <img class="background" src="img/header1.jpg"
            alt="background">
    </header>
</div>

<div class="whitebackground">
    <form style="padding-left:300px;" name="myForm" id="myForm" action="login.php" onsubmit = "return confirm('Are you sure?')" onreset= "return confirm('Are you sure?')">
        <label for="fullName">Full Name:</label><br>
        <input type="text" name="fullName" id="fullName" required minlength = "5">
        <p id = "fullNameDescription" style = "display:none">Format:First Name Last Name E.g Maive Collins</p><br><br>

        <label for="address">Address:</label><br>
        <input type="text" name="address" id= "address" required minlength = "7"><br><br>

        <p id = "addressDescription" style = "display:none">E.g 123 Apple Street NE</p>
        <label for="city">City:</label><br>
        <input type="text" name="city" id= "city" required><br><br>

        <p id = "cityDescription" style = "display:none">E.g Calgary</p>
        <label for="province">Province:</label><br>
        <input type="text" name="province" id = "province" required><br><br>

        <p id = "provinceDescription" style = "display:none">E.g Alberta </p>
        <label for="postalcode">Postal Code:</label><br>
        <input type="text" name="postalCode" id = "postalcode" pattern="[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]" required><br><br>

        <p id = "postalCodeDescription" style = "display:none">E.g T2A 7S6</p>
        <label for="email">Email Address:</label><br>
        <input type="text" name="email" id = "email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"><br><br>

        <label for="phoneNumber">Phone Number:</label><br>
        <input type="tel" name="phoneNumber" id = "phoneNumber" required pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"><br><br>

        <label for="CustUsername">Username:</label><br>
        <input type="text" name="CustUsername" id = "CustUsername" required><br><br>

        <label for="CustPassword">Password:</label><br>
        <input type="password" name="CustPassword" id = "CustPassword" required><br><br>

        <p id = "submit" style = "display:none">E.g ruby@gmail.com</p>
        <input type="submit" id="submitBtn" name="submitBtn">
        <input type="reset" id="resetBtn" name="submitBtn">

    </form>

</div>

<script src="script.js"></script>
<?php include_once 'footer.php' ?>