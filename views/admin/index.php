<!-- Cabeceras -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/head2.php'; ?>

<!-- Contenido -->
<div class="w-100 mt-xl-5">
    <h2 class="text-start  ms-xl-5 mb-5 mt-3">Alta de <br>
        usuarios</h2>
</div>

<form class="mt-2  d-flex flex-column justify-content-center movil-sm">
    <div class="mb-2">
        <label for="username" class="d-block text-start form-label">Usuario</label>
        <input type="text" class="form-control" id="username" placeholder="Usuario.com">
    </div>
    <div class="mb-2">
        <label for="email" class="d-block text-start form-label">Correo</label>
        <input type="email" class="form-control" id="email" placeholder="correo@correo.com">
    </div>
    <div class="mb-2">
        <label for="password" class="d-block text-start form-label">Contraseña</label>
        <input type="password" class="form-control" id="password">
    </div>

    <button type="submit" class="btn btn-success rounded-1 mt-2 mb-2 text-white">Guardar</button>

</form>

<span class="text-danger fw-semibold f-little">Error en el alta</span>
<span class="text-success fw-semibold f-little">Usuario creado</span>

<div class="mt-4 mb-4 w-100">
    <hr>
</div>

<div class="w-100 ">
    <h2 class="text-start ms-xl-5 mb-5 mt-3">Buscar <br>
        usuario</h2>
</div>

<form class="mt-2  d-flex flex-column justify-content-center movil-sm">

    <div class="mb-2">
        <label for="email" class="d-block text-start form-label">Correo</label>
        <input type="email" class="form-control" id="email" placeholder="correo@correo.com">
    </div>

    <button type="submit" class="btn btn-primary rounded-1 mt-2 mb-2 text-white">Buscar</button>

</form>

<span class="text-danger fw-semibold f-little">Usuario no encontrado</span>



<div class="mt-4 mb-4 w-100">
    <hr>
</div>

<div class="w-100">
    <h2 class="text-start  ms-xl-5 mb-5 mt-3">Usuarios</h2>
</div>
<div class="mt-2  overflow-scroll movil-sm movil-sm-h">
    <table class="table table-striped  ">
        <thead>
            <tr class="table-primary">
                <th scope="col">#</th>
                <th scope="col">Usuario</th>
                <th scope="col">correo</th>
                <th scope="col">alta</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto@otoo.com</td>
                <td>14/02/2024</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td ñ>Larry the Bird</td>
                <td>Thornton</td>
                <td>@twitter</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td ñ>Larry the Bird</td>
                <td>Thornton</td>
                <td>@twitter</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td ñ>Larry the Bird</td>
                <td>Thornton</td>
                <td>@twitter</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td ñ>Larry the Bird</td>
                <td>Thornton</td>
                <td>@twitter</td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td ñ>Larry the Bird</td>
                <td>Thornton</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>

</div>


<div class="mt-4 mb-4 w-100">
    <hr>
</div>

<div class="w-100">
    <h2 class="text-start  ms-xl-5 mb-5 mt-3">Gestion<br>
        de cuentas</h2>
</div>
<h3 class="m-2 "><span class="text-danger">¡</span>Advertencia<span class="text-danger">!</span>, estas funciones pueden borrar los datos.</h3>
<form action="" class="mt-2 movil-sm d-flex flex-column justify-content-center align-items-center flex-sm-row justify-content-sm-between">


    <button type="submit" class="btn btn-success rounded-1  mt-2 mb-2 text-white  button-w">Reset cuentas</button>
    <button type="submit" class="btn btn-primary rounded-1 mt-2 mb-2 text-white button-w ">Reset claves</button>
    <button type="submit" class="btn btn-danger rounded-1  mt-2 mb-2 text-white  button-w ">Vaciar BD</button>

</form>
<div class="d-flex flex-column movil-sm">
    <span class="text-success fw-semibold f-little">Cuentas reseteadas</span>
    <span class="text-primary fw-semibold f-little">Claves reseteadas</span>
    <span class="text-danger fw-semibold f-little">Base de datos vaciada</span>

</div>

</div>


<!-- Pie de página -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/footer2.php'; ?>