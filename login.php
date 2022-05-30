<?php 
require_once('./header.php');
// include './includes/config.php';
include 'handlers/login_validate.php';
include 'handlers/check_session.php';

?>
        <div id="content">
            
            <div class="login_bg">
                <div class="login_header">
                    <h2>Login or Sign-up</h2>
                </div>
               
            
                <div class="login_form">
                    <div class="email">
                        <form action ="login.php" method="post">
                            <label for="inputEmail" class="form-label mt-1">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        
                        </div>
                        <div class="password">
                            <label for="inputPassword1" class="form-label mt-4">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>

                        <div class="buttons1">
                            <button type="login" name="submit" class="btn btn-primary">Login</button>
                            <a href="#" id="signup" class="signup">Need an account? Register here</a>
                        </div>
                    </form>
                </div>

                <div class="register_form">
                    <form action="includes/register.inc.php" method="post">
                        <label for="inputFirstName" class="form-label mt-2">First Name</label>
                        <input type="text" name="firstname" class="form-control" placeholder="Firstname">
                        
                        <label for="inputLastName" class="form-label mt-2">Last Name</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Lastname" >
                        
                        <label for="inputEmail" class="form-label mt-2">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" >
                        
                        <label for="inputPassword" class="form-label mt-2">Password</label>
                        <input type="password" name="passwrd" class="form-control" placeholder="Password" >
                        
                        <label for="inputConfirmPW" class="form-label mt-2">Confirm Password</label>
                        <input type="password" name="password2" class="form-control" placeholder="Confirm Password" >
                        

                        <div class="buttons2">
                            <button type="register" name="submit" class="btn btn-primary">Register</button>
                            <br>
                            <a href="#" id="signin" class="signin">Already have an account? Sign in here</a>

                        </div>
                        
                    </form>
                </div>  
            </div>

        </div>



        <!-- <div id="footer">
            This is the footer
        </div> -->

    </div>
    
</body>
</html>