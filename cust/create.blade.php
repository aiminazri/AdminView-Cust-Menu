@extends('cust.master')
@section('title', 'Customer Details')
@section('content')
<center><img src="/img/SUSHI.png"></center>
<center><h3 aling="center">CUSTOMER DETAILS</h3></center>
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
<body>
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
<div>
  <form method="post" action="{{url('cust')}}">
  {{csrf_field()}}
    <label for="name">Name</label>
    <input type="text" id="name" name="name">

    <label for="address">Address</label>
    <input type="text" id="address" name="address">

    <label for="postcode">Postcode</label>
    <input type="text" id="postcode" name="postcode">

    <label for="phoneno">Phone number</label>
    <input type="text" id="phoneno" name="phoneno">
  
    <input type="submit" class="btn btn-primary"/>
  </form>
</div>
</body>
<a href="{{route('menu.index')}}" class="btn btn-primary">Back</a>
@endsection

