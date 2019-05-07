<?php
/*************************************************************************
 * Program: Travel Experts Assignment
 * Course Module: CPRG 210 OOSD
 * Purpose: This is the main landing page for the Travel Experts Website.
 * Author: : Louise Acosta
 * Date: Feb 19, 2019
 * ***********************************************************************/

?>

<?php include_once 'variables.php' ?>
<?php include_once 'functions.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'menu.php' ?>

<header>
    <img class="background" src="img/background2.jpg" alt="background">
    <h4 class="indexTitle" style="font-size:3vw;"> Company Description</h4>
</header>

<div class="center">
    <img class="three" src="img/three.jpg" alt="three">
</div>

<!-- Table -->
<div style = "padding-top:40px;">
    <p id="tableTitle">WHAT CAN WE HELP YOU WITH?</p>
</div>

<div>
    <table>
        <td class="paddingRight"><a href="products.php"><img src='img/egypt2.jpg'>Flights, Hotels, Cars and More</a></td>
        <td class="paddingRight"><a href="packages.php"><img src='img/italy2.jpg'>All Inclusive Vacations and More</a></td>
        <td class="paddingRight"><a href="index.php"><img src='img/australia2.jpg'>Recommendations and More</a></td>
        <td class="paddingRight"><a href="index.php"><img src='img/greece2.jpg'>Earn and Redeem Rewards</a></td>
    </table>
</div>



<?php include_once 'footer.php' ?>