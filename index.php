<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
    <?php require 'assets/head.php'; ?>
    
    <body> 
        <div class="container center-block login">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4 logo">
                    <img alt="LifeSprings" src="assets/img/LifeSprings_Media_Logo.jpg" width="300" height="120" />
                </div>
            </div>
            <div class="row">
                <div id="modalReturn" class="col-sm-8 col-sm-offset-2">

                </div>
            </div>
            <form class="form-horizontal">
                <fieldset>
                    <div id='email_container' class="form-group">
                        <label for="inputEmail" class="control-label col-xs-4">Email:</label>
                        <div class="col-xs-4">
                            <input type="text" class="form-control" id="email" autofocus placeholder="Email">
                            <span class='help-block hide' id='email_error' email='true'></span>
                        </div>
                    </div>
                    <div id='pass_container' class="form-group">
                        <label for="inputPassword" class="control-label col-xs-4">Password:</label>
                        <div class="col-xs-4">
                            <input type="password" class="form-control" id="pass" placeholder="Password" onkeydown="if (event.keyCode === 13) {
                                        login();
                                        return false;
                                    }">
                            <span class='help-block hide' id='pass_error' noSpace='true' minLength='1'></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-5 col-xs-6">
                            <button type="button" class="btn btn-primary" onclick="login();"> Login</button>  <!-- Located in function.js -->
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>