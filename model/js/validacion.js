function validar(){

    var nombre,apellido,identificacion,telefono,usuario,password;

    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    identificacion = document.getElementById("identificacion").value;
    telefono = document.getElementById("telefono").value;
    usuario = document.getElementById("usuario").value;
    password = document.getElementById("password").value;
    nacimiento = document.getElementById("nacimiento").value;

    if(nombre === "" || apellido === "" || telefono === ""  || nacimiento ==="" ||  usuario === "" || password === ""){
        alert("Verificar los campos");
        return false;
    }else if(nombre.length>80){
        alert("Nombre demaciado largo");
        return false;
    }else if(apellido.length>80){
        alert("Apellido demaciado largo");
        return false;
    }else if(identificacion.length>14){
        alert("Identificacion demaciado largo");
        return false;
    }else if(telefono.length>14){
        alert("Telefono demaciado largo");
        return false;
    }else if(nacimiento == "0000-00-00"){
      alert("Debes de tener una fecha");
     return false;
    }else if(usuario.length>15){
        alert("Usuario demaciado largo");
        return false;
    }else if(password.length>20){
        alert("Contraseña demaciado largo");
        return false;
    }

}