window.onload = function () {

    // Capturar el clic en el botón de edición
    var editButtons = document.querySelectorAll('.btn-edit');
    editButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            var listId = this.getAttribute('data-list-id');

            // Solicitud AJAX enviando ID al controlador
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'http://localhost/lista-simple/lists/list&id=' + listId, true);
            xhr.onload = function () {

                if (xhr.status >= 200 && xhr.status < 400) {
                    var jsonData = JSON.parse(xhr.responseText);

                    var id = jsonData.id;
                    var name = jsonData.name;
                    document.getElementById('listName').value = name;
                    document.getElementById('idList').value = id;

                } else {
                    // Manejar errores
                    alert('Error al obtener los detalles de la lista');
                }
            };
            xhr.onerror = function () {
                alert('Error al realizar la solicitud');
            };
            xhr.send();
        });
    });

    var delButtons = document.querySelectorAll('.btn-del');
    delButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            var listId = this.getAttribute('data-list-id');

            // Solicitud AJAX enviando ID al controlador
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'http://localhost/lista-simple/lists/trash&id=' + listId, true);
            xhr.onload = function () {

                location.reload('http://localhost/lista-simple/users/index.php');

            };
            xhr.onerror = function () {
                alert('Error al realizar la solicitud');
            };
            xhr.send();
        });
    });



    var delButtons = document.querySelectorAll('.btn-rest');
    delButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            var listId = this.getAttribute('data-list-id');

            // Solicitud AJAX enviando ID al controlador
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'http://localhost/lista-simple/lists/rest&id=' + listId, true);
            xhr.onload = function () {

                location.reload('http://localhost/lista-simple/users/trash.php');

            };
            xhr.onerror = function () {
                alert('Error al realizar la solicitud');
            };
            xhr.send();
        });
    });

    var delButtons = document.querySelectorAll('.btn-delete');
    delButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            var listId = this.getAttribute('data-list-id');

            // Solicitud AJAX enviando ID al controlador
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'http://localhost/lista-simple/lists/del&id=' + listId, true);
            xhr.onload = function () {

                location.reload('http://localhost/lista-simple/users/trash.php');

            };
            xhr.onerror = function () {
                alert('Error al realizar la solicitud');
            };
            xhr.send();
        });
    });


    var editItem = document.querySelectorAll('.btn-edit-item');
    editItem.forEach(function (button) {
        button.addEventListener('click', function () {
            var listId = this.getAttribute('data-list-id');

            // Solicitud AJAX enviando ID al controlador
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'http://localhost/lista-simple/items/getItem&id=' + listId, true);
            xhr.onload = function () {
                if (xhr.status >= 200 && xhr.status < 400) {

                    var jsonData = JSON.parse(xhr.responseText);

                    var name = jsonData.name;
                    var price = jsonData.price;
                    var units = jsonData.numer;
                    var idItem = jsonData.id;
                    var idList = jsonData.list_id;

                    document.getElementById('item-name').value = name;
                    document.getElementById('item-price').value = price;
                    document.getElementById('item-units').value = units;
                    document.getElementById('item-id').value = idItem;
                    document.getElementById('list-id').value = idList;

                } else {
                    // Manejar errores
                    alert('Error al obtener los detalles de la lista');
                }
            };
            xhr.onerror = function () {
                alert('Error al realizar la solicitud');
            };
            xhr.send();
        });
    });


    var editItem = document.querySelectorAll('.btn-del-item');
    editItem.forEach(function (button) {
        button.addEventListener('click', function () {
            var listId = this.getAttribute('data-list-id');

            // Solicitud AJAX enviando ID al controlador
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'http://localhost/lista-simple/items/del&id=' + listId, true);
            xhr.onload = function () {
                if (xhr.status >= 200 && xhr.status < 400) {

                    // var jsonData = JSON.parse(xhr.responseText);
                    location.reload('http://localhost/lista-simple/users/list.php');


                } else {
                    // Manejar errores
                    alert('Error al obtener los detalles de la lista');
                }
            };
            xhr.onerror = function () {
                alert('Error al realizar la solicitud');
            };
            xhr.send();
        });
    });


    // Capturar el cambio en el checkbox
    document.querySelectorAll('.form-check-input').forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            var idItem = this.getAttribute('data-list-id');
            var completed = this.checked ? 1 : 0; // Si está marcado, completado es 1, de lo contrario es 0
            console.log(idItem, completed)
            // Crear una solicitud AJAX para enviar el ID del elemento y el estado completado al servidor
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'http://localhost/lista-simple/items/completed', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
                if (xhr.status >= 200 && xhr.status < 400) {
                    // Actualización exitosa
                    console.log('Estado actualizado en la base de datos.');
                    location.reload('http://localhost/lista-simple/users/trash.php');

                } else {
                    // Manejar errores
                    console.error('Error al actualizar el estado en la base de datos.');
                }
            };
            xhr.onerror = function () {
                // Manejar errores de red
                console.error('Error de red al enviar la solicitud.');
            };
            xhr.send('&id=' + idItem + '&completed=' + completed);
        });
    });


    // Mostrar/ocultar NAV-MOVIL
    const nav = document.getElementById('nav-movil');
    const showNav = document.getElementById('btn-menu-abrir');
    const hiddenNav = document.getElementById('btn-menu-cerrar')
    const mainCnt = document.getElementById('main-container');
    if(showNav){
        showNav.addEventListener('click', () => {
            nav.classList.add('nav-show');
        })

        hiddenNav.addEventListener('click', () => {
            nav.classList.remove('nav-show');
        })

        // Ocultar el menú lateral al hacer clic en cualquier parte de la aplicación
        mainCnt.addEventListener('click', (event) => {
            // Verificar si el clic ocurrió fuera del menú lateral
            if (!nav.contains(event.target) && showNav != event.target) {
                nav.classList.remove('nav-show');
            }
        });
    }



    
    let timer;
    const elements = document.querySelectorAll('.select-style');

    // Función para deseleccionar todos los elementos
    function deselectAll() {
        elements.forEach(ele => {
            const iconBox = ele.querySelector('.cnt-btn-del');
            iconBox.classList.add('d-none');
            ele.classList.remove('selected');
        });
    }

    // Añadir un evento 'click' al contenedor principal
    mainCnt.addEventListener('click', (event) => {
        // Si el objetivo del clic no es un elemento con la clase 'select-style'
        if (!event.target.closest('.select-style')) {
            // Deseleccionar todos los elementos
            deselectAll();
        }
    });

    // Iterar sobre cada elemento con la clase 'select-style'
    elements.forEach(ele => {
        // Selección del elemento hijo con la clase 'cnt-btn-del'
        const iconBox = ele.querySelector('.cnt-btn-del');
        // Selección de un enlace o un elemento con la clase 'span-style'
        const anchorOrSpan = ele.querySelector('a, .span-style');
        // Variable para rastrear si es una pulsación larga
        let isLongPress = false;

        // Función para iniciar el temporizador de pulsación larga
        const startTimer = () => {
            isLongPress = false;
            timer = setTimeout(() => {
                // Mostrar el icono de eliminar
                iconBox.classList.remove('d-none');
                // Añadir la clase 'selected' al elemento
                ele.classList.add('selected');
                isLongPress = true;
            }, 500); // Establecer el tiempo de espera a 750 ms
        };

        // Función para limpiar el temporizador de pulsación larga
        const clearTimer = () => {
            clearTimeout(timer);
            if (isLongPress) {
                // Si fue una pulsación larga, establecer un atributo de datos
                ele.setAttribute('data-long-press', 'true');
            } else {
                // Si no fue una pulsación larga, remover el atributo de datos
                ele.removeAttribute('data-long-press');
            }
        };

        // Función para prevenir el menú contextual del navegador
        const preventContextMenu = (e) => {
            e.preventDefault();
        };

        // Añadir eventos de ratón y táctiles al elemento para detectar pulsación larga
        ele.addEventListener('mousedown', (e) => {
            if (!e.target.closest('.btn-edit-item') && !e.target.closest('.btn-del-item') && !e.target.closest('.btn-edit') && !e.target.closest('.btn-del') && !e.target.closest('.btn-rest') && !e.target.closest('.btn-delete')) {
                startTimer();
                ele.addEventListener('contextmenu', preventContextMenu);
            }
        });

        ele.addEventListener('mouseup', (e) => {
            clearTimer();
            ele.removeEventListener('contextmenu', preventContextMenu);
            if (!isLongPress) {
                if (ele.classList.contains('selected')) {
                    iconBox.classList.add('d-none');
                    ele.classList.remove('selected');
                }
            }
        });

        ele.addEventListener('mouseleave', (e) => {
            clearTimer();
            ele.removeEventListener('contextmenu', preventContextMenu);
        });

        ele.addEventListener('touchstart', (e) => {
            if (!e.target.closest('.btn-edit-item') && !e.target.closest('.btn-del-item') && !e.target.closest('.btn-edit') && !e.target.closest('.btn-del') && !e.target.closest('.btn-rest') && !e.target.closest('.btn-delete')) {
                startTimer();
                ele.addEventListener('contextmenu', preventContextMenu);
            }
        });

        ele.addEventListener('touchend', (e) => {
            clearTimer();
            ele.removeEventListener('contextmenu', preventContextMenu);
            if (!isLongPress) {
                if (ele.classList.contains('selected')) {
                    iconBox.classList.add('d-none');
                    ele.classList.remove('selected');
                }
            }
        });

        ele.addEventListener('touchcancel', (e) => {
            clearTimer();
            ele.removeEventListener('contextmenu', preventContextMenu);
        });

        // Prevenir comportamiento predeterminado si fue una pulsación larga
        if (anchorOrSpan) {
            anchorOrSpan.addEventListener('click', (e) => {
                if (ele.getAttribute('data-long-press') === 'true') {
                    e.preventDefault();
                    ele.removeAttribute('data-long-press');
                }
            });
        }

        // Añadir un listener para prevenir el menú contextual cuando se mantiene la pulsación
        ele.addEventListener('contextmenu', (e) => {
            e.preventDefault();
        });
    });


};
