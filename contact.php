<?php include 'common/header.php'; ?>

<?php include 'common/navbar-top.php'; ?>

<?php include 'common/navigation.php'; ?>

<section class="principal">
    <div class="principal-banner">
        <div class="principal-content">
            <h1>Contact</h1>
            <a href="index.php">Home</a>
            <span>Contact</span>
        </div>
    </div>
</section>

<section class="contact">
    <div class="container">
        <div class="columns">
            <div class="even-columns">
                <div class="wrapper">
                <div class="detail-address slide-left">
                    <div class="logo">
                        <a href="#"><i class="fa-solid fa-location-dot"></i></a>
                    </div>
                    <div class="address">
                        <h3>Our Location</h3>
                        <p>kathmandu</p>
                    </div>
                </div>
                <div class="detail-address slide-left">
                    <div class="logo">
                        <a href="#"><i class="fa-solid fa-phone"></i></a>
                        
                    </div>
                    <div class="address">
                        <h3>Phone Number</h3>
                        <p>+977-9842143859</p>
                    </div>
                </div>
                <div class="detail-address slide-left">
                    <div class="logo">
                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                    <div class="address">
                        <h3>Email Address</h3>
                        <p>support@domainname.com</p>
                    </div>
                </div>
                </div>
              

            </div>
            <div class="even-columns slide-right">
                <div class="form">
                    <form action="#">
                        <div class="grid-form">
                            <input type="text" name="name" id="" placeholder="Name">
                            <input type="text" name="email" id="" placeholder="Email">
                            <input type="text" name="phonenumber" id="" placeholder="Phone Number">
                            <input type="text" name="address" id="" placeholder="Address">
                        </div>
                        <textarea name="" id="" placeholder=" Your Message" ></textarea>
                        <input type="submit" value="Send Message">
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include 'common/footer.php'; ?>