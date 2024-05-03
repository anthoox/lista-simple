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
                    // console.log(xhr.responseText);
                    var jsonData = JSON.parse(xhr.responseText);
                    // console.log(jsonData);

                    var id = jsonData.id;
                    var description = jsonData.description;
                    var notification = jsonData.notification;
                    var name = jsonData.name;
                    document.getElementById('listName').value = name;
                    document.getElementById('edit-notification').value = notification;
                    document.getElementById('edit-description').value = description;
                    document.getElementById('edit-description').value = description;
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
            console.log(listId)

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
            console.log(listId)

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
            console.log(listId)

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
                    var notification = jsonData.notification_date;
                    var notes = jsonData.notes;
                    var idItem = jsonData.id;
                    var idList = jsonData.list_id;

                    document.getElementById('item-name').value = name;
                    document.getElementById('item-price').value = price;
                    document.getElementById('item-units').value = units;
                    document.getElementById('item-notification').value = notification;
                    document.getElementById('item-notes').value = notes;
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
            var idItem = this.dataset.itemId;
            var completed = this.checked ? 1 : 0; // Si está marcado, completado es 1, de lo contrario es 0
            checkbox.classList.add
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


};
