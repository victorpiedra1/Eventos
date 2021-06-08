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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="assets/style.css">
    <title>Login</title>
</head>
<body>
    <section class="container">
        <div class="row">
            <div class="col s6">
                <h2>Login</h2>
                <form action="login.php" method="post">
                    <label for="">Correo: </label>
                    <input type="text" name='correo'><br>
                    <label for="">Contraseña: </label>
                    <input type="text" name='contrasena'><br>  
                    <button class="waves-effect waves-light btn" type='submit'>Enviar</button> 
                    <a  href="index.php" class="waves-effect waves-light btn">Ir a inicio</a>
                </form>
            </div>
        </div>    
    </section>
</body>
</html>