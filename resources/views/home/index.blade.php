@extends('app');
@section('content')
    <div class="container border border-primary w-25 p-4 mt-5">
     <form  action="" method="post">
        <div class="form-group">
            <input class="form-control"type="text" name="nameUser" id="nameUser">
        </div>
        <div class="form-group">
          <input class="form-control" type="email" name="emailUser" id="emailUser">
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="passUser" id="passUser">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

     </form>


    </div>
@endsection