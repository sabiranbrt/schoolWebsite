<?php include 'common/header.php'; ?>

<?php include 'common/navbar-top.php'; ?>
<?php include 'common/navigation.php'; ?>

<section class="principal">
    <div class="principal-banner">
        <div class="principal-content">
            <h1>Gallery</h1>
            <a href="index.php">Home</a>
            <span>Oil Painting Tranning</span>
        </div>
    </div>
</section>

<section class="gallery-detail">
    <div class="container">
    <div class="wrapper">
            <div class="wrap">
                <h2>An investment in knowledge pays the best interest.</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias autem atque nihil? Suscipit accusamus ut veniam nisi optio! Rerum repudiandae ullam quaerat sunt neque explicabo animi at assumenda facilis facere?
                </p>
                <div class="organize">
                    <div class="rows">
                        <p>Organizer:<span>Ram</span></p>
                        <p>Venue:<span>Kathmandu</span></p>
                    </div>
                    <div class="rows">
                        <p>Activity:<span>Miming</span></p>
                        <p>Website:<a href="#">http://google.com/</a></p>
                    </div>
                </div>
            </div>
            <div class="wrap">
                <img src="assets/image/gallery1.jpg" alt="">
            </div>
        </div>
    </div>
      
</section>

<section class="gallery-lists">
    <div class="container">
    <h2>Gallery Listing</h2>
    <div class="image">
    <div class="rows">
            <div class="columns">
                <a href="#"><img src="assets/image/gallery1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow"></a>
            </div>
            <div class="columns">
                <a href="#"><img src="assets/image/gallery2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow"></a>
            </div>
            <div class="columns">
                <a href="#"><img src="assets/image/gallery2.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow"></a>
            </div>
            
            </div>
        </div>
    <div id="myModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">

                <div class="mySlides">

                    <img src="assets/image/gallery1.jpg" style="width:100%">
                </div>

                <div class="mySlides">

                    <img src="assets/image/gallery2.jpg" style="width:100%">
                </div>

                <div class="mySlides">

                    <img src="assets/image/gallery1.jpg" style="width:100%">
                </div>



                <!-- Next/previous controls -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>


            </div>
        </div>  
        
    </div>
    </div>
</section>

<?php include 'common/footer.php'; ?>