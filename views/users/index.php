<?php require_once base_host . 'views/layout/head2.php'; ?>

<!-- Contenido -->

<div class="d-flex  col-12 mt-xl-3 flex-sm-row gap-1    m-0">
    <!-- <div class="d-flex justify-content-around gap-1 col-12 col-sm-6"> -->
    <h2><a href="<?= base_url ?>lists/index" id="lists" class="btn <?php
                                                                    echo isset($_SESSION['color']) && $_SESSION['color'] == 'index' ? 'bg-primary text-white' : 'bg-body border-dark-subtle';
                                                                    ?> rounded-3  border-1 border-light  btn-style f-little btn-list">Listas</a></h2>




    <h2><a href="<?= base_url ?>lists/completed" id="completed" class="btn <?php
                                                                            echo isset($_SESSION['color']) && $_SESSION['color'] == 'completed' ? 'bg-primary text-white' : 'bg-body border-dark-subtle';
                                                                            ?> rounded-3 border-1 btn-style f-little btn-list">Completas</a></h2>


</div>
<div class="d-flex flex-column col-12  mt-xl-3 gap-2 p-0  ">

    <?php


    if (isset($result) && empty(!$result)  && $result != 2) {

        foreach ($result as $list) {
            // Si no esta en la papelera/
            if ($list[5] == 0) {

                $items = new itemsController();
                $itemsData = $items->numItems($list[0]);
                if ($itemsData["completed_items"] !== $itemsData["total_items"] || $itemsData["total_items"] == 0) {
  
                    // Si los items completos no es igual al total de items o el total de items es igual a 0
                    $completedList = new listsController();
                    $result = $completedList->completeList($list[0], 0);
                    // Marca la lista como NO completa

                    echo
                    '<div  class="w-100 rounded-4 border border-1 border-dark-subtle p-1 pe-3 ps-3 btn-style select-style">
                        <div class="d-flex w-100 justify-content-end gap-2">            
                            <div>                                
                                <img src="' . base_url . 'assets/img/iconos/editar.svg" alt="Icono de lapiz para editar datos de lista" class="iconslist btn-edit"  data-bs-toggle="modal" data-bs-target="#editModal"  data-list-id=' . $list[0] . '>
                            </div>
                            <div class="cnt-btn-del d-none">
                                <img src="' . base_url . 'assets/img/iconos/papelera.svg" alt="Icono papelera para eliminar lista" class="iconslist btn-del"  data-list-id=' . $list[0] . '>
                            </div>
                        </div>
                        
                        <a href="' . base_url . 'items/index&id=' . $list[0] . '" class="d-flex w-100 justify-content-start text-decoration-none ancla">

                            <span class="fs-5 fw-semibold text-black">' . $list[2] . '</span>

                        </a>
                        
                        <div class="d-flex w-100 justify-content-between">
                            <div class="text-primary fw-semibold">     
                            </div> 
                            <div class="fw-semibold">' .
                        $itemsData["completed_items"] . '/' . $itemsData["total_items"] . '
                            </div>
                        </div>
                    </div>';
                } elseif ($itemsData["completed_items"] === $itemsData["total_items"] && $itemsData["total_items"] !== 0) {
            
                    // Si el total de items es igual a los items completos y el total de items es distinto a 0
                    $completedList = new listsController();
                    $result = $completedList->completeList($list[0], 1);
                    // Marca la lista como completa
                    echo
                    '<div  class="w-100 rounded-4 border border-1 border-dark-subtle p-1 pe-3 ps-3 bg-body-secondary btn-style select-style">
                        <div class="d-flex w-100 justify-content-end gap-2">
                            <div>
                                <img src="' . base_url . 'assets/img/iconos/editar.svg" alt="Icono de lapiz para editar datos de lista" class="iconslist btn-edit"  data-bs-toggle="modal" data-bs-target="#editModal"  data-list-id=' . $list[0] . '>
                            </div>
                            <div class="cnt-btn-del d-none">
                                <img src="' . base_url . 'assets/img/iconos/papelera.svg" alt="Icono papelera para eliminar lista" class="iconslist btn-del"  data-list-id=' . $list[0] . '>
                            </div>
                        </div>

                        <a href="' . base_url . 'items/index&id=' . $list[0] . '"class="d-flex w-100 justify-content-start text-secondary text-decoration-line-through ancla">';

                    echo '<span class="fs-5 fw-semibold">' . $list[2] . '</span>
                        </a>

                        <div class="d-flex w-100 justify-content-between">
                            <div class="text-secondary  text-decoration-line-through">           
                            </div> 
                            <div class="text-secondary fw-semibold text-decoration-line-through">' .
                        $itemsData["completed_items"] . '/' . $itemsData["total_items"] . '
                            </div>
                        </div>
                    </div>';
                }
            }
        }
    } elseif ($result == 1) {

        echo '<h6>Error al cargar listas</h6>';
    } elseif ($result == 2) {

        echo '<h6>Aún no has completado ninguna lista.</h6>';
    } else {
        echo '<h6>Aún no tienes listas. Añadelas dando clic en el icono <img src="' . base_url . 'assets/img/iconos/add.svg" alt="Foto de perfil de usuario" class="mb-1 rounded-circle border border-1 bg-success icon-list-ss"> </h6>';
    }

    ?>


</div>


<div class="rounded-circle border border-1 bg-success d-flex align-items-center justify-content-center position-fixed bottom-0 end-0 mb-xl-0 me-3 me-xl-5 shadow add" data-bs-toggle="modal" data-bs-target="#addModal">
    <img src="<?= base_url ?>assets/img/iconos/add.svg" alt="Icono para añadir lista" class="icon-list icon-list-sm">
</div>




</div>

<!-- Pie de página -->
<?php
require_once base_host . 'views/layout/footer.php';
?>