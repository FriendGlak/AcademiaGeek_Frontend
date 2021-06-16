const mascotasFavoritas = document.getElementById('mascotasFavoritas')
const modalDetalles = document.getElementById('modal-body')
let favoritos = []
let datosGuardados = JSON.parse(localStorage.getItem('mascotasFavoritas'))

if (Array.isArray(datosGuardados) && datosGuardados.length) {
    favoritos = datosGuardados
} else {
    console.log("No hay datos almacenados en el LocalStorage");
}

let dataApi = [];

window.addEventListener('load', () => {
    fetchData()
    $.detener(() => { dibujarCardFavoritas() }, 1)

})

$.detener = function (callback, seconds) {
    return window.setTimeout(callback, seconds * 1000);
}


const fetchData = async () => {
    try {
        const res = await fetch(URL + 'api/api.json')
        dataApi = await res.json()
    } catch (error) {
        console.log(error)
    }
}

let cardFavoritas = ''
const dibujarCardFavoritas = () => {
    console.log("Entre pues ");
    let alfa = []
    favoritos.forEach(mascota => { alfa.push(dataApi.filter(mascota2 => mascota2.id == mascota.id)[0]) })
    alfa.forEach(mascota => {
        cardFavoritas += `
                <div class="col-12 mb-2 col-md-4 btnDataMascota" data-bs-toggle="modal" data-bs-target="#detallesMascota">
                    <div class="card cardzoom border-bottom-5">
                        <img src="${mascota.imagen}" alt="" class="img-fluid card-img-top">  
                        <input type="hidden" value="${mascota.id}">
                        <div class="card-body card-img-overlay">
                            <div class="card-tag">
                                <h5 class="name-mascota text-white">${mascota.nombre}</h5>
                                <h5 class="categoria-mascota text-white-50">${mascota.raza}</h5>
                            </div>                      
                        </div>
                    </div>
                </div>
                `
    })
    mascotasFavoritas.innerHTML = cardFavoritas
    document.querySelectorAll('.btnDataMascota').forEach(boton => {
        boton.addEventListener('click', () => {
            dibujarDetalleMascota(boton.children[0].children[1].value)
        })
    })
}


let detallesCard = '';
const dibujarDetalleMascota = idMascota => {
    dataApi.forEach(mascota => {
        if (mascota.id == idMascota) {
            detallesCard = `
                <div id="container">
                    <div class="container-img-details">
                    <img src="${mascota.imagen}" alt="${mascota.nombre}" class="img-details">
                    </div>
                    <div class="container-details">
                    <div class="details-basics">
                        <div class="details-name-favorite">
                        <div class="details-name-gender">
                            <h4 class="name-details">${mascota.nombre}</h4>
                            <img src="${imgGenero(mascota.genero)}" alt="Female" class="img-gender-details">
                        </div>
                        </div>
                        <div class="details-race-age">
                        <div class="details-race">
                            <img src="${URL}public/images/mascotas/raza.png" alt="Raza" class="img-race-details">
                            <span class="txt-details">${mascota.raza}</span>
                        </div>
                        <div class="details-age">
                            <img src="${URL}public/images/mascotas/edad.png" alt="Edad" class="img-age-details">
                            <span class="txt-details">${mascota.edad}</span>
                        </div>
                        </div>
                        <div class="details-address">
                        <img src="${URL}public/images/mascotas/direccion.png" alt="Dirección">
                        <span class="txt-details">${mascota.ubicacion}</span>
                        </div>
                    </div>
                    <div class="details-personality">
                        <h5 class="personality-title">Personalidad</h5>
                        <div class="personalities-list-details" id="personalities">
    
    
                        <div class="personality-item-details">
                            <img src="${URL}public/images/mascotas/personalidad-jugueton.png" alt="Juguetón" class="img-personality">
                            <span class="personality-text">Juguetón</span>
                        </div>
    
                        <div class="personality-item-details">
                            <img src="${URL}public/images/mascotas/personalidad-ternura.png" alt="Tierno" class="img-personality">
                            <span class="personality-text">Tierno</span>
                        </div>
    
                        <div class="personality-item-details">
                            <img src="${URL}public/images/mascotas/personalidad-amorosa.png" alt="Cariñoso" class="img-personality">
                            <span class="personality-text">Cariñoso</span>
                        </div>
                        </div>
                    </div>
                    <div class="history-details">
                        <h5 class="personality-title">Historia de Pascual</h5>
                        <p class="history-text-details">${mascota.historia}</p>
                    </div>
                    <div class="footer-details">
                        <div class="author-details">
                        <img src="${URL}public/images/mascotas/autor.png" alt="Autor" class="img-author-details">
                        <div class="info-author-details">
                            <span class="by-author-details">Publicado por:</span>
                            <span class="name-author-details">${mascota.autor.name}</span>
                        </div>
                        </div>
                        <a href="./messagesDetail.html?idAuthor=1" class="btn-contact">Contactar</a>
                    </div>
                    </div>
                </div>
                `;
        }
    });
    modalDetalles.innerHTML = detallesCard
}

const imgGenero = genero => {
    return genero == "Macho" ? URL + "public/images/mascotas/genero-macho.png" : URL + "public/images/mascotas/genero-hembra.png"
}


// const getListaFavoritos = () => {
//     cardFavoritas = ''
//     favoritos.forEach (mascota => {
//         console.log(mascota);
//         dibujarCardFavoritas(mascota.id)
//     }) 
// }