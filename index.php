<?php
    require_once 'vendor/autoload.php';
    require_once 'assets/app/Models/Project.php';

    use Illuminate\Database\Capsule\Manager as Capsule;
    use App\Models\Project;
    

    $capsule = new Capsule;
    
    $capsule->addConnection([
      'driver'    => 'mysql',
      'host'      => '127.0.0.1:3308',
      'database'  => 'usuarios',
      'username'  => 'root',
      'password'  => 'root',
      'charset'   => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix'    => '',
    ]);

    // Make this Capsule instance available globally via static methods... (optional)
    $capsule->setAsGlobal();

    // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
    $capsule->bootEloquent();

    
    if(!empty($_POST)){
      $project = new Project();
      $project -> firstname = $_POST['nombre'];
      $project -> lastname = $_POST['apellido'];
      $project -> email = $_POST['correo'];
      $project -> password = $_POST['contrasena'];
      $project -> save();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/styles.css">

</head>
<body>
    
    <?php include_once 'includes/templates/header.php';?>
    
      <section class="engrane cambio-seccion">
        <div class="row hola">
          <img id="Colapsar" class="Colapso col s1 m1" src="assets/img/engranaje.png" alt="">
        </div>

        <div class="row ">
          <button id="Color1" class="btn1 col s1">Color1 2</button>
          <button id="Color2" class="btn2 col s1">Color2</button>
        </div>
        <div class="row">
          <button id="Color3" class="btn3 col s1">Color3</button>
          <button id="Color4" class="btn4 col s1">Color4</button>
        </div>
      </section>

      <section class="contenedor cambio-seccion">
        <div class="row">
          <form action="index.php" id="formulario" class="col s12" method="post">
            <div class="row">
              <div class="input-field col s6">
                <input placeholder="Nombre" id="first_name" type="text" class="validate" name="nombre">
              </div>
              <div class="input-field col s6">
                <input placeholder="Apellidos" id="last_name" type="text" class="validate" name="apellido">
              </div>
            </div>
            
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Correo electrónico"  id="email" type="email" class="validate" name="correo">
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Contraseña"  id="password" type="password" class="validate" name="contrasena">
              </div>
            </div>

            <label>
              <input type="checkbox" id="checkbox1">
              <span>Terminos y Condiciones</span>
            </label><br>

            <label>
              <input type="checkbox" id="checkbox2">
              <span>No soy un Robot</span>
            </label><br>
            <br>
            <button class="btn waves-effect waves-light" type="submit">Submit
                <a href="login.php"></a>
                <i class="material-icons right">send</i>
            </button>
          </form>
        </div>
      </section>

      <section class="contenedor cambio-seccion">
        <div class="row seccion3">

        </div>
      </section>

      <?php include_once 'includes/templates/footer.php';?>

</body>



<script type="text/javascript" src="assets/apps/apps.js"></script>

</html>
