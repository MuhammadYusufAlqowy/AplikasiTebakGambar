
<?php
    ob_start();
    if(isset($_SESSION)){
        session_start();    
            if(isset($_SESSION['temp'])){
                session_destroy();
            }
        }
    ob_flush();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aplikasi Tebak Gambar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="source/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
  
</head>

<body ng-app="myApp" class="p-0 m-0">
    <div class="container-fluid p-0">
        <div class="navbar navbar-expand-sm bg-warning fixed-top">
            <div class="container-fluid row">
                <ul class="navbar-nav justify-content-start col-sm-6">
                    <li class="nav-item float-right">
                        <a class="nav-link text-white m-2" href="index.html" style="font-size: 18px; font-weight: bold"><i class="fas fa-home"></i> &ensp; Menu Utama </a>
                    </li>
                </ul>
            </div>
        </div>

        <ng-view></ng-view>
        
    </div>
    
</body>

</html>


<script>
    var app = angular.module("myApp", ["ngRoute"]);
    app.config(function ($routeProvider) {
        $routeProvider
            .when("/", {
                templateUrl: "kategori.htm"
            })
            .when("/sesi1", {
                templateUrl: "sesi1.php"
            })
              .when("/sesi2", {
                templateUrl: "sesi2.php"
            })
              .when("/sesi3", {
                templateUrl: "sesi3.php"
            })
              .when("/sesi4", {
                templateUrl: "sesi4.php"
            })
            .when("/sesi5", {
                templateUrl: "sesi5.php"
            })
            .when("/sesi6", {
                templateUrl: "sesi6.php"
            });

    });
</script>
