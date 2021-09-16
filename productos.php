<?php include("template/cabecera.php"); ?>

<div class="yellow_bg">
    <div class="container center">
        <div class="row">
            <div class="">
                <div class="title">

                    <h1>Nuestros Productos</h1>


                </div>


            </div>


        </div>

    </div>
</br>
</br>
</div>






<?php
include("administrador/config/db.php");
$sentenciaSQL = $conexion->prepare("SELECT * FROM productos");
$sentenciaSQL->execute();
$listaProductos = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach ($listaProductos as $producto) { ?>
    <div class="col-md-3">
        <div class="card">
            <img class="card-img-top" src="./img/<?php echo $producto['imagen']; ?>" alt="">
            <div class="card-body">
                <h4 class="card-title"><?php echo $producto['nombre']; ?></h4>

            </div>


        </div>
</br>
</br>
    </div>

<?php } ?>


<fooetr>


    <div class="d-flex justify-content-center m-5">
        <div class="img-box">
            <figure><img src="imagenes/fabrica.jpeg" alt="img" height="500px" /></figure>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="footer_logo">
                <a href="index.html"><img src="" alt="" /></a>
            </div>
            </br>
            

        </div>

        <div class="d-flex justify-content-center m-4">
            <ul class="link">
                <li class="form-control">
                    <a class="btn btn-primary btn-lg" href="<?php echo $url; ?>/contacto.php">Contactos</a>
                </li>

               
            </ul>
        </div>

    </div>
</fooetr>






    <?php include("template/pie.php"); ?>