@extends('menu.master')
@section('content')
<center><img src="/img/SUSHI.png"></center>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background-color: white;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}
a{
  background-color: orange; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<div class="row">
    <div class="col-md-12">
    <br />
    <h3 aling="center">MENU RECORD</h3>
    <br />
    @if($message = Session::get('success'))
    <div class="alert alert-success">
    <p>{{$message}}</p>
    </div>
    @endif
</div>
    <table class="table table-bordered table-striped">
    <tr>
    <th>Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th></th>
    <th></th>
    </tr>
@foreach($menus as $row)
<tr>
    <td>{{$row['name']}}</td>
    <td>{{$row['price']}}</td>
    <td>{{$row['quantity']}}</td>
    <td><form action="{{ route('menu.edit', $row['id'])}}" method="get">
        @csrf
        <button class="btn btn-primary" type="submit">Edit</button>
                </form></td>
    <td><form action="{{ route('menu.destroy', $row['id'])}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-block" type="submit">Delete</button>
                </form></td>
    </tr>
@endforeach
</table>
    <center><a href="{{route('menu.create')}}" class="btn btn-primary">Add</a>
    <a href="{{route('cust.index')}}" class="btn btn-primary">Back</a></center>
    

</div>
@endsection