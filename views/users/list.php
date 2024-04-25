<!-- Cabeceras -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/head2.php'; ?>

<!-- Contenido -->
<div class="d-flex col-12 mt-xl-3 justify-content-between  align-items-center p-1  pe-3 ps-3 m-0 border-1 border-bottom border-top">

    <span class="fw-semibold fs-4">
        Total: --
    </span>



    <a href="">
        <img src="/lista-simple/assets/img/iconos/info.svg" alt="Icono de información de lista" class="iconslist-lg">
    </a>

</div>

<div class="d-flex flex-column col-12 mt-2 mt-md-4 gap-2 p-2 ">
    <?php

    if (isset($result) && !empty($result)) {
        foreach ($result as $item) {
            // Si no esta completo/
            if ($item[8] == 0) {
                echo '
                <div class="w-100 rounded-4 border border-1 border-dark-subtle p-1 pe-3 ps-3 d-flex">
                    <div class="form-check h-100 d-flex align-items-center pe-1 border-1 border-end">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    </div>
                    <div class="w-100 ps-2 ">
                        <div class="d-flex w-100 justify-content-end  gap-2 h-25">

                            <div>
                                <img src="/lista-simple/assets/img/iconos/editar.svg" alt="Icono para editar ítem" class="iconslist">
                            </div>
                            <div>
                                <img src="/lista-simple/assets/img/iconos/papelera.svg" alt="Icono eliminar ítem" class="iconslist">
                            </div>
                        </div>
            
                        <div class="d-flex w-100 justify-content-start align-items-center h-50">
                            <span class="fw-semibold">' . $item[3] . '</span>
                        </div>
            
                        <div class="d-flex w-100 h-25">
                            <div class="d-flex w-50">
                        ';

                if ($item[6] != '0000-00-00 00:00:00') {
                    $notification = Utils::dateFormatter($item[6]);
                    echo '<span class="text-primary fw-semibold f-little">' . $notification . '</span>';
                }

                echo '  </div>
                <div class="d-flex align-items-center w-50 justify-content-end">
                    <span class="fw-semibold me-1">x' . $item[5] . '</span>

                    <span class="fw-semibold ms-1">' . $item[4] . '€ </span>
                </div>
                
                        </div>
                    </div>
            
                </div>';
                // Si no esta completo

            } else {

                echo '
                <div class="w-100 rounded-4 border border-1 border-dark-subtle p-1 pe-3 ps-3 d-flex bg-body-secondary">
                <div class="form-check h-100 d-flex align-items-center pe-1 border-1 border-end">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                </div>
                <div class="w-100 ps-2">
                    <div class="d-flex w-100 justify-content-end gap-2 h-25">
                        <!-- superior -->
                        <div>
                            <img src="/lista-simple/assets/img/iconos/editar.svg" alt="" class="iconslist">
                        </div>
                        <div>
                            <img src="/lista-simple/assets/img/iconos/papelera.svg" alt="" class="iconslist">
                        </div>
                    </div>
        
                    <div class="d-flex w-100 justify-content-start align-items-center h-50">
                    <span class="fw-semibold text-secondary text-decoration-line-through">' . $item[3] . '</span>

                    </div>
        
                    <div class="d-flex w-100 h-25">
                    <div class="d-flex w-50">
                        
                    ';

                if ($item[6] != '0000-00-00 00:00:00') {
                    $notification = Utils::dateFormatter($item[6]);
                    echo '<span class="text-secondary text-decoration-line-through fw-semibold f-little">' . $notification . '</span>';
                }

                echo '  </div>
                    <div class="d-flex align-items-center w-50 justify-content-end">
                        <span class="fw-semibold me-1 text-secondary ">x' . $item[5] . '</span>
    
                        <span class="fw-semibold ms-1 text-secondary ">' . $item[4] . '€ </span>
                    </div>
                    
                    </div>
                </div>
        
            </div>
    ';
            }
        }
    } elseif ($result == 1) {

        echo '<h5>Error al cargar elementos</h5>';
    } else {
        echo '<h5>Lista vacia</h5>';
    }
    ?>



</div>


<div class="rounded-circle border border-1 bg-success d-flex align-items-center justify-content-center position-fixed bottom-0 end-0 mb-4 me-4 add" data-bs-toggle="modal" data-bs-target="#addModal">
    <img src="/lista-simple/assets/img/iconos/add.svg" alt="Foto de perfil" class=" icon-list icon-list-sm">
</div>

<?php require_once 'C:/wamp64/www/lista-simple/views/modals/modalAddItem.php'; ?>


</div>


<!-- Pie de página -->
<?php
require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php';
?>