<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Editar Materias Primas</title>
  </head>
  <body>
    <div class="container">
    <h1>Editar Materias Primas</h1>
    </div>
    
<!-- formulario para Editar pizzas -->
<div class="card m-5" style="width: 25rem;">
    <div class="row m-5">
        <div class="col ">
        <form method="POST" action=" {{ route('raw_materials.update',['rawMaterial'=>$rawMaterial->id]) }} ">
            @method('put');
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled
                value="{{ $rawMaterial->id }}">
                <div id="idHelp" class="form-text">Código Materias Primas</div>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Nombre Materias Primas</label>
                <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name" placeholder="Nombre Materias Primas"
                value="{{ $rawMaterial->name }}">
                <div id="nameHelp" class="form-text">Nombre Materias Primas</div>
            </div>

            <div class="mb-3">
                <label for="unit" class="form-label">Unidades Materias Primas</label>
                <input type="text"  class="form-control" id="unit" aria-describedby="unitHelp" name="unit" placeholder="Unidades Materias Primas"
                value="{{ $rawMaterial->unit }}">
                <div id="unitHelp" class="form-text">Unidades Materias Primas</div>
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Stock Actual</label>
                <input type="number" step="0.01" min="0" max="999999.99" class="form-control" id="stock" aria-describedby="stockHelp" name="stock" placeholder="Stock Actual"
                value="{{ $rawMaterial->current_stock }}">
                <div id="stockHelp" class="form-text">Stock Actual</div>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit"> 
                    <img src=" {{ asset('icons/actualizar.png') }} " alt=""  width="26" height="26" > 
                    Actualizar
                </button>      
                      
                <a href=" {{ route('raw_materials.index') }} " class="btn btn-danger"> 
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