function validar(){
	var nombre, apellidos, correo, usuario, telefono, password, password2, terminos, exp_apellidos, exp_apellidos, exp_telefono;

	nombre = document.getElementById("nombre").value;
    apellidos = document.getElementById("apellidos").value;
	correo = document.getElementById("correo").value;
    telefono = document.getElementById("telefono").value
	usuario = document.getElementById("usuario").value;
    password = document.getElementById("password").value;
	password2 = document.getElementById("password2").value;
	terminos = document.getElementById("terminos").checked;

	exp_correo = /\w+@\w+\.+[a-z]/;
    exp_apellidos = /[a-z]+\s+[a-z]/;

	if(nombre === "" || apellidos === "" || correo === "" || usuario === "" || password === "" || password2 === ""){
		alert("Todos los campos son obligatorios");
		return false;
	}
	else if(!terminos){
		alert("Todos los campos son obligatorios");
		return false;
	}
    else if(nombre.length>20){
		alert("Solo se aceptan 20 caracteres");
		return false;
	}
    else if(!exp_apellidos.test(apellidos)){
        alert("Debe ingresar sus dos apellidos");
        return false;
    }
	else if(usuario.length<5){
		alert("El Usuario es muy corto. El usario debe contener de 5 a 16 caracteres");
		return false;
	}
	else if(usuario.length>12){
		alert("El Usuario es muy largo. Solo se aceptan de 5 a 12 caracteres");
		return false;
	}
	else if(correo.length>20){
		alert("El Correo es muy largo. Solo se aceptan 20 caracteres");
		return false;
	}
	else if(!exp_correo.test(correo)){
		alert("El correo no es válido");
		return false;
	}
    else if(telefono.length>10){
		alert("El teléfono es muy largo. Solo se aceptan 10 caracteres");
		return false;
	}
    else if(isNaN(telefono)){
        alert("Número de celular no admitido");
		return false;
    }
	else if(password.length<8){
		alert("La Contraseña es muy corta. Debe tener mínimo 8 caracteres");
		return false;
	}
	else if(password.length>20){
		alert("La Contraseña es muy larga. Se aceptan 20 caracteres");
		return false;
	}
	else if(password2.length>20){
		alert("La Confirmación de la Contraseña es muy larga. Solo se aceptan 20 caracteres");
		return false;
	}

	else if(password !== password2){
		alert("La confirmación de la contraseña no coincide con la contraseña escrita");
		return false;
	}

} 