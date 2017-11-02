<!DOCTYPE html>
    <html>
    <head>
        <title>sistema de login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <!-- vinculo a bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Temas-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- se vincula al hoja de estilo para definir el aspecto del formulario de login-->  
<style >
div {
  clear: both;
}
input.checkbox:empty {
  margin-left: -999px;
}

/* style label */
input.checkbox:empty ~ label {
  position: relative;
  float: left;
  line-height: 2.5em;
  text-indent: 3.25em;
  margin-top: 1em;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

input.checkbox:empty ~ label:before {
  position: absolute;
  display: block;
  top: 0;
  bottom: 0;
  left: 0;
  content: '';
  width: 2.5em;
  background: #D1D3D4;
  border-radius: 3px 0 0 3px;
}

/* toggle hover */
input.checkbox:hover:not(:checked) ~ label:before {
  content:'\2714';
  text-indent: .9em;
  color: #C2C2C2;
}

input.checkbox:hover:not(:checked) ~ label {
  color: #888;
}

/* toggle on */
input.checkbox:checked ~ label:before {
  content:'\2714';
  text-indent: .8em;
  color: #9CE2AE;
  background-color: #4DCB6D;
}

input.checkbox:checked ~ label {
  color: #777;
}

/* checkbox focus */
input.checkbox:focus ~ label:before {
  box-shadow: 0 0 0 3px #999;
}


  /*
Al cuerpo de la
pagina se aplica el tamaño de fuente
 */
body{
  font-size: 12px;
}
/**
 * se aplica el ancho, margen centrado
 * borde de un pixel con redondeado, y rellenado
 * a la izquierda y derecha
 */
#Contenedor{
  width: 400px;
  margin: 50px auto;
  background-color: #F3EDED;
        border: 1px solid #ECE8E8;
  height: 400px;
  border-radius:8px;
  padding: 0px 9px 0px 9px;
}
 
/**
 * Aplicando al icono de usuario el color de fondo,
 * rellenado de 20px y un redondeado de 120px en forma
 * de un circulo
 */
.Icon span{
      background: #A8A6A6;
      padding: 20px;
      border-radius: 120px;
}
/**
 * Se aplica al contenedor madre un margen de tamaño 10px hacia la cabecera y pie,
 * color de fuente blanco,un tamaño de fuente 50px y texto centrado.
 */
.Icon{
     margin-top: 10px;
     margin-bottom:10px; 
     color: #FFF;
     font-size: 50px;
     text-align: center;
}
/**
 * Se aplica al contenedor donde muestra en el pie
 * la opción de olvidaste tu contraseña?
 */
.opcioncontra{
  text-align: center;
  margin-top: 20px;
  font-size: 14px;
}
 
/**
 * En las siguientes lineas
 * se define el diseño adaptable, para que
 * se muestre en los dispositivos móviles
 */
 
/******************************************/
/***    DISEÑO PARA MOVILES 320        ****/
/******************************************/
@media only screen and (max-width:320px){
#Contenedor{
  width: 100%;
  height: auto;
  margin: 0px;
}
 
/******************************************/
/***    DISEÑO PARA MOVILES 240        ****/
/******************************************/
@media only screen and (max-width:240px){
  
}
</style>
    </head>
    <body>
     <div id="Contenedor">
     <div class="Icon">
                    <!--Icono de usuario-->
                   <span class="glyphicon glyphicon-user"></span>
                 </div>
<div class="ContentForm">
      <form action="validar" method="post" name="FormEntrar">
        <div class="input-group input-group-lg">
          <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
          <input type="texto" class="form-control" name="user" placeholder="Usuario" id="user" aria-describedby="sizing-addon1" required>
        </div>
        <br>
        <div class="input-group input-group-lg">
          <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
          <input type="password" name="clave" class="form-control" placeholder="******" aria-describedby="sizing-addon1" required>
        </div>
        
        <div>
<input type="checkbox" name="radio" id="radio1" value='1' class="checkbox" />
<label for="radio1">Admin</label>
</div>

        <br>
        <button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit">Entrar</button>
      </form>
     </div> 
     </div>
</body>
 <!-- vinculando a libreria Jquery-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!-- Libreria java scritp de bootstrap -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>