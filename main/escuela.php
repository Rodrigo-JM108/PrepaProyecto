<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Escuela</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head> 

    <body>
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-black navbar-black"> 
          <div class="container-fluid">
            <a href="#" class="navbar-brand">Formando <span>Profesionales</span></a>
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">

                  <div class="navbar-nav ml-auto">
                      <a href="index.html" class="nav-item nav-link active">Inicio</a>                        
                      <div class="nav-item dropdown">                          
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Docente</a> 

                          <div class="dropdown-menu">
                            <a href="docente.html" class="dropdown-item">Datos docente</a> 
                            <a href="DatosDocente-Diplomado.html" class="dropdown-item">Diplomado del docente</a>
                            <a href="DatosDocente-Doctorado.html" class="dropdown-item">Doctorado del docente</a> 
                            <a href="DatosDocente-Documentos.html" class="dropdown-item">Documentos del docente</a> 
                            <a href="DatosDocente-DomicilioDocente.php" class="dropdown-item">Domicilio del docente</a> 
                            <a href="DatosDocente-EscuelaLabora.html" class="dropdown-item">Escuela donde labora el docente</a> 
                         <!--   <a href="DatosDocente-EscuelasNumeros.html" class="dropdown-item">Números de escuela del docente</a> -->
                            <a href="DatosDocente-Especializacion.html" class="dropdown-item">Especialización del docente</a> 
                            <a href="DatosDocente-Licenciatura.html" class="dropdown-item">Licenciatura del docente</a> 
                            <a href="DatosDocente-Maestria.html" class="dropdown-item">Maestría del docente</a> 
                              
                          </div>                     
                      </div>                       
                      <div class="nav-item dropdown">                          
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Centro de Trabajo</a> 
                          <div class="dropdown-menu">
                            <a href="escuela.html" class="dropdown-item">Agregar datos</a> 
                            <a href="verEscuela.html" class="dropdown-item">Ver datos</a>                                
                          </div>
                      </div>   
                      <div class="nav-item dropdown">                          
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Ver información del docente</a> 
                        <div class="dropdown-menu">
                            <a href="VerDatosDocente.html" class="dropdown-item">Datos del Docente</a>
                                               
                        </div>
                    </div>   

                  </div>
              </div>
          </div>
      </div>
        <!-- Nav Bar End -->


        
        
        
        <!-- Booking Start -->
        <div class="booking">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="booking-content">
                            <div class="section-header">
                                <p>.</p>
                                <h2>Datos del la escuela</h2> 
                            </div>
                            <form>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Nombre de la escuela</label>
                                <input type="text" class="form-control" id="nombreEscuela" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Turno</label>
                                <select class="form-control" id="idTurno">
                                  <option>--Seleccione una opcion--</option>
                                  <option>Vespertino</option>
                                  <option>Matutino</option>
                                </select>
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Calle de la escuela</label>
                                <input type="text" class="form-control" id="calleEscuela" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">No. de la escuela</label>
                                <input type="number" class="form-control" id="numeroEscuela" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Colonia</label>
                                <input type="text" class="form-control" id="coloniaEscuela" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Localidad</label>
                                <input type="text" class="form-control" id="idLocalidad" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Municipio</label>
                                <input type="text" class="form-control" id="idMunicipio" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Código postal</label>
                                <input type="number" class="form-control" id="CPEscuela" placeholder="">
                              </div><br>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Teléfono escuela</label>
                                <input type="number" class="form-control" id="telefonoEscuela" placeholder="">
                              </div><br>


                            </form>

                            <p class="text-center">
                              <button href="#!" class="btn btn-warning " style="color: rgb(0, 0, 0); font-size: 100%;"><i class="zmdi zmdi-floppy zmdi-hc-fw"></i>GUARDAR DATOS</button>
                            </p>

                              <script>
                              // Example starter JavaScript for disabling form submissions if there are invalid fields
                              (function() {
                                'use strict';
                                window.addEventListener('load', function() {
                                  // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                  var forms = document.getElementsByClassName('needs-validation');
                                  // Loop over them and prevent submission
                                  var validation = Array.prototype.filter.call(forms, function(form) {
                                    form.addEventListener('submit', function(event) {
                                      if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                      }
                                      form.classList.add('was-validated');
                                    }, false);
                                  });
                                }, false);
                              })();
                              </script>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Booking End -->
        


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
