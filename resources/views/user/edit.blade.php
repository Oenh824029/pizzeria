<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Editar Usuario</title>
  </head>
  <body>
    <div class="container">
    <h1>Editar Usuario</h1>
    </div>
    
<!-- formulario para Editar Usuarios -->
<div class="card m-5" style="width: 25rem;">
    <div class="row m-5">
        <div class="col ">
        <form method="POST" action=" {{ route('users.update',['user'=>$user->id]) }} ">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled
                value=" {{ $user->id }} ">
                <div id="idHelp" class="form-text">Código Usuario</div>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name" placeholder="Nombre Usuario"
                value=" {{ $user->name }} ">
                <div id="nameHelp" class="form-text">Nombre Usuario</div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="email Usuario"
                value=" {{ $user->email }} ">
                <div id="emailHelp" class="form-text">Email Usuario</div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" name="password" placeholder="Password Usuario"
                value=" {{ $user->password }} ">
                <div id="passwordHelp" class="form-text">Password Usuario</div>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Rol</label>
                <select class="form-select" name="role" id="role" required>
                    <option selected value="">Seleccionar...</option>
                    <option value="empleado" {{ $user->role === 'empleado' ? 'selected' : '' }}>Empleado</option>
                    <option value="cliente" {{ $user->role === 'cliente' ? 'selected' : '' }}>Cliente</option>
                </select>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit"> 
                    <img src=" {{ asset('icons/save.png') }} " alt=""  width="26" height="26" > 
                    Guardar
                </button>    
                      
                <a href=" {{ route('users.index') }} " class="btn btn-danger"> 
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