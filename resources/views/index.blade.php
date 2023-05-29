<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Index</title>
</head>


<body style="background-image: url('https://fondosmil.com/fondo/4987.jpg'); background-repeat: no-repeat; background-size: cover">
  
    <div class="card" style="width: 65rem; margin: 2% auto 0; background-color: rgba(255, 255, 255, 0.63);">
        <div style="text-align: center;  color:rgb(0, 0, 0);"><h1>Fruits</h1></div>
        <form action="{{url('/fruta')}}" id="Form" style="margin: 25PX;" method="post">
            @csrf
            <div >
                <label for="nombre" class="h5">Nombre:</label>
                <input class="form-control form-control-lg" type="nombre" id="nombre" name="nombre" placeholder="Ingrese el nombre" required>
             
            </div>
            <div class="mb-3">
                <label for="precio" class="h5">Precio:</label>
                <input class="form-control form-control-lg" type="text"  id="precio" name="precio" placeholder="Ingrese el precio" oninput="validarNumero(this)" required>
                
            </div>
            <div>
                <label for="cantidad" class="h5">Cantidad:</label>
                <input  class="form-control form-control-lg" type="number" id="cantidad" name="cantidad" placeholder="Ingrese el cantidad" required><br>
                
            </div>
            <div>
                <button type="submit"  style="width: 100%;" class="btn btn-success">Guardar</button><br>
            </div>
        </form>
    </div>
        
    <div class="card"  style="width: 65rem; margin:1% auto 0">

    
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fruta as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->precio}}</td>
                        <td>{{$item->cantidad}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   

    <script>
        function validarNumero(input) {
        var valor = input.value.trim();
        var esValido = /[0-9]*([.,][0-9]+)??$/.test(valor);

        if (!esValido) {
         input.value = '';
        }
        }
    </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
       
        </script>
    
</body>
</html>
