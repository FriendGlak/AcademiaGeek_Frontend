const mascotas = document.getElementById('mascotas')
const modalDetalles = document.getElementById('modal-body')
let favoritos = []
let datosGuardados = JSON.parse(localStorage.getItem('mascotasFavoritas'))

if (Array.isArray(datosGuardados) && datosGuardados.length) {
    favoritos = datosGuardados
} else {
    console.log("No hay datos almacenados en el LocalStorage");
}

let dataApi;

window.addEventListener('load', () => {
    fetchData()
})


$('#GetPerros').on('click', () => {
    dibujarCard("Perro")
})

$('#GetGatos').on('click', () => {
    dibujarCard("Gato")
})

const fetchData = async () => {
    try {
        const res = await fetch(URL + 'api/api.json')
        dataApi = await res.json()
        // console.log(data);
    } catch (error) {
        console.log(error)
    }
}

let card = ''
const dibujarCard = type => {
    card = ""
    dataApi.forEach(mascota => {
        if (mascota.categoriaId == type) {
            card += `
            <div class="col-12 mb-5 col-md-4 btnDataMascota" data-bs-toggle="modal" data-bs-target="#detallesMascota">
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
        }
    });

    mascotas.innerHTML = card

    document.querySelectorAll('.btnDataMascota').forEach(boton => {
        boton.addEventListener('click', () => {
            // console.log(favoritos);
            dibujarDetalleMascota(boton.children[0].children[1].value)
        })
    })
}

let detallesCard = '';
const dibujarDetalleMascota = idMascota => {
    dataApi.forEach(mascota => {
        if (mascota.id == idMascota) {
            let urlImgen = getSelectFav(mascota.id);
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
                        <div class="favorite-details" id="btnfavorite">
                            <input type="hidden" id="idMascotaVista" value="${mascota.id}">
                            <div id="cambioImgFav">
                                <img src="${urlImgen}" alt="Favorito" class="img-favorite-active" id="img-favorite">
                            </div>
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

    $('#btnfavorite').on('click', (e) => {
        if (addFavorito($('#idMascotaVista').val())) {
            $('#cambioImgFav').html(`<img src="${URL}public/images/mascotas/corazon-favorito-click.png" alt="Favorito" class="img-favorite-active" id="img-favorite">`)
        } else {
            $('#cambioImgFav').html(`<img src="${URL}public/images/mascotas/corazon-favorito.png" alt="Favorito" class="img-favorite-active" id="img-favorite">`)
        }
    })
}

const getSelectFav = idMascota => {
    let mascota = favoritos.filter(mascota => mascota.id == idMascota)
    if (Array.isArray(mascota) && mascota.length) {
        return URL + 'public/images/mascotas/corazon-favorito-click.png'
    } else {
        return URL + 'public/images/mascotas/corazon-favorito.png'
    }
}

const imgGenero = genero => {
    return genero == "Macho" ? URL + "public/images/mascotas/genero-macho.png" : URL + "public/images/mascotas/genero-hembra.png"
}

//Agregar mascota a favoritos
const addFavorito = idMascota => {
    setMascotaFav(idMascota)
    let mascota = favoritos.filter(mascota => mascota.id === idMascota)

    return Array.isArray(mascota) && mascota.length ? true : false;
}

const setMascotaFav = idMascota => {
    console.log(favoritos);
    //Instanciamos valores con mascota seleccionada.
    const mascotafav = {
        id: idMascota
        // id: objeto.querySelector('.btn-dark').dataset.id, //Accediendo a la información
        // nombre: objeto.querySelector('h2').textContent,
        // categoria: objeto.querySelector('h1').textContent,
        // imagen: document.querySelector('img').getAttribute('src'),
        // favorito: false,
        // cantidad: 1
    }
    setFavorito(mascotafav)
}
const setFavorito = mascotafav => {
    if (favoritos.length == 0) { //Validamos que favoritos esté vacío y sí es así, agregar la mascota.
        saveFavorito(mascotafav)
    } else { //Sino validamos sí el id de la mascota existe en favoritos
        //Obtener de la lista la mascota que ya exista en favoritos.
        let mascota = favoritos.filter(mascota => mascota.id === mascotafav.id)
        if (Array.isArray(mascota) && mascota.length) {
            deleteFavorito(mascotafav.id);
        } else {
            saveFavorito(mascotafav);
        }
    }
}

const saveFavorito = mascota => {
    favoritos.push(mascota)
    localStorage.setItem("mascotasFavoritas", JSON.stringify(favoritos))
}

const deleteFavorito = idMascota => {
    favoritos.forEach((mascota, index) => {
        if (mascota.id === idMascota) {
            favoritos.splice(index, 1)
            localStorage.setItem("mascotasFavoritas", JSON.stringify(favoritos))
        }
    })
}
