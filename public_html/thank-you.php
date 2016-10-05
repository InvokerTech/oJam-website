<?php
session_start();
include 'conf.php';
if(!isset($_SESSION['uniq_id'])){
  
   header('Location:index.php');
}
else{
$uniq_id = $_SESSION['uniq_id'];
?>
<!DOCTYPE html>
  <html lang="en">
    <head>
      <title>oJam-Thank you</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="music, jam, application,musicians, social, community, com" /> 
      <meta name="description" content="oJam-Music is evolving, oJam is coming!" />
      <meta name="author" content="ojam" />
      <meta name="image" content="http://ojamapp.com/img/sharepic.jpg" />
      <meta name="viewport" content="width=device-width, initial- scale=1.0">
      <meta property="og:description" content="oJAM is an easiest way to create music together. Glad to have you on board Jammer." />

      <meta property="og:url" content="http://ojamapp.com/" />

      <meta property="og:title" content="oJam-Music is evolving, oJam is coming" />

      <meta property="og:image" content="http://ojamapp.com/img/sharepic.jpg"/>

      <link rel="image_src" href="http://ojamapp.com/img/sharepic.jpg" />
      
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/styles.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
      <script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>
      <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-84800319-1', 'auto');
          ga('send', 'pageview');
      </script>
   <style>
     .jmbtron {
   padding-top: 0px !important;
   padding-bottom: 35px !important;
     }
   </style>
   <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
      <link rel="manifest" href="/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff"> 

	
    </head>
    <body>
<div id='fb-root'></div>
    <script src='http://connect.facebook.net/en_US/all.js'></script>
      <div class="jumbotron jmbtron" style="text-align: center; background-color: #262626; color: #fff; ">
        <div class="container">           
          <div class="row">           
            <div class="col-xs-12 mcon">           
              <div class="col-sm-4 col-sm-offset-4" style="text-align: -webkit-center;">
                <img src="img/logo.png" class="img-responsive tylogo">
              </div> 
            </div>
          </div>
        </div> 
        <h1 style="font-family: 'Josefin Slab', serif;">Thank you.</h1>
        <p class="typ" style="font-family: 'Josefin Slab', serif;">Do you have friends who love music?</p>
      </div>
      <div class="container" style="text-align: center">
        <p class="typ" style="color: #353535; font-family: 'Josefin Slab', serif;">Invite your friends to JAM with you</p>
        <h4 class="typ" style="font-family: 'Josefin Slab', serif;">share link:</h4>
        <li class="link" style="color: #aaaaaa;background: #e8e8e8; padding: 2px; padding-left: 25px; border-radius: 4px; padding-right: 25px;">
              <?php echo $link.$uniq_id;?>
              </li><br/><a href="#">
              <h4 style="color: black; text-decoration: none;font-size: smaller;">OR</h4>
<!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="display: inline-block">
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
</div>
<script>
var a2a_config = a2a_config || {};
a2a_config.linkname = "Can't wait for @oJamapp to launch. I'm in for jamming with others. #ojam #music #sound #musicians";
a2a_config.linkurl = "http://ojamapp.com";
a2a_config.num_services = 2;
a2a_config.color_main = "D7E5ED";
a2a_config.color_border = "AECADB";
a2a_config.color_link_text = "333333";
a2a_config.color_link_text_hover = "333333";
</script>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->

      </div> 
      <div style="float: right; text-align: center;">
            <h6>Follow us:</h6>
              <ul style="list-style: none; margin: 0px; padding: 0px;">
                <li><a href="https://www.facebook.com/ojamapp"><img src="img/icon-fb.png" alt="#" /></a></li>
                <li style="    padding-top: 5px; padding-bottom: 5px;"><a href="https://www.instagram.com/ojamapp/"><img src="img/icon-instagram.png" alt="#" /></a></li>
                <li><a href="https://twitter.com/ojamapp"><img src="img/icon-twitter.png" alt="#" /></a></li>                
              </ul>
            </div>
    </body>
      
      
  </html>
<?php
 }
?>		