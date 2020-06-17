
<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,400&family=Open+Sans&display=swap" rel="stylesheet">
  
  
  <title>bureau</title>
</head>
<body>
  
  <!--HEADER-->
<!--------------------------------------------->
  <header class="header" id="header">
      <div class="container">
          <div class="header__inner">
            <div class="header__logo" data-scroll="#intro">Design bureau</div>
            
                <nav class="nav" id="nav">
                  
                   <!-- <a class="nav__link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a> -->
                    <a class="nav__link" href="#" data-scroll="#about">About</a>
                    <a class="nav__link" href="#"data-scroll="#services">Service</a>
                   <!-- <a class="nav__link" href="#">Shop</a>-->
                   <!-- <a class="nav__link" href="assets/images/price.jpg" target="blank">Price</a>-->
                    <a class="nav__link" href="#" data-scroll="#contact">Contact</a>
                    <a class="nav__link" href="php/components/index.php">Feedback</a>
                    
                
                    <a class="nav__link" href="php/lk.php"><i class="fa fa-user-o" aria-hidden="true"></i></a> 
         
                  
                  <!--  <a class="nav__link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>-->
                </nav> 
                <!--<button class="nav-toggle" type="button">
                <span class="nav-toggle__item"></span>
            </button>-->  
            
                <button class="nav-toggle" id="nav_toggle" type="button">
                    <span class="nav-toggle__item">Menu</span>
                </button>
            
            
          </div><!--"header__inner"-->
      </div> <!--"container"-->
  </header>
  <div class="page">
 <!--INTRO-->
<!--------------------------------------------->
 <div class="intro" id="intro">
      <div class="container">
          <div class="intro__inner"> 
              <h2 class="intro__suptitle">Your inspiration</h2>
              <h1 class="intro__title">Welcome to Bureau</h1>
              
              <a class="btn" href="php/reg.php">Create your account</a>
              <a class="btn" href="php/auth.php">Sign in</a>
              
          </div><!--intro inner-->
      </div><!--container-->
</div> <!--intro-->
  
<!--SECTION ABOUT-->
<!--------------------------------------------->
<section class="section" id="about">
    <div class="container">
        
        <div class="section__header">
            <h3 class="section__suptitle">What we do</h3>
            <h2 class="section__title">about us</h2>
            <div class="section__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, odit, error, pariatur, reiciendis quia facilis et alias tempora aliquid nisi tenetur obcaecati temporibus atque totam numquam consequuntur aliquam sapiente soluta!</p>
            </div> <!-- section_text-->
        </div> <!-- section_header-->
        
       
        <div class="card">
            <div class="card__item">
                <div class="card__inner">
                    <div class="card__img"><!-- при наводе, что бы сделать картинку чуть прозрачной-->
                        <img src="assets/images/team.jpg" alt="">
                    </div> <!--"card__img"-->
                    
                    <div class="card__text">Our team</div> 
                 </div>
            </div>  <!--"card__item">  -->     
            <div class="card__item">
                <div class="card__inner">
                    <div class="card__img">
                        <img src="assets/images/home.jpg" alt="">
                    </div>
                    
                    <div class="card__text">Our home</div>
                </div>  
            </div>
            <div class="card__item">
                <div class="card__inner">
                    <div class="card__img">
                        <img src="assets/images/goal.jpg" alt="">
                    </div>
                
                    <div class="card__text">Our goal </div>
                </div>  
            </div>
        </div> <!--about-->
        
    </div><!--container-->
</section>

<!--STATISTICS-->
<!--------------------------------------------->
<div class="statistics">
      <div class="container">

          <div class="stat">
              <div class="stat__item">
                 <div class="stat__count">50</div>
                 <div class="stat_text">Design Project</div>
              </div>  
              
              <div class="stat__item">
                <div class="stat__count">27</div>
                <div class="stat__text">Full stack</div>
              </div>
              
              <div class="stat__item">
                <div class="stat__count">24</div>
                <div class="stat__text">Landing page</div>
              </div>
              
              <div class="stat__item"> 
                <div class="stat__count">12</div>
                <div class="stat__text">SEO</div>
              </div>
              
              <div class="stat__item">
                <div class="stat__count">877</div>
                <div class="stat__text">Cup of coffe</div>
              </div>  
          </div> <!--"stat__item"-->
      
      </div><!--container-->
</div> <!--statistics-->

