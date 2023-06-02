<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Gráfico de torta para mediciones</title>

    <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet">

  </head>

  <body>

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="http://collectivecloudperu.com"><img src="http://collectivecloudperu.com/img/logo.png" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="./inicio.php">INICIO<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://blog.collectivecloudperu.com" target="_blank">Blog</a>
          </li>
      
            <a class="nav-link" href="#">Contacto</a>
          </li> 
          </ul>
          
    </header>

    <main role="main">

      <section class="jumbotron text-center">


              <div class="container">
              <h1 class="jumbotron-heading">Información </h1>



<p class="lh-1" class="fw-bold"> Para usarlo primero, debes consultarlo con tu jefatura directo. Los pasos son los siguientes: </p>
  


                <ol>   
                <li>  1.-primero abrir el siguente enlace : http://localhost/phpmyadmin/  </li> 
                <li>  2.- crear una base de datos </li> 
                <li>  3.- ingresar datos en la base creada </li>
                <li>  4.- guardar cambios de los querys realizados </li>
                <li>  5.- revisar cambios guardados </li>
                <li>  6.- ingresar al enlace: http://localhost/chartlvmedical/inicio.php </li>
                <li>  7.- continuar con la página </li>
                <li>  8.- corroborar cambios </li>
                </ol> 
   





                <br>
                <div class="row mt-4">
                <div class="col-md-12">

              <canvas id="miGrafico"></canvas> 
              
            </div>
          </div>               
          
        </div>
      </section>


    

    
    <!-- Chart JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js" integrity="sha256-JG6hsuMjFnQ2spWq0UiaDRJBaarzhFbUxiUTxQDA9Lk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js" integrity="sha256-J2sc79NPV/osLcIpzL3K8uJyAD7T5gaEFKlLDM18oxY=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js" integrity="sha256-CfcERD4Ov4+lKbWbYqXD6aFM9M51gN4GUEtDhkWABMo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/datos.js"></script>

    
  </body>
</html>



