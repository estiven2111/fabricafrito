<?php include("template/cabecera.php"); 
 session_start();  
?>



<div class="jumbotron" style="text-align: center;   border: 1px solid #156785; ">
    <h1 class="display-3">PLATAFORMA DE PEDIDOS</h1>
    <p class="lead"></p>
    <hr class="my-2">
    <?php
//include("../administrador/config/verificar.php");
include("../administrador/config/db.php");
//include("./pedidosCod.php");

 ?>
<div class="row">
 <div class="col-sm-5">

 <div class="card" style="width: 100%;">
  <img src="../IMAGENES/pedidos.jpg" class="card-img-top" style="height: 400px;" >
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">POR FAVOR REALIZA TU PEDIDO</p>
  </div>
</div>

 </div>   
<div class="col-sm-7">
 <div class="table-responsive position-relative"  >
 <table class="table table-bordered" style="width: auto;" >
    <thead>
        <tr>
            <th>PRODUCTO</th>
            <th >CANTIDAD</th>
            
        </tr>
    </thead>
    <tbody>

    <form action="pedidoscod.php" method="POST" enctype="multipart/form-data">
        <?php 
        $sentenciaSQL= $conexion->prepare("SELECT * FROM productos");
$sentenciaSQL->execute();
$listaProductos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($listaProductos)):
        foreach($listaProductos as $Productos):?>
         <div class ="form-group">
        <tr>
       

        <?php $nom = str_replace(' ', '_', $Productos['nombre']);?>
        <td><?php echo $Productos['nombre']; ?></td>
        <td><input type="text" required="" autofocus='autofocus' class="form-control" name="<?php echo $nom ?>"
                   id="txtID" placeholder="Llene la cantidad" pattern='[0-9]+'/>
            <p style="color: red; font-size: 12px;">   <?php echo isset($_SESSION['alerta'][$nom])?  $_SESSION['alerta'][$nom] : ""; ?></p></td>
        </tr>
        </div>
        <?php  endforeach; endif;
         
        ?>
     </tbody>
</table> 
</div>
</div>
</div>
    
    <input type="submit" name="ENVIAR"  value="ENVIAR" class="btn btn-primary"/>
</form>
    <div style="text-align: center; border: 2px solid gray; width: 50%; margin: 30px auto 30px auto;">
        <?php echo isset($_SESSION['factura'])?$_SESSION['factura']:""; 
                var_dump($_SESSION['alerta'])?>
    </div>
</div>
</div>


<?php   include("template/pie.php"); ?>

