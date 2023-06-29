<?php
session_start();
if(!isset($_SESSION['user_mail'])){
    header('Location: ../login.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link href="../../css/styles.css" rel="stylesheet">

    </head>

<body>
<header class="site-header sticky-top py-1">
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
            <div class="d-none d-md-flex">
                <a class="py-2" href="../../index.php" aria-label="Product">
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
                        <a class="nav-link active" aria-current="page" href="../../index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../firma.php">Team</a>
                      </li>
                      <li class="nav-item"> 
                        <a class="nav-link active" aria-current="page" href="signout.php">Logout</a>
                     </li> 
                    </ul>
                   <form role="search">
                      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </form> 
                  </div>
            </div>
            <a class="py-2 d-none d-md-inline-block" href="../../index.php">Home</a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
                <span class="py-2 d-none d-md-inline-block" style="color: #8e8e8e;">Suchen</span>
              </button>
            <a class="py-2 d-none d-md-inline-block" href="../firma.php">Team</a>
            <a class="py-2 d-none d-md-inline-block" href="signout.php">Logout</a>
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
                <h1 class="display-4 fw-normal">Kurswahl Info</h1>
                <p class="lead fw-normal">Lé Abi Planer</p>
            </div>

        </div>
        <div class="album py-5 bg-body-tertiary">
            <div class="container">
                <a href="neueKurswahl.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                        class="bi bi-plus-square text-success" viewBox="0 0 16 16">
                        <path
                            d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg>
                </a>
            </div>
        </div>
    </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</html>