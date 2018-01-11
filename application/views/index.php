<!DOCTYPE html>
<html>
<head>
	<title>Team farra</title>
	<link href="css/inicio.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	 <div class='header'>
      <ul id='encabezado' style="height: 100%;">
        <li id="linkproductos">Home</li>
        <li id="linkaboutus">About Us</li>
        <li id="linkaboutus">Next Party</li>
        <li id="linkcontact">Contact</li>
    </div>
</div>
</body>

<div class="background">
    <div class="contenedor">
        <div class="titulo">#TEAMFARRA</div> 
    </div>
</div>
<div class="aboutus">
    <div style="width: 100%; text-align: center;">
        <h1>About Us</h1>
    </div>
    <div style="width: 100%;margin-top: 70px;">
        <div style="margin: 0 auto;width:30%;word-break: break-all;">
            <p> usdhfisudhdiusdhfuisdhgfsduihgdsuighsduifhsdiufhsdiufhsiudfhsiudfh</p>
        </div>
    </div>
</div>
<div class="background1">
    <div class="contenedor">
        <div class="titulo2">It's Fiesta or Nada</div> 
    </div>
</div>
<div class="nextparty">
    <div style="width: 100%; text-align: center;">
        <h1>Next Party</h1>
    </div>
    <div style="width: 100%;margin-top: 70px;">
        <div style="margin: 0 auto;width:30%;word-break: break-all;">
            <p> usdhfisudhdiusdhfuisdhgfsduihgdsuighsduifhsdiufhsdiufhsiudfhsiudfh
            asdfasdfasdfadfgsgdfgsdfgsdfhguidfhguisdhgusidfhguisdfhgusidfhguisdfhgiusdhfguisdhfiughsdfuighidsufhgisudhfguisdhfguisdhfugihsdiufhgiusdhfguishdfuighsduifghsiudfhgiusdhfgiushduifghsiudhfgiusdhfigushdiufghsidufhgisdufhgiusdfhguisdfhgisudfhgiusdhfgiushdfiughsdiufghsdiufhrhertherthertherthertherthertherthertherthertherthertherherherthergifdus</p>
        </div>
    </div>
    <div id="map" class="map"></div>
</div>
<div class="background2">
    <div class="contenedor">
        <div class="titulo2">Are you prepared?</div> 
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
		  crossorigin="anonymous"></script>


    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVuouEtI8E235OJNBVdHUrRQNZ4qCA3AE&callback=initMap">
    </script>

    <script type="text/javascript">
        $(function(){
            $(window).on("scroll", function() {
                if($(window).scrollTop() > 50) {
                    $(".header").addClass("active");
                } else {
                    $(".header").removeClass("active");
                }
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
        });
    </script>
</html>
