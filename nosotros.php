<?php include("template/cabecera.php"); ?>
<div class="jumbotron">
    <h1 class="display-3">La fabrica del frito</h1>
    <p class="lead"></p>
    <hr class="my-2">
    </br>
</div>


<div class="container">
    <div class="row">
        <div class="col-xl-6 col-sm-6 col-md-6" style="text-align:justify;">
            <p>Somos una empresa con una gran trayectoria, dedicados a distribuir productos como Empanadas, Pasteles, Palitos de queso y mas;
                con una gran variedad de sabores que nos identifican con sabores unicos e inigualables, distrubuyendo en gran parte de la ciudad de Medellín
                productos fritos y pre fritos, dando opciones a nuestros clientes de adquirir nuestros productos.
                Si deseas disfrutar de nuestros sabores puedes encontrarnos en el barrio Boston, cerca al tran via.
                Si deseas comprar al por mayor comunicate con nosotros, esteremos encantados de llevarte nuestros productos a la puerte de tu negocio.
            </p>
        </div>
        <div style="height: 300px; width: 40%;">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/1631333920_descarga.jfif" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/1629607679_cimbinado.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/1629576074_de pollo.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </div>
    </br></br> </br></br>
</div>

</div>

<div class="footer">
    <div class="container-fluid">
        <div style="display:flex; justify-content:center" class="row">
            <div class=" col-md-12">
                <h2 class="sena">Escríbenos<strong class="white"> </strong></h2>
            </div>


            <div style="display:flex; justify-content:center; width:50%" class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                <form class="main_form">
                    <div class="row">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <label for=""></label>
                            <input class="form-control" placeholder="Nombre" type="text" name="Nombre">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <label for=""></label>
                            <input class="form-control" placeholder="Email" type="text" name="Email">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <label for=""></label>
                            <input class="form-control" placeholder="Telefono" type="text" name="Telefono">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <label for=""></label>
                            <textarea class="textarea form-control" placeholder="Mensaje" type="text" name="Mensaje"></textarea>
                        </div>
                        <div style="display:flex; justify-content:center" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                            <button style="margin:25px 0" class="btn btn-primary btn-lg">Enviar</button>
                        </div>
                    </div>
                </form>
                </br></br></br>
            </div>

            <?php include("template/pie.php"); ?>