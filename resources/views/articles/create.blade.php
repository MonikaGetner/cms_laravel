@extends('layouts.app')

@section('content')


    <h1>Dodaj article</h1>

    <form action="{{route('articles.store')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="font-weight-bold" >Tytul</label>
            <input type=text" name="title" class="form-control" >
        </div>

        <div class="form-group">
            <label class="font-weight-bold" >Tresc</label>
            <input type=text" name="body" class="form-control" >
        </div>

        <div class="form-group">
            <label class="font-weight-bold" >Author</label>
            <input type=text" name="author" class="form-control" >
        </div>

        <div class="form-group">
            <label class="font-weight-bold" >Kategoria</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $category)

                    <option value="{{$category->id}}">{{$category->name}}</option>

                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button class="btn btn-success">Zapisz</button>
        </div>
    </form>



@endsection