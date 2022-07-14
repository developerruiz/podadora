<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">
        <form action="proceso/valida_sesion.php" method="POST">
            <img class="mb-4" src="img/portada.png" alt="" width="150">
            <h1 class="h4 mb-3 fw-normal fw-bold">Panel de registro</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                <label for="email">Correo electrónico</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="contraseña" placeholder="contraseña" name="contraseña">
                <label for="contraseña">Contraseña</label>
            </div>

            <button class="w-100 mt-3 btn btn-lg bg-p" type="submit">Iniciar sesión</button>
            <p class="mt-5 mb-3 text-muted">&copy;CodeRuiz 2022-2023</p>
        </form>
    </main>


    <!-- <script>
        function ingresar(){
                window.location = 'home.php';
        }
    </script> -->

</body>

</html>