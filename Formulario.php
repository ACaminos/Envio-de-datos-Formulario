<h1> Solicitud de consulta </h1>

<form action="BaseDeDatos.php" method="post">

<br>Nombre: <input type="text"  name="Nombre"><br>
    
<br>Apellido: <input type="text"    name="Apellido"><br>
    
<br>Tipo de consulta: <select name="TipoConsulta"><br>
    
    <option value="Personal">Personal</option>

    <option value="Empresarial">Empresarial</option>

    <option value="Otros">Otros</option>
    
    </select><br>

<br>Correo electronico: <input type="text"  name="E-mail"><br>
    
<br>Ingrese su consulta: <br> 
<textarea name="Consulta">    </textarea><br>

<br>  <input type="submit"    value="Enviar">
