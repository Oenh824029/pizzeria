<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pizzeria</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">

        <!-- Menú de Productos -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="productosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu" aria-labelledby="productosDropdown">
            <li><a class="dropdown-item" href="{{ route('pizzas.index') }}">Pizzas</a></li>
            <li><a class="dropdown-item" href="{{ route('pizza_sizes.index') }}">Tamaño Pizzas</a></li>
            <li><a class="dropdown-item" href="{{ route('pizza_ingredients.index') }}">Ingredientes Pizza</a></li>
            <li><a class="dropdown-item" href="{{ route('ingredients.index') }}">Ingredientes</a></li>
            <li><a class="dropdown-item" href="{{ route('extra_ingredients.index') }}">Ingredientes Extra</a></li>
          </ul>
        </li>

        <!-- Menú de Operaciones -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="operacionesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Operaciones
          </a>
          <ul class="dropdown-menu" aria-labelledby="operacionesDropdown">
            <li><a class="dropdown-item" href="{{ route('orders.index') }}">Ordenes</a></li>
            <li><a class="dropdown-item" href="{{ route('order_pizzas.index') }}">Ordenes de las Pizzas</a></li>
          </ul>
        </li>

        <!-- Menú de Administración -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="administracionDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Administración
          </a>
          <ul class="dropdown-menu" aria-labelledby="administracionDropdown">
            <li><a class="dropdown-item" href="{{ route('branches.index') }}">Sucursales</a></li>
            <li><a class="dropdown-item" href="{{ route('suppliers.index') }}">Proveedores</a></li>
            <li><a class="dropdown-item" href="{{ route('raw_materials.index') }}">Materias Primas</a></li>
          </ul>
        </li>

        <!-- Menú de Personas -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="personasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Personas
          </a>
          <ul class="dropdown-menu" aria-labelledby="personasDropdown">
            <li><a class="dropdown-item" href="{{ route('users.index') }}">Usuarios</a></li>
            <li><a class="dropdown-item" href="{{ route('clients.index') }}">Clientes</a></li>
            <li><a class="dropdown-item" href="{{ route('employees.index') }}">Empleados</a></li>
          </ul>
        </li>

      </ul>

      <!-- Botón de Cerrar Sesión -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="nav-link btn btn-link text-white text-decoration-none" style="padding: 0; border: none; background: none;">
              Cerrar sesión
            </button>
          </form>
        </li>
      </ul>

    </div>
  </div>
</nav>
