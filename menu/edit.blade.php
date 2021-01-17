@extends('menu.master')
@section('content')

<div class="row">
    <div class="col-md-12">
    <br />
    <h3 aling="center">EDIT MENU</h3>
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
    <form action="{{ route('menu.update', $row['id'])}}" method="post">
        @csrf
        @method('UPDATE')
               
        <input type="hidden" name="_method" value="PATCH"/>
        <div class="form-group">
        <input type="text" name="name" class="form-control" value="{{$menu->name}}"/>
        </div>
        <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Edit"/>
      </div>

        </form>
        </div>
        </div>
@endsection