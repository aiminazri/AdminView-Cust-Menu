@extends('cust.master')
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
    <h3 aling="center">CUSTOMER RECORD</h3>
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
    <th>Address</th>
    <th>Postcode</th>
    <th>PhoneNo</th>
    <th></th>
    </tr>
@foreach($custs as $row)
<tr>
    <td>{{$row['name']}}</td>
    <td>{{$row['address']}}</td>
    <td>{{$row['postcode']}}</td>
    <td>{{$row['phoneno']}}</td>
    <td class="text-center">
      <form action="{{ route('cust.destroy', $row['id'])}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-block" type="submit">Delete</button>
                </form>
            </td>
    </tr>
@endforeach
</table>
    <center><a href="{{route('cust.create')}}" class="btn btn-primary">Add</a>
    <a href="{{route('menu.index')}}" class="btn btn-primary">Back</a></center>

</div>
@endsection