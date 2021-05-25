@extends('layouts.app')

@section('content')
<h1 class="text-center">Todos</h1>
@if(count($todos) > 0)
@foreach($todos as $todo)
<div class="bg-primary rounded-pill mb-2 p-2 px-4 text-white">
    <h3 class="">
        <a class="text-white mr-3" href="todo/{{$todo->id}}">{{$todo->text}}</a>
        <span class="bg-info rounded-pill px-2">{{$todo->due}}</span>
    </h3>
</div>
@endforeach
@endif
@endsection
