@extends('layouts.app')

@section('content')




    <h1>Edycja artykulu</h1>

    <form action="{{route('articles.update', $article->id)}}" method="post">
        <input type="hidden" name="_method" value="put">

            {{ csrf_field() }}

        <div class="form-group">
            <label class="font-weight-bold" >Tytul</label>
            <input type="text" name="title" value="{{$article->title}}" class="form-control" >
        </div>

        <div class="form-group">
            <label class="font-weight-bold" >Tresc</label>
            <input type="text" name="body" value="{{$article->body}}" class="form-control" >
        </div>

        <div class="form-group">
            <label class="font-weight-bold" >Author</label>
            <input type="text" name="author" value="{{$article->author}}" class="form-control" >
        </div>

        <div class="form-group">
            <label class="font-weight-bold" >Kategoria</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    @if($category->id == $article->category_id)
                        <option selected="selected" value="{{$category->id}}">{{$category->name}}</option>
                    @else
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endif

                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button class="btn btn-success">Zapisz</button>
        </div>
    </form>


@endsection