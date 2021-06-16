let datosGuardados = JSON.parse(localStorage.getItem('datosUsuario'))
let imgCode = ''


if (Array.isArray(datosGuardados) && datosGuardados.length) {
    console.log("Si hay datos almacenados en el LocalStorage");
    $('.name-form').val(datosGuardados[0].nombre)
    $('.lastname-form').val(datosGuardados[0].apellido)
    $('#nombreTitulo').html(datosGuardados[0].nombre + ' ' + datosGuardados[0].apellido)
    $('.mail-form').val(datosGuardados[0].mail)
    $('#imgSelect').html('<img class="img-oval" src="' + datosGuardados[0].imagen + '">')
} else {
    console.log("No hay datos almacenados en el LocalStorage");
}

$('#formPerfil').submit((e) => {
    e.preventDefault()
    let nombre = $('.name-form').val()
    let apellido = $('.lastname-form').val()
    let mail = $('.mail-form').val()
    if (nombre == '' || apellido == '' || mail == '') {
        alert('Algún campo está vacío')
    } else {
        let datosEnviados = [
            {
                nombre: nombre,
                apellido: apellido,
                mail: mail,
                imagen: imgCode
            }
        ]
        localStorage.setItem("datosUsuario", JSON.stringify(datosEnviados))
    }
})


function filePreview(input) {
    // console.log(input.files[0])
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        if ((input.files[0].size / 1024) > 1024) {
            alert('El tamaÃ±o supera el limite permitido');
        }
        reader.onload = function (e) {
            imgCode = e.target.result
            $('#imgSelect').html('<img class="img-oval" src="' + e.target.result + '">')
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$('#imagen').change(function () {
    filePreview(this)
});