
<html lang="en">
  <head>
    <title>THEWING</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/onepagescroll.js"></script>
    <script src="js/menu.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/onepagescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/is-in-viewport/3.0.4/isInViewport.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/onepage-scroll.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/jpg" href="img/logo.jpg"/>
    <link rel="stylesheet" href="css/map_contact.css">
  </head>
  <body>
    <div class="main">
            <span class="positionMenu" style="font-size:30px;cursor:pointer" onclick="openNav()" hidden>&#9776;</span>
            <div id="myNav" class="overlay">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="overlay-content">
                      <a href="#">About</a>
                      <a href="#">Services</a>
                      <a href="#">Clients</a>
                      <a href="#">Contact</a>
                    </div>
                  </div>
        <section>
            <div class="logo">
                    <img src="./img/logo.jpg" alt="">
            </div>
                <div class="image-wrap">
                    
                        <div class="img-content">
                            <img src="./img/Section1.png" alt="">
                        </div>
                    </div>
        </section>
        <section>
                <header>
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner" role="listbox">
                            <!-- Slide One - Set the background image for this slide in the line below -->
                            <div class="carousel-item active" style="background-image: url('./img/preview/p_3.jpg')">
                              <div class="carousel-caption d-none d-md-block">
                               <!-- <h2 class="display-4">First Slide</h2>-->
                                <!--<p class="lead">This is a description for the first slide.</p>-->
                              </div>
                            </div>
                            <!-- Slide Two - Set the background image for this slide in the line below -->
                            <div class="carousel-item" style="background-image: url('./img/preview/p_10.jpg')">
                              <div class="carousel-caption d-none d-md-block">
                                <!-- <h2 class="display-4">First Slide</h2>-->
                                <!--<p class="lead">This is a description for the first slide.</p>-->
                              </div>
                            </div>
                            <!-- Slide Three - Set the background image for this slide in the line below -->
                            <div class="carousel-item" style="background-image: url('./img/preview/p_13.jpg')">
                              <div class="carousel-caption d-none d-md-block">
                                <!-- <h2 class="display-4">First Slide</h2>-->
                                <!--<p class="lead">This is a description for the first slide.</p>-->
                              </div>
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                        </div>
                      </header>
        </section>
        <section>
                <div class="image-wrap" style="background-color: burlywood;">
                        <div class="img-content">
                            <img src="img/Section3.png" id="mb-text" alt="" >
                        </div>
                        <div id="overlay green"></div>
                    </div>
        </section>
        <section>
          <div class="map-contact" ></div>
        </section>
        <section style="text-align: center;">
          <div class="container sec4">
            <div class="row">
                <div class="col-md-12 mbhide">
                    <h1>Contact Us</h1>
                    <h2>Just Say Hello.</h2>
                </div>
      <div class="col-md-12">
                <div class="joinS1">
                  Need to join us?
                </div>
                <form action="mail.php" method="POST">
                <div class="form-group" >
                  <label for="Uname"></label>
                  <input type="text" class="form-control" name="Uname" aria-describedby="helpId" placeholder="ชื่อ และ นามสกุล" required>
                  <label for="Uemail"></label>
                  <input type="text" class="form-control" name="Uemail" aria-describedby="helpId" placeholder="Email address" required>
                  <label for="UPhone"></label>
                  <input type="text" class="form-control" name="UPhone" aria-describedby="helpId" placeholder="เบอร์ติดต่อ" required>
                  <label for="Utype"></label>
                  <input type="text" class="form-control" name="UtypeB" aria-describedby="helpId" placeholder="ประเภทธุรกิจ" required>
                  <button type="submit" class="btn btn-danger"  style="margin-top: 20px;width: 200px;">ส่ง</button>
              </div>
            </form>
          </div>
        </section>
    
               
      </div>   
  </body>
</html>
<script src="js/index.js"></script>
<script>
  $(".map-contact").load("map_contact.html");
  </script>
<?
