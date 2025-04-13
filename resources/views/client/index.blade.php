<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Clientes</title>
  </head>
  <body>

  <!-- llama al menu -->
  @include('layouts.menu')
  
  <div class="container">
  <h1> Listado de Clientes </h1>
  <a href=" {{ route('clients.create') }} " class="btn btn-success">
    <img src=" {{ asset('icons/agregar.png') }} " alt="agregar" width="26" height="26"> Cliente
  </a>
  </div>
   
<hr>

<!-- tabla con los registros de bbdd recuperados -->

<div class="container">

    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Dirección</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Usuario</th>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Fecha Creación</th>
        <th scope="col">Fecha Actualización</th>
        </tr>
    </thead>
    <tbody>

    @foreach($clients as $client)
        <tr>
            <th>
                {{ $client->id }}
            </th>
            <td>
                {{ $client-> addres }}
            </td>
            <td>
                {{ $client-> phone }}
            </td>
            <td>
                {{ $client-> user_id }}
            </td>

            <td>
                {{ $client-> name }}
            </td>

            <td>
                {{ $client -> email }}
            </td>

            <td>
                {{ $client -> role }}
            </td>

            <td>
                {{ $client -> created_at}}
            </td>

            <td>
                {{ $client -> updated_at }}
            </td>

            <td>
               
                <a href=" {{ route('clients.edit', ['client' => $client->id]) }} " 
                class="btn btn-info">
                <img src=" {{ asset('icons/actualizar.png') }}" alt="actualizar" width="26" height="26"> </button>
                </a>

                <form action=" {{ route('clients.destroy',['client'=>$client->id]) }} "
                method="POST" style="display: inline-block">
                @method('delete')
                @csrf
                <!--<input type="submit" class="btn btn-danger" value="delete">-->
                <button type="submit" class="btn btn-danger">
                    <img src=" {{ asset('icons/delete.png') }}" alt="delete" width="26" height="26"> </button>
                </form>
            </td>
        </tr>    

    @endforeach    
    </tbody>
    </table>

    <!-- paginador de la tabla, muestra de a 10 registros se agrega en el metodo index -->
    <div class="d-flex justify-content-center mt-4">
    {{ $clients->links() }}
    </div>
    <!-- fin paginador -->
</div>



<!-- fin de la tabla -->















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