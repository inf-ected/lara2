@extends('layout')

@section('content')
   <p>Wellcome here</p>
    <ul>
    <?php
// foreach ($tasks as $value) {
//     echo "<li>".$value."</li>";
// }
?>
    </ul>
<ul>
    @foreach($tasks as $task)
        <li>{{$task}}</li>
    @endforeach
</ul>
<p>{{$var}}</p>
<p>{!!$var!!}</p>
версия лары - {{App::VERSION()}}
@endsection
