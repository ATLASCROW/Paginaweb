<?php
$servidor="localhost";
$usuario="root";
$clave="";
$baseDeDatos="formulario";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenespng/CABECER.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
    integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous"><!--enlaces de iconos-->
    <link rel="stylesheet" href="estilo-contacto.css">
    <link rel="stylesheet" href="index.html">
    <link rel="stylesheet" href="acerca.html">
    <link rel="stylesheet" href="formulario.php">
    <title>Contactos</title>
</head>
<body>
<header>
    <div class="text-logo"><img src="imagenespng/LOGO1.png" width="175" height="140" alt=""></div>
    <div class="container">
        <section class="textos-header">
            <h1>COMPU BYTE</h1>
            <h2>con tecnologia avanzada...</h2>
        </section>
        <nav>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="acerca.html">Acerca de Nosotros</a></li>
                <li><a href="formulario.php">Contactos</a></li>
            </ul>
        </nav>
    </div>
  </header>
    <main>
        <div class="contendor-con">
            <h1>Contactos</h1>
            <div class="contenido">
                <div class="info">
                    <div class="col">
                        <i class="icono fas fa-map-marker-alt"></i>
                        <p>Ciudad LOJA</p>
                    </div>
                    <div class="col">
                        <i class="icono fas fa-envelope"></i>
                        <p><a href="mailto:lbsalinas@tecnologicoloja.edu.ec">lbsalinas@tecnologicoloja.edu.ec</a><br>
                        <a href="mailto:adcabrera@tecnologicoloja.edu.ec">adcabrera@tecnologicoloja.edu.ec</a></p>
                    </div>
                    <div class="col">
                        <i class="icono fas fa-phone"></i>
                        <p>0981168935 <br> 0980713056</p>
                    </div>
                    <div class="redes-s">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31840.76868506355!2d-79.2086218!3d-4.0006664999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smapa%20en%20html!5e0!3m2!1ses-419!2sec!4v1701446324865!5m2!1ses-419!2sec"
                     width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div> 
                <div class="formulario-contact">
                    <form action="#" name="formulario" method="post">
                        <div class="input-group">
                        <label for="txt_name"> Nombre</label>
                            <input type="text" name="en_nombre" id="name" placeholder="nombre">

                            <label for="txt_phone">Telefono</label>
                            <input type="tel" name="en_tele" id="phone" placeholder="telefono">

                            <label for="txt_email"> Email</label>
                            <input type="email" name="en_email" id="email" placeholder="email">

                            <label for="txt_mensaje">Mensaje</label>
                            <textarea name="en_mensaje" id="mensaje" cols="30" rows="5" placeholder="mensaje"></textarea>

                            <input class="btn" type="submit" name="Enviar" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        
    </main>
    
</body>
</html>
<?php
if (isset($_POST['Enviar'])) {
    $Nombre = $_POST['en_nombre'];
    $Telefono = $_POST['en_tele'];
    $Email = $_POST['en_email'];
    $Mensaje = $_POST['en_mensaje'];

    $insertarDatos = "INSERT INTO datos (Nombre, Telefono, Email, Mensaje) VALUES ('$Nombre','$Telefono','$Email','$Mensaje')";
    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

    if ($ejecutarInsertar) {
        echo "Datos insertados correctamente";
    } else {
        echo "Error al insertar datos: " . mysqli_error($enlace);
    }
}

?>