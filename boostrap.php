<html>
<head>
	<title>TALLER CHIKARDO</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">

	<STYLE >
*{margin:0}

/* @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Montserrat:wght@300;500;700&display=swap'); */

body{
   font-family: 'Bungee Shade', cursive;
}
@font-face{
	font-family:ea;
	src: url(Blazed.ttf);
}
@font-face{
  font-family:tokyo;
  src: url(tokyo.ttf);
}

.header{
    background:url(https://i.pinimg.com/originals/3d/5a/37/3d5a37cc8d7f5717adcae68fd4381b8f.jpg);
    z-index: 9999;
    font-family: tokyo;
}

.barra{
    /* height: 40px; */
    background: grey;
}

.slider{
    /*#948295 #5f5f85 #646d8e*/
    background: linear-gradient(-60deg, #948295,#5f5f85,#646d8e);
   
}

.noticias .row figure img{
    width:100%;
}

.logo a{
    /* background: rgb(3, 66, 51); */
    border-radius: 10px;
    background: url(https://i.pinimg.com/originals/2a/bb/de/2abbdebf5512bee676ae26d303717113.gif);
    border: 8px solid red;
    position: relative;
	right: -80px;
}
.logo a:hover{
    background: rgb(10, 131, 103);
}

.content h2{
    font-family:tokyo;
    font-family: Arial, Helvetica, sans-serif;
    
}

.my-0{
	
	color: black;
	
}

.nav-item {
	font-size: 26px;
	: red;
}
.content{
	font-family: 'Playball', cursive;
	font-size: 24px;
}

.conteiner2{
  position: relative;
  top : 100px;
}
.conteiner3{
  position: relative;
  top : 200px;
}
.conteiner4{
  position: relative;
  top : 400px;
}
#Fordtitulo{
  font-family: tokyo;
}



.sponsor{
position: relative;
bottom:1400px;
left:-12px;

 

}

.slider {
  position: relative;
  top: 1400px;
}

	</STYLE>
</head>
<body>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=4.0">
    <title>TALLER CHIKARDO</title>

    <!-- Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <!-- Animate on Scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet"> 
   <!-- AOS --> 
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <link rel="stylesheet" href="css/estilos.css">

</head>
<body>

   <header class="container-fluid header position-sticky top-0 shadow">
       <div class="container p-3">
           <div class="row">
               <div class="col">
                   <div class="logo">
                       <a href="" class="btn btn-outline-primary">
                           <h1 class="my-0">TALLER CHIKARDO</h1>
                       </a>
                   </div>
               </div>
               <div class="col">
                   <!-- Bootstrap Navbar -->

                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <!-- Navbar Brand -> marca o logo -->
                      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                      
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <!-- btn responsive -->
                          
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <!-- lista no-ordenada -->
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page"  href="#">TALLER</a>
                          </li>
                          <!-- submenu desplegable -->
                          <li class="nav-item dropdown">
                            
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Marcas
                            </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="#">FORD</a></li>
                                <li><a class="dropdown-item" href="#">HONDA</a></li>
                                <li><a class="dropdown-item" href="#">CHEVROLET</a></li>
                                <li><a class="dropdown-item" href="#">RENAULT</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Proximos....</a></li>
                                </ul>


                          </li>

                                                    <li class="nav-item dropdown">
                            
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              CONTACTO
                            </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="#">TELEFONO</a></li>
                                <li><a class="dropdown-item" href="#">EMAIL</a></li>
                                <li><a class="dropdown-item" href="#">MAPS</a></li>
                                <li><a class="dropdown-item" href="#">DIRECCION</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>

                                
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">POSTVENTA</a>
                          </li>
                          <!-- <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                          </li> -->
                        </ul>
                      </div>
                    </div>
                  </nav>


               </div>
           </div>
       </div>
   </header> 


<div class="collapse" id="navbarToggleExternalContent">
  <div class=" #00aae4 p-4">
    <nav class="navbar navbar-light bg-light">
<button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Corrientes</button>

<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas bottom</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body small">
    ...
  </div>
</div>
</nav>

<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
 <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Resistencia</button>

<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas bottom</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body small">
    ...
  </div>
</div>
</nav>
<nav class="navbar navbar-light bg-light">
<button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Goya</button>

<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas bottom</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body small">
    ...
  </div>
</div>
</nav>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>





   <div class="slider container-fluid d-none d-md-block">

      <div class="sponsor">

<video src="video/hyper.mp4"  autoplay muted loop width="1360"></video>
</div>
 

   </div>

   <section class="noticias container-fluid my-5" data-aos="slide-up" data-aos-delay="100">
        <div class="container">
          <div class="fondo1">
        <div class="row">
            <div class="col-md-4 mb-5">
                <figure>
                    <img class="img-fluid"  src="sucursal.png" alt="">
                </figure>
                <div class="content">
                   <h2 id="fordtitulo">Sucursal Corrientes</h2>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non impedit ipsum temporibus. Iste id cumque ea labore facere minima temporibus repellat magnam minus at corrupti, officia necessitatibus accusantium magni rerum?</p> 
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <figure>
                    <img class="img-fluid"  src="sucursal2.png" alt="">
                </figure>
                <div class="content">
                   <h2 id="fordtitulo" >Sucursal Goya</h2>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non impedit ipsum temporibus. Iste id cumque ea labore facere minima temporibus repellat magnam minus at corrupti, officia necessitatibus accusantium magni rerum?</p> 
                </div>
            </div>
            <div class="col-md-4">
                <figure>
                    <img  class="img-fluid" src="sucursal3.png" alt="">
                </figure>
                <div class="content">
                   <h2 id="fordtitulo">Sucursal Resistencia</h2>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non impedit ipsum temporibus. Iste id cumque ea labore facere minima temporibus repellat magnam minus at corrupti, officia necessitatibus accusantium magni rerum?</p> 
                </div>
            </div>
        </div>
    </div>
        <aside class="d-sm-none d-md-none d-lg-block text-center">
            <a href="">
                <img src="img/bannerGuille.jpg" alt="" class="img-fluid">
            </a>
        </aside>


        <section class="container-fluid" data-aos="fade-down">
          <div class="container">
            <h2 id="Fordtitulo"data-aos="fade-down" >Ford Okm Nuevos</h2>
            <div class="row">
              <div class="col-3">
                <a href="auto.png" data-fancybox="galeria1">
                  <img src="auto.png" alt="">
                </a>
              </div>
              <div class="col-3">
                <a href="img/foto_2.jpg" data-fancybox="galeria1">
                 <img src="img/thumbs_2.jpg" alt="">
                </a>
              </div>
              <div class="col-3">
                <a href="img/foto_9.jpg" data-fancybox="galeria1">
                  <img src="img/thumbs_9.jpg" alt="">
                </a>
              </div>
              <div class="col-3">
                <a href="img/camara2.jpg" data-fancybox="galeria1">
                  
                </a>
              </div>
            </div>
        


        <div class="card-group">
  <div class="card">
    <img src="ford/ecosport.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Ford EcoSport 2021</h5>
      <p class="card-text">Este novedoso e innovador motor de 1.5L y 3 cilindros se estrena en la Ecosport. Está compuesto principalmente de aluminio, dando como resultado un motor considerablemente liviano. Ofrece una potencia de 123 CV y un torque de 151 Nm. Entre sus principales beneficios se resaltan: la tecnología aplicada para lograr un excelente valor de potencia, el bajo consumo de combustible y la baja emisión de contaminantes.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><a href="https://www.ford.com.ar/crossovers-suvs-4x4/nueva-ecosport/?intcmp=tds-ecosport-img.html">https://www.ford.com.ar/crossovers-suvs-4x4/nueva-ecosport/?intcmp=tds-ecosport-img.html</a></small>
    </div>
  </div>
  <div class="card">
    <img src="ford/focus.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Ford Focus 2021</h5>
      <p class="card-text">El Ford Focus es un compacto de cinco puertas, aunque también puede adquirirse con carrocería familiar Sportbreak. Es un auténtico best-seller mundial. De él podríamos destacar su equilibrio entre calidad y precio, aspectos que han mejorado significativamente con la actual generación de 2018 en la que también se ha revisado su estética y, sobre todo, su dotación tecnológica. Al igual que la práctica totalidad de sus rivales el Ford Focus no está disponible con carrocería de tres puertas, pero sí puede encontrarse con carrocería familiar, y con un sedán de cuatro puertas en algunos mercados.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><a href="https://www.ford.com.ar/content/dam/Ford/website-assets/latam/ar/nameplate/focus/far-focus-ficha-tecnica-junio-2018.pdf">https://www.ford.com.ar/content/dam/Ford/website-assets/latam/ar/nameplate/focus/far-focus-ficha-tecnica-junio-2018.pdf</a></small>
    </div>
  </div>
  <div class="card">
    <img src="ford/ranger.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Ford Ranger 2021</h5>
      <p class="card-text">El motor Ford Puma 3.2L TDCi de 5 cilindros en línea y eTGV, ofrece toda la potencia necesaria para enfrentar los trabajos más desafiantes. Otorga una potencia de 200CV y 470Nm de Torque.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><a href="https://www.ford.com.ar/content/dam/Ford/website-assets/latam/ar/nameplate/Nueva-ranger/2020/pdf/far-ranger-ficha-tecnica-julio-2019.pdf">https://www.ford.com.ar/content/dam/Ford/website-assets/latam/ar/nameplate/Nueva-ranger/2020/pdf/far-ranger-ficha-tecnica-julio-2019.pdf</a></small>
    </div>
  </div>
</div>

         
        <div class="conteiner3" data-aos="fade-right">
          <h2 id="Fordtitulo"data-aos="fade-in" data-aos-delay="500">Honda Okm Nuevos</h2>
        <div class="card-group">
  <div class="card">
    <img src="ford/ecosport.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Honda Crv 2021</h5>
      <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><a href="https://www.ford.com.ar/crossovers-suvs-4x4/nueva-ecosport/?intcmp=tds-ecosport-img.html">https://www.ford.com.ar/crossovers-suvs-4x4/nueva-ecosport/?intcmp=tds-ecosport-img.html</a></small>
    </div>
  </div>
  <div class="card">
    <img src="ford/focus.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Honda Hrv 2021</h5>
      <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><a href="https://www.ford.com.ar/content/dam/Ford/website-assets/latam/ar/nameplate/focus/far-focus-ficha-tecnica-junio-2018.pdf">https://www.ford.com.ar/content/dam/Ford/website-assets/latam/ar/nameplate/focus/far-focus-ficha-tecnica-junio-2018.pdf</a></small>
    </div>
  </div>
  <div class="card">
    <img src="ford/ranger.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Honda Tunning</h5>
      <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><a href="https://www.ford.com.ar/content/dam/Ford/website-assets/latam/ar/nameplate/Nueva-ranger/2020/pdf/far-ranger-ficha-tecnica-julio-2019.pdf">https://www.ford.com.ar/content/dam/Ford/website-assets/latam/ar/nameplate/Nueva-ranger/2020/pdf/far-ranger-ficha-tecnica-julio-2019.pdf</a></small>
    </div>
  </div>
</div>
          </div>
          </div>
        <div class="conteiner4" data-aos="fade-left">
          <h2 id="Fordtitulo"data-aos="fade-in" data-aos-delay="500">Chevrolet Okm Nuevos</h2>
        <div class="card-group">
  <div class="card">
    <img src="ford/ecosport.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Honda Crv 2021</h5>
      <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><a href="https://www.ford.com.ar/crossovers-suvs-4x4/nueva-ecosport/?intcmp=tds-ecosport-img.html">https://www.ford.com.ar/crossovers-suvs-4x4/nueva-ecosport/?intcmp=tds-ecosport-img.html</a></small>
    </div>
  </div>
  <div class="card">
    <img src="ford/focus.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Honda Hrv 2021</h5>
      <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><a href="https://www.ford.com.ar/content/dam/Ford/website-assets/latam/ar/nameplate/focus/far-focus-ficha-tecnica-junio-2018.pdf">https://www.ford.com.ar/content/dam/Ford/website-assets/latam/ar/nameplate/focus/far-focus-ficha-tecnica-junio-2018.pdf</a></small>
    </div>
  </div>
  <div class="card">
    <img src="ford/ranger.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Honda Tunning</h5>
      <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><a href="https://www.ford.com.ar/content/dam/Ford/website-assets/latam/ar/nameplate/Nueva-ranger/2020/pdf/far-ranger-ficha-tecnica-julio-2019.pdf">https://www.ford.com.ar/content/dam/Ford/website-assets/latam/ar/nameplate/Nueva-ranger/2020/pdf/far-ranger-ficha-tecnica-julio-2019.pdf</a></small>
    </div>
  </div>
</div>


          </div>
          </div>
  







          <div>
            <h2>Video</h2>
            <a data-fancybox href="https://www.youtube.com/watch?v=hzuLdXC3BRc" class="btn btn-warning">Platzi</a>
          </div>


          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <hr>

    <div class="form w-75">
        <form action="enviardatos.php" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mensaje" required></textarea>
            </div>

            <div class="mb-3">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="invalidCheck" name="newsletter" value="true" checked>
                <label class="form-check-label" for="invalidCheck">
                   Deseo suscribirme al newsletter del sitio.
                </label>
                </div>
            </div>


            <input class="btn btn-outline-primary" type="submit" value="Enviar">
        </form>
    </div>


        </section>


   </section>

   <div class="subFooter p-5 bg-dark">
     
     <!-- article.row>.col*4 -->
   </div>

   <footer class="footer container-fluid bg-secondary p-1 text-white text-center">
        <p>&copy; 2021 - Desarrollado por YO</p>
   </footer>



    
    <!-- JavaScript Bundle with Popper-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!-- Jquery -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<!-- Fancybox -->
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<!-- OwlCarousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  $(document).ready(function(){
  $(".imagenes").owlCarousel();
});
</script>
<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>
</body>
</html>