window.onload = () => {
    const lists = document.getElementById('lists');
    const upcoming = document.getElementById('upcoming');
    const pending = document.getElementById('pending');
    const completed = document.getElementById('completed');

    lists.addEventListener("click", (event) => {
        event.preventDefault();
        showLists("lists");
    })

    upcoming.addEventListener("click", (event) => {
        event.preventDefault();
        showLists("upcoming");
    })

    pending.addEventListener("click", (event) => {
        event.preventDefault();
        showLists("pending");
    })

    completed.addEventListener("click", (event) => {
        event.preventDefault();
        showLists("completed");
    })

    function showLists(tipe) {
        // Hacer una solicitud AJAX al servidor
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "../users/index?tipe=" + tipe, true);
        xhr.onload = function () {
            if (xhr.status >= 200 && xhr.status < 300) {
                // Actualizar el contenido de la página con la respuesta del servidor
                // document.getElementById("contenido").innerHTML = xhr.responseText;
            }
        };
        xhr.send();

    }

}