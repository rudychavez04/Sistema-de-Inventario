<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferremas - Login</title>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="assets/form.css">
</head>
<body>


   
        <div class="form-login">
         <form action="controlador/validar.php" method="POST">
            <h1> </h1>
            <img class="img-fluid" src="assets/image/ferremas-login-icon.png" alt="">
          
            <p class="form-control-p">Usuario <input type="text" class="form-control" placeholder="Ingrese Usuario" name="usuario"> </p>
            <p class="form-control-p">Contraseña <input type="password" class="form-control" placeholder="Ingrese Contraseña" name="password"> </p>
        

            <input class="btn btn-block bg-gradient-info btn-lg" type="submit" value="Ingresar">
         </form>
            
        </div>
   

   
</body>
</html>