</main>
<?php if (!isset($_SESSION['identity'])) :    ?>

    <footer class="container d-flex justify-content-between p-3 mt-2 border-top border-1">
        <!-- quitar bordes en vistas menores de 576px -->
        <!-- ACTIVAR EN VISTAS DE LOGIN -->
        <ul class="list-unstyled  mb-0 d-sm-flex gap-3 w-25 text-star">
            <li class="text-start ">
                <a class="fw-medium text-decoration-none text-primary-emphasis f-little" href="/lista-simple/index.php">Inicio</a>
            </li>
            <li class="text-start">
                <a class="fw-medium text-decoration-none text-primary-emphasis f-little" href="/lista-simple/views/login/faq.php">FaQ</a>
            </li>
            <li class="text-start ">
                <a class="fw-medium text-decoration-none text-primary-emphasis f-little" href="/lista-simple/views/login/contact.php">Contacto</a>
            </li>


        </ul>

        <div class="h-100  p-0 m-0 w-50">
            <p class="text-center text-primary-emphasis f-u-little p-0 m-0">Proyecto DAW - Lista Simple -
                Anthony Alegría Alcántara ©<?php echo date('Y') ?></p>
        </div>

        <div class="h-100  p-0 m-0 w-25 gap-4  text-end">
            <a href="mailto:listasimple@anthoox.es"><img src="/lista-simple/assets/img/iconos/email.svg" alt="Enlace a email de contacto" class="iconslist " title="listasimple@anthoox.es"></a>

            <a href="https://github.com/anthoox/lista-simple" target="_blank"><img src="/lista-simple/assets/img/iconos/github.svg" alt="Enlace a GitHub de proyecto" class="iconslist" title="GitHub - Lista Simple"></a>
            <a href="https://www.linkedin.com/in/anthony-alegr%C3%ADa-alc%C3%A1ntara-58920a233/" target="_blank"><img src="/lista-simple/assets/img/iconos/linkedin.svg" alt="Enlace a LinkedIn de desarrollador" class="iconslist" title="LinkedIn Anthony Alegría Alcántara"></a>

        </div>

    </footer>
<?php endif; ?>

</div>



</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="<?= base_url ?>assets/js/index.js"></script>

</html>