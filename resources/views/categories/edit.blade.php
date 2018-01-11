@extends('layouts.app')

@section('content')



    <h1>Dodaj kategorie</h1>

    <form action="{{route('categories.update', $category->id)}}" method="post">
        <input type="hidden" name="_method" value="put">

        {{ csrf_field() }}
        <div class="form-group">
            <label class="font-weight-bold" >Nazwa kategorii</label>
            <input type="text" name="name" value="{{$category->name}}" class="form-control" >
        </div>

        <div class="form-group">
            <button class="btn btn-success">Zapisz</button>
        </div>
    </form>



@endsection