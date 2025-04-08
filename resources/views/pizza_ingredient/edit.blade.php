<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Agregar Ingrediente Pizza</title>
  </head>
  <body>
    <div class="container">
    <h1>Agregar Ingrediente Pizza</h1>
    </div>
    
<!-- formulario para agregar pizzas -->
<div class="card m-5" style="width: 25rem;">
    <div class="row m-5">
        <div class="col ">
        <form method="POST" action=" {{ route('pizza_ingredients.update',['pizzaIngredient'=>$pizzaIngredient]) }} ">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled
                value="{{$pizzaIngredient->id}}">
                <div id="idHelp" class="form-text">Código Ingrediente Pizza</div>
            </div>

            <label for="pizza">Pizza</label>
            <select class="form-select" name="codePizza" id="pizza" required>
                <option selected disabled value="">Seleccione una Pizza</option>
                @foreach( $pizzas as $pizza)
                @if( $pizza ->id == $pizzaIngredient->pizza_id)
                    <option selected value=" {{ $pizza->id }} "> {{ $pizza->name }} </option>
                @else    
                    <option value=" {{ $pizza->id }} "> {{ $pizza->name }} </option>
                @endif
                @endforeach
            </select>

            <label for="ingredient">Ingrediente</label>
            <select class="form-select" name="codeIngredient" id="ingredient" required>
                <option selected disabled value="">Seleccione una Pizza</option>
                @foreach( $ingredients as $ingredient)
                    @if( $ingredient->id == $pizzaIngredient->ingredient_id)
                        <option selected value=" {{ $ingredient->id }} "> {{ $ingredient->name }} </option>
                    @else
                        <option value=" {{ $ingredient->id }} "> {{ $ingredient->name }} </option>
                    @endif

                    
                @endforeach
            </select>
           
            <div class="m-3">
                <button class="btn btn-success" type="submit"> 
                    <img src=" {{ asset('icons/save.png') }} " alt=""  width="26" height="26" > 
                    Actualizar
                </button>    
                      
                <a href=" {{ route('pizza_ingredients.index') }} " class="btn btn-danger"> 
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