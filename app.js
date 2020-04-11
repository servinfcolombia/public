$(document).ready(function () {
    console.log('Hay coneccion con app.js');
    $('#task-result').hide();
    mostrarDatos();
    $('#search').keyup(function (e) {
        if ($('#search').val()) {
            let search = $('#search').val();
            console.log(search);
            $.ajax({
                url: 'consultar.php',
                type: 'POST',
                data: { search },
                success: function (response) {
                    let tasks = JSON.parse(response);
                    let template = '';
                    console.log(response);
                    tasks.forEach(task => {
                        template += `<li>${task.name}</li>`
                    });
                    $('#container').html(template);
                    $('#task-result').show();
                }
            })

        }
    })

    $('#task-form').submit(function (e) {
        const postData = {
            name: $('#name').val(),
            address: $('#address').val(),
            lat: $('#lat').val(),
            lng: $('#lng').val(),
            type: $('#type').val()
        };
        $.post('insertar.php', postData, function (response) {
            console.log(response);
            $('#task-form').trigger('reset');
            mostrarDatos();
        })
        console.log(postData);
        e.preventDefault();

    })
function mostrarDatos(){

    $.ajax({
        url: 'mostrarDatos.php',
        type: 'GET',
        success: function (response) {
            let mostrarDatos = JSON.parse(response);
            let template = '';
            mostrarDatos.forEach(mostrarDato => {
                template += `
                        <tr>
                        <td>
                        <button type="button" class="editButton btn badge badge-info btn-sm">Editar</button>
                        <button type="button" class="deleteButton btn badge badge-danger btn-sm">Borrar</button>
                        </td>
                        <td>${mostrarDato.id}</td>
                        <td>${mostrarDato.name}</td>
                        <td>${mostrarDato.address}</td>
                        <td>${mostrarDato.lat}</td>
                        <td>${mostrarDato.lng}</td>
                        <td>${mostrarDato.type}</td>
                        </tr>
                    `
            });
            $('#task').html(template);
            console.log(response);
        }
    })
}

//$(document).on('click', editButton)
    
});