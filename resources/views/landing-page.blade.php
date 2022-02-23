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
        @foreach ($todos as $todo)
          <a href="{{ route('todos-editar', [$todo->id]) }}"> {{ $todo->name }}</p>
        @endforeach
    </div>    
</body>
</html>