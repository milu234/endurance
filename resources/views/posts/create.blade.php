@extends('layouts.app')

@section('content')
    <h1>Create Posts</h1>
    {!! Form::open(['action' => 'PostsController@store' , 'method' => 'POST','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Enter Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Enter Body Text'])}}
         </div>

         <div class="form-group">
             {{Form::file('cover_image')}}
         </div>

         <br>
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

    
@endsection