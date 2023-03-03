<?php include 'common/header.php'; ?>

<?php include 'common/navbar-top.php'; ?>

<?php include 'common/navigation.php'; ?>

<section class="principal">
    <div class="principal-banner">
        <div class="principal-content">
            <h1>Gallery</h1>
            <a href="index.php">Home</a>
            <span>Painting</span>
        </div>
    </div>
</section>

<section class="gallery-listing">
    <div class="container">
        <!-- Images used to open the lightbox -->
        <div class="rows">
            <div class="columns">
                <a href="#"><img src="assets/image/photo-6.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow"></a>
            </div>
            <div class="columns">
                <a href="#"><img src="assets/image/gallery2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow"></a>
            </div>
            <div class="columns">
                <a href="#"><img src="assets/image/gallery1.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow"></a>
            </div>
            <div class="columns">
                <a href="#"><img src="assets/image/gallery2.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow"></a>
            </div>
            <div class="columns">
                <a href="#"><img src="assets/image/gallery1.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow"></a>
            </div>
            <div class="columns">
                <a href="#"><img src="assets/image/gallery2.jpg" onclick="openModal();currentSlide(6)" class="hover-shadow"></a>
            </div>
            <div class="columns">
                <a href="#"><img src="assets/image/gallery1.jpg" onclick="openModal();currentSlide(7)" class="hover-shadow"></a>
            </div>
            <div class="columns">
                <a href="#"><img src="assets/image/gallery2.jpg" onclick="openModal();currentSlide(8)" class="hover-shadow"></a>
            </div>
        </div>

        <!-- The Modal/Lightbox -->
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
                <div class="mySlides">
                    <img src="assets/image/gallery2.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <img src="assets/image/gallery1.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <img src="assets/image/gallery2.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <img src="assets/image/gallery1.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <img src="assets/image/gallery2.jpg" style="width:100%">
                </div>


                <!-- Next/previous controls -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>


            </div>
        </div>
        <!-- <div class="images active" id="event-1" data-tab-content>
            <div class="img"><img src="assets/image/gallery1.jpg" alt=""></div>
            <div class="img"><img src="assets/image/gallery1.jpg" alt=""></div>
            <div class="img"><img src="assets/image/gallery1.jpg" alt=""></div>
            <div class="img"><img src="assets/image/gallery1.jpg" alt=""></div>
        </div>
        <div class="images" id="event-2" data-tab-content="">
            <div class="img"><img src="assets/image/gallery2.jpg" alt=""></div>
            <div class="img"><img src="assets/image/gallery2.jpg" alt=""></div>
            <div class="img"><img src="assets/image/gallery2.jpg" alt=""></div>
            <div class="img"><img src="assets/image/gallery2.jpg" alt=""></div>
        </div>
        <div class="images" id="event-3" data-tab-content="">
            <div class="img"><img src="assets/image/gallery1.jpg" alt=""></div>
            <div class="img"><img src="assets/image/gallery1.jpg" alt=""></div>
            <div class="img"><img src="assets/image/gallery1.jpg" alt=""></div>
            <div class="img"><img src="assets/image/gallery1.jpg" alt=""></div>
        </div>

        <div class="slide-wrapper">
            <ul role="list">
                <li>
                    << /li>
                <li data-tab-target="#event-1">1</li>
                <li data-tab-target="#event-2">2</li>
                <li data-tab-target="#event-3">3</li>
                <li>></li>
            </ul>
        </div> -->
    </div>
</section>

<?php include 'common/footer.php'; ?>