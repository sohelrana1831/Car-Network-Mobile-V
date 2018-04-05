<?php include 'header.php'; ?>

<div class="registration-form">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="step-area">
                    <div class="progress_step_bar clearfix">
                        <ol>
                            <li class="now_progress">
                                <h2>Step1</h2>
                                <p>Email or Social login</p>
                            </li>
                            <li>
                                <h2>Step2</h2>
                                <p>Verification</p>
                            </li>
                            <li>
                                <h2>Step3</h2>
                                <p>Your detail</p>
                            </li>
                            <li>
                                <p>Registration<br>Complete!</p>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 step-area">
                <h2 class="headLine01"><span>Welcome to Car Network Sign up</span></h2>
            </div>
            <div class="col-12">
                <div class="form-area">
                    <form action="">
                        <div class="step-one">
                            <h3>Don't have an Car Network Id?</h3>
                            <small>Registration is 100% free, no credit card required, no hidden fees.</small>
                            <span class="float-right"></span>
                            <div class="form-group">
                                <label class="float-right">Please create new account.</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>

                            <ul class="regist_merit_list">
                                <li>Negotiate with sales representative!</li>
                                <li>My page available!</li>
                                <li>Track your car!</li>
                                <li>Receive latest stock list and news!</li>
                                <li>Enter into a valuable campaign!</li>
                            </ul>
                        </div>
                        <div class="submit">
                            <button type="submit" id="btnSubmit" name="register" value="Register Now">Register Now</button>
                        </div>
                    </form>
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
        <div class="row">
            <div class="col-12">
                <div style="text-align: center">
                    <span style="font-size: x-large;">Registration is 100% free, no credit card required, no hidden fees.</span>
                </div>
                <div class="step-area">
                    <h2 class="headLine01"><span>Registration Infromation</span></h2>
                </div>
                <div class="main-registration-area">
                    <form action="">
                        <table class="table-bordered">
                            <tbody>
                                <tr>
                                    <th><label for="firstName"><span>*</span>First Name:</label></th>
                                    <td><input type="text"></td>
                                </tr>
                                <tr>
                                    <th><label for="lastName"><span>*</span>Last Name:</label></th>
                                    <td><input type="text"></td>
                                </tr>
                                <tr>
                                    <th>
                                        <label for="fName"><span>*</span>Are you an individual or a car dealer?</label>
                                    </th>
                                    <td>
                                        <label class="radio-inline"><input type="radio" name="optradio">Individual</label>

                                        <label class="radio-inline"><input type="radio" name="optradio">Car Dealer</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="Country_Id"><span>*</span>Country</label></th>
                                    <td>
                                        <div class="country" id="country"
                                             data-input-name="country"
                                             data-selected-country="US"
                                             data-button-size="btn-lg"
                                             data-button-type="btn-warning"
                                             data-scrollable="true"
                                             data-scrollable-height="250px">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="Arrival_Port_Id">Port</label></th>
                                    <td><input type="text"></td>
                                </tr>
                                <tr>
                                    <th><label for="password"><span>*</span>Password</label></th>
                                    <td><input name="password" id="password" maxlength="20" value="" type="password"></td>
                                </tr>
                                <tr>
                                    <th><label for="repass"><span>*</span>Confirm Password</label></th>
                                    <td><input name="repass" id="repass" maxlength="20" value="" type="password"></td>
                                </tr>
                                <tr>
                                    <th><label for="email"><span>*</span>Email</label></th>
                                    <td><input name="email" id="email" value="developer@webtechsoft.com" maxlength="50" disabled="disabled" type="text"></td>
                                </tr>
                                <tr>
                                    <th><label for="fName"><span>*</span>Phone No</label></th>
                                    <td><input type="tel" id="phone" placeholder=""></td>
                                </tr>
                                <tr>
                                    <th><label for="fName"><span>*</span>Prefer Steering:</label></th>
                                    <td>
                                        <label for="PreferRHD">
                                            <input value="1" checked="" type="checkbox"> Right Hand Drive</label>

                                        <label for="PreferLHD">
                                            <input value="1" type="checkbox"> Left Hand Drive</label>

                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div align="center">
                            <p class="check_term_text">
                                <input name="term_agreement" id="term_agreement" value="1" checked="" type="checkbox">
                                <label for="term_agreement"> 
                                    I accept and read the <a href="#" target="_blank">Privacy Policy</a></label>
                            </p>
                        </div>
                        <div class="submit">
                            <button type="submit" value="Register Now">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>