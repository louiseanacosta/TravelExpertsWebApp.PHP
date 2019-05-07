<?php
/*************************************************************************
 * Program: Travel Experts Assignment
 * Course Module: CPRG 210 OOSD
 * Purpose: This is the Products page for the Travel Experts Website.
 * Author: : Louise Acosta
 * Date: Feb 19, 2019
 * ***********************************************************************/
?>

<?php include 'variables.php' ?>
<?php include_once 'functions.php' ?>
<?php include 'header.php' ?>

<!-- Navigation Bar -->
<?php include "menu.php" ?>
<div class="background">
    <header>
        <h1 class="title">Products</h1>
        <img class="background" src="https://cdn3.f-cdn.com/contestentries/54965/8761039/52d9cbdaa7ba2_thumb900.jpg"
            alt="background">
        <header>
</div>

<!-- code by Angela Dunwoodie-Lambert         -->
        
<div class="whitebackground">
    <body>
        <?php
            $con = connect();
            $result = mysqli_query($con, 'SELECT * FROM products');
            
            echo '<form action="orders.php" method="post">';
            echo '<table border="1">
            <tr><th></th>
            <th>Products</th>
            </tr>';

            while($row = mysqli_fetch_array($result)){
                echo '<tr>';
                echo '<td> <input type="checkbox" name="check_list[]" value="' . $row["ProdName"] . '">';
                echo '<td>' . $row['ProdName'] . '</td></tr>';
            }

            echo '</table>';
            echo '<input type="submit" name="submitOrder" value="Submit" />';
            echo '</form>';

            closeDB($con);
        ?>
<!-- end code by Angela Dunwoodie-Lambert -->
    </body>
</div>

<?php include 'footer.php' ?>

</html>