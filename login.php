<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12 step-area">
            <h2 class="headLine01" style="margin-top: 10px;"><span>Welcome to Car Network Login</span></h2>
        </div>
        <div class="col-12">
            <div class="form-area">
                <form action="">
                    <div class="step-one login-form">
                        <h3 class="login">Login With Car Network</h3>
                        <div class="form-group">
                            <!--                               <label class="float-right">Please create new account.</label>-->
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <!--                               <label class="float-right">Please create new account.</label>-->
                            <input type="password" class="form-control" id="passwordInputEmail1" aria-describedby="passwordHelp" placeholder="Password">
                        </div>
                    </div>
                    <div class="submit">
                        <button type="submit" id="btnSubmit" name="login" value="Login">Login</button>
                    </div>
                </form>
                <div class="forgetarea">
                    <ul>
                        <li><a href="">Forgot Password?  </a> | <a href=""> Help</a></li>
                        <li>Don't have an account ?</li>
                        <li><a href="registration.php">Please create new account.</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="form-area">
                <h3 class="Login-With">Login With</h3>
                <ul class="submit">
                    <li class="facebook_snsloginbtn"><a href="">Facebook</a>
                    </li>

                    <li style="height:15px"></li>
                </ul>
                <ul class="submit">
                    <li class="google_snsloginbtn"><a href="">Google</a></li>
                    <li style="height:15px"></li>
                </ul>
                <ul class="submit">
                    <li class="microsoft_snsloginbtn"><a href="">Windows live</a>
                    </li>
                    <li style="height:15px"></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>