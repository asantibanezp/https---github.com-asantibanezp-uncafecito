
/**
 * Created by PhpStorm.
 * User: soporte
 * Date: 25/04/2019
 * Time: 11:18
 */

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/fontello/fontello.css">
    <title>El mejor cafe, directo a tu mesa</title>
</head>
<body style="background-color: white; position: relative" data-spy="scroll" data-target="#navbarNav">
<!--<div class="container-fluid" style="height: 54px;"></div>-->


<!--header-->
<div class="container-fluid pl-0 pr-0" style="background-color: darkseagreen">
<nav id="header" class="navbar navbar-expand-lg navbar-light bg-light data-off fixed-top">
    <a class="navbar-brand" href="#">
        <img src="img/cappfe.png" alt="">
        <span>uncafecito.cl®</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav barra-nav ml-auto">
            <li class="nav-item active" style="margin-top: 7px">
                <a class="nav-link icon-facebook-rect" href="http://www.facebook.com"></a>
            </li>
            <li class="nav-item active" style="margin-top: 7px">
                <a class="nav-link icon-twitter-bird" href="http://www.facebook.com"></a>
            </li>
            <li class="nav-item active" style="margin-top: 7px">
                <a class="nav-link icon-instagram" href="http://www.facebook.com"></a>
            </li>
            <li class="nav-item active" style="margin-top: 7px">
                <a class="nav-link" href="#">Menus <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item" style="margin-top: 7px">
                <a class="nav-link" href="#hotspots">Hotspots</a>
            </li>
            <li class="nav-item" style="margin-top: 7px">
                <a class="nav-link" href="#como-usar">Como usar Cappfe</a>
            </li>
            <li class="nav-item" style="margin-top: 7px">
                <a class="nav-link" href="#newsletter">Newsletter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link registrate" href="#" data-toggle="modal" data-target="#modal-iniciosesion"><button type="button" class="btn btn-outline-dark">Iniciar sesion</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link registrate" href="#"><button type="button" class="btn btn-outline-success">Registrate!</button></a>
            </li>
        </ul>
    </div>
</nav>
</div>
<!--header-->




<!--main-->
<main id="main" class="pt-5">
<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/slider/1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/slider/2.jpg" class="d-block w-100" alt="...">
        </DIV>
        <div class="overlay carousel-caption">
            <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 offset-md-0 p-4 text-left">
                    <h1>¡Te llevamos el cafe!</h1>
                    <p class="d-none d-md-block">Creemos que un cafe de calidad es el mejor comienzo para
                        un buen dia y el mejor incentivo para tus mejores proyectos.
Esto nos motiva a llevar la mas fina seleccion de
                        granos colombianos, directo a tu mesa!
                    </p>
                    <button type="button" class="btn btn-capfe">Descarga la App!</button>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</main>
<br><br>
<section>
    <div class="container">

        <div class="row" >
            <div class="col-12 col-md">
                    <img src="img/molinillo-vector.png" style="width: 500px; height: 500px" alt="">
            </div>
            <div class="col-12 col-md">
                <div class="jumbotron p-3">
                    <h4 class=" titulo">Registrate y pide tu cafe!</h4> <br>

                    <p class="icon-user">Crea tu cuenta de usuario</p>
                    <p class="icon-mobile">Descarga "uncafecito.cl"  o Inicia Sesion</p>
                    <p class="icon-coffee">Pide tu cafe!</p>

                    <p>
                        <a class="btn  btn-md btn-capfe" href="#" role="button">Ver mas</a>
                    </p>
                </div>
                <div class="jumbotron p-3">
                    <h4 class=" titulo" id="como-usar">Usa la App en 3 pasos!</h4> <br>
                    <div class="row">

                        <div class="col-12 col-md pt-4 circle2 m-2 text-center">
                            <h1 class="icon-user"></h1>
                            <h5>Registrate</h5>

                        </div>
                        <div class="col-12 col-md pt-4 circle2 m-2 text-center">
                            <h1 class="icon-mobile"></h1>
                            <h5>Descarga la APP</h5>
                        </div>
                        <div class="col-12 col-md pt-4 circle2 m-2 text-center">
                            <h1 class="icon-coffee"></h1>
                            <h5>Pide tu cafe</h5>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    <br><br>

</section>
<!--main-->


<!--noticias-->
<section>
    <div class="container pb-4">
        <div id="newsletter" class="container-fluid newsletter">
        <hr style="border: 1px dashed dimgrey">
        </div>
        <br><br>
        <div class="container">
        <div class="row">
            <div class="col-12 col-md">
                <h2 class="titulo" id="hotspots"> Conoce nuestros Hotspots</h2>
            </div>
            <div class="col-12 col-md">
                <h2 class="titulo"> Nuestras buenas nuevas</h2>
            </div>
        </div>
        </div>
        </div>

<div class="container">
        <div class="row">
            <div class="col-12 col-md">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.374923805373!2d-70.55278438451454!3d-33.43953730433889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662ce5d5969fba3%3A0x72793b6c195e628f!2sPr%C3%ADncipe+de+Gales+7760%2C+La+Reina%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1550674691327" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-12 col-md">
        <div class="jumbotron p-3">
                <div class="row">
                    <div class="col-12 col-md">
                    <div class="card" style="width: 200px">
                     <img src="img/noticias/beneficios.jpg" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h5 class="card-title">Directo del origen</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-capfe">Leer mas</a>
                    </div>
                </div>
             </div>
                    <div class="col-12 col-md">
                    <div class="card" style="width: 200px">
                        <img src="img/noticias/beneficios.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Directo del origen</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-capfe">Leer mas</a>
                        </div>
                    </div>
                </div>
             </div>
            </div>

            </div>
        </div>
</div>
        </div>


    <br><br>
</section>

<!--noticias-->

<!--footer-->
<footer id="footer">
<div class="container pt-4 pb-4">
    <div class="row text-center text-md-left">
        <div class="col-12 col-lg-3">
            <a href="#">Contactanos</a></href><br>
            <a href="#">Novedades</a></href><br>
            <a href="#">Noticias</a></href>
        </div>
        <div class="col-12 col-lg-3">
            <a href="#">Sugerencias</a></href><br>
            <a href="#">Direccion</a></href><br>
            <a href="#">Mision</a></href>
        </div>
        <div class="col text-md-right text-center">
            <span>Siguenos en:</span>
            <a href="#" class="icon-facebook-official"></a>
            <a href="#" class="icon-instagram"></a>
            <a href="#" class="icon-twitter-bird"></a>
            <a href="#" class="icon-youtube"></a>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <hr style="border: 0.5px solid grey">
        </div>

    </div>
    <div class="row text-right">
        <div class="col-12 col-md-3 text-md-left text-center">
            <span>uncafecito.cl® | 2019  <br>Reservados todos los derechos</span>
        </div>
        <div class="col-12 col-md-9 text-md-right text-center pt-4">
            <span>Sitio optimizado para:</span>
            <a href="#" class="icon-chrome"></a>
            <a href="#" class="icon-firefox"></a>
            <a href="#" class="icon-opera"></a>
        </div>
    </div>
</div>
</footer>
<!--footer-->

<!--modal-->
<div class="modal fade" id="modal-iniciosesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Iniciar sesion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-capfe">Iniciar</button>
            </div>
        </div>
    </div>
</div>
<!--modal-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
</body>
</html>
