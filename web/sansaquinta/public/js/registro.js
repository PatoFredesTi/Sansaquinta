
const deleteRegistros = async function(){
    let id = this.idRegistro;
    if(await eliminarRegistro(id)){
        let registros = await getRegistro();
        cargarTabla(registros);
        Swal.fire("Registro Eliminado","El registro se elimino correctamente","info");
    }else{
        Swal.fire("Error","No se pudo atender a la solicitud","error");
    }
};

const cargarTabla(registros)=>{
    let tbody = document.querySelector("#tbody-medidas");
    tbody.innerHTML = "";
    for(let i = 0; i< registros.lenght; ++i){
        let tr = document.createElement("tr");
        let tdFecha = document.createElement("td");
        tdFecha.innerText = registros[i].fecha;
        let tdHora = document.createElement("td");
        tdHora.innerText = registros[i].hora;
        let tdMedidor = document.createElement("td");
        tdMedidor.innerText = registros[i].medidor;
        let tdValor = document.createElement("td");
        tdValor.innerText = registros[i].valor;
        let tdAcciones = document.createElement("td");
        let botonDescartar = document.createElement("button");
        botonDescartar.innerText = "Descartar Lectura";
        botonDescartar.classList.add("btn","btn-danger");
        botonDescartar.idRegistro = consolas[i].id;
        botonDescartar.addEventListener("click", deleteRegistros);
        tdAcciones.appendChild(botonDescartar);
        tr.appendChild(tdFecha);
        tr.appendChild(tdHora);
        tr.appendChild(tdMedidor);
        tr.appendChild(tdValor);
        tr.appendChild(tdAcciones);
        tbody.appendChild(tr);
    }
};

document.querySelector("#filtro-cbx").addEventListener("change", async ()=>{
    let filtro = document.querySelector("#filtro-cbx").value;
    let registros = await getRegistro(filtro);
    cargarTabla(registros);
});
