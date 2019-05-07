<?php
/*************************************************************************
 * Program: Travel Experts Assignment
 * Course Module: CPRG 210 OOSD
 * Purpose: This is the orders page for the Travel Experts Website.
 * Author: : Louise Acosta
 * Date: Feb 19, 2019
 * ***********************************************************************/
?>


<?php include_once 'variables.php' ?>
<?php include_once 'functions.php'?>
<?php include_once 'header.php' ?>
<?php include_once 'menu.php';?>

<header>
    <h1 class="title">Order</h1>
    <img class="background" src="img/header1.jpg"
        alt="background">
</header>

<!-- PASSENGER DETAILS -->
<br><br>
    <?php if(isset($_GET['packageId'])): ?>
        <?php foreach(getPackage($_GET['packageId']) as $package): ?>
            <div id='single_package' class="center">
                <h2><?php echo $package['PkgName']; ?></h2>
                <img src='img/package/<?php echo $package['PkgName']; ?>.jpg' width='180' height='180' />
                <p>Start Date: <?php echo date("F j, Y",strtotime($package['PkgStartDate'])); ?></p>
                <p>End Date: <?php echo date("F j, Y",strtotime($package['PkgEndDate'])); ?></p>
                <p><?php echo $package['PkgDesc']; ?></p>
                <p><b>$<?php echo number_format($package['PkgBasePrice'],2); ?></b></p>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
    <h2 class="center" style="clear:left">Traveler Information</h4><br>
    <form action="">
    <p>Passenger 1</p>
        <div class="form-group">
        <label for="FirstName">First Name: </label><input type="text" name="FirstName" required>

        <label for="MiddleInitial">Middle Initial: </label><input type="text" name="MiddleInitial" maxlength="1" required>

        <label for="LastName">Last Name: </label>
        <input type="text" name="LastName" required><br><br>

        <label for="DOB":>Date of Birth: </label>
        <input type="number" name="DOB" min="1" max="31" required>

        <label for="MOB":>Month of Birth: </label>
        <select>
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
        </select>
        <label for="YOB">Year:</label>
        <input type="number" name="YOB" min="1940" max="2019" required>

        <button method="POST" type="button" name="button" class="btn btn-default btn-lg" style='float:right'>Add Traveller</button></a>

        </div>
    </form>


<br><br>
<!-- PAYMENT DETAILS -->
    <h2 class="center">Payment Information</h4><br>
    <form action="">
        <p>Credit Card Holder Information</p>
        <label for="CardholderName">Full Name:</label>
        <input type="text" name="CardholderName" required>

        <label for="CardNumber">Card Number:</label>
        <input type="text" name="CardNumber">

        <label  for="CardType">Type:</label>
        <select>
            <option value="Visa">Visa</option>
            <option value="MasterCard">Master Card</option>
            <option value="AmericanExpress">American Express</option>
        </select><br><br>

        <p>Expiration Date</p>
        <label for="MonthExpire">Month:</label>
        <select>
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
        </select>

        <label for="YearExpire">Year:</label>
        <input type="number" name="YearExpire" min="1940" max="2040" required>

        <label for="SecurityCode">Security Code:</label>
        <input type="text" name="SecurityCode" maxlength="4" required><br><br>

        <p>Address</p>
        <label for="Address">Street</label>
        <input type="text" name="Address" required>

        <label for="Email">Email:</label>
        <input type="text" name="Email"><br><br>

        <button type="button" class="btn btn-default btn-lg" style='float:right'>Submit Booking</button></a>
    </form>


<?php include_once 'footer.php' ?>