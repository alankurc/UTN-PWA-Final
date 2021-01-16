function contactarse(){
    var nombre = document.forms[0].nombre.value;
    var apellido = document.contacto_form.apellido.value
    var email = document.getElementById("email_id").value
    var consulta = document.getElementById("consulta_id").value

    console.log(nombre*1+apellido*1)
    console.log(parseInt(nombre)+parseInt(apellido))
    if(nombre==""){
        document.getElementById("error_nombre").innerHTML = "El nombre es obligatorio"
    }
    console.log(nombre,apellido,email,consulta)
}