<!DOCTYPE html>
<html>
<head>
	<title>Team farra</title>
	<link href="css/inicio.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
</head>
<body>
    <div class='header1'>
      <ul id='encabezado' style="height: 100%;">
        <li id="inicio">Inicio</li>
        <li ><a href="#nextparty">Siguiente farra</a></li>
        <li ><a href="#aboutus">Sobre nosotros</a></li>
        <li ><a href="#contacto">Contacto</a></li>
    </div>
	 <div class='header'>
      <ul id='encabezado' style="height: 100%;">
        <li class="cool-link" id="inicio">Inicio</li>
        <li class="cool-link"><a href="#nextparty">Siguiente farra</a></li>
        <li class="cool-link"><a href="#aboutus">Sobre nosotros</a></li>
        <li class="cool-link"><a href="#contacto">Contacto</a></li>
    </div>
</div>
</body>

<div class="background">
     <div class="blur"></div>
    <div class="contenedor">
        <div class="titulo">#TEAMFARRA</div> 
    </div>
</div>
<div id="nextparty" class="nextparty">
    <div style="width: 100%; text-align: center;">
        <h1>Siguiente farra</h1>
    </div>
    <div style="width: 100%; text-align: center;margin-top: 20px;">
        <h2>Nombre de la fiesta</h2>
    </div>
    <div style="width: 100%;margin-top: 70px;">
        <div class="containerdescription">
            <p>DESCRIPCION LARGA usdhfisudhdiusdhfuisdhgfsduihgdsuighsduifhsdiufhsdiufhsiudfhsiudfh
            asdfasdfasdfadfgsgdfgsdfgsdfhguidfhguisdhgusidfhguisdfhgusidfhguisdfhgiusdhfguisdhfiughsdfuighidsufhgisudhfguisdhfguisdhfugihsdiufhgiusdhfguishdfuighsduifghsiudfhgiusdhfgiushduifghsiudhfgiusdhfigushdiufghsidufhgisdufhgiusdfhguisdfhgisudfhgiusdhfgiushdfiughsdiufghsdiufhrhertherthertherthertherthertherthertherthertherthertherherherthergifdus</p>
        </div>
    </div>
    <div style="width: 100%;margin-top: 70px;">
        <div class="containerdescription">
            <p>Entradas en stock: 3</p>
        </div>
    </div>
    <div id="map" class="map"></div>
    <div class="containertextmaps">
        <p class="textmaps">Abrir en google maps</p>   
    </div>
</div>
<div class="background1">
    <div class="contenedor">
        <div class="titulo2">It's Fiesta or Nada</div> 
    </div>
</div>
<div id="aboutus" class="aboutus">
    <div style="width: 100%; text-align: center;">
        <h1>Sobre nosotros</h1>
    </div>
    <div style="width: 100%;margin-top: 70px;">
        <div class="containerdescription">
            <p> usdhfisudhdiusdhfuisdhgfsduihgdsuighsduifhsdiufhsdiufhsiudfhsiudfh</p>
        </div>
    </div>
</div>
<div class="background2">
    <div class="contenedor">
        <div class="titulo2">Estas preparado?</div> 
    </div>
</div>
<div id="contacto" class="contacto">
    <div class="container-contacto" style="width:49.92%">
        <div style="width: 100%; text-align: center;">
            <h1>Contacto</h1>
        </div>
        <div style="width: 100%;margin-top: 70px;text-align: center">
            <div class="containerinputs">
                <input id="name" type="text" name="text" placeholder="Nombre">
            </div>
            <div class="containerinputs">
                <input id="email" type="email" name="email" placeholder="Email">
            </div>
            <div class="containerinputs">
                 <textarea id="message" placeholder='Mensaje'></textarea>
            </div>
             <div class="containerinputs">
                 <div class="boton">Enviar mensaje</div>
            </div>
        </div>
    </div>
    <div class="vertical-bar"></div>
    <div class="container-auspiciantes" style="width: 49.92%;">
        <div style="width: 100%; text-align: center;">
            <h1>Auspician</h1>
            <img class="auspiciantes" src="/assets/apleno-logo.jpg">
            <img class="auspiciantes" src="/assets/tecnica.jpg">
        </div>
    </div>
</div>
<div id="footer" class="footer">
    <div class="containerfooter">
       <div class="container-arrow-up">
        <div class="icon-arrow-up2"></div>
    </div>
    <div class="containertextfooter">
        <p class="textfooter">© 2018. Created and designed by Mario Gueyraud</p>
    </div>
    <div class="containersocial">
        <div style="display: -webkit-inline-box;">
            <div class="icon-facebook2" ></div>
            <div class="icon-instagram" ></div>
        </div>
    </div>  
    </div> 
</div>

<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
		  crossorigin="anonymous"></script>


    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVuouEtI8E235OJNBVdHUrRQNZ4qCA3AE&callback=initMap">
    </script>

    <script type="text/javascript">
        $(function(){
            var body = $("html, body");
            $(document).on('click', 'a[href^="#"]', function (event) {
                event.preventDefault();

                body.animate({
                    scrollTop: $($.attr(this, 'href')).offset().top - 99
                }, 1500);
            });
            $('.textmaps').on('click',function(){
                window.open('https://maps.google.com/?q=-25.299392700195312,-57.646583557128906');
            });
            $('.icon-facebook2').on('click',function(){
                window.open("https://www.facebook.com/teamfarraparaguay/");
            });
            $('.icon-instagram').on('click',function(){
                window.open("https://www.instagram.com/teamfarra_py/");
            });
            $('.icon-arrow-up2').on('click',function(){
                body.stop().animate({scrollTop:0}, 1500, 'swing', function(){});
            });
            $('#inicio').on('click',function(){
                body.stop().animate({scrollTop:0}, 1500, 'swing', function(){});
            });
            $(window).on("scroll", function() {
                if($(window).scrollTop() > 50) {
                    $(".header").addClass("active");
                    $(".header1").addClass("active");
                } else {
                    $(".header").removeClass("active");
                    $(".header1").removeClass("active");
                }
            });
            $('.boton').on('click',function(){
                sendEmail($('#name').val(),$('#email').val(),$('#message').val());
            });
            window.initMap = function() {
                var uluru = {lat: -25.299392700195312, lng: -57.646583557128906};
                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 17,
                  center: uluru
                });
                var marker = new google.maps.Marker({
                  position: uluru,
                  map: map,
                  title:"El legado de Marthita"
                });
            } 

            function sendEmail(name, email, message){
                if(validateEmail(email)){
                    $.ajax({
                        method: "POST",
                        url: "/Welcome/sendEmail",
                        data: {
                            name : name,
                            email: email,
                            message: message
                        },
                        success: function(response){
                            console.log(response);
                            alert("Mensaje enviado con exito!");
                        },
                        error: function(response) {
                            console.log(response);
                            alert("Error el mensaje no se ha podido enviar");
                        }
                    });
                }
            }

            function validateEmail(emailField){
                var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                if (reg.test(emailField) == false) {
                    alert('Direccion de email invalida');
                    return false;
                }
                return true;

            }
        });
    </script>
</html>
