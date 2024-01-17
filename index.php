<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Votacion</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <h2>FORMULARIO DE VOTACIÓN: </h2>

    <form method="post" id="formulario">

        
        <div class="input-wrapper_nombre_apellido">
        <label for="Nombre_Apellido">Nombre y Apellido</label>
            <input id="Nombre_Apellido" type="text" name="Nombre_Apellido" placeholder="Nombre y Apellido">
        </div>

        <div class="input-wrapper_alias">
        <label for="Alias">Alias</label>
            <input id="Alias" type="text" name="Alias" placeholder="Alias">
        </div>

        <div class="input-wrapper_Rut">
        <label for="Rut">Rut</label>
            <input id="Rut" type="text" name="Rut" placeholder="Rut">
        </div>

        <div class="input-wrapper_Email">
        <label for="Email">Email</label>
            <input id="Email" type="text" name="Email" placeholder="Email">
        </div>

        <div class="input-wrapper_region">
         <label for="Region">Region</label>
         <select name="region" id="region">
         <option value="opcion1" id="opcion1">opcion1</option>
         <option value="opcion2" id="opcion2">opcion2</option>
         <option value="opcion2" id="opcion2">opcion3</option>
         </select>
         
        </div>

        <div class="input-wrapper_comuna">
         <label for="Comuna">Comuna</label>
         <select name="comuna" id="comuna">
         <option value="opcion1" id="opcion1">opcion1</option>
         <option value="opcion2" id="opcion2">opcion2</option>
         <option value="opcion2" id="opcion2">opcion3</option>
         </select>
         
        </div>

        <div class="input-wrapper_candidato">
         <label for="Candidato">Candidato</label>
         <select name="candidato" id="candidato">
         <option value="opcion1" id="opcion1">opcion1</option>
         <option value="opcion2" id="opcion2">opcion2</option>
         <option value="opcion2" id="opcion2">opcion3</option>
         </select>
         
        </div>

        <div class="input-wrapper_radio">
         <label for="Como se entero de nosotros">Como se entero de nosotros</label>
          <input type="radio" name="Web">Web
          <input type="radio" name="Tv">Tv
          <input type="radio" name="RedesSociales">Redes Sociales
          <input type="radio" name="Amigos">Amigos
        </div>


        <input type="submit" name="votar" value="Votar" class="votar">


    </form>

    <?php 
    include("registrar.php");
    
    ?>

    <?php
     echo '<script src="validacion_formulario.js">'
    ?>
    
</body>
</html>