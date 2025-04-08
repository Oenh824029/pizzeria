<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Agregar Empleado</title>
  </head>
  <body>
    <div class="container">
    <h1>Agregar Empleado</h1>
    </div>
    
<!-- formulario para agregar pizzas -->
<div class="card m-5" style="width: 25rem;">
    <div class="row m-5">
        <div class="col ">
        <form method="POST" action=" {{ route('employees.store') }} ">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled>
                <div id="idHelp" class="form-text">Código Empleado</div>
            </div>

            <label for="position">Cargo</label>
            <select class="form-select" name="position" id="position" required>
                <option selected disabled value="">Seleccione un Cargo</option>
                    <option value="cajero">Cajero</option>
                    <option value="admnistrador">Admnistrador</option>
                    <option value="cocinero">Cocinero</option>
                    <option value="mensajero">Mensajero</option>
            </select>

            <div class="mb-3">
                <label for="identification" class="form-label">Identificación</label>
                <input type="text" class="form-control" id="identification" aria-describedby="identificationHelp" name="identification" placeholder="Identificación Empleado">
                <div id="identificationHelp" class="form-text">Identificación Empleado</div>
            </div>

            <div class="mb-3">
                <label for="salary" class="form-label">Salario</label>
                <input type="number" step="0.01" min="0" max="999999.99" class="form-control" id="salary" aria-describedby="salaryHelp" name="salary" placeholder="Salario">
                <div id="salaryHelp" class="form-text">Salario</div>
            </div>

            <div class="mb-3">
                <label for="hire" class="form-label">Fecha Contratación</label>
                <input type="date" class="form-control" id="hire" aria-describedby="hireHelp" name="hire" placeholder="Fecha Contratación">
                <div id="hireHelp" class="form-text">Fecha Contratación</div>
            </div>


            <label for="user">Usuario</label>
            <select class="form-select" name="code" id="user" required>
                <option selected disabled value="">Seleccione Usuario</option>
                @foreach( $users as $user)
                    <option value=" {{ $user->id }} "> {{ $user->name }} </option>
                @endforeach
            </select>

            <div class="m-3">
                <button class="btn btn-success" type="submit"> 
                    <img src=" {{ asset('icons/save.png') }} " alt=""  width="26" height="26" > 
                    Guardar
                </button>    
                      
                <a href=" {{ route('employees.index') }} " class="btn btn-danger"> 
                    <img src=" {{ asset('icons/cancel.png') }} " alt="cancelar" width="26" height="26"> 
                    Cancelar
                </a>
            </div>

        </form>
        </div>
    </div>
</div>
<!-- fin formulario -->














    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>