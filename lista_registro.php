<?php 
session_start();
error_reporting(0);

include 'conexion.php';


$varsesion = $_SESSION['usuario'];
$sql = "SELECT tb_usuario.id_usuario_reg, tb_usuario.email, reg_event.id_reg,reg_event.arbol,reg_event.area,reg_event.especie,reg_event.trabajo_realizar,reg_event.trabajo_realizar,reg_event.altura,reg_event.diametro,reg_event.ubicacion,reg_event.colonia 
FROM tb_usuario
INNER JOIN reg_event
ON tb_usuario.id_usuario_reg = reg_event.id_usuario_reg
WHERE tb_usuario.email = '$varsesion'";

if($varsesion == null || $varsesion = ''){
    echo "<script>alert('Favor de iniciar sesión')</script>; <script>window.location='signin.php'</script>";
}

$sentencia = $pdo->prepare($sql);
$sentencia->execute();
$resultado = $sentencia->fetchAll();

?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Template · Bootstrap v5.1</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <!-- FontAwensome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">

        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
            <?php echo $_SESSION['usuario']?>
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Sign out</a>
            </div>
        </div>

    </header>

    <div class="container-fluid">
        <div class="row">

            <!--  TODO:  sidebar -->
            <?php include 'complementos/sidebar.php' ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Todos los registros</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div>



                <h2></h2>

                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Usuario</th>
                                <th>Arbol</th>
                                <th>Area</th>
                                <th>especie</th>
                                <th>Trabajo_realizar</th>
                                <th>Altura</th>
                                <th>Diametro</th>
                                <th>ubicacion</th>
                                <th>Colonia</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($resultado as $reg_evento):?>
                            <tr>
                                <td><?php echo $reg_evento['id_reg']?></td>
                                <td><?php echo $reg_evento['email']?></td>
                                <td><?php echo $reg_evento['arbol']?></td>
                                <td><?php echo $reg_evento['area']?></td>
                                <td><?php echo $reg_evento['especie']?></td>
                                <td class="h6" style="font-size: 14px;"><?php echo $reg_evento['trabajo_realizar']?>
                                </td>
                                <td><?php echo $reg_evento['altura']?></td>
                                <td><?php echo $reg_evento['diametro']?></td>
                                <td><?php echo $reg_evento['ubicacion']?></td>
                                <td><?php echo $reg_evento['colonia']?></td>
                                <td>
                                    <a href="detalle_evento.php?id=<?php echo $reg_evento['id_reg'];?>">
                                        <button  class="btn btn-info" type="button">Ver detalles</button>
                                    </a>
                                </td>
                            </tr>

                            <?php endforeach ?>
                        </tbody>
                    </table>


                </div>
            </main>
        </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="js/dashboard.js"></script>
</body>

</html>