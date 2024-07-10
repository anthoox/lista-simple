<!-- Cabeceras -->
<?php require_once base_host . 'views/layout/head2.php'; ?>
<?php
$list = new listsController();
if (isset($_GET['id'])) {

    $_SESSION['the-list'] = $_GET['id'];
    $data = $list->getList($_GET['id']);
} elseif ($_SESSION['the-list']) {
    $data = $list->getList($_SESSION['the-list']);
}
$items = new itemsController();
$totalPrice = $items->totalPrice($data['id']);
$price = number_format((float)$totalPrice['totalPrice'], 2)
?>

<!-- Contenido -->
<div class="d-flex col-12 mt-xl-3 justify-content-between  align-items-center p-0 mt-1">
    <a href="<?= base_url ?>lists/index" class=" d-none d-xl-flex align-items-center fw-semibold fs-4 text-star text-decoration-none text-black">
        <img src="<?= base_url ?>assets/img/iconos/return.svg" alt="Icono para volver a la página anterior" class="iconslist-lg"> <span class="fs-6 ">Volver</span>


    </a>

    <h2 class="fw-semibold  text-left">
        <?= $data['name']; ?>

    </h2>


    <span class="fw-semibold fs-6  m-0 text-end">

        Total: <?= $price . '€' ?>

    </span>

</div>

<div class="d-flex flex-column col-12  mt-md-4 gap-2  ">
    <?php

    if (isset($result) && !empty($result)) {
        foreach ($result as $item) {
            // Si no esta completo/
            if ($item[8] == 0) {
                echo '
                <div class="w-100 rounded-4 border border-1 border-dark-subtle p-1 pe-3 ps-3 d-flex btn-style select-style"  >
                    <div class="form-check h-100 d-flex align-items-center pe-1 border-1 border-end" >
                        <input class="form-check-input check-box" type="checkbox" value="" id="flexCheckDefault"  data-list-id="' . $item[0] . '">
                    </div>
                    <div class="w-100 ps-2 d-flex justify-content-between flex-column">
                        <div class="d-flex w-100 justify-content-end  gap-2 h-25">

                            <div>
                                <img src="' . base_url . '/assets/img/iconos/editar.svg" alt="Icono para editar ítem" class="iconslist btn-edit-item" data-bs-toggle="modal" data-bs-target="#editItemModal"  data-list-id="' . $item[0] . '">
                            </div>
                            <div class="cnt-btn-del d-none">
                                <img src="' . base_url . '/assets/img/iconos/papelera.svg" alt="Icono eliminar ítem" class="iconslist btn-del-item" data-list-id="' . $item[0] . '">
                            </div>
                        </div a>
            
                        <div class="d-flex w-100 justify-content-start align-items-center h-25 ">
                            <span class="fw-semibold span-style">' . $item[3] . '</span>
                        </div>
            
                        <div class="d-flex w-100 h-25">
                            <div class="d-flex w-50">';

                // if ($item[6] != '0000-00-00 00:00:00') {
                //     $notification = Utils::dateFormatter($item[6]);
                //     echo '<span class="text-primary fw-semibold f-little">' . $notification . '</span>';
                // }

                echo '  </div>
                            <div class="d-flex align-items-center w-50 justify-content-end">
                                <span class="fw-semibold me-1">x' . $item[5] . '</span>';
                if (isset($item[4]) &&  $item[4] != '0.00') {
                    $num = $item[4];
                    // Verificar si el número tiene decimales
                    if (strpos($num, '.') !== false) {
                        // Si tiene decimales diferentes de .00, mostrar el número completo
                        if (preg_match('/\.(\d*[1-9])/', $num)) {
                            echo '<span class="fw-semibold ms-1">' . $num . '€ </span>';
                        } else {
                            // Si el número es entero o tiene decimales .00, quitar los .00
                            $num =  number_format($num, 0, '.', '');
                            echo '<span class="fw-semibold ms-1">' . $num . '€ </span>';
                        }
                    } else {
                        // Si el número es entero, simplemente mostrarlo
                        echo '<span class="fw-semibold ms-1">' . $num . '€ </span>';
                    }
                }
                echo '  </div>
                
                        </div>
                    </div>
            
                </div>';
                // Si no esta completo

            } else {

                echo '
                <div class="w-100 rounded-4 border border-1 border-dark-subtle p-1 pe-3 ps-3 d-flex bg-body-secondary btn-style select-style">
                    <div class="form-check h-100 d-flex align-items-center pe-1 border-1 border-end">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"  data-list-id="' . $item[0] . '" checked >

                    </div>
                    <div class="w-100 ps-2 d-flex justify-content-between flex-column">
                        <div class="d-flex w-100 justify-content-end gap-2 h-25">
                            <!-- superior -->
                            <div>
                                <img src="' . base_url . '/assets/img/iconos/editar.svg" alt="Icono para editar ítem" class="iconslist btn-edit-item" data-bs-toggle="modal" data-bs-target="#editItemModal"  data-list-id="' . $item[0] . '">
                            </div>
                            <div class="cnt-btn-del d-none">
                                <img src="' . base_url . '/assets/img/iconos/papelera.svg" alt="Icono eliminar ítem" class="iconslist btn-del-item" data-list-id="' . $item[0] . '">
                            </div>
                        </div>
            
                        <div class="d-flex w-100 justify-content-start align-items-center h-25">
                            <span class="fw-semibold text-secondary text-decoration-line-through span-style">' . $item[3] . '</span>

                        </div>
        
                    <div class="d-flex w-100 h-25">
                    <div class="d-flex w-50">
                      </div>
                            <div class="d-flex align-items-center w-50 justify-content-end">
                                <span class="fw-semibold me-1">x' . $item[5] . '</span>';
                if (isset($item[4]) &&  $item[4] != '0.00') {
                    $num = $item[4];
                    // Verificar si el número tiene decimales
                    if (strpos($num, '.') !== false) {
                        // Si tiene decimales diferentes de .00, mostrar el número completo
                        if (preg_match('/\.(\d*[1-9])/', $num)) {
                            echo '<span class="fw-semibold ms-1">' . $num . '€ </span>';
                        } else {
                            // Si el número es entero o tiene decimales .00, quitar los .00
                            $num =  number_format($num, 0, '.', '');
                            echo '<span class="fw-semibold ms-1">' . $num . '€ </span>';
                        }
                    } else {
                        // Si el número es entero, simplemente mostrarlo
                        echo '<span class="fw-semibold ms-1">' . $num . '€ </span>';
                    }
                }


                echo '  </div>
                
                        </div>
                    </div>
            
                </div>';
            }
        }
    } elseif ($result == 1) {

        echo '<h5>Error al cargar elementos</h5>';
    } else {
        echo '<h5>Lista vacia</h5>';
    }
    ?>



</div>


<div class="rounded-circle border border-1 bg-success d-flex align-items-center justify-content-center position-fixed bottom-0  end-0 mb-xl-0 me-3 me-xl-5 shadow add" data-bs-toggle="modal" data-bs-target="#addItemModal">
    <img src="<?= base_url ?>assets/img/iconos/add.svg" alt="Icono para añadir lista" class="icon-list icon-list-sm">

</div>

</div>
</div>

<!-- Pie de página -->
<?php
require_once base_host . 'views/layout/footer.php';
?>