<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registra Alumnos</title>
  </head>
  <body>
    <a href="/Escuela/">Escuela</a>><a href="/Escuela/registralumno">registralumno</a>
    <div class="formularios">
      <h1>Registra a alumnos</h1>
      <section>
        <h2>Registra un alumno atravez del metodo GET</h2>
        <form class="form" action="/Escuela/registrarget"  method="get">
          <input type="text" name="nombre" placeholder="Nombre">
          <input type="text" name="correo" placeholder="Correo">
          <input type="number" name="edad" placeholder="Edad">
          <select name="genero">
            <option value="M">Macho</option>
            <option value="H">Hembra</option>
          </select>
          <button id= "Registrar">Registrame GET</button>

        </form>
      </section>
      <hr>
      <section>
        <h2>Registra un alumno atravez del metodo POST enviado por ajax</h2>
        <form id="formulario2" class="form" action="/Escuela/registrarpost"  method="post">
          <input id="nombre" type="text" name="nombre" placeholder="Nombre">
          <input id="correo" type="text" name="correo" placeholder="Correo">
          <input id="edad" type="number" name="edad" placeholder="Edad">
          <select id="genero" name="genero">
            <option value="M">Macho</option>
            <option value="H">Hembra</option>
          </select>
          <button id= "Registrar">Registrame POST</button>

        </form>
      </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/micodigo.js"></script>


  </body>
</html>
