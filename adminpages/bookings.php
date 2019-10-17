<?php
/*************************************************************************
 * Program: Travel Experts Assignment
 * Course Module: CPRG 210 OOSD
 * Purpose: This is the booking info page for the admin Travel Experts Website.
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
<?php $list = "Booking";
include_once 'menu-admin.php'; ?>

    <!-- This form is asking for user serch cirteria. -->
    <form method="get" action=" " name="BookingsForm">

        <!--  LIST BOX drop down -->
        <label> Search Criteria:</label>
        <select name="serchCriteria">
            <option value=null>Select</option>
            <option value='BookingId'>Booking Number</option>
            <option value='Destination'> Destinations</option>
            <option value='TripStart'> Trip Start Date</option>
        </select><br><br>
        <label for="userinput">Enter Relevant Value:&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; </label>
        <input id="userinputid" type="text" name="userinputVal" ; required><br><br>

        <input id="searchBtnid" type="submit" name="searchBtn" value="Search">
        <br>
    </form>


    </div>
    <div class="contactMain">
        <h3> Search Bookings</h3>


        <?php // this  code will dipaly booking acording to user selections.
        if (isset($_GET["serchCriteria"]) && (isset($_GET["userinputVal"]))) {
            $selectedField = $_GET['serchCriteria'];
            $fieldVal = $_GET['userinputVal'];
            $bookingsinfo = GetBookingsInfo($selectedField, $fieldVal);


            echo '<table>
            <tr><th>Booking ID</th>
            <th> Trip Start Date</th><th> Trip End Date </th><th> Base Price ($)</th><th> Destination</th>
            </tr>';
            while ($row = mysqli_fetch_array($bookingsinfo)) {
                echo '<tr>';

                echo '<td>' . $row['BookingId'] . '</td>';
                echo '<td>' . date("F j, Y", strtotime($row['TripStart'])) . '</td>';
                echo '<td >' . date("F j, Y", strtotime($row['TripEnd'])) . '</td>';
                echo '<td >' . number_format($row['BasePrice'], 2) . '</td>';
                echo '<td>' . $row['Destination'] . '</td></tr>';
            }

            echo '</table>';
        }
        ?>

    </div>
    <script src="script.js"></script>
<?php include_once '../footer.php' ?>