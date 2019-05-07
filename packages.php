<?php
/*************************************************************************
 * Program: Travel Experts Assignment
 * Course Module: CPRG 210 OOSD
 * Purpose: This is the Packages page for the Travel Experts Website.
 * Author: : Louise Acosta
 * Date: Feb 19, 2019
 * ***********************************************************************/
?>

<?php include_once 'variables.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'functions.php'?>
<?php include_once 'menu.php';?>

<header>
    <h1 class="title">Travel Packages</h1>
    <img class="background" src="img/header1.jpg"
        alt="background">
</header>

<div id="content-area" class="center_all">
    <div id="package_box">
        <?php foreach(getPackage() as $package): ?>
            <div id='single_package'>
                <h3><?php echo $package['PkgName']; ?></h3>
                <img src='img/package/<?php echo $package['PkgName']; ?>.jpg' width='180' height='180' />
                <p>Start Date: <?php echo date("F j, Y",strtotime($package['PkgStartDate'])); ?></p>
                <p>End Date: <?php echo date("F j, Y",strtotime($package['PkgEndDate'])); ?></p>
                <p><?php echo $package['PkgDesc']; ?></p>
                <p><b>$<?php echo number_format($package['PkgBasePrice'],2); ?></b></p>

                <a href='details.php' style='float:left;'>Details</a>
                <a href='orders.php?packageId=<?php echo $package['PackageId']; ?>'><button style='float:right'>Select</button></a>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<?php include_once 'footer.php' ?>
