
<?php include("../config/verificar.php"); 
include("../template/cabecera.php"); ?>
<?php include("./productosback.php"); ?>


<div class="col-md-5">

<div class="card">
    <div class="card-header">
        Datos de los productos
    </div>

    <div class="card-body">

<form method="POST" enctype="multipart/form-data">


<div class = "form-group">
<label for="txtID">ID:</label>
<input type="text" required readonly class="form-control" value="<?php echo $txtID ?>" name="txtID" id="txtID" placeholder="ID">
</div>

<div class = "form-group">
<label for="txtNombre">Nombre:</label>
<input type="text" required class="form-control" value="<?php echo $txtNombre ?>" name="txtNombre" id="txtNombre" placeholder="Nombre del producto" focus="true">
</div>

<div class = "form-group">
<label for="txtIva">Iva:</label>
<input type="text" class="form-control" value="<?php echo $txtIva ?>" name="txtIva" id="txtIva" placeholder="Iva del producto">
</div>

<div class = "form-group">
<label for="txtDescripcion">Descripcion:</label>
<input type="text" required class="form-control" value="<?php echo $txtDescripcion ?>" name="txtDescripcion" id="txtDescripcion" placeholder="Descripcion del producto">
</div>

<div class = "form-group">
<label for="txtPrecio">Precio:</label>
<input type="text" required class="form-control" value="<?php echo $txtPrecio ?>" name="txtPrecio" id="txtPrecio" placeholder="Precio del producto">
</div>

<div class = "form-group">
<label for="txtImagen">Imagen:</label>

<br/>

<?php echo $txtImagen; ?>

<?php if($txtImagen!=""){ ?>

    <img class="img-thumbnail rounded" src="../../img/<?php echo $txtImagen;?>" width="50" alt="" srcset="">
<?php  }  ?>



<input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Imagen del producto">
</div>

<div class="btn-group" role="group" aria-label="">
    <button type="submit" name="accion" <?php echo ($accion=="" || $accion== "seleccionar")?"disabled":"";  ?> value="Agregar" class="btn btn-success">Agregar</button>
    <button type="submit" name="accion" <?php echo ($accion!="seleccionar")?"disabled":"";  ?> value="Modificar" class="btn btn-warning">Modificar</button>
    <button type="submit" name="accion" <?php echo ($accion!="seleccionar")?"disabled":"";  ?> value="Cancelar" class="btn btn-info">Cancelar</button>
</div>



</form>

    </div>
    
    </div>

</div>

<div class="col-md-7">
    
<table class="table table-bordered ">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Iva</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($listaProductos as $productos) {?>
        <tr>
            <td><?php echo $productos['id']; ?></td>
            <td><?php echo $productos['nombre']; ?></td>
            <td><?php echo $productos['iva']; ?></td>
            <td><?php echo $productos['descripcion']; ?></td>
            <td><?php echo $productos['precio']; ?></td>
           
           <td>
            <img src="../../img/<?php echo $productos['imagen']; ?>" width="50" alt="" srcset="">
           
            


        </td>
                
        <td>
         <form method="post">

    <input type="hidden" name="txtID" id="txtID" value="<?php echo $productos['id']; ?>"/>
    <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary"/>
    <input onclick = "return confirm('¿Realmente desea eliminar?')" type="submit" name="accion" value="Borrar" class="btn btn-danger"/>
  


        </form>
        </td>
        </tr>
        
        <?php } ?>
     
    </tbody>
</table>


</div>


<?php include("../template/pie.php"); ?>

     

      