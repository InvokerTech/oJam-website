<?php

// $refer_id = $_GET['id'];
// if(isset($_REQUEST['invite'])) {
// 	$referred_email = $_REQUEST['email'];
//   	$sql = "SELECT * FROM users 
//                     WHERE unique_id = '$refer_id'";
// 	  $result = mysqli_query($link, $sql); 
// 	  $row    = mysqli_fetch_assoc($result); 
// 	  extract($row);
// 	  $refer_count = $refer_count + 1; 
//       $sql1 = "UPDATE users SET refer_count = '$refer_count' 
//                       WHERE unique_id = '$refer_id ' ";
// 		  $result1 = mysqli_query($link, $sql1);
// 		  if($result1){
// 		    echo true;
// 		  }
// 		  else{
// 		  	echo 'Refer Id doen not exists.';
// 		  	exit;
// 		  }
// }
?>		  
<!DOCTYPE html> 
  <html lang="en"> 
    <head>
      <title>oJam-Create Music with others</title> 
      <meta name="keywords" content="music, jam, gig, gigs, application, e, social, community,com" /> 
      <meta name="description" content="oJam- Let's create music with others" />
      <meta ame="author" content="ojam" />
      <meta name="viewport" content="width=device-width, initial- scale=1.0">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <link href='https://fonts.googleapis.com/css?family=Passion+One:400,700' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/styles.css">
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
      <meta name="msapplication-TileColor" content="#191919">
      <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
      <meta name="theme-color" content="#191919">
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
    </head>             
      
    <body>
        
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Do you have friends who loves music?</h4>
            </div>
            <div class="modal-body">
              <h5>Invite your friends to the party!</h5>
            </div>
            <div class="modal-footer">
              <h4>Click to copy paste your custom link</h4>
              <div class="a2a_kit a2a_kit_size_32 a2a_default_style">               
                <a class="a2a_button_facebook"></a>
                <a class="a2a_button_twitter"></a>
                <a class="a2a_button_google_plus"></a>
              </div>
            </div>
          </div>
         </div>
      </div>          
      <div class="container home">
        <div class="container lin">
          <div class="row one">
            <div class="col-xs-12 cone">
              <div class="col-sm-3 black">
              </div>
              <div class="col-sm-3 yellow">              
              </div>
              <div class="col-sm-3 color">              
              </div>
              <div class="col-sm-3 red">              
              </div>            
            </div>            
          </div>
        </div>
        <div class="loader">
          <div class="black" style="width: 25%">            
          </div>
          <div class="yellow" style="width: 25%">              
          </div>
          <div class="color" style="width: 25%">              
          </div>
          <div class="red" style="width: 25%">              
          </div>
        </div>
        <img src="img/logo.png" class="img-responsive logo" align="middle">
        <div class="jumbotron text-center">          
          <h1>oJam is Coming</h1>
          <p>Create Music with others</p>
          <form class="form-inline form" id="subscribe">
            <div class="form-group">
              <input type="email" size="60" value="" name="EMAIL" id="email" class="input-md form-control email" placeholder="Email Address" required onfocus="document.getElementById('line').style.display='block'">
              <div id="line" class="line"></div>                    
            </div>            
            <div class="form-group">                      
              <button type="submit" name="subscribe" id="invite" class="btn btn-default btn-block" data-toggle="modal" data-target="#myModal"> Get early Invite</button>  
            </div>
          </form>
        </div>
      </div>      
      
        <script async src="https://static.addtoany.com/menu/page.js"></script>
         <script type="text/javascript" src="conf.js"></script>   
        <script>

          $('#subscribe').submit(function(e){
                    e.preventDefault(); 
                    email=$('#email').val();
                    id="<?php echo $_GET['id'];?>";
                    // alert(email);
                    $.ajax({
                      url: localhost + "/refer_email.php", 
                      type:'get',
                      dataType:'json',
                      data:{
                        "email":email,
                        "id":id
                      },
                      success:function(result) 
                      {
                        console.log("passed");
                        // $('#myModal').modal({
                        //   backdrop: 'static',
                        //   keyboard: true
                        // });
                        $('#myModal').modal('show'); 
                        
                        },
                      error:function(){
                         console.log("error");
                         alert("Email Already subscribed.");
                      }
                    });   
                    
                  });
        </script>

            


      </body>
    </html>