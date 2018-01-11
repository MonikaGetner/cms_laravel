@extends('layouts.app')

@section('content')


    <h1>Dodaj kategorie</h1>

    <form action="{{route('categories.store')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="font-weight-bold" >Nazwa kategorii</label>
            <input type=text" name="name" class="form-control" >
        </div>

        <div class="form-group">
            <button class="btn btn-success">Zapisz</button>
        </div>
    </form>



@endsection