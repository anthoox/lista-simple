<!-- Cabeceras -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/head2.php'; ?>

<!-- Contenido -->
<div class="d-flex flex-column mt-2 col-12 mt-xl-3 flex-sm-row gap-1 justify-content-around p-0 m-0">
    <div class="d-flex justify-content-around gap-1 col-12 col-sm-6">
        <a class="btn bg-primary rounded-3 text-white  border-1 border-light col-5 col-sm-5  fw-semibold f-little">Vaciar</a>
        <a class="btn bg-secondary-emphasis rounded-3 border-1 border-dark-subtle col-5 col-sm-5 fw-semibold f-little">Restaurar</a>
    </div>
</div>
<div class="d-flex flex-column col-12 mt-2 mt-md-4 gap-2 p-2 ">
    <?php
    $lists = new ListsController();
    $result = $lists->paper_bin();


    if (isset($result) && empty(!$result)) {

        foreach ($result as $list) {
            // Si no esta en la papelera/
            // if ($list[7] == 1) {
            // Si no esta completo
            if ($list[8] == 0) {

                echo
                '<div class="w-100 rounded-4 border border-1 border-dark-subtle bg-body-secondary p-1 pe-3 ps-3">
                    <div class="d-flex w-100 justify-content-end gap-2">
    
                        <div>
                        
                            <img src="/lista-simple/assets/img/iconos/restaurar.svg" alt="Icono de lapiz para editar datos de lista" class="iconslist btn-edit"  data-bs-toggle="modal" data-bs-target="#editModal"  data-list-id=' . $list[0] . '>
                        </div>
                        <div>
                            <img src="/lista-simple/assets/img/iconos/papelera.svg" alt="Icono papelera para eliminar lista" class="iconslist btn-del"  data-list-id=' . $list[0] . '>
                        </div>
                    </div>
            
                    <div class="d-flex w-100 justify-content-start">';
                echo '<span class="fs-5 fw-semibold text-secondary ">' . $list[2] . '</span>';

                echo
                '</div>
            
                    <div class="d-flex w-100 justify-content-between">
     
                        <div class=" ">';
                if ($list[5] != '0000-00-00 00:00:00') {
                    $notification = Utils::dateFormatter($list[5]);
                    echo '<span class="f-little fw-semibold text-secondary ">' . $notification . '</span>';
                }

                echo '           
                        </div>
                        <div class="fw-semibold text-secondary ">
            
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
                            <img src="/lista-simple/assets/img/iconos/restaurar.svg" alt="" class="iconslist btn-edit"  data-bs-toggle="modal" data-bs-target="#editModal"  data-list-id=' . $list[0] . '">
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
                        <div class="  ">';
                if ($list[5] != '0000-00-00 00:00:00') {
                    $notification = Utils::dateFormatter($list[5]);
                    echo '<span class="fw-semibold f-little text-secondary text-decoration-line-through">' . $notification . '</span>';
                }

                echo   '</div>
                        <div class="text-secondary fw-semibold text-decoration-line-through">
                            10/10
                        </div>
                    </div>
                </div>';
            }
            // }
        }
    } elseif ($result == 1) {

        echo '<h5>Error al cargar listas</h5>';
    } else {
        echo '<h5>Sin listas</h5>';
    }

    ?>



</div>





</div>


<!-- Pie de página -->
<?php
require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php';
?>