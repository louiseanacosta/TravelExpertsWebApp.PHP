<?php
/*************************************************************************
 * Program: Travel Experts Assignment
 * Course Module: CPRG 210 OOSD
 * Purpose: This is the links/resource page for the Travel Experts Website.
 * Author: : Louise Acosta
 * Date: Feb 19, 2019
 * ***********************************************************************/
?>

<?php include_once 'variables.php' ?>
<?php include_once 'functions.php' ?>
<?php include_once 'header.php' ?>
<?php include_once 'menu.php' ?>

    <header>
        <h1 class="title">Top Travel Blogs</h1>
        <img class="background" src="img/header1.jpg"
             alt="background">
    </header>

    <section>
        <h1 class="center">Learn more from Travel Enthusiasts</h1>
        <?php
        //TABLE - TOP TRAVEL BLOGS
        print("<table>");
        $num = 1;
        foreach ($links as $link => $title) {
            print("<tr>");
            print("<td>$num</td>");
            print("<td><a href='$link' target='_blank'>$title</a></td>");
            print("</tr>");
            $num++;
        }
        print("</table>");
        ?>
    </section>

<?php include_once 'footer.php' ?>