</main>
<footer class="container p-4 mt-2 border-top border-1">
    <!-- quitar bordes en vistas menores de 576px -->
    <!-- ACTIVAR EN VISTAS DE LOGIN -->
    <?php if (!isset($_SESSION['identity'])) :    ?>
        <ul class="list-unstyled  mb-1 d-sm-flex justify-content-between">
            <li class="text-start">
                <a class="fw-medium text-decoration-none text-primary-emphasis f-little" href="/lista-simple/index.php">Inicio</a>
            </li>
            <li class="text-start">
                <a class="fw-medium text-decoration-none text-primary-emphasis f-little" href="/lista-simple/views/login/faq.php">FaQ</a>
            </li>
            <li class="text-start ">
                <a class="fw-medium text-decoration-none text-primary-emphasis f-little" href="/lista-simple/views/login/contact.php">Contacto</a>
            </li>


        </ul>
    <?php endif; ?>
    <div class="h-100 d-flex justify-content-center align-items-center">
        <p class="text-center text-primary-emphasis f-u-little p-0 m-0">Proyecto DAW - Lista Simple -
            Anthony Alegría Alcántara
            ® 2023</p>
    </div>
</footer>

</div>



</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>