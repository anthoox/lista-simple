<!-- Cabeceras -->
<?php require_once base_host . 'views/layout/head2.php'; ?>


<!-- Contenido -->
<div class="d-flex flex-column col-12 mt-xl-3 flex-sm-row gap-1 justify-content-around p-0 m-0">
    <div class="d-flex  gap-1 col-12 col-md-6 justify-content-center gap-5">
        <h2><a id="empty-trash" class="btn bg-success rounded-3 text-white  border-1 border-light btn-style f-little" data-bs-toggle="modal" data-bs-target="#emptyModal">Vaciar</a></h2>

        <h2><a id="restore-lists" class="btn bg-success rounded-3 text-white border-1 border-light  btn-style f-little" data-bs-toggle="modal" data-bs-target="#restoreModal">Restaurar</a></h2>
    </div>
</div>
<div class="d-flex flex-column col-12 mt-xl-3 gap-2 p-0">
    <?php
    $lists = new listsController();
    $result = $lists->paper_bin();


    if (isset($result) && empty(!$result)) {

        foreach ($result as $list) {
            if ($list[8] == 0) {
                $items = new itemsController();
                $itemsData = $items->numItems($list[0]);

                echo
                '<div class="w-100 rounded-4 border border-1 border-dark-subtle p-1 pe-3 ps-3 btn-style  select-style">
                    <div class="d-flex w-100 justify-content-end gap-2">
    
                        <div>                        
                            <img src="' . web . 'img/iconos/restaurar.svg" alt="Icono para restaurar lista"  class="iconslist btn-rest"  data-list-id=' . $list[0] . '>
                        </div>

                        <div class="cnt-btn-del d-none">
                            <img src="' . web . 'img/iconos/papelera.svg" alt="Icono papelera para eliminar lista" class="iconslist btn-delete"  data-list-id=' . $list[0] . '>
                        </div>
                    </div>
            
                    <div class="d-flex w-100 justify-content-start">' .
                    '<span class="fs-5 fw-semibold text-secondary span-style">' . $list[2] . '</span>' .
                    '</div>
            
                    <div class="d-flex w-100 justify-content-between">
     
                        <div class=" ">';
                if ($list[5] != '0000-00-00 00:00:00') {
                    $notification = Utils::dateFormatter($list[5]);
                    echo '<span class="f-little fw-semibold text-secondary ">' . $notification . '</span>';
                }

                echo '           
                        </div>

                        <div class="fw-semibold text-secondary ">' .
                    $itemsData["completed_items"] . '/' . $itemsData["total_items"] . '
                        </div>

                    </div>
                </div>';
            } else {
                // Si esta completo
                $items = new itemsController();
                $itemsData = $items->numItems($list[0]);
                echo
                '<div class="w-100 rounded-4 border border-1 border-dark-subtle p-1 pe-3 ps-3 bg-body-secondary btn-style select-style">
                    <div class="d-flex w-100 justify-content-end gap-2">
                        <div>
                            <img src="' . web . 'img/iconos/restaurar.svg" alt="Icono para restuarar lista"  class="iconslist btn-rest" data-list-id=' . $list[0] . '">
                        </div>
                        <div class="cnt-btn-del d-none">
                            <img src="' . web . 'img/iconos/papelera.svg" alt="Icono para eliminar lista" class="iconslist btn-delete"  data-list-id=' . $list[0] . '">
                        </div>
                    </div>
            
                    <div class="d-flex w-100 justify-content-start text-secondary text-decoration-line-through">';
                echo '<span class="fs-5 fw-semibold span-style">' . $list[2] . '</span>';

                echo
                '</div>
            
                    <div class="d-flex w-100 justify-content-between">
                        <div class="  ">';
                if ($list[5] != '0000-00-00 00:00:00') {
                    $notification = Utils::dateFormatter($list[5]);
                    echo '<span class="fw-semibold f-little text-secondary text-decoration-line-through">' . $notification . '</span>';
                }

                echo   '</div>
                        <div class="text-secondary fw-semibold text-decoration-line-through">' .
                    $itemsData["completed_items"] . ' / ' . $itemsData["total_items"] . '

                        </div>
                    </div>
                </div>';
            }
        }
    } elseif ($result == 1) {

        echo '<h5>Error al cargar listas</h5>';
    } else {
        echo '<h5>Sin listas</h5>';
    }

    ?>

    <?php require_once base_host . 'views/modals/modalEmpty.php'; ?>
    <?php require_once base_host . 'views/modals/modalRestore.php'; ?>


</div>





</div>


<!-- Pie de página -->
<?php
require_once base_host . 'views/layout/footer.php';
?>