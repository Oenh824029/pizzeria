<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Agregar Orden de Pizza</title>
  </head>
  <body>
    <div class="container">
    <h1>Agregar Orden de Pizza</h1>
    </div>
    
<!-- formulario para agregar pizzas -->
<div class="card m-5" style="width: 25rem;">
    <div class="row m-5">
        <div class="col ">
        <form method="POST" action=" {{ route('order_pizzas.store') }} ">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled>
                <div id="idHelp" class="form-text">Código Orden Pizza</div>
            </div>

            <label for="codeOrden">Id Orden</label>
            <select class="form-select" name="codeOrden" id="codeOrden" required>
                <option selected disabled value="">Seleccione una orden</option>
                @foreach( $orders as $order)
                    <option value=" {{ $order->id }} "> {{ $order->id }} </option>
                @endforeach
            </select>

            <label for="codePizzaSize">Id Orden</label>
            <select class="form-select" name="codePizzaSize" id="codePizzaSize" required>
                <option selected disabled value="">Seleccione una Pizza Size</option>
                @foreach( $pizzaSizes as $pizzaSize)
                    <option value=" {{ $pizzaSize->id }} "> {{ $pizzaSize ->size }} </option>
                @endforeach
            </select>

            <div class="mb-3">
                <label for="quantity" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="quantity" aria-describedby="quantityHelp" name="quantity" placeholder="Cantidad">
                <div id="quantityHelp" class="form-text">Cantidad</div>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit"> 
                    <img src=" {{ asset('icons/save.png') }} " alt=""  width="26" height="26" > 
                    Guardar
                </button>    
                      
                <a href=" {{ route('order_pizzas.index') }} " class="btn btn-danger"> 
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