<header>
    <div class="header">
        <div class="logo">
            <img src="https://i.pinimg.com/736x/99/10/5d/99105d3b57581ef3bd05fbf27dbd05ba.jpg" alt="">
        </div>
    </div>
</header>
<nav>
    <ul>
        <li><a href="#"><i class="fa-solid fa-house me-2"></i>Home</a></li>
        <li><a href="#"><i class="fa-solid fa-laptop me-2"></i>Laptop</a></li>
        <li><a href="#" > <i class="fa-solid fa-desktop me-2"></i>Desktop</a></li>
        <li><a href="#"><i class="fa-solid fa-mobile-screen-button me-2"></i>Phone</a></li>
        <li><a href="#"><i class="fa-solid fa-gears me-2"></i>Accessories</a></li>
        <li><a href="#" id="qr" > <i class="fa-solid fa-phone me-2"></i>Contact Us</a></li>
        <li><a href="#" id="location"><i class="fa-solid fa-location-dot me-2"></i>Location</a></li> 
    </ul>
    <div class="carts">
    <i class="bi bi-cart4"></i>
    </div>
  
</nav>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner ">
    <div class="carousel-item active">
      <img src="https://image.slidesdocs.com/responsive-images/background/home-automation-with-computer-on-display-in-a-shop-powerpoint-background_8cd0f4f6a1__960_540.jpg" class="d-block" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://image.slidesdocs.com/responsive-images/background/a-laptop-computer-is-shown-with-images-on-it-powerpoint-background_6ef82f34e3__960_540.jpg" class="d-block" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cdn.originpc.com/img/landing/outlet-store/outlet-store-main.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="contactModal">
    <div class="qr">
    <i class="fa-solid fa-xmark"></i>
        <h3>Scan to contact us</h3>
        <img src="../Image/Untitled.jpeg" alt="">
    </div>
</div>
<div class="localtion">
<i class="fa-solid fa-ban"></i>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.85672673877!2d104.8905223!3d11.562127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951adb4d4041d%3A0x8a90e729f62ad800!2sETEC2!5e0!3m2!1skm!2skh!4v1733459469715!5m2!1skm!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<script>
    $(document).ready(()=>{
        $('#qr').click(()=>{
            $('.contactModal').fadeIn(300);
        })
        $('.fa-xmark').click(()=>{
            $('.contactModal').fadeOut(300);
        })
        $('#location').click(()=>{
            $('.localtion').slideDown(300);
        })
        $('.fa-ban').click(()=>{
            $('.localtion').slideUp(300);
        })
        $('a').parent('li').eq(0).addClass('active');
        $('a').click(function(){
            $('a').parent('li').removeClass('active');
            $(this).parent('li').addClass('active')
        })
        
    })
</script>