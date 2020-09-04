<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" type="text/css" href="css/style.css">
       <link rel="stylesheet" type="text/css" href="css/contact-style.css">
       <!--google fonts-->
       <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300&family=Oswald&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">

       <!--font awesome-->
       <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!--jQuery-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <!--php-form-->


    </head>
    <body> 
<style>
    form{
        padding-top:4em;
    }
    .form-element{
        font-size:15px;
        margin:0 0 15px 0;
        border-radius:5px;
        padding:10px 25px 10px 10px;
        border-color:#ff8a54; 
    }
    #message{
        margin-left:0px;
    }
  ::-webkit-input-placeholder {
  color: gray;
  font-family: 'Oswald', sans-serif;
  letter-spacing:1px;
  font-size:17px;
}

.heading-contact{
    padding-top:50px;
    font-family: 'Titillium Web', sans-serif;
    color:#ff6924;
}

@media only screen and (max-width:500px) {
    .heading-contact{
         font-size:25px;
     }
   }
   #btn-form{
       padding:6px 80px 6px 80px;
       color:white;
       border-radius:50px;
       background-color:#ff0000;
        box-shadow:4px 4px 10px gray;
        border:none;
        font-size:21px;
        font-family: 'Oswald', sans-serif;
        letter-spacing:1px;
   }
   #btn-form:hover{
       background-color:#e60000;
   }

   .map-responsive{
    overflow:hidden;
    margin-top:40px;
    padding-bottom:56.25%;
    position:relative;
    height:0;
    margin-right:100px;
    padding-right:100px;
}
@media only screen and (max-width:500px) {
    .map-responsive{
         margin-right:0px;
     }
   }
.map-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
.card-contact{
    border:1px solid black;
    width:270px;
    height:440px;
    border-radius:7px;
    background-color:#e3e3e3;
    border:0.4px solid black;
    border-color:#bfbfbf;
}
.card-contact a:hover{
    color:red;
}
</style> 
 
 <div class="overlay">
        <div class="responsive-nav" id="responsive">
            <div class="responsive-element">
                <button id="btn-close" onclick="closeNav()">X</button>
                <span id="social-media" style="padding-top:15px; padding-right: 20px;">
                    <a href="https://www.facebook.com/profile.php?id=100009012078523" target="blank"><i class="fa fa-facebook" id="social-element" style="font-size:15px; padding: 10px;"></i></a>
                    <a href="#"><i class="fa fa-twitter-square" id="social-element" style="font-size:15px; padding: 10px;"></i></a>
                    <a href="https://www.instagram.com/andreidragos15/" target="blank"><i class="fa fa-instagram" id="social-element" style="font-size:15px; padding: 10px;"></i></a>
                    </span>
                <center>
                <ul class="elements-responsive">
                    <li id="list-responsive"><a href="index.html">Home</li></a>
                    <li id="list-responsive"><a href="contact.php"><span class="element-active-responsive">Contact</span></li></a>
                    <li id="list-responsive"><a href="tools.html">Application</li></a>
                </ul>
            </center>
            </div>
        </div>
        <div class="nav-open-responsive">
            <img src="img/logo.png" style="width: 60px; position:absolute; top:0px;left:15px;">
        <button onclick="openNav();" id="btn-open">&#9776;</button>
        
        </div>
        </div>

        <div class="nav" style="height: 60px;padding-top:18px;">
            <div class="nav_elements">
                <ul class="list_elements">
                    <li id="element"><a href="index.html">Home</a></li>
                    <li id="element"><a href="contact.php"><span class="element-active">Contact</span></a></li>
                    <li id="element"><a href="tools.html">Application</a></li>

                    <span id="social-media">
                    <a href="https://www.facebook.com/profile.php?id=100009012078523" target="blank"><i class="fa fa-facebook" id="social-element"></i></a>
                    <a href="#"><i class="fa fa-twitter-square" id="social-element"></i></a>
                    <a href="https://www.instagram.com/andreidragos15/" target="blank"><i class="fa fa-instagram" id="social-element"></i></a>
                    </span>
                </ul>
            
                <img src="img/logo.png" style="width: 60px; position:absolute; top:0px;left:15px;">
            </div>
            
        </div>
        <br><br>
        <!--Card Section-->
        <section style="background-image: url('img/parallax.png'); background-repeat: no-repeat; background-size: cover; background-attachment:fixed;">
        <br><br><br>
        <center>
        <div class="card-contact">
        <br>
            <img src="img/card-contact.png" width="200">
            <hr style="background-color:#a3a3a3; height:2px;">
        <p style="font-size:20px;font-family: 'Oswald', sans-serif; color:#6e6e6e; letter-spacing:1px;">PROJECT BY ANDREI DRAGOS</p>
        <p style="font-size:18px;font-family: 'Roboto Mono', monospace; sans-serif; color:#6e6e6e;"><a href="#" class="link-port" style="text-decoration:none;color:#6e6e6e;">Portofolio</a></p>
        <span id="social-media" style="left:15px;bottom:3px; position:relative; padding-right:20px;">
                            <a href="https://www.facebook.com/profile.php?id=100009012078523" target="blank"><i class="fa fa-facebook" id="social-element" style="font-size:15px; padding: 10px; color:black;"></i></a>
                            <a href="#"><i class="fa fa-twitter-square" id="social-element" style="font-size:15px; padding: 10px; color:black;"></i></a>
                            <a href="https://www.instagram.com/andreidragos15/" target="blank"><i class="fa fa-instagram" id="social-element" style="font-size:15px; padding: 10px; color:black;"></i></a>
        </span>
        </div>
        </center>
        <br>
        <center>
        <div class="col-md-6">
                <form id="form-id" name="form-php" method="POST" action="contact.php" onsubmit="return validate_form()">
                    <input class="form-element" type="text" placeholder="Name" id="name" name="name" required><br>
                    <input class="form-element" type="email" placeholder="Email" id="email" name="email" required><br>
                    <textarea placeholder="Your message" class="form-element" id="message" name="message"  cols="23" rows="8" required></textarea><br>

                    <button id="btn-form" type="submit">SUBMIT</button>
                </form>
            </div>
    </center>


        <center>
            <div class="col-md-6">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22969.931171055865!2d25.328257914699122!3d43.975057202582704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40adcdc80db70cfd%3A0x5984c9db9c065e9d!2sAlexandria!5e0!3m2!1sro!2sro!4v1586090213500!5m2!1sro!2sro" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </center>
    
        <?php 
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            mail('olaruandreidragos@gmail.com', $name, $email, $message);
        ?>


            <br><br><br><br><br><br><br><br><br>
        </section>
        <!--End Card-->

        <!--Section -->
      

        <!--End-->
        <script src="js/main.js"></script>
        <script src="js/contact-validation.js"></script>

    </body>
</html>