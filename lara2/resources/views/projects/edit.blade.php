@extends('layout2');


@section('content')
    <h2>Edit Project</h2>

<form action="/projects/{{$project->id}}" method="post">

    {{method_field('PATCH')}}

    {{ csrf_field() }}


    <div class="">
        <input type="text" name="title" value="{{$project->title}}">
    </div>
    <div class="">
    <textarea name="description" id=""  cols="30" rows="10">{{$project->description}}</textarea>
    </div>
     <div class="">
        <button type="submit" name="button">Update project</button>
    </div>
</form>

<form action="/projects/{{$project->id}}" method="post">
    {{-- {{method_field('DELETE')}}
    {{ csrf_field() }} --}}
    @method('DELETE')
    @csrf

     <div class="">
        <button type="submit" name="button">Delete project</button>
    </div>
</form>
@endsection