<!--SECTION SERVICES-->
<!--------------------------------------------->
<section class="section section--services" id="services">
    <div class="container">
        
        <div class="section__header">
            <h3 class="section__suptitle">We work</h3>
            <h2 class="section__title">Services</h2>
        </div> <!-- section_header-->
   
        <div class="services">
            <div class="services__item  services__item--border">
                <img class="services__icon" src="assets/icon/photo (1).svg"  width="40" alt="">
                
                <div class="services__title">Photography</div>
                <div class="services__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
            </div> <!--services__item -->
            <div class="services__item  services__item--border">
                <img class="services__icon" src="assets/icon/color-wheel.svg" width="50" alt="">
  
                <div class="services__title">Web Design</div>
                <div class="services__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
            </div>
            <div class="services__item  services__item--border">
                <img class="services__icon" src="assets/icon/create.svg"  width="50" alt="">
                
                <div class="services__title">Creativity</div>
                <div class="services__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
            </div>
            <div class="services__item">
                <img class="services__icon" src="assets/icon/productivity.svg"  width="50" >

                <div class="services__title">seo</div>
                <div class="services__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
            </div>
            <div class="services__item">
                <img class="services__icon" src="assets/icon/css.svg" width="50" alt="">

                <div class="services__title">Css/Html</div>
                <div class="services__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
            </div>
            <div class="services__item">
                <img class="services__icon" src="assets/icon/technology.svg" width="50" alt="">

                <div class="services__title">digital</div>
                <div class="services__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
            </div>
        </div> <!--"services"-->
            
      </div> <!--container-->
</section>


<section class="section section--wedo">
    <div class="container">

        <div class="section__header">
            <h3 class="section__suptitle">Service</h3>
            <h2 class="section__title">more details</h2>
            <div class="section__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <div class="wedo">
            <div class="wedo__item">
                <img class="wedo__img" src="assets/images/more.jpg" alt="">
            </div>

            <div class="wedo__item">

                <div class="accordion">
                    <div class="accordion__item" data-collapse="#wedo_1">
                        <div class="accordion__header" >
                            <img class="accordion__icon" src="assets/icon/photo (1).svg"  width="40" alt="">
                            <div class="accordion__title">Photography</div>
                        </div>
                        <div class="accordion__content" id="wedo_1">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>

                    <div class="accordion__item active" data-collapse="#wedo_2">
                        <div class="accordion__header" >
                            <img class="accordion__icon" src="assets/icon/create.svg"  width="40" alt="">
                            <div class="accordion__title">Creativity</div>
                        </div>
                        <div class="accordion__content" id="wedo_2">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>

                    <div class="accordion__item" data-collapse="#wedo_3">
                        <div class="accordion__header" >
                            <img class="accordion__icon" src="assets/icon/color-wheel.svg" width="40" alt="">
                            <div class="accordion__title">web design</div>
                        </div>
                        <div class="accordion__content" id="wedo_3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div><!-- /.accordion -->

            </div><!-- /.wedo__item -->
        </div><!-- /.wedo -->

    </div>
</section>

<!--<div class="section  section--gray">
    <div class="container">

        <div class="reviews">
            <a class="reviews__btn  reviews__btn--prev" href="#">Prev</a>
            <a class="reviews__btn  reviews__btn--next" href="#">Next</a>

            <div class="reviews__item">
                <img class="reviews__photo" src="" alt="">
                <div class="reviews__text">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
                <div class="reviews__author">JJ</div>
            </div>
        </div>

    </div>
</div>
-->
<div class="section section--sale">
  <div class="conteiner">
    <h2>SALE!!! GET a 20% discount on your mail >>>  <a class="btn btn--sale" href="php/reg.php">Create your account</a></h2>
  </div>
</div>






<!--FOOTER CONTACTS-->
<!--------------------------------------------->
<footer class="footer" id="contact">
  <div class="conteiner">
    
    <div class="footer__inner">
      <div class="footer__block">
        <h4 class="footer__title">Location</h4>
        <address class="footer__address"> <!--для адреса тег adress для него своя стилизация, поменяю-->
          <div>Moscow Presnenskaya nab.</div>
          <div> Moscow Krymsky Val, 9</div>
        </address>
      </div>
      
      <div class="footer__block">
        <h4 class="footer__title">Welcome</h4>
        <div class="social">
          <a href="https://instagram.com"><img src="assets/icon/instagram.svg" width="30"  alt="https://instagram.com"></a>
          <a href="https://facebook.com"><img src="assets/icon/facebook.svg" width="30"  alt=""></a>
          <a href="https://linkedin.com"><img src="assets/icon/linkedin.svg" width="30"  alt=""></a>
          <a href="https://twitter.com"><img src="assets/icon/twitter.svg" width="30"  alt=""></a>

        </div>
      </div>
    
  
      <div class="footer__block">
        <h4 class="footer__title">Call us</h4>
        <div class="footer__text">
          <div> <a href="tel:8800555****">8(800)555-**-**</a></div>
          <div> Mon-Fr: 09:00-20:00</div>
          <div> WKND: 11:00-17:00</div>
          <div> 24/7:<a href="oulala@*****.com">oulala@*****.com</a></div>
          <p>   
        </div>
      </div>
    </div> <!--"footer__inner"-->
  </div>

  <div class="copyright">
      <div class="container">
          <div class="copyright__text">
            <div>Copyright @2020. All Rights Reserved</div>
            <div>Photo: Scott Webb, Kaboompics.com, Francesco Ungaro,  Philipp Birmes, Donald Tong: Pexels</div>
           <!-- <div>Made with <span>by Burlachenko Evgeniya</span></div>-->
          </div>
      </div>
  </div>
</footer>
</div> <!--page-->




<!-- Optional JavaScript -->
    <script src="https://use.fontawesome.com/1a6d5c9642.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/app.js"></script>
  </body>
</html>