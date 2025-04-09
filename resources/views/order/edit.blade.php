<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Editar Ordenes</title>
  </head>
  <body>
    <div class="container">
    <h1>Editar Ordenes</h1>
    </div>
    
<!-- formulario para Editar pizzas -->
<div class="card m-5" style="width: 25rem;">
    <div class="row m-5">
        <div class="col ">
        <form method="POST" action=" {{ route('orders.update',['order'=>$order]) }} ">
            @method('put')  
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled
                value = "{{ $order->id }}">
                <div id="idHelp" class="form-text">Código Ordenes</div>
            </div>

            <label for="client">Cliente</label>
            <select class="form-select" name="codeClient" id="codeClient" required>
                <option selected disabled value="">Seleccione un Cliente</option>
                @foreach( $clients as $client)
                    @if($client->id === $order->client_id)
                    <option value=" {{ $client->id }} " selected> {{ $client->name }} </option>
                    @else    
                    <option value=" {{ $client->id }} "> {{ $client->name }} </option>
                    @endif
                @endforeach
            </select>

            <label for="branch">Sucursal</label>
            <select class="form-select" name="codeBranch" id="codeBranch" required>
                <option selected disabled value="">Seleccione una Sucursal</option>
                @foreach( $branches as $branch)
                    @if($branch->id === $order->branch_id)
                    <option value=" {{ $branch->id }} " selected> {{ $branch->name }} </option>
                    @else
                    <option value=" {{ $branch->id }} "> {{ $branch->name }} </option>
                    @endif
                @endforeach
            </select>

            <div class="mb-3">
                <label for="price" class="form-label">Precio Ordenes</label>
                <input type="number" step="0.01" min="0" max="999999.99" class="form-control" id="price" aria-describedby="priceHelp" name="price" placeholder="Precio Ingrediente Extra"
                value="{{ $order->total_price }}">
                <div id="priceHelp" class="form-text">Precio Ordenes</div>
            </div>

            <label for="status">Estado</label>
            <select class="form-select" name="status" id="status" required>
                <option selected disabled value="">Seleccione un Estado</option>
                    <option value="pendiente" {{$order->status === 'pendiente' ? 'selected' : ''}} >Pendiente</option>
                    <option value="en_preparacion" {{$order->status === 'en_preparacion' ? 'selected' : ''}}>En Preparación</option>
                    <option value="listo" {{$order->status === 'listo' ? 'selected' : ''}}>Listo</option>
                    <option value="entregado" {{$order->status === 'entregado' ? 'selected' : ''}}>Entragado</option>
            </select>

            <label for="delivery_type">Tipo de Entrega</label>
            <select class="form-select" name="delivery_type" id="delivery_type" required>
                <option selected disabled value="">Seleccione un Tipo de Entrega</option>
                    <option value="en_local" {{$order->delivery_type === 'en_local' ? 'selected' : ''}}>En Local</option>
                    <option value="a_domicilio" {{$order->delivery_type === 'a_domicilio' ? 'selected' : ''}}>A domicilio</option>
            </select>

            <label for="delivery_person">Repartidor</label>
            <select class="form-select" name="codeDelivery" id="codeDelivery" required>
                <option selected disabled value="">Seleccione un Repartidor</option>
                @foreach( $deliveryPersons as $deliveryPerson)
                    @if($deliveryPerson -> id == $order->delivery_person_id)
                    <option value=" {{ $deliveryPerson->id }} " selected> {{ $deliveryPerson->name }} </option>
                    @else
                    <option value=" {{ $deliveryPerson->id }} " > {{ $deliveryPerson->name }} </option>
                    @endif
                @endforeach
            </select>

            <!-- -->
           
            <div class="m-3">
                <button class="btn btn-success" type="submit"> 
                    <img src=" {{ asset('icons/save.png') }} " alt=""  width="26" height="26" > 
                    Actualizar
                </button>    
                      
                <a href=" {{ route('orders.index') }} " class="btn btn-danger"> 
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