window.onload = function () {
    Inicio();
    
}

function cargarContenido(abrir) {
  var contenedor;
  contenedor = document.getElementById("contenido");
  fetch(abrir)
    .then((response) => response.text())
    .then((data) => (contenedor.innerHTML = data));
    if(abrir=="galeria.php"){
Historial("Pregunta 1");}
}


function Inicio() {
    document.getElementById("nombre").textContent = "Nataniel Mauricio Arapa Estrada";
    document.getElementById("cu").textContent = "111-548";
document.getElementById("fecha").textContent = "31/05/2025";
    const ajax = new XMLHttpRequest();
    ajax.open("GET", "cookie.php", true);
    ajax.onload = function () {
        if (ajax.status === 200) {
            document.getElementById("visitas").innerText = ajax.responseText;
        }
    };
    ajax.send();
    Historial("Inicio")
}


function Historial(texto) {
    const historial = document.getElementById("historial");
    const p = document.createElement("p");
    p.textContent = texto;
    historial.appendChild(p);
}


function menuButon(){
  var menu =document.getElementById('barra');

 if (menu.style.display == 'none'){

  document.getElementById('barra').style.display = 'block';
  document.getElementById('barra').style.class ("barra") 

 }else{

  document.getElementById('barra').style.display = 'none';
 }
}




function cargarPortada(id) {
    var contenido = document.getElementById('data');
    document.getElementById('myModal').style.display = 'block';
    fetch(`libro.php?id=${id}`)
        .then(response => response.json())
        .then(data => {
            contenido.innerHTML = (`<h1>${data[0].titulo}</h1>
                <img src="images/${data[0].imagen}" alt="">`);
        })
}


function cerrarModal() {
    document.getElementById('myModal').style.display = 'none';
}



function tabla() {
  Historial("Pregunta 2");
    
    
    var contenido = document.getElementById("contenido");
    contenido.innerHTML = ``;

    const contenedorTabla = document.createElement('div');
    const tabla = document.createElement('table');

    let fila;
    const colores = [
        "#FF02f0", "#00FFFF", "#0000FF",
        "#aaaaaa", "#800080", "#FFC0CB",
        "#808080","#00FF00" , "#000000"
    ];
    colores.forEach((color, index) => {
        if (index % 3 === 0) { 
            fila = document.createElement('tr');
            tabla.appendChild(fila);
        }
        const celda = document.createElement('td');
        celda.style.backgroundColor = color;
        celda.style.width = "100px";
        celda.style.height = "100px";
        celda.style.border = "2px solid black";
        celda.dataset.color = color; 

         celda.addEventListener("click", function() {
            let seccion = document.getElementById(select.value);
            if (seccion) {
                seccion.style.backgroundColor = color;
            }
        });

        fila.appendChild(celda);
    });

    const select = document.createElement("select");
    select.id = "seccionSelect";

    const opciones = ["barra", "menu", "contenido", "historial"];
    opciones.forEach(opcion => {
    let option = document.createElement("option");
    option.value = opcion;
    option.textContent = opcion; 
    select.appendChild(option);
});

    contenedorTabla.appendChild(select);
    contenedorTabla.appendChild(tabla);
    contenido.appendChild(contenedorTabla);
}



function loginModal(callback = null) {
    const modal = document.createElement('div');
    modal.id = 'modal';
    modal.innerHTML = `
        <div id="modal-contenido">
            <h3>Iniciar sesión</h3>
            <input type="text" id="user" placeholder="Usuario"><br><br>
            <input type="password" id="pass" placeholder="Contraseña"><br><br>
            <button onclick="autenticar()">Aceptar</button>
        </div>
    `;
    document.body.appendChild(modal);
    modal.dataset.callback = callback ? "1" : "0";
}


