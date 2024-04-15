<!-- Cabeceras -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/head2.php'; ?>


<!-- Contenido -->

<?php
echo '
    <div class="d-flex flex-column col-12 mt-xl-3 flex-sm-row gap-1 justify-content-between p-0 m-0">
    <div class="d-flex justify-content-around gap-1 col-12 col-sm-6">
        <a href="' . base_url . 'lists/index" id="lists" class="btn bg-primary rounded-3 text-white  border-1 border-light col-5 col-sm-5 col-md-4  fw-semibold f-little">Listas</a>
        <a href="' . base_url . 'lists/upcoming" id="upcoming" class="btn bg-secondary-emphasis rounded-3 border-1 border-dark-subtle col-5 col-sm-5 col-md-4 fw-semibold f-little">Próximas</a>

    </div>
    <div class="d-flex justify-content-around gap-1 col-12 col-sm-6">

        <a href="' . base_url . 'lists/pending" id="pending" class="btn bg-body rounded-3 border-1 border-dark-subtle col-5 col-sm-5 col-md-4 fw-semibold f-little">Pendientes</a>
        <a href="' . base_url . 'lists/completed" id="completed" class="btn bg-body rounded-3 border-1 border-dark-subtle col-5 col-sm-5 col-md-4 fw-semibold f-little">Completas</a>
    </div>
</div>
<div class="d-flex flex-column col-12 mt-1 mt-xl-3 gap-2 p-2 ">';

if ($result) {
    foreach ($result as $list) {
        // Si no esta en la papelera/
        if ($list[7] == 0) {
            // Si no esta completo
            if ($list[8] == 0) {

                echo
                '<div class="w-100 rounded-4 border border-1 border-dark-subtle p-1 pe-3 ps-3">
                        <div class="d-flex w-100 justify-content-end gap-2">
        
                            <div>
                                <img src="/lista-simple/assets/img/iconos/editar.svg" alt="" class="iconslist">
                            </div>
                            <div>
                                <img src="/lista-simple/assets/img/iconos/papelera.svg" alt="" class="iconslist">
                            </div>
                        </div>
                
                        <div class="d-flex w-100 justify-content-start">';
                echo '<span class="fs-5 fw-semibold">' . $list[2] . '</span>';

                echo
                '</div>
                
                        <div class="d-flex w-100 justify-content-between">
         
                            <div class="text-primary fw-semibold">';
                if ($list[5] != '0000-00-00 00:00:00') {
                    $notification = Utils::dateFormatter($list[5]);
                    echo '<span class="f-little">' . $notification . '</span>';
                }

                echo '           
                            </div>
                            <div class="fw-semibold">
                
                                1/10
                            </div>
                        </div>
                    </div>';
            } else {
                // Si esta completo
                echo
                '<div class="w-100 rounded-4 border border-1 border-dark-subtle p-1 pe-3 ps-3 bg-body-secondary">
                        <div class="d-flex w-100 justify-content-end gap-2">
                            <div>
                                <img src="/lista-simple/assets/img/iconos/editar.svg" alt="" class="iconslist">
                            </div>
                            <div>
                                <img src="/lista-simple/assets/img/iconos/papelera.svg" alt="" class="iconslist">
                            </div>
                        </div>
                
                        <div class="d-flex w-100 justify-content-start text-secondary text-decoration-line-through">';
                echo '<span class="fs-5 fw-semibold">' . $list[2] . '</span>';

                echo
                '</div>
                
                        <div class="d-flex w-100 justify-content-between">
                            <div class="text-secondary  text-decoration-line-through">';
                if ($list[5] != '0000-00-00 00:00:00') {
                    $notification = Utils::dateFormatter($list[5]);
                    echo '<span class="fw-semibold f-little">' . $notification . '</span>';
                }

                echo   '</div>
                            <div class="text-secondary fw-semibold text-decoration-line-through">
                                10/10
                            </div>
                        </div>
                    </div>';
            }
        }
    }
} else {


    echo '<h5>No tiene listas aún.</h5>';
}

?>


</div>


<div class="rounded-circle border border-1 bg-success d-flex align-items-center justify-content-center position-fixed bottom-0 end-0 mb-xl-0 me-3 me-xl-5 shadow add" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <img src="/lista-simple/assets/img/iconos/add-l.svg" alt="Foto de perfil de usuario" class="icon-list">
</div>


<!-- Modal -->
<div class="modal fade mt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5 " id="exampleModalLabel">Nueva lista</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="listForm" action="<?= base_url ?>lists/save" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label w-100 text-start">Nombre lista</label>
                        <input type="text" class="form-control" id="name" placeholder="Nombre" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="notification" class="form-label w-100 text-start">Recordatorio</label>
                        <input type="datetime-local" class="form-control" id="notification" name="notification">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label w-100 text-start">Descripción</label>
                        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="listForm" class="btn btn-success text-white">Guardar</button>
            </div>
        </div>
    </div>
</div>


</div>

<!-- Pie de página -->
<?php
require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php';
?>