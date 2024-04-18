window.onload = function () {
    // Capturar el clic en el botón de edición
    var editButtons = document.querySelectorAll('.btn-edit');
    editButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            var listId = this.getAttribute('data-list-id');

            // Crear una solicitud AJAX para enviar el ID de la lista al controlador
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'http://localhost/lista-simple/lists/list&id=' + listId, true);
            xhr.onload = function () {
                if (xhr.status >= 200 && xhr.status < 400) {
                    console.log(xhr.responseText);
                    var jsonData = JSON.parse(xhr.responseText);
                    console.log(jsonData);

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
};