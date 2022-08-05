@extends('app')
@section('nav')
<!-- Nav tabs -->

  <nav class="nav justify-content-center ">
    <a class="nav-link btn btn-outline-success" href="http://localhost:8000/">HOME</a>
    <a class="nav-link btn btn-outline-success" href="#">LOGIN</a>
    <a class="nav-link btn btn-outline-success" href="#">REGISTER</a>
  </nav>
 

  @endsection
@section('header')
<header>
  
      
            <h1 class="mb-3">Register of Project</h1>
           
            <div class="container ">
                <form  action="" method="post">
                   <div class="form-group">
                       <input class="form-control"type="text" name="nameProject" id="nameProject" placeholder="Name Porject">
                   </div>
                   <div class="form-group">
                     <input class="form-control" type="text" name="descriptionProject" id="descriptionProject" placeholder="Description Porject">
                   </div>
                   <div class="form-group">
                       <input class="form-control" type="text" name="urlProject" id="urlProject"  placeholder="URL Porject">
                   </div>
           
                   <button type="submit" class="btn btn-primary">Register</button>
           
                </form> </div>
      
        
      
  
    <!-- Background image -->
  </header>

@endsection

@section('content')
<div class="container">
  

<table class="table  ">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Url</th>
        <th scope="col">Update</th>
        <th scope="col">Destroy</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
    
      <form >
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td><input class="form-control  nameProjectUp"type="text" value="{{$item->name_pj}}" name="nameProjectUp"id="nameProjectUp"></td>
            <td><input class="form-control descriptionProjectUp" type="text" value="{{$item->description_pj}}" name="descriptionProjectUp"id="descriptionProjectUp"></td>
            <td><input class="form-control urlProjectUp" type="text" value="{{$item->url}}" name="urlProjectUp"id="urlProjectUp"></td>
            <td><button class="btn btn-info"   href="" onclick="//UpdateProject({{$item->id}})">Update</button></td>
            <td><button class="btn btn-danger" href="" onclick="//DestroyProject({{$item->id}})">Destroy</button></td>
          </tr>
        </form>
        @endforeach
      
      
     
    </tbody>
  </table>
</div>
@endsection



