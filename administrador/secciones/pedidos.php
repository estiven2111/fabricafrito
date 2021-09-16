<?php include("../template/cabecera.php"); ?>

<div class="jumbotron">
    <h1 class="display-3">PLATAFORMA DE PEDIDOS</h1>
    <p class="lead">Realiza tu pedido</p>
    <hr class="my-2">
    <?php


include("../config/db.php");

      $sentenciaSQL= $conexion->prepare("SELECT * FROM productos");
      $sentenciaSQL->execute();
      $listaProductos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
      
      $sentenciaSQL= $conexion->prepare("SELECT * FROM pedidos where usuario = 'juan'");
      $sentenciaSQL->execute();
      $listaPedidos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
//      var_dump($listaProductos);
 ?>

    <table class="table table-bordered ">
    <thead>
        
        <tr>
           
            <th>USUARIO</th>
            <th>FECHA PEDIDO</th>
            
        
         <?php 
         $pru =""; $nomarray = array(); $cont=0;
         foreach($listaProductos as $Productos) {
            $nomp = str_replace(' ', '_', $Productos);
            $pru  = "<th>".$Productos['nombre']."</th>".$pru; 
            $nomarray[$cont++] =  $Productos['nombre'];
            } 
           echo $pru;           var_dump($nomarray);
            ?>
         </tr>
        
    </thead>
    <tbody>

     <?php
     $prub ="";
     foreach ($listaPedidos as $pedidos) {
            $nomp = str_replace(' ', '_', $Productos);
            $prub  = "<th>".$Productos['nombre']."</th>".$prub; 
            } 
//           echo $prub;
        ?>

      
     
    </tbody>
</table>


    <p class="lead">
    <form action="Pedidos_1" method="GET">
    <input type="submit"  value="ENVIAR" class="btn btn-primary"/>
         </form>
    </p>
</div>


<?php include("../template/pie.php"); ?>