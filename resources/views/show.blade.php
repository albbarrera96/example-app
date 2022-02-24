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
        <h1>TODO:</h1>
        <form action="{{ route('todos-update', ['$id'=> $todo->id ]) }}" method="POST">
            @method('PATCH')
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
              <label for="exampleInputEmail1" class="form-label">Actualizar tarea</label>
              <input type="text" name="name" class="form-control" value="{{ $todo->name }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
        <br>
    </div>    
</body>
</html>