<html>
<head>

</head>
<link rel="stylesheet" href="../proyecto_hugo/estilos/main.css"> 

<body bgcolor="#EEEEEE" background="" background-repeat:no-repeat>

<?php
        include_once ("configuracion.php");
        CConexion :: conexionBD();

    ?>

<div class="contact-wrapper animated bounceInUp">
    <div class="contact-form">
        <h3>Datos del Paciente</h3>
        <form action="index-post.php" method="post">
            <p>
                <label>Nombre(s)</label>
                <input type="text" maxlength="15" name="name">
            </p>
            <p>
                <label>Apellido(s)</label>
                <input type="text" maxlength="20" name="ape">
            </p>
            <p>
                <label>Numero de telefono </label>
                <input type="tel" maxlength="10" name="phone">
            </p>
            <p>
                <label>Email </label>
                <input type="email" maxlength="10" name="email">
            </p>
            <p>
            <label for="opciones">Sexo</label>
                <select id="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Compra">Masculino</option>
                    <option value="Vende">Femenino</option>
                </select>
            </p>
            <p>
                <label for="fecha">Fecha de nacimiento</label>
                <input type="date" id="fecha">
            </p>
            <p class="block">
               <label>Observaciones</label> 
                <textarea name="message" rows="3"></textarea>
            </p>

            <p class="btn">
                <input type="submit" class="btn btn-primary" value="enviar" >
            </p>
        </form>
    </div>
   <!--  <div class="contact-info">
        <h4>Más informacion</h4>
        <ul>
            <li><i class="fas fa-map-marker-alt"></i> Direccion empresa </li>
            <li><i class="fas fa-phone"></i> (52) 55-12-34-56-78</li>
            <li><i class="fas fa-envelope-open-text"></i> contact@saludintegral.com</li>
        </ul>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero provident ipsam necessitatibus repellendus?</p>
        <p>Company.com</p>
    </div> -->
</div>
</body>

</html>
