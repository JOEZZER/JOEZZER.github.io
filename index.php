<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LBS</title>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="iconfont/material-icons.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="navbar-fixed">
        <nav class="purple accent-3">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo">Fast Food</a>
                    <a href="#" data-target="mobile-view" class="sidenav-trigger">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#service">Foods</a>
                        </li>
                        <li>
                            <a href="#contact">Drinks</a>
                        </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                       </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <ul class="sidenav" id="mobile-view">
        <li>
                 <a href="#">Home</a>
           </li>
             <li>
                 <a href="#service">Service</a>
               </li>
               <li>
                     <a href="#service">Foods</a>
                </li>
                <li>
                    a href="#contact">Drinks</a>
                 </li>
             <li>
                <a href="#contact">Contact</a>
          </li>
    </ul>
   
 
    <section class="slider">
   
            <ul class="slides">
                <li>
                    <img src="img/Food/tandoori-chicken-fry.jpg" class="responsive-img" alt="">
                    <div class="caption center-align">
                        <h3>Chicken fried</h3>
                    </div>
                </li>
                <li>
                    <img src="img/Food/e710836aa7876956211915c8fdb7ac11.jpg" class="responsive-img" alt="">
                    <div class="caption right-align">
                        <h3>Snacks</h3>
                    </div>
                </li>
                <li>
                    <img src="img/Food/Healthy-Yummy-Snacks-8.jpg" class="responsive-img" alt="">
                    <div class="caption left-align">
                        <h3>Yummy Snacks</h3>
                    </div>
                </li>
            </ul>
            
            <div class="content right">
           <?php if (isset($_SESSION['success'])): ?>
                <div class="error succcess">
                    <h3>
                        <?php
                              echo $_SESSION['success'];
                              unset($_SESSION['success']);
                        ?>
                     </h3>
                </div>  
            <?php endif ?>

             <?php if (isset($_SESSION['username'])): ?>
                 <p class="green-text">Login as 
                         <strong> <?php echo $_SESSION['username'];?></strong>
                </p>
                    <a href="index.php?logout='1'" style="color: red;">Log Out</a>
            <?php endif ?>
            </div>
            <div>
              <h4 class="header">Healthy Foods for Better growth</h4>
            </div>
            
            
           </section>

   

     <script type="text/javascript" src="js/materialize.min.js"></script>
     <script type ="text/javascript" src ="js/jquery-3.3.1.min.js">  </script>
    <script>
    //side bar
        const sideNav = document.querySelector('.sidenav');
        M.Sidenav.init(sideNav, {});

        //Scrollspy jqueryk
         const sc = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(sc, {
            scrollOffset: 40
        });

          //Slider jquery
          const slider = document.querySelector('.slider');
        M.Slider.init(slider, {
            height: 400,
            indicator: false,
            transition: 500,
            speed: 1000
        });
        //Modal
        const modal = document.querySelectorAll('.modal');
            M.Modal.init(modal,{

            } );
        //Carousel
        var caro = document.querySelectorAll('.carousel');
         M.Carousel.init(caro,{
            transition: 100
         });

    </script>
</body>

</html>