<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alberto's Laravel Project</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('/js/app.js') }}" defer></script>
</head>
<body>
    @include('components.navbar')
    <br>
    <div class="container">  
        <h1>LANDING PAGE</h1>
        <form method="POST">
            @csrf
            @error('name')
              <div class="alert alert-danger">
                <div class="alert-heading">I'M ERROR</div>
              </div>
            @enderror
            @if (session('success'))
              <h5 class="alert alert-success">{{session('success')}}</h5>
            @endif
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Añadir tarea</label>
              <input type="text" name="name" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Aceptar</button>
        </form>
        <br>
        <div class="row justify-content-start">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-4">
                @foreach ($todos as $todo)
                  <div class="card shadow-sm py-2 text-center">
                    <div class="card-title mb-4">
                      <a href="{{ route('todos-show', [$todo->id]) }}" class="h3 text-dark"> {{ $todo->name }}</p>
                    </div>
                    <form action="{{ route('todos-delete', [$todo->id]) }}" method="POST">
                      @method('DELETE')
                      @csrf
                      <button class="btn btn-danger">Eliminar</button>
                    </form>                     
                  </div>
                 @endforeach                
              </div>
            </div>
          </div>
        </div>
    </div>    
</body>
</html>