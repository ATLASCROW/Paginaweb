
function buscar() {
    var input,filter

    var busqueda = document.getElementById('search').value.toLowerCase(); // Convertir a minúsculas
  
    var productos = document.getElementsByClassName('producto'); // Obtener todos los elementos con la clase 'producto'
    // Iterar sobre cada producto
    for (var i = 0; i < productos.length; i++) {
      // Obtener el texto del primer elemento <h2> dentro del producto y convertirlo a minúsculas
      var titulo = productos[i].getElementsByTagName('h2')[0].innerText.toLowerCase();
      // Verificar si la búsqueda está incluida en el título del producto
      if (titulo.includes(busqueda)) {
        productos[i].style.display = 'block'; // Mostrar si coincide con la búsqueda
      } else {
        productos[i].style.display = 'none'; // Ocultar si no coincide
      }
    }
  }
