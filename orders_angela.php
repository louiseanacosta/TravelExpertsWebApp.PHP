<?php include 'variables.php' ?>
<?php include_once 'functions.php' ?>
<?php include 'header.php' ?>

<!-- Navigation Bar -->
<?php include "menu.php" ?>
<div class="background">
    <header>
        <h1 class="title">Orders</h1>
        <img class="background" src="https://cdn3.f-cdn.com/contestentries/54965/8761039/52d9cbdaa7ba2_thumb900.jpg"
            alt="background">
        <header>
</div>

<div class="whitebackground">
    <body>
<?php
/**************************
 * AUTHOR:ANGELA LAMBERT
 * 
 * ********************* */
?>
        <?php
            echo '<table border="1">
                    <tr><th>Item</th>
                    <th>Cost</th>
                    </tr>';
                if (isset($_POST['submitOrder'])){
                    if (!empty($_POST['check_list'])) {
                        foreach($_POST['check_list'] as $selected) {
                            echo '<tr>';
                            echo '<td>' . $selected . '</td>';
                            echo '<td> $100.00 </td></tr>';
                        }
                    }
                }
             echo '</table>';
        ?>
<!--end code by Angela Lambert-->
    </body>
</div>

<?php include 'footer.php' ?>

</html>