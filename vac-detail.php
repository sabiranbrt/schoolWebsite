<?php include 'common/header.php'; ?>

<?php include 'common/navbar-top.php'; ?>
<?php include 'common/navigation.php'; ?>

<section class="principal">
    <div class="principal-banner">
        <div class="principal-content">
            <h1>Vacancy</h1>
            <a href="index.php">Home</a>
            <span>Job Description</span>
        </div>
    </div>
</section>

<section class="detail">
    <div class="container">
        <div class="description">
            <div class="cols-1">
                <div class="job-type slide-in-bottom">
                    <div class="job-title">
                        <h2>Teacher<i class="fa-solid fa-check"></i></h2>
                    </div>
                    <div class="salary">
                        <div class="title">
                            <img src="assets/image/breifcase.png" alt="">
                            <p>Math Teacher</p>
                        </div>
                        <div class="title">
                            <img src="assets/image/location.png" alt="">
                            <p>Kathmandu</p>
                        </div>
                        <div class="title">
                            <img src="assets/image/money.png" alt="">
                            <p>Rs.20000 - 30000 / Month</p>
                        </div>
                    </div>
                    <a href="#">Full Time</a>
                </div>
                <div class="job-description slide-in-bottom">
                    <h3>Job Description</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus assumenda adipisci pariatur dolorum magni voluptatum laborum est, ut hic aliquam perferendis impedit voluptatibus illum fugiat quasi. Harum blanditiis reiciendis maiores. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, nam!</p>
                </div>
                <div class="responsibilities slide-in-bottom">
                    <h3>Key Responsibilities</h3>
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, numquam?</li>
                        <li>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, numquam?</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, numquam?</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, numquam?</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, cumque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, numquam?</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, numquam?</li>
                    </ul>
                </div>
                <div class="skills slide-in-bottom">
                    <h3>Skill & Experience</h3>
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum, sapiente!</li>
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum, sapiente!</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum, sapiente!</li>
                    </ul>
                </div>
                <div class="social-links slide-in-bottom">
                    <p>Share this post</p>
                    <div class="links">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i>Facebook</a>
                        <a href="#"><i class="fa-brands fa-twitter"></i>Twitter</a>
                        <a href="#"><i class="fa-brands fa-pinterest"></i>Pinterest</a>
                    </div>

                </div>
            </div>
            <div class="cols-2">
                <div class="apply slide-right">
                    <p>Application ends:<span>:May 18, 2023</span></p>
                    <div class="btns">
                        <button id="myBtn" href="#">Apply Now</button>
                        <i class="fa-solid fa-bookmark"></i>
                    </div>
                </div>
                <div class="requirement slide-right">
                    <div class="wrapper">
                        <div class="logo">
                            <i class="fa-solid fa-calendar"></i>
                        </div>
                        <div class="text">
                            <p>Date Posted</p>
                            <span>May 3, 2021</span>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="logo">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="text">
                            <p>Location</p>
                            <span>Kathmandu</span>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="logo">
                            <i class="fa-solid fa-money-bill-wave"></i>
                        </div>
                        <div class="text">
                            <p>Offered Salary</p>
                            <span>Rs.20000-30000 / month</span>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="logo">
                            <i class="fa-solid fa-hourglass-start"></i>
                        </div>
                        <div class="text">
                            <p>Expiration date</p>
                            <span>May 12, 2024</span>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="logo">
                            <i class="fa-solid fa-user-tie"></i>
                        </div>
                        <div class="text">
                            <p>Experience</p>
                            <span>3 Year</span>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="logo">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="text">
                            <p>Gender</p>
                            <span>Both</span>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="logo">
                            <i class="fa-solid fa-user-pen"></i>
                        </div>
                        <div class="text">
                            <p>Qualification</p>
                            <span>Bachelor Degree</span>
                        </div>
                    </div>
                </div>
                <div class="contact slide-right">
                    <div class="form">
                        <h3>Contact Us</h3>
                        <form action="">
                            <input type="text" name="" id="" placeholder="Subject">
                            <input type="email" name="" id="" placeholder="E-mail">
                            <input type="text" name="" id="" maxlength="10" placeholder="Phone">
                            <textarea name="" id="" cols="30" rows="5" placeholder="Message"></textarea>
                            <input type="button" value="Send Message">
                        </form>
                    </div>
                </div>
                <div id="myModal" class="modals">
                    <div class="form">
                        <p>Apply for this job</p>
                        <span class="close">&times;</span>
                        <form action="">
                            <label for="">Email<span>*</span></label>
                            <input type="email" name="email" id="">
                            <label for="">Password<span>*</span></label>
                            <input type="password" name="" id="">
                            <label for="">Confirm Password<span>*</span></label>
                            <input type="password" name="" id="">
                            <label for="">Phone Number<span>*</span></label>
                            <input type="text" name="" id="" maxlength="10">
                            <div class="manage">
                                <input type="checkbox" name="" id="">
                                <p>You accepts our Teams and Conditions and Privacy Policy</p>
                            </div>

                            <input type="submit" value="Apply now">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>


</section>
<?php include 'common/footer.php'; ?>