<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Sistema Biblioteca</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="lib/boostrap-css/bootstrap.min.css">
  <link rel="stylesheet" href="lib/boostrap-iconos/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/estilosmenu.css">
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <div>
      <!-- Logo -->
      <div class="logo">
        <img src="img/logo.png" alt="Logo Institución">
      </div>

      <!-- Menú de Navegación -->
      <nav class="nav flex-column">
        <a class="nav-link active" href="#"><i class="bi bi-house-door me-2"></i>Inicio</a>
        <a class="nav-link" href="#"><i class="bi bi-journal-plus me-2"></i>Registrar Préstamo</a>

        <!-- Usuarios con submenú -->
        <a class="nav-link" onclick="toggleSubmenu('submenuUsuarios')">
          <i class="bi bi-person-lines-fill me-2"></i>Usuarios
          <i class="bi bi-chevron-right float-end rotate" id="arrowUsuarios"></i>
        </a>
        <div class="submenu" id="submenuUsuarios">
          <a class="nav-link" href="#"><i class="bi bi-clock-history me-2"></i>Historial</a>
          <a class="nav-link" href="#"><i class="bi bi-list-ul me-2"></i>Listado</a>
        </div>

        <!-- Alumnos con submenú -->
        <a class="nav-link" onclick="toggleSubmenu('submenuAlumnos')">
          <i class="bi bi-people-fill me-2"></i>Alumnos
          <i class="bi bi-chevron-right float-end rotate" id="arrowAlumnos"></i>
        </a>
        <div class="submenu" id="submenuAlumnos">
          <a class="nav-link" href="#"><i class="bi bi-person-plus me-2"></i>Registrar Alumno</a>
          <a class="nav-link" href="#"><i class="bi bi-list-ul me-2"></i>Listado de Alumno</a>
        </div>

        <!-- Devoluciones con submenú -->
        <a class="nav-link" onclick="toggleSubmenu('submenuDevoluciones')">
          <i class="bi bi-arrow-clockwise me-2"></i>Devoluciones
          <i class="bi bi-chevron-right float-end rotate" id="arrowDevoluciones"></i>
        </a>
        <div class="submenu" id="submenuDevoluciones">
          <a class="nav-link" href="#"><i class="bi bi-file-earmark-check me-2"></i>Lista de Devoluciones</a>
          <a class="nav-link" href="#"><i class="bi bi-file-earmark-arrow-up me-2"></i>Registrar Devolución</a>
        </div>

        <!-- Libros con submenú -->
        <a class="nav-link" onclick="toggleSubmenu('submenuLibros')">
          <i class="bi bi-book me-2"></i>Libros
          <i class="bi bi-chevron-right float-end rotate" id="arrowLibros"></i>
        </a>
        <div class="submenu" id="submenuLibros">
          <a class="nav-link" href="#"><i class="bi bi-plus-circle me-2"></i>Registrar Libro</a>
          <a class="nav-link" href="#"><i class="bi bi-list-ul me-2"></i>Listado de Libro</a>
          
          <!-- Categoría de Libros -->
          <a class="nav-link" onclick="toggleSubmenu('submenuCategoria')">
            <i class="bi bi-tags me-2"></i>Categoría
            <i class="bi bi-chevron-right float-end rotate" id="arrowCategoria"></i>
          </a>
          <div class="submenu" id="submenuCategoria">
            <a class="nav-link" href="#"><i class="bi bi-pencil me-2"></i>Registrar Categoría</a>
            <a class="nav-link" href="#"><i class="bi bi-list-ul me-2"></i>Listado de Categorías</a>
          </div>
        </div>

        <!-- Docentes con submenú -->
        <a class="nav-link" onclick="toggleSubmenu('submenuDocentes')">
          <i class="bi bi-person-badge me-2"></i>Docentes
          <i class="bi bi-chevron-right float-end rotate" id="arrowDocentes"></i>
        </a>
        <div class="submenu" id="submenuDocentes">
          <a class="nav-link" href="#"><i class="bi bi-person-plus me-2"></i>Registrar Docente</a>
          <a class="nav-link" href="#"><i class="bi bi-list-ul me-2"></i>Lista de Docentes</a>
        </div>

        <!-- Reportes -->
        <a class="nav-link" href="#"><i class="bi bi-file-earmark-bar-graph me-2"></i>Reportes</a>

        <!-- Sanciones como menú principal -->
        <a class="nav-link" href="#"><i class="bi bi-x-circle-fill me-2"></i>Sanciones</a>

      </nav>
    </div>

    <!-- Información del Usuario -->
    <div class="user-info">
      <img src="img/usuario.jpg" alt="Usuario">
      <p><strong>Admin Biblioteca</strong></p>
      <a href="#"><i class="bi bi-box-arrow-right me-1"></i>Cerrar sesión</a>
    </div>
  </div>

  <!-- Contenido Principal -->
  <div class="main-content">
    <h1>Bienvenido al Sistema de Biblioteca</h1>
    <p class="lead">Seleccione una opción del menú para comenzar.</p>
  </div>
 <script src="js/menu.js"></script>
  <script src="lib/bootstrap.bundle.min.js"></script>
</body>
</html>
