<?php
/*************************************************************************
 * Program: Travel Experts Assignment
 * Course Module: CPRG 210 OOSD
 * Purpose: This is the customers information page .
 * Author: : ADNAN ABBASI
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
<?php $list = "Customer";
include_once 'menu-admin.php'; ?>

<!-- Travel Agent contact info -->
<h2 class="center"> OUR CUSTOMERS</h2>
<div class="center">
    <?php
    $CustomresContactinfo = GetCustomersInfo();


    echo "<table>
            <tr><th>First Name</th>
            <th> Last Name</th><th> Address </th><th> Contact Number</th><th> Email</th>
            </tr>";
    while ($row = mysqli_fetch_array($CustomresContactinfo)) {
        echo "<tr>";

        echo "<td>" . $row["CustFirstName"] . "</td>";
        echo "<td>" . $row["CustLastName"] . "</td>";
        echo "<td >" . $row["CustAddress"] . $row["CustCity"] . $row["CustProv"] . $row["CustPostal"] . $row["CustCountry"] . "</td>";
        echo "<td>" . $row["CustHomePhone"] . "</td>";
        echo "<td >" . $row["CustEmail"] . "</td></tr>";
    }

    echo "</table>";

    ?>

</div>
</div>
<script src="script.js"></script>
<?php include_once "../footer.php" ?>