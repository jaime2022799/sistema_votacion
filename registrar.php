<?php  

include("conexion.php");

if (isset($_POST['register'])) {
    if(
        strlen($_POST['Nombre_Apellido']) >= 1 && 
        strlen($_POST['Alias']) >= 1 && 
        strlen($_POST['Rut']) >= 1 && 
        strlen($_POST['Email']) >= 1 && 
        strlen($_POST['region']) >= 1 && 
        strlen($_POST['comuna']) >= 1 && 
        strlen($_POST['candidato']) >= 1 &&
        strlen($_POST['Web']) >= 1 &&
        strlen($_POST['Tv']) >= 1 &&
        strlen($_POST['RedesSociales']) >= 1 &&
        strlen($_POST['Amigos']) >= 1 
        ) {
            $Nombre_Apellido = trim($_POST['Nombre_Apellido']);
            $Alias = trim($_POST['Alias']);
            $Rut = trim($_POST['Rut']);
            $Email = trim($_POST['Email']);
            $region = trim($_POST['region']);
            $comuna = trim($_POST['comuna']);
            $candidato = trim($_POST['candidato']);
            $Web = trim($_POST['Web']);
            $Tv = trim($_POST['Tv']);
            $Redes_Sociales = trim($_POST['RedesSociales']);
            $Amigos = trim($_POST['Amigos']);
            $fecha = date("d/m/y");

            $consulta = "INSERT INTO formulario_votacion(nombre_apellido,alias,rut,email,region,comuna,candidato,web,tv,RedesSociales,amigos,fecha)
                        VALUES ('$Nombre_Apellido','$Alias','$Rut','$Email','$region','$comuna','$region','$candidato','$Web','$Tv','$RedesSociales','$Amigos','$fecha')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
                alert("se a enviado");
            } else {
                alert("error");
            }
        }else {
            alert("error");
        }

}

?>