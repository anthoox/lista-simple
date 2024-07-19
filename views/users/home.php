<!-- Cabeceras -->

<?php require_once base_host . 'controllers/UsersController.php'; ?>
<?php require_once base_host . 'models/users.php'; ?>
<?php require_once base_host . 'views/layout/head.php'; ?>
<?php require_once base_host . 'helpers/cookies.php'; ?>


<?php
// Comprobamos si existen las cookies en el navegador para redigir
Cookies::cookiesHome();

?>

<!-- Contenido -->

<a type="button" class="movil-sm btn btn-primary rounded-1 mb-2 align-self-center text-white col-12 col-sm-8 col-md-7" href="<?= base_url ?>users/login">Probar</a>


<a type="button" class="movil-sm btn btn-success rounded-1 mb-2  align-self-center text-white col-12 col-sm-8 col-md-7" href="<?= base_url ?>users/record">Registro</a>
<p class=" w-75 col-12 col-sm-8 col-md-6 mt-5">Dale clic en <span class="fw-bold">Probar</span> y disfruta de la aplicación con el usuario de prueba o registrate para tener tu propia cuenta.</p>
</div>

<!-- Pie de página -->
<?php require_once base_host . 'views/layout/footer.php'; ?>