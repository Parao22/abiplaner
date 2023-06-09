<?php
    session_start();
?>
<html lang="de" data-bs-theme="light">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Startseite</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Favicons -->
    <meta name="theme-color" content="#712cf9">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <header class="site-header sticky-top py-1">
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
            <div class="d-none d-md-flex">
                <a class="py-2" href="index.php" aria-label="Product">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img"
                        viewBox="0 0 24 24">
                        <title>Product</title>
                        <circle cx="12" cy="12" r="10"></circle>
                        <path
                            d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94">
                        </path>
                    </svg>
                </a>
            </div>
            <div class="d-md-none text-center">
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mobilenav" aria-controls="mobilenav" aria-expanded="false" aria-label="Toggle mobile navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img"
                    viewBox="0 0 24 24">
                        <title>Product</title>
                        <circle cx="12" cy="12" r="10"></circle>
                        <path
                            d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94">
                        </path>
                    </svg>
                </button>
                <div class="navbar-collapse collapse" id="mobilenav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="pages/firma.php">Team</a>
                      </li>
                      
                      <?php 
            if(isset($_SESSION['user_mail'])){
                echo '<li class="nav-item"> <a class="nav-link active" aria-current="page" href="pages/auth/kurswahl.php">Kurswahl</a>';
                echo '<li class="nav-item"> <a class="nav-link active" aria-current="page" href="pages/auth/signout.php">Logout</a> </li>';
            }else{
                echo '<li class="nav-item"> <a class="nav-link active" aria-current="page" href="pages/login.html">Login</a>  </li>';
            }
        ?>
                     
                    </ul>
                   <form role="search">
                      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </form> 
                  </div>
            </div>
            <a class="py-2 d-none d-md-inline-block" href="index.php">Home</a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
                <span class="py-2 d-none d-md-inline-block" style="color: #8e8e8e;">Suchen</span>
              </button>
            <a class="py-2 d-none d-md-inline-block" href="pages/firma.php">Team</a>
            <?php 
            if(isset($_SESSION['user_mail'])){
                echo '<a class="py-2 d-none d-md-inline-block" href="pages/auth/kurswahl.php">Kurswahl</a>';
                echo '<a class="py-2 d-none d-md-inline-block" href="pages/auth/signout.php">Logout</a>';
            }else{
                echo '<a class="py-2 d-none d-md-inline-block" href="pages/login.html">Login</a>';
            }
        ?>
        </nav>
        <div class="navbar-collapse collapse" id="navbarsExample06">
            <form role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              </form>
            </div>
    </header>
   

    <main>
       

        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-header rounded">

            <div class="col-md-5 p-lg-5 mx-auto my-5 text-container rounded brighter-span">
                <h1 class="display-4 fw-normal">Lé Abi Planer</h1>
                <p class="lead fw-normal">Willkomen zum Kurswahlsimulator</p>
                <?php 
            if(isset($_SESSION['user_mail'])){
                echo '<a class="btn  btn-outline-secondary" href="pages/auth/signout.php">Logout</a>';
            }else{
                echo ' <a class="btn  btn-outline-secondary" href="pages/login.html">Login</a>';
            }
        ?>
            </div>

        </div>



        <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
            <a class="laso" href="pages/tutorial.php">
                <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                    <div class="my-3 p-3">
                        <span class="display-5">Tutorial</span>
                        <p class="lead">Wie geht das?</p>
                    </div>
                    <div class="bg-body shadow-sm mx-auto"
                    style="width: 100%; height: auto; border-radius: 21px 21px 0 0;">
                    <img src="img/info-foto.jpg" alt=""  width="100%" height="auto">
                </div>
                </div>
            </a>
            <a class="laso" href="pages/info.php">
                <div class="bg-body-tertiary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                    <div class="my-3 py-3">
                        <span class="display-5">Kurswahl</span>
                        <p class="lead">Information</p>
                    </div>
                    <div class="bg-body shadow-sm mx-auto"
                        style="width: 100%; height: auto; border-radius: 21px 21px 0 0;">
                        <img src="img/info-foto.jpg" alt=""  width="100%" height="auto">
                    </div>
                </div>
            </a>
        </div>
    </main>

    <footer class="container py-5">
        <div class="row">
            <div class="col-12 col-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img"
                    viewBox="0 0 24 24">
                    <title>Product</title>
                    <circle cx="12" cy="12" r="10"></circle>
                    <path
                        d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94">
                    </path>
                </svg>
                <small class="d-block mb-3 text-body-secondary">© 2023</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <button type="button" class="btn btn-link" onClick="doABarrelRoll()">
                        <span class="py-2 d-none d-md-inline-block " style="color: #8e8e8e;">Cool stuff</span>
                    </button>
                    <li><a class="link-secondary" href="#">Random feature</a></li>
                    <li><a class="link-secondary" href="#">Team feature</a></li>
                    <li><a class="link-secondary" href="#">Stuff for developers</a></li>
                    <li><a class="link-secondary" href="#">Another one</a></li>
                    <li><a class="link-secondary" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Resource name</a></li>
                    <li><a class="link-secondary" href="#">Resource</a></li>
                    <li><a class="link-secondary" href="pages/another-one.html">Another resource</a></li>
                    <li><a class="link-secondary" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Business</a></li>
                    <li><a class="link-secondary" href="#">Education</a></li>
                    <li><a class="link-secondary" href="#">Government</a></li>
                    <li><a class="link-secondary" href="#">Gaming</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Team</a></li>
                    <li><a class="link-secondary" href="https://goo.gl/maps/Knbxy21odVmWV1P29">Locations</a></li>
                    <li><a class="link-secondary" href="#">Privacy</a></li>
                    <li><a class="link-secondary" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
    
   
<script>

  var doABarrelRoll = function(){

    console.log("CLICK");
    var a="-webkit-",b='transform:rotate(1turn);',c='transition:4s;';
    
    document.head.innerHTML+='<style>body{'+a+b+a+c+b+c
    
  }
  

  //doABarrelRoll();
</script>



</body>

</html>
