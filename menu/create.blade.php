@extends('menu.master')
@section('content')

<center><img src="/img/SUSHI.png"></center>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: orange;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
    <div class="col-md-12">
    <br />
    <center><h3 aling="center">ADD MENU</h3></center>
    <br />
    @if(count($errors) > 0)
    <div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    </div>
    @endif
    @if(\Session::has('success'))
    <div class="alert alert-success">
        <p>{{\Session::get('success')}}</p>
    </div>
    @endif
    <form method="post" action="{{url('menu')}}">
    {{csrf_field()}}
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" placeholder="Enter name"/>
          
        <label for="name">Price:</label>
        <input type="text" name="price" class="form-control" placeholder="Enter price"/>

        <label for="name">Name</label>
        <input type="text" name="quantity" class="form-control" placeholder="Enter quantity"/>
        
        <input type="submit" class="btn btn-primary"/>
       
        </center></form>
</div>
<a href="{{route('menu.index')}}" class="btn btn-primary">Back</a>
@endsection