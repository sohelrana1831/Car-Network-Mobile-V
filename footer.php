<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 footer-menu-col">
            <!-- menu -->
            <div id="MainMenu">
                <div class="list-group panel">
                    <a href="#" class="list-group-item footer-menu-list" data-parent="#MainMenu">Action</a>

                    <a href="#" class="list-group-item footer-menu-list" data-parent="#MainMenu">How To Buy</a>

                    <a href="#demo3" class="list-group-item footer-menu-dopi" data-toggle="collapse" data-parent="#MainMenu">Services </a>

                    <div class="collapse" id="demo3">

                        <a href="#" class="list-group-item footer-menu-dop">Services</a>

                        <a href="#" class="list-group-item footer-menu-dop">Car Tracking</a>

                        <a href="#" class="list-group-item footer-menu-dop">Shipping Schedule</a>
                    </div>
                    <a href="#demo4" class="list-group-item footer-menu-dopi" data-toggle="collapse" data-parent="#MainMenu">About Us</a>

                    <div class="collapse" id="demo4">
                        <a href="" class="list-group-item footer-menu-dop">About Us</a>

                        <a href="" class="list-group-item footer-menu-dop">Company Profile</a>

                        <a href="" class="list-group-item footer-menu-dop">Our Staff</a>
                        <a href="" class="list-group-item footer-menu-dop">Terms & Conditions</a>

                        <a href="" class="list-group-item footer-menu-dop">Company Profile</a>

                        <a href="" class="list-group-item footer-menu-dop">Privacy Policy</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div> 
<!--                        socile-meadia-->
<div class="container-fluid socile-meadia">
    <hr />
    <div class="center-block">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-google"></a>
        <a href="#" class="fa fa-linkedin"></a>
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-instagram"></a>
    </div>
    <hr />
</div>
<!--                     end   socile-meadia-->

<p class="foot2btns">
    <a class="home_btn" href=""><i class="fa fa-home" aria-hidden="true"></i>Home</a>
    <a class="mail_btn" href=""><i class="fa fa-envelope-o" aria-hidden="true"></i>E-mail us</a>
</p>
<!--                        copyright-->
<div class="copyright">Car Network. All Rights Reserved.</div>
<div class="design"> 
    <a target="_blank" href="http://webtechsoft.com/">Development by Webtechsoft</a>
</div>
<!--                        copyright-->
<div class="top-page">
    <a href="#" class="scrollToTop"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
<script src="assets/js/owl.carousel.js"></script>

<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
//                autoplay: true,
            items: 4,
            dots: true,
        })
    })
</script>
<!--           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>-->
<script>
    $(document).ready(function () {

//Check to see if the window is top if not then display button
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });

//Click event to scroll to top
        $('.scrollToTop').click(function () {
            $('html, body').animate({scrollTop: 0}, 800);
            return false;
        });

    });
</script>

<!-- bxSlider Javascript file -->
<script src="assets/js/jquery.bxslider.min.js"></script>
<script>
    $(document).ready(function () {
        $('.bxslider').bxSlider();
    });
</script>
<!--    goBack function-->
<script>
    function goBack() {
        window.history.back();
    }
</script>


<script src="assets/js/jquery.flagstrap.js"></script>
<script>
    $('#country').flagStrap();
</script>

<!--  Country code with phone CSS -->
<script src="build/js/intlTelInput.js"></script> 

<script>
    $("#phone").intlTelInput();
</script>

</body>
</html>