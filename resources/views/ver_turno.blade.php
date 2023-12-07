<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #003660;">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="../img/Logowhite.png" alt="Logo" width="220" height="100"class="mt-2" style="margin-left: 10px;">
        </a>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="#" class="text-white" class="nav-link active">Inicio</a></li>
          <li class="nav-item"><a href="#" class="text-white" class="nav-link">Características</a></li>
        </ul>
        <button type="button" class="btn btn-warning ml-2">Cerrar Sesión</button>
      </div>
    </nav>
  </header>

  <div class="container p-5">
    <div class="row bg-light custom-div">
      <div class="col-md-12">
        <h3>Turno para estudiante</h3>
        <form class="row g-3">
          <div class="col-md-6">
            <label for="rut" class="form-label">Rut</label>
            <input type="text" class="form-control" id="rut">
          </div>
          <div class="col-md-6">
            <label for="numMatricula" class="form-label">Numero de Matricula</label>
            <input type="number" class="form-control" id="numMatricula">
          </div>
          <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre">
          </div>
          <div class="col-md-6">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido">
          </div>
          <div class="col-md-6">
            <label for="correo" class="form-label">Correo Electronico</label>
            <input type="email" class="form-control" id="correo">
          </div>
          <div class="col-md-6">
            <label for="carrera" class="form-label">Carrera</label>
            <input type="text" class="form-control" id="carrera">
          </div>
          <div class="col-md-6">
            <label for="sede" class="form-label">Sede</label>
            <input type="text" class="form-control" id="sede">
          </div>
          <div class="col-md-4">
            <label for="departamento" class="form-label">Servicio</label>
            <select id="departamento" class="form-select">
              <option>Consulta Medica</option>
              <option>Servicios de asistente social</option>
              <option>Solicitud de documentos</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="opcionMedica" class="form-label">Opción Medica</label>
            <select id="opcionMedica" class="form-select">
              <option>Enfermeria</option>
              <option>Odontologia</option>
              <option>Psicologia</option>
              <option>Nutricionista</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="opcionAsistenteSocial" class="form-label">Opción de asistente social</label>
            <select id="opcionAsistenteSocial" class="form-select">
              <option>Asistente social 1</option>
              <option>Asistente social 2</option>
            </select>
          </div>
          <div class="col-12">
            <button type="button" class="btn btn-success">Crear Ticket</button>
            <button type="button" class="btn btn-danger ml-2">Emergencia</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
