<!-- Cabeceras -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/head2.php'; ?>

<!-- Contenido -->
<div class="w-100 pe-2 ps-2">
    <h2 class="text-start mb-5 mt-3">Soporte</h2>
</div>


<h3 class="text-start text-primary-emphasis col-12 pe-2 ps-2">Envia tu consulta</h3>
<form class="d-flex flex-column justify-content-center col-12 p-2 ps-2">
    <p class="text-start">Envianos tu consulta desde nuestro formulario o escribenos a: <a href="" class="text-decoration-none">contacto@listasimple.com</a>.</p>
    <div class="mb-2">
        <label for="exampleFormControlTextarea1" class="d-block text-start form-label">Consulta</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escribe tu consulta" aria-describedby="textAreaHelp"></textarea>

        <div id="textAreaHelp" class="text-start form-text">Te responderemos por email.</div>

    </div>

    <button type="submit" class=" btn btn-primary rounded-1 mt-2 mb-2 align-self-center text-white col-12 col-sm-8  col-md-7">Enviar</button>

</form>

<a class="text-center text-decoration-none text-primary-emphasis fw-medium" href="/lista-simple/index.php">Volver</a>
<span class="text-success fw-semibold f-little">Consulta enviada</span>



<h3 class="text-start text-primary-emphasis mb-3 col-12 pe-2 ps-2">FaQ</h3>

<div class="accordion col-12 pe-2 ps-2" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                Accordion Item #1
            </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
            <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                Accordion Item #2
            </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
            <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                Accordion Item #3
            </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
            <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
        </div>
    </div>

</div>

<div class="d-flex flex-column justify-content-center col-12 mt-4 pe-2 ps-2">
    <button type="submit" class=" btn btn-danger rounded-1 mt-2 mb-2 align-self-center text-white col-12 col-sm-8  col-md-7">Darse de baja</button>

</div>

</div>


<!-- Pie de página -->
<?php require_once 'C:/wamp64/www/lista-simple/views/layout/footer.php'; ?>