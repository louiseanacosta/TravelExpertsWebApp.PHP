<?php
/*************************************************************************
 * Program: Travel Experts Assignment
 * Course Module: CPRG 210 OOSD
 * Purpose: This is the contact page for the Travel Experts Website.
 * Author: : Adnan
 * Date: Feb 19, 2019
 * ***********************************************************************/
?>

<?php include_once 'variables.php' ?>
<?php include_once 'functions.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'menu.php' ?>

<div class="background">
    <header>
        <h1 class="title">Contact Us</h1>
        <img class="background" src="img/header1.jpg"
            alt="background">
    </header>
</div>

<main class="center">
<section class="contactFloatLeft" style="padding-right:50px;">
<!-- Head Office Location -->
<div class="contactMain">
    <h3> Location 1 </h3>
        <p class="center">
        1155 8th Ave SW<br>
        Calgary,AB Canada T2P 1N3<br>                 
        Phone: (403)271-9873<br>
        Fax: (403) 271-9872<br>
        <br>
        </p>

<!-- Travel Agent contact info -->
    <h3> Travel Agents</h3>
        <?php
        $agentsContactinfo=GetAgent1ContacInfo();
            while($row=mysqli_fetch_array($agentsContactinfo)){
                $agt_fname = $row['AgtFirstName'];
                $agt_lname = $row['AgtLastName'];
                $agt_busphone = $row['AgtBusPhone'];
                $agt_email = $row['AgtEmail'];
                    echo "
                    <b>$agt_fname $agt_lname</b>
                    <br>$agt_busphone
                    <br><a href='mailto:'$agt_email'>$agt_email</a>
                    <p></p>
                    <div style='padding-bottom:20px;'>
                    </div>
                    ";
            }

        ?>
    </div>
</div>
</section>

<section class="contactFloatLeft" >
    <div class="contactMain">
    <h3> Location 2</h3>
        <p class="center">
        110 Main Street<br>
        Okotoks, AB Canada T7R 3J5<br>                         
        Phone:(403)563-2381<br>
        Fax:(403)563-2382<br>
        <br>
        </p>

<!-- Travel Agent contact info -->
    <h3> Travel Agents</h3>
    <?php
        $agentsContactinfo=GetAgent2ContacInfo();
        while($row=mysqli_fetch_array($agentsContactinfo)){
            $agt_fname = $row['AgtFirstName'];
            $agt_lname = $row['AgtLastName'];
            $agt_busphone = $row['AgtBusPhone'];
            $agt_email = $row['AgtEmail'];
                echo "
                <b>$agt_fname $agt_lname</b>
                <br>$agt_busphone
                <br><a href='mailto:$agt_email'>$agt_email</a>
                <p></p>
                </div>
                <div style='padding-bottom:20px;'>
                </div>
                ";
        }
    ?>
        </div>
</div>
</section>
</main>

<script src="script.js"></script>
<?php include_once 'footer.php' ?>