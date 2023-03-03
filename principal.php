<?php include 'common/header.php'; ?>

<?php include 'common/navbar-top.php'; ?>
<?php include 'common/navigation.php'; ?>

<section class="principal">
    <div class="principal-banner">
        <div class="principal-content">
            <h1>About</h1>
            <a href="index.php">Home</a>
            <a href="#">About Us</a>
            <span>Message From</span>
        </div>
    </div>
</section>

<div class="message">
    <div class="container">
        <div class="columns">
            <div class="left-column slide-left">
                <div class="page-tabs">
                    <ul role="list">
                        <li class="active" data-tab-target="#principal">Principal's Message<i class="fa-solid fa-arrow-right"></i></li>
                        <li data-tab-target="#chairman">Chairman's message<i class="fa-solid fa-arrow-right"></i></li>
                       
                    </ul>
                </div>
                <div class="admit">
                    <h3>For Admisson</h3>
                    <div class="for-admit">
                        <div class="form">
                            <input type="text" name="Name" id="" placeholder="Enter Name" required>
                            <input type="text" name="phonenumber" id="" placeholder="Phone Number" maxlength="10" required>
                            <input type="email" name="Email" id="" placeholder="Email" required>
                            <textarea name="message" id="" placeholder="Message" required></textarea>
                            <a href="#">Submit Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="right-column zoom-in">

                <div class="wrapper active"  id="principal" data-tab-content>
                    <h3 class="zoom-in">Principal's Message</h3>
                    <div class="text-content">
                        <img src="assets/image/principal.jpg" alt="">
                        <p>Welcome to Lincoln School, Kathmandu, Nepal, a school deeply
                            committed to the mission of inspiring each student a passion for learning, the confidence and competence
                            to pursue their dreams and the commitment to serve as a compassionate global citizen who is a steward of the environment.</p>
                        <p>Lincoln School, founded in 1954 is celebrating 67 years, and as you learn about our school you will begin to develop an understanding of what makes us unique. Lincoln is an independent, not-for-profit U.S. curriculum, Preschool-Grade 12 international school. As a school, we have a long-established tradition of student-centered education founded in best practices, offering individualized attention through small class sizes and outstanding international faculty and support staff.

                            We opened our learning commons and classroom building five years ago, and although the facilities are outstanding and represent the best in Nepal and top in the region, it is our commitment to the mission and core values – Collaboration, Compassion, Learning, Integrity, Respect and Responsibility – that serves as a foundation for the learning experiences and our commitment to meet the individual needs of each student. Our student experience offers a community-oriented learning environment that fosters the well-being of the whole student.

                            Lincoln enjoys a strong community-centered reputation and is more than simply an academic institution. We care deeply about the social, emotional, and physical development of each of our students, as well as the success of our alumni. We also value an open and honest relationship with our parents, where they are active partners in the growth of their children.
                            On behalf of the entire Lincoln community, I look forward to assisting you in your interest in the school, and in your transition to our community.</p>
                            <p class="mg">Jhon Wick</p>
                            <span>Principal</span>
                    </div>
                    
                 
                </div>
                <div class="wrapper "  id="chairman" data-tab-content>
                    <h3>Chairman's Message</h3>
                    <div class="text-content">
                        <img src="assets/image/chairman.jfif" alt="">
                        <p>Welcome to Lincoln School, Kathmandu, Nepal, a school deeply
                            committed to the mission of inspiring each student a passion for learning, the confidence and competence
                            to pursue their dreams and the commitment to serve as a compassionate global citizen who is a steward of the environment.</p>
                        <p>Lincoln School, founded in 1954 is celebrating 67 years, and as you learn about our school you will begin to develop an understanding of what makes us unique. Lincoln is an independent, not-for-profit U.S. curriculum, Preschool-Grade 12 international school. As a school, we have a long-established tradition of student-centered education founded in best practices, offering individualized attention through small class sizes and outstanding international faculty and support staff.

                            We opened our learning commons and classroom building five years ago, and although the facilities are outstanding and represent the best in Nepal and top in the region, it is our commitment to the mission and core values – Collaboration, Compassion, Learning, Integrity, Respect and Responsibility – that serves as a foundation for the learning experiences and our commitment to meet the individual needs of each student. Our student experience offers a community-oriented learning environment that fosters the well-being of the whole student.

                            Lincoln enjoys a strong community-centered reputation and is more than simply an academic institution. We care deeply about the social, emotional, and physical development of each of our students, as well as the success of our alumni. We also value an open and honest relationship with our parents, where they are active partners in the growth of their children.
                            On behalf of the entire Lincoln community, I look forward to assisting you in your interest in the school, and in your transition to our community.</p>
                            <p class="mg">Jhon Wick</p>
                            <span>Principal</span>
                    </div>
                    
                   
                </div>
            </div>

        </div>
    </div>
</div>


<?php include 'common/footer.php'; ?>