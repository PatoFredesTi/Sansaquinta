const crearRegistro = async (registro)=>{
    let resp = await axios.post("api/registros/post", registro, {
        headers:{
            "Content-type":"aplication/json"
        }
    });
    return resp.data;
};

const getRegistro = async ()=>{
    let resp = await axios.get("api/registros/get");
    return resp.data;
};

const eliminarRegistro = async(id)=>{
    try{
        let resp = await axios.post("api/consolas/delete",{id},{
            header:{
                "Content-Type":"application/json"
            }
        });
        return resp.data =="ok";
    }catch (e){
        return false;
    }
};