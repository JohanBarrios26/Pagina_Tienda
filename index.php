<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php
      include ("../pagina/views/modulos/head.php");    
    ?>
</head>

<body>
    <!-- Boton Carrito-->
    <a href="#" class="btn-flotante" id="btnCarrito">CARRITO <span class="badge bg-success" id="carrito">0</span></a>
    <!-- Navigation-->
    <?php
  include("../pagina/views/modulos/menu.php");
  ?>
    <!-- Header-->
    <header>
    <div class="container_imagen">
        <h1 class="display-4 fw-bolder">Libera Tu Estilo</h1>
    </div>
    </header>
    <!-- Start Featured Product -->
    <section class="bg-light">
    <div class="container py-5">
    <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Los más vendidos</h1>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                $query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria LIMIT 0,4");
                $result = mysqli_num_rows($query);
                if ($result > 0) {
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <div class="col mb-5 productos" category="<?php echo $data['categoria']; ?>">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem"></div>
                                <!-- Product image-->
                                <img class="card-img-top" src="assets/img/<?php echo $data['imagen']; ?>" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?php echo $data['nombre'] ?></h5>
                                        <span class="fw-bolder">$<?php echo $data['precio_normal'] ?></span>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                     </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto agregar" data-id="<?php echo $data['id']; ?>" href="#">Agregar</a></div>
                                </div>
                            </div>
                        </div>
                <?php  }
                } ?>

            </div>
        </div>
    </section>
    <!-- End Featured Product -->
        <footer>
    <?php
  include("../pagina/views/modulos/footer.php");
  ?>
    </footer>
</body>

</html>