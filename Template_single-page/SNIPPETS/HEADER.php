<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/index.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse fixed-top">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a href="#" id="SidebarToggle" data-target="#sidebar" data-toggle="collapse">
            <i class="fa fa-navicon fa-2x py-2 p-1"></i></a>
        </a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                <li class="nav-item navLi active">
                    <a class="nav-link navButton" href="#HomeSection">Główna <span class="sr-only">(aktualna)</span></a>
                </li>
                <li class="nav-item navLi">

                    <a class="nav-link navButton" href="#TeamSection">Zespól</a>
                </li>
                <li class="nav-item navLi">
                    <a class="nav-link navButton" href="#ContactSection">Kontakt</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Szukaj">

                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Szukaj</button>
            </form>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            <div class="col-md-3 float-left col-1 pl-0 pr-0 collapse width show" id="sidebar">
                <div class="list-group border-0 card text-center text-md-left">
                    <a href="#menu1" class="list-group-item d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false"><i class="fa fa-dashboard"></i> <span class="hidden-sm-down">Konto</span> </a>
                    <div class="collapse" id="menu1">
                        <a href="profile.php" class="list-group-item" data-parent="#menu1">Profil</a>
                        <a href="#" class="list-group-item" data-parent="#menu1">Powiadomienia</a>
                        <a href="#" class="list-group-item" data-parent="#menu1">Wiadomości</a>
                        <a href="galeria.php" class="list-group-item" data-parent="#menu1">Galeria</a>
                    </div>
                    <a href="index.php" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fa fa-film"></i> <span class="hidden-sm-down">Strona główna</span></a>
                </div>
            </div>

            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">