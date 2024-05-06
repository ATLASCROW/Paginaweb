<?php
$servidor ="localhost";
$usuario ="root";
$clave="";
$baseDeDatos="formulario";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenespng/CABECER.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
    integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous"><!--enlaces de iconos-->
    <link rel="stylesheet" href="estilo-pago.css">
    <link rel="stylesheet" href="index.html">
    <link rel="stylesheet" href="acerca.html">
    <link rel="stylesheet" href="formulario.php">
    <title>Finalizar Compra</title>
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
            <h1>Finalizar Compra</h1>
            <div class="contenido">
                </div> 
                <div class="formulario-contact">
                    <form action="#" name="formulario" method="post">
                        <div class="input-group">
                            
                            <label for="txt_pais">Pais</label>
                            <input type="text" name="en_pais" id="pais" placeholder="pais" require>

                            <label for="txt_names"> Nombre</label>
                            <input type="text" name="en_nombres" id="names" placeholder="nombres" require>
                            
                            <label for="txt_direc"> Dirección</label>
                            <input type="text" name="en_direc" id="direc" placeholder="dirección" require>

                            <label for="txt_ciudad"> Ciudad</label>
                            <input type="text" name="en_ciudad" id="ciudad" placeholder="ciudad" require>

                            <label for="txt_codigo"> Codigo Postal</label>
                            <input type="text" name="en_codigo" id="codigo_postal" placeholder="codigo postal" require>

                            <label for="txt_phone">Telefono</label>
                            <input type="text" name="en_tele" id="phone" placeholder="telefono" require>

                            <label for="txt_tarjeta"> Numero de tarjeta</label>
                            <input type="text" name="en_numero_tarjeta" id="numero_tarjeta" placeholder="número de tarjeta de crédito" pattern="[0-9]{16}" maxlength="16" require>

                            <label for="txt_segur">Codigo de seguridad</label>
                            <input type="text" name="en_cvv" id="cvv"  placeholder="CVV" pattern="[0-9]{3}" maxlength="3" require>

                            <label for="txt_produc"> Productos </label>
                            <textarea name="en_produc" id="productos" placeholder="productos" required></textarea>
                            
                            <label for="txt_precio"> Precio Total </label>
                            <input type="text" name="en_precio" id="precio"  placeholder="Ingrese el precio" required>

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
if (isset($_POST['Enviar'])){
    $Pais = $_POST['en_pais'];
    $Nombres = $_POST['en_nombres'];
    $Dirección = $_POST['en_direc'];
    $Ciudad = $_POST['en_ciudad'];
    $CódigoPostal = $_POST['en_codigo'];
    $Telefono = $_POST['en_tele'];
    $Tarjeta = $_POST['en_numero_tarjeta']; 
    $Seguridad=$_POST['en_cvv']; 
    $Productos = $_POST['en_produc'];
    $Precio = $_POST['en_precio'];
    
    $insertarDatos = "INSERT INTO datospago (Pais, Nombres, Dirección, Ciudad, CódigoPostal, Telefono, Tarjeta, Seguridad, Productos, Precio) VALUES ('$Pais', '$Nombres', '$Dirección', '$Ciudad', '$CódigoPostal', '$Telefono', '$Tarjeta', '$Seguridad', '$Productos','$Precio')";
    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

    if ($ejecutarInsertar) {
        echo "Datos insertados correctamente";
    } else {
        echo "Error al insertar datos: " . mysqli_error($enlace);
    }
   
}

?>