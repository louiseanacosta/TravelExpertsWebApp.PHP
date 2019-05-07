<?php
/*************************************************************************
* AUTHOR: GUIDO AMAYA
* PURPOSE: create a login modal which after successful validation
*          will send the agent to newagent.php where is the plataform
*          with functionality to work.
*          following Below the code for a modal login for customer which after succesful 
*          validation will send it to orders.php
*************************************************************************/
?>

<nav>
    <img class="logo" src="img/logo.jpg" alt="logo"> 
    <ul class="menu">
        <li class="floatLeft"><?php echo greeting(); ?></li>
        <li class="floatLeft">    </li>
        <li class="floatLeft"><a href="index.php">HOME</a></li>
        <li class="floatLeft"><a href="packages.php">PACKAGES</a></li>
        <li class="floatLeft"><a href="contact.php">CONTACT</a></li>
        <li class="floatLeft"><a href="links.php">RESOURCES</a></li>
        <li class="floatLeft"><a href="register.php">REGISTER</a></li>
        <!-- button trigger the modal that will show up the login form -->
        <button type="button" class="btn btn-default btn-lg" id="myBtn">Login</button>
</nav>
    <body>
    <!--box that contains the login form for agents-->
        <div class="container">       
            <!-- the way the Modal will appear on screen -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                
                <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header" style="padding:35px 50px;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4><span class="glyphicon glyphicon-log-in"></span> Login</h4>
                        </div>

                        <div class="modal-body" style="padding:40px 50px;">
                        <form action = "validation.php" method = "post" role="form">
                            <div class="form-group">
                            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                            <input type="text" class="form-control" name = "username" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-lock"></span> Password</label>
                            <input type="password" class="form-control" name = "password" placeholder="Enter password">
                            </div>
                            <div class="checkbox">
                            <label><input type="checkbox" value="" checked>Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                        </form>
                        </div>

                        <div class="modal-footer">                
                        <p>Not a member? <a href="#">Sign Up</a></p> <!--we should send then to register.php-->                
                        </div>
                    </div>           
                </div>
            </div> 
        </div>
    </ul>
    <!--this script makes that the modal closes when click outside of it-->
        <script>
        $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal").modal();
        });
        });
        </script>
        
    </body>
    </html>
    </html>