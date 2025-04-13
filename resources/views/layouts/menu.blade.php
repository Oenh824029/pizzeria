<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pizzeria</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('pizzas.index') }}">Pizzas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('ingredients.index') }}">Ingredientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('extra_ingredients.index') }}">Ingredientes Extra</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('branches.index') }}">Sucursales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('suppliers.index') }}">Proveedores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('raw_materials.index') }}">Materias Primas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('clients.index') }}">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('employees.index') }}">Empleados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('pizza_sizes.index') }}">Tamaño Pizzas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('pizza_ingredients.index') }}">Ingredientes Pizza</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('orders.index') }}">Ordenes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('order_pizzas.index') }}">Ordenes de las Pizzas</a>
        </li>
      </ul>

      <!-- Botón de Cerrar Sesión -->
   
    </div>
  </div>
</nav>
