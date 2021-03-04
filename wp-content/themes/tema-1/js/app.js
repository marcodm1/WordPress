const formularioBuscar = document.querySelector('#searchform #s');
formularioBuscar.className += 'form-control mb-2' ; // aqui le añadirmos sin sobreescribir por si ya existia 

const botonBuscar = document.querySelector('#searchsubmit'); // aqui creamos la constante para el
botonBuscar.className += 'btn btn-primary btn-block'; // aqui le  añadimos al boton el color y tamaño

const listaWi = document.querySelector('.bluu_wi ul');
listaWi.className += 'list-group';
// console.log(listaWi);


listaWi.querySelectorAll('li').forEach(item => { // por cada elemento hacemos un li y le damos estilo
    item.className += 'list-group-item';
})