
// faq 
const faqs = document.querySelectorAll('.text-content');
faqs.forEach((faq) =>{
    faq.addEventListener("click",()=>{
      faqs.forEach((item)=>{
       if(item !== faqs){
        item.classList.remove("active");
       }
      });
      faq.classList.toggle("active");
    });
});


// alumni filter
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".store-item").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


$(document).ready(function(){
  $('.slider-page').slick({
      dots: true,
      infinite: true,
      arrow:false,
      speed: 500,
      autoplay: true,
      autoplaySpeed: 2000,
      fade: true,
      fadeSpeed: 1000,
      cssEase: 'linear'
    });
  });





// Animation
const slideTop = document.querySelectorAll('.slide-in-top');
const slideBottom = document.querySelectorAll('.slide-in-bottom');
const slideLeft = document.querySelectorAll('.slide-left');
const slideRight = document.querySelectorAll('.slide-right');
const zooms = document.querySelectorAll('.zoom-in');

const appearOptions = {
  threshold: 0,
  rootMargin: "0px 0px -200px 0px"
  
};

const appearOnScroll = new IntersectionObserver(function(
  entries,
  appearOnScroll
) {
  entries.forEach(entry => {
    if (!entry.isIntersecting) {
      return;
    } else {
      entry.target.classList.add("appear");
      appearOnScroll.unobserve(entry.target);
    }
  });
},
appearOptions);

slideTop.forEach(slidetops =>{
  appearOnScroll.observe(slidetops);
});

slideBottom.forEach(slidebottoms =>{
  appearOnScroll.observe(slidebottoms);
});

slideLeft.forEach(slidelt =>{
  appearOnScroll.observe(slidelt);
});

slideRight.forEach(slidert =>{
  appearOnScroll.observe(slidert);
});
zooms.forEach(zoom =>{
  appearOnScroll.observe(zoom);
});



// counter
jQuery(document).ready(function(){
  $('.counter').counterUp({
    delay: 10,
    time: 1000
});
});


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

  const tabs = document.querySelectorAll('[data-tab-target]')
  const tabContents = document.querySelectorAll('[data-tab-content]')
  
  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const target = document.querySelector(tab.dataset.tabTarget)
      tabContents.forEach(tabContent => {
        tabContent.classList.remove('active')
      })
      tabs.forEach(tab => {
        tab.classList.remove('active')
      })
      tab.classList.add('active')
      target.classList.add('active')
    })
  })


// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// Open the Modal
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");

  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}













































