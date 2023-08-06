<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{
    background-image: url(fondo1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}
.formulario{
    background: rgba(0, 0, 0, .5);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.568);
    color: white;
}
.form-control{
    background: rgba(0, 0, 0, .3); 
    border-style: none;
    transition: 0.5s ease-in; 
    color: white;
}
.form-control:not(:placeholder-shown) {
    color: white;
  }
.form-control:focus{
    background: none;
}
.form-control::placeholder{
    color: white;
}
.ingresar{
    background: #09173b;
    padding: 10px;
    font-size: 18px;
    font-weight: 700!important;
    color: white;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.568);
}
.ingresar:hover{
    color: #F9E79F;
    
}
   </style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 mr-1">
            <div class="col-md-4 formulario">
                <form action="<?php echo site_url('controlador_login/login'); ?>" method="post">
                    <div class="form-group text-center">
                        <h1 class="text-light">Iniciar Sesion</h1>
                    </div>
                    <?php echo isset($error_message) ? '<p class="error">' . $error_message . '</p>' : ''; ?>
                    <div class="form-group mx-sm-4 pt-3">
                        <input type="text" name="usuario" class="form-control" placeholder="Ingrese su nombre de usuario" required>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                        <input type="password" name="contraseña" class="form-control" placeholder="Ingrese su clave de acceso" required>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                        <input type="submit" class="btn btn-block ingresar" value="Ingresar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>