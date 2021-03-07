const formularioBuscar = document.querySelectorAll('#searchform #s');
if (formularioBuscar) { // si existe algun formulario...
    for (const iterator of formularioBuscar) { // con este for utilizamos ambos menus
        iterator.className += 'form-control mb-2' ; 
    }

    const botonBuscar     = document.querySelectorAll('#searchsubmit'); // seleccionamos todos los botones
    for (const iterator of botonBuscar) {
        iterator.className += 'btn btn-primary btn-block'; // aqui le  añadimos al boton el color y tamaño
    }

    
}

const listaWi = document.querySelector('.bluu_wi ul'); // igual aqui, si no existe el ul, no entra al div
if (listaWi) {
    listaWi.className += 'list-group';
    listaWi.querySelectorAll('li').forEach(item => { // por cada elemento hacemos un li y le damos estilo
        item.className += 'list-group-item';
    })
}
