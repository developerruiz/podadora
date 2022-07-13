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


    <main>

        <section>
            <div class="container d-flex justify-content-center">
                <div class=" col-lg-10 col-12 my-4">
                    <h4 class="text-center py-3">
                        Registro de informacion de tala
                    </h4>
                    <form class="d-flex flex-wrap" action="procesos/registrar.php">
                        <div class="col-6 p-2">
                            <div class="label">Arbol</div>
                            <input type="text" name="arbol" id="arbol" class="form-control">
                        </div>
                        <div class="col-6 p-2">
                            <div class="label">Área</div>
                            <input type="text" name="area" id="area" class="form-control">
                        </div>
                        <div class="col-6 p-2">
                            <div class="label">Especie</div>
                            <input type="text" name="especie" id="especie" class="form-control">
                        </div>
                        <div class="col-6 p-2">
                            <div class="label">Colonia</div>
                            <input type="text" name="colonia" id="colonia" class="form-control">
                        </div>
                        <div class="col-12 p-2">
                            <div class="label">Trabajo realizar</div>
                            <textarea name="trabajo_realizar" id="trabajo_realizar" cols="30" rows="10"
                                class="form-control"></textarea>
                        </div>
                        <div class="col-6 p-2">
                            <div class="label">Altura</div>
                            <input type="text" name="altura" id="altura" class="form-control">
                        </div>
                        <div class="col-6 p-2">
                            <div class="label">Diametro</div>
                            <input type="text" name="diametro" id="diametro" class="form-control">
                        </div>
                        <div class="col-12 p-2">
                            <div class="label">Ubicación</div>
                            <input type="text" name="ubicacion" id="ubicacion" class="form-control">
                        </div>


                        <div class="form-group col-md-6">
                            <label class="fw-bold my-2" for="">Imagen</label>
                            <br>
                            <input type="file" name="imagen1" id="imagen">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="fw-bold my-2" for="">Imagen</label>
                            <br>
                            <input type="file" name="imagen2" id="imagen">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="fw-bold my-2" for="">Imagen</label>
                            <br>
                            <input type="file" name="imagen3" id="imagen">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="fw-bold my-2" for="">Imagen</label>
                            <br>
                            <input type="file" name="imagen4" id="imagen">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="fw-bold my-2" for="">Imagen</label>
                            <br>
                            <input type="file" name="imagen5" id="imagen">
                        </div>
                        <div class="col-12 my-4">
                            <button type="submit" class="btn bg-p btn-lg">Registrar</button>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </main>


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