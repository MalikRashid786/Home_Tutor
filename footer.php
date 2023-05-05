<?php
$query = "SELECT * FROM tbl_inlawtype ORDER BY lawtype_id LIMIT 4";
$result = mysqli_query($connect, $query);
?>
<div>
    <div class="container-fluid py-md-4">
        <div class="row justify-content-center text-center">
            <div class="col-lg-1 col-xl-1 col-md-1 ml-3 footer_grid mt-5 text-green">
                <img src="img/home (1).png" class="img-fulid" style="width: 55px;margin-bottom: 35px">
                <sub><sub><sub><sub><sub><sub><sub><sub><sub><span style="font-size: 14px;margin-left: -68px;">Home Tutor</span></sub></sub></sub></sub></sub></sub></sub></sub></sub>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-3 footer_grid mt-md-0 mt-4">
                <ul class="footer_list">
                    <li>
                        <a href="genaskquestion.php"> Ask Question</a>
                    </li>
                    <li>
                        <a href="about.php"> About</a>
                    </li>
                    <li>
                        <a href="genlawyer.php"> Tutors</a>
                    </li>
                    <li>
                        <a href="contact.php"> Contact</a>
                    </li>

                </ul>
            </div>
            <div class="col-lg-3 col-xl-3 col-md-3 sfooter_grid mt-md-0 mt-sm-4 mt-3">
                <ul class="footer_list">
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <li>
                            <a href="genralsearchlawyer.php?law_id=<?php echo $row['lawtype_id']; ?>"><?php echo $row['areaname']; ?></a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>

            <div class="col-lg-3 mt-md-0 mt-sm-4 mt-3">
                <ul class="footer_list">
                    <li>
                        <a href="signup.php">Sign Up</a>
                    </li>

                    <li>
                        <a href="#">Terms of Use</a>
                    </li>
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="social_grid">
            <h3 class="fallowUs">Follow Us</h3>
            <div class="social-icons">
                <ul>
                    <li><a href="#"><span class="fab fa-facebook-f"></span> Facebook</a></li>
                    <li><a href="#"><span class="fab fa-twitter"></span> Twitter</a></li>
                    <li><a href="#"><span class="fab fa-google"></span>Google</a></li>
                </ul>
            </div>
        </div>
        <div class="move-top text-center mt-lg-4 mt-3">
            <a href="#top"><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
        </div>
        <div class="rinfo">
            <p class="text-center mt-3">&copy;2020 | Made By <a href="" class="text-uppercase ml-2"> Ishwash The Ibtiqar</a></p>
        </div>
    </div>
</div>
<!-- //footer -->