console.log("hola")

function validarDatos(){
	let nombre, marca, precio, cantidad, descripcion;
	nombre = document.form.nombre.value;
   marca = document.form.marca.value;
	precio = document.form.precio.value;
   cantidad = document.form.cantidad.value;
   descripcion= document.form.descripcion.value;
   

    if(nombre ==''){
       alert("Es obligatorio ingresar un nombre");
    }else{
      validar1=1;
    }
    if(marca ==''){
    alert("Es obligatorio ingresar una marca");
    }else{
      validar2=1;
    }
    if(precio ==''){
       alert("Es obligatorio ingresar precio");
    }
    else if(isNaN(precio)){
        alert("El precio debe ser un valor numerico");
    }else{
      validar3=1;
    }
    if(cantidad ==''){
       alert("Es obligatorio ingresar una cantidad");
    }
    else if(isNaN(cantidad)){
        alert("La cantidad debe ser un valor numerico");
    }else{
      validar4=1;
    }
    if(descripcion ==''){
       alert("Es obligatorio ingresar una descripcion");
    }
    else{
      validar5=1;
    }
    if(validar1==1 && validar2==1 && validar3==1 && validar4==1 && validar5==1){
      document.form.btnED.submit();
    }else{
      document.form.btnED.value=null;
    }
}
