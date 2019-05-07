<?php
/*************************************************************************
 * Program: Travel Experts Assignment
 * Course Module: CPRG 210 OOSD
 * Purpose: This contains functions used for each page on the Travel Experts Website
 * Author: : Louise Acosta
 * Date: Feb 11, 2019
 * ***********************************************************************/
?>

<?php
// GREETING MESSAGE
function greeting(){
    
    date_default_timezone_set('America/Edmonton');
        
    $time = getdate(time());
    if($time["hours"] > 18){
            $message = "Good Evening! ";
        } else if($time["hours"] > 12){
            $message = "Good Afternoon! ";
        } else {
            $message = "Good Morning! ";
        }
    return $message;
}


//MySQL CONNECTION
function connect(){
    $connection = mysqli_connect("localhost", "admin", "P@ssw0rd", "travelexperts");

    // CHECK
    if(!$connection) {
        print("Connection Failed" . mysqli_errno($connection) . " - - " . mysqli_error($connection));
        exit;
    } return $connection;
}

// MySQL - CLOSE CONNECTION
function closeDB($connection) {
    mysqli_close($connection);
}

// CREATING AGENT DATA
function AgentCreate(){

    $connection = connect();

    if(isset($_POST['submit'])){
        
        // NEW AGENT
        $agent = new Agent($_POST);

        $sql = "INSERT INTO agents (
            AgtFirstName,
            AgtMiddleInitial,
            AgtLastName,
            AgtBusPhone,
            AgtEmail,
            AgtPosition,
            AgencyId,
            AgtUsername,
            AgtPassword
            )
            VALUES (?,?,?,?,
            ?,?,?,?,?)";

        // CREATE STATEMENT
        $statement = mysqli_prepare($connection, $sql);

        $AgtFirstName = $agent->getAgtFirstName();
        $AgtMiddleInitial = $agent->getAgtMiddleInitial();
        $AgtLastName = $agent->getAgtLastName();
        $AgtBusPhone = $agent->getAgtBusPhone();
        $AgtEmail = $agent->getAgtEmail();
        $AgtPosition = $agent->getAgtPosition();
        $AgencyId = $agent->getAgencyId();
        $AgtUsername = $agent->getAgtUsername();
        $AgtPassword = $agent->getAgtPassword();

        // BIND PARAMETERS
        mysqli_stmt_bind_param($statement, 'ssssssiss',
            $AgtFirstName,
            $AgtMiddleInitial,
            $AgtLastName,
            $AgtBusPhone,
            $AgtEmail,
            $AgtPosition,
            $AgencyId,
            $AgtUsername,
            $AgtPassword
        );

        $result = mysqli_stmt_execute($statement);
        
        // CHECK
        if (!$result) {
            die("There was a problem adding the agent" . mysqli_error());
        } else {
            echo "The agent has been added successfully.";
        }

        mysqli_stmt_close($statement);
        
        closeDB($connection);

    }
}   

    // GET USERS IN DATABASE 
    function GetUsers() {
        $connection = connect();

        if(isset($_POST['submit'])){

            $AgtUsername = $_POST['AgtUsername'];
            $AgtPassword = $_POST['AgtPassword'];
            

            $users_query = "SELECT * FROM agents WHERE AgtUsername='$AgtUsername' and AgtPassword='$AgtPassword'";
            
            $result = mysqli_query($connection, $users_query);

            //CHECK IF THERE IS A USERNAME THAT MATCHES
            $count = mysqli_num_rows($result);

                //IF LOGGED IN, REDIRECT TO NEWAGENT PAGE OR RETRY
                if($count==1) {
                    print("You are logged in");
                    $_SESSION["logged_in"] = true;
                    header("Location: http://localhost/assignment2/adminpages/newagent.php");
                    }else{
                    print("Incorrect email or password, please try again.");
                }

        }
    }

    //Get Travel Package list in Database
    function getPackage($id = 0) {
        $packages = array();
        $connection = connect();
        
        // CHECK PACKAGE ID
        if($id > 0){

            // SET ADDITIONAL WHERE CLAUSE
            $sql = "SELECT PackageId, PkgName, PkgStartDate, PkgEndDate, PkgDesc, PkgBasePrice FROM packages
                WHERE PkgStartDate > Now() and PackageId = ?";

        }else{

            // CLEAR
            $sql = "SELECT PackageId, PkgName, PkgStartDate, PkgEndDate, PkgDesc, PkgBasePrice FROM packages
                WHERE PkgStartDate > Now()";

        }

        $statement = mysqli_prepare($connection, $sql);

        if($id != 0){

            // BIND PARAMETERS
            $statement->bind_param('i', $id);
        }

        $statement->execute();

        // BIND RESULT
        $statement->bind_result(
            $PackageId,
            $PkgName,
            $PkgStartDate,
            $PkgEndDate,
            $PkgDesc,
            $PkgBasePrice
        );

        while($statement->fetch()) {
            
            $package = array();
            $package['PackageId'] = $PackageId;
            $package['PkgName'] = $PkgName;
            $package['PkgStartDate'] = $PkgStartDate;
            $package['PkgEndDate'] = $PkgEndDate;
            $package['PkgDesc'] = $PkgDesc;
            $package['PkgBasePrice'] = $PkgBasePrice;
        
            $packages[] = $package;

        }

        $statement->close();

        closeDB($connection);

        return $packages;
    }


    
/************************
 * AUTHOR : ADNAN ABASSI
 * ********************/
    function GetAgent1ContacInfo()// this will return the Agents contact information.
    {
    $dbhConnection=connect();
    $agentContactQuery="SELECT AgtFirstName,AgtLastName,AgtBusPhone,AgtEmail from agents where AgencyId=1";
    $agentContactInfo= mysqli_query($dbhConnection, $agentContactQuery);
    
    closeDB($dbhConnection);
    return $agentContactInfo;
    }// END OF FUNCTION 
    
    function GetAgent2ContacInfo()// this will return the Agents contact information.
    {
    $dbhConnection=connect();
    $agentContactQuery="SELECT AgtFirstName,AgtLastName,AgtBusPhone,AgtEmail from agents where AgencyId=2";
    $agentContactInfo= mysqli_query($dbhConnection, $agentContactQuery);
    
    closeDB($dbhConnection);
    return $agentContactInfo;
    }// END OF FUNCTION 
    
    function GetCustomersInfo()// this will return the CUSTOMERS  information.
    {
        
    $dbhConnection=connect();
    $customersContactQuery="SELECT * from customers";
    $CustomersInfo= mysqli_query($dbhConnection, $customersContactQuery);
    
    closeDB($dbhConnection);
    return $CustomersInfo;
    }// END OF FUNCTION 
    
    // this will return the BOOKING SEARCH RESULTS.
    function GetBookingsInfo($selectedField,$field)
    {
        
    $dbhConnection=connect();
    $bookingsInfo="SELECT * from bookingdetails where $selectedField = '$field'";
    $bookingInfoArray= mysqli_query($dbhConnection, $bookingsInfo);
    
    closeDB($dbhConnection);
    return $bookingInfoArray;
    }// END OF FUNCTION 
    

?>