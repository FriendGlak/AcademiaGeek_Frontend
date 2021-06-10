const mascotas = document.getElementById('mascotas')
const templatePet = document.getElementById('template-mascotas').content
const templateDetalles = document.getElementById('template-detallesmascota').content
const fragment = document.createDocumentFragment()
var myModal = new bootstrap.Modal(document.getElementById('myModal'), options)
let favoritos = []

document.addEventListener('DOMContentLoaded', () => {
    fetchData()
})

mascotas.addEventListener('click', e => {
    addFavorito(e)
})

const fetchData = async () => {
    try {
        const res = await fetch('api/api.json')
        const data = await res.json()
        // console.log(data);
        dibujarCard(data)
    } catch (error) {
        console.log(error)
    }
}

let Card = ''

const dibujarCard = data => {
    data.forEach(mascota => {

        // Card += `
        // <template id="template-mascotas">
        //         <div class="col-12 mb-2 col-md-3">
        //             <div class="card">
        //                 <img src="" alt="" class="card-img-top"> <!--Recordar hacer imagenes de igual tamaño para un mejor manejo-->
        //                 <div class="card-body">
        //                     <h1 class="name-mascota">Nombre</h1>
        //                     <h5 class="categoria-mascota">${mascota.nombre}</h5>

        //                     <button class="btn btn-dark">Adoptar</button>
        //                 </div>
        //             </div>
        //         </div>
        //     </template>   
        // `
        templatePet.querySelector('h5').textContent = mascota.nombre
        templatePet.querySelector('h1').textContent = mascota.categoriaId
        templatePet.querySelector('img').setAttribute("src", mascota.imagen)
        templatePet.querySelector('#pruebaimg').value = mascota.imagen
        templatePet.querySelector('.btn-dark').dataset.id = mascota.id //Id por cada boton de cada carta

        const clone = templatePet.cloneNode(true)
        fragment.appendChild(clone)
    });
    mascotas.appendChild(fragment)
}

//Agregar mascota a favoritos

const addFavorito = e => {
    if (e.target.classList.contains('btn-dark')) {
        setMascotaFav(e.target.parentElement)
    }
    e.stopPropagation()
}
const setMascotaFav = objeto => {
    //Instanciamos valores con mascota seleccionada.
    const mascotafav = {
        id: objeto.querySelector('.btn-dark').dataset.id, //Accediendo a la información
        nombre: objeto.querySelector('h2').textContent,
        categoria: objeto.querySelector('h1').textContent,
        imagen: document.querySelector('img').getAttribute('src'),
        favorito: false,
        cantidad: 1
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
}

const deleteFavorito = idMascota => {
    favoritos.forEach((mascota, index) => {
        if (mascota.id === idMascota) {
            favoritos.splice(index, 1)
        }
    })
}
