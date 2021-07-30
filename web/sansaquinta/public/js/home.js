
document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let fecha = document.querySelector("#fecha-date").value.trim();
    let hora = document.querySelector("#hora-time").value.trim();
    let medidor = document.querySelector("#medidor-select").value.trim();
    let direccion = document.querySelector("#direccion-txt").value.trim();
    let valor = document.querySelector("#valor-int").value.trim();
    let tipo_medida = document.querySelector("#medida-select").value.trim();
    let registros = await getRegistro();
    let registro = {};
    registro.fecha = fecha;
    registro.hora = hora;
    registro.medidor = medidor;
    registro.direccion = direccion;
    registro.valor = valor;
    registro.tipo_medida = tipo_medida;
    let res = await crearRegistro(registro);
    await Swal.fire("Registro Creado","Revisaremos a la brevedar", "info");
    window.location.href = "mediciones_existentes";
    
});