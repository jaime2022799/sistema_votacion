validar_nombre_apellido = document.getElementById('Nombre_Apellido');
validar_alias = document.getElementById('Alias');
validar_rut = document.getElementById('Rut')


document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', validarFormulario); 
  });

function validarFormulario(event){
    event.preventDefault();
    var Nombre_Apellido = document.getElementById('Nombre_Apellido').value;
    var Alias = document.getElementById('Alias').value;
    var Rut = document.getElementById('Rut').value;
    
    if(Nombre_Apellido.length == 0 ){
        alert('no puede quedar en blanco el nombre')
    }

    if (Alias.length < 5){
        alert('el alias debe ser mayor o igual a 5 caracteres ')
    }

    if(Rut.length  > 10){
        alert('el rut debe ser correcto')
    }

    return;

    



}