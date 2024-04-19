<?php require_once 'C:/wamp64/www/lista-simple/views/layout/head2.php'; ?>


<!-- Contenido -->

<div class="d-flex flex-column col-12 mt-xl-3 flex-sm-row gap-1 justify-content-between p-0 m-0">
    <div class="d-flex justify-content-around gap-1 col-12 col-sm-6">
        <a href="<?= base_url ?>lists/index" id="lists" class="btn bg-primary rounded-3 text-white  border-1 border-light col-5 col-sm-5 col-md-4  fw-semibold f-little">Listas</a>
        <a href="<?= base_url ?>lists/upcoming" id="upcoming" class="btn bg-secondary-emphasis rounded-3 border-1 border-dark-subtle col-5 col-sm-5 col-md-4 fw-semibold f-little">Próximas</a>

    </div>
    <div class="d-flex justify-content-around gap-1 col-12 col-sm-6">

        <a href="<?= base_url ?>lists/pending" id="pending" class="btn bg-body rounded-3 border-1 border-dark-subtle col-5 col-sm-5 col-md-4 fw-semibold f-little">Pendientes</a>
        <a href="<?= base_url ?>lists/completed" id="completed" class="btn bg-body rounded-3 border-1 border-dark-subtle col-5 col-sm-5 col-md-4 fw-semibold f-little">Completas</a>
    </div>
</div>
<div class="d-flex flex-column col-12 mt-1 mt-xl-3 gap-2 p-2 ">

    <?php

    if (isset($result) && empty(!$result)) {

        foreach ($result as $list) {
            // Si no esta en la papelera/
            if ($list[7] == 0) {
                // Si no esta completo
                if ($list[8] == 0) {

                    echo
                    '<div class="w-100 rounded-4 border border-1 border-dark-subtle p-1 pe-3 ps-3">
                        <div class="d-flex w-100 justify-content-end gap-2">
        
                            <div>
                            
                                <img src="/lista-simple/assets/img/iconos/editar.svg" alt="Icono de lapiz para editar datos de lista" class="iconslist btn-edit"  data-bs-toggle="modal" data-bs-target="#editModal"  data-list-id=' . $list[0] . '>
                            </div>
                            <div>
                                <img src="/lista-simple/assets/img/iconos/papelera.svg" alt="Icono papelera para eliminar lista" class="iconslist btn-del"  data-list-id=' . $list[0] . '>
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
                                <img src="/lista-simple/assets/img/iconos/editar.svg" alt="" class="iconslist btn-edit"  data-bs-toggle="modal" data-bs-target="#editModal"  data-list-id=' . $list[0] . '">
                            </div>
                            <div>
                                <img src="/lista-simple/assets/img/iconos/papelera.svg" alt="" class="iconslist btn-del"  data-list-id=' . $list[0] . '">
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
    } elseif ($result == 1) {

        echo '<h5>Error al cargar listas</h5>';
    } else {
        echo '<h5>Sin listas</h5>';
    }

    ?>


</div>


<div class="rounded-circle border border-1 bg-success d-flex align-items-center justify-content-center position-fixed bottom-0 end-0 mb-xl-0 me-3 me-xl-5 shadow add" data-bs-toggle="modal" data-bs-target="#addModal">
    <img src="/lista-simple/assets/img/iconos/add-l.svg" alt="Foto de perfil de usuario" class="icon-list">
</div>


<!-- Modal ADD -->
<?php require_once 'C:/wamp64/www/lista-simple/views/modals/modalAddList.php'; ?>

<!-- Modal EDIT -->
<?php require_once 'C:/wamp64/www/lista-simple/views/modals/modalEditList.php'; ?>
</div>

<!-- Pie de página -->
<?php
require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php';
?>