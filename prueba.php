   <<html>
   <head>
     <title>PRUEBA DE LAS COSAS</title>
     <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
   </head>
   <body>
    <div id="sliderHome" class="carousel slide" data-bs-ride="carousel" data-bs-keyboard="false" data-bs-interval="5000" data-aos="slide-down">

        <!-- Menu inferior -> indicadores -->
        <div class="carousel-indicators">
            <!-- cada button vincula a un item del carousel, no es dinamico -> manual -->
          <button type="button" data-bs-target="#sliderHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#sliderHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#sliderHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#sliderHome" data-bs-slide-to="3" aria-label="Slide 3"></button>
        </div>

        <!-- Caja de contenido del carousel -->
        <div class="carousel-inner">

          <div class="carousel-item active">
            <img src="auto1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <p>Este es el 1er Slide</p>
            </div>
          </div>
          
          <div class="carousel-item">
            <img src="auto5.png" class="d-block w-100" alt="...">
          </div>
          
          <div class="carousel-item">
            <img src="auto2.png" class="d-block w-100" alt="...">
          </div>

          <div class="carousel-item">
              <img src="auto3.png" class="d-block w-100"  alt="">
          </div>
         
        
        </div>

        <!-- Flechas indicadoras -->
        <button class="carousel-control-prev" type="button" data-bs-target="#sliderHome" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#sliderHome" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

<div id="conteiner">
      <section id="demos">
      <div class="row">
        <div class="large-12 columns">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <h4>1</h4>
            </div>
            <div class="item">
              <h4>2</h4>
            </div>
            <div class="item">
              <h4>3</h4>
            </div>
            <div class="item">
              <h4>4</h4>
            </div>
            <div class="item">
              <h4>5</h4>
            </div>
            <div class="item">
              <h4>6</h4>
            </div>
            <div class="item">
              <h4>7</h4>
            </div>
            <div class="item">
              <h4>8</h4>
            </div>
            <div class="item">
              <h4>9</h4>
            </div>
            <div class="item">
              <h4>10</h4>
            </div>
            <div class="item">
              <h4>11</h4>
            </div>
            <div class="item">
              <h4>12</h4>
            </div>
          </div>
          <a class="button secondary play">Play</a> 
          <a class="button secondary stop">Stop</a> 
          <h3 id="overview">Overview</h3>
          
         <script type="text/javascript"> var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
</script>

        </div>
      </div>
    </section>

















<script src="jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>

   </body>
   </html>






















  




      



      </div>