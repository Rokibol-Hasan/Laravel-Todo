@extends('layout.app')
@section('body')
    <div class="col-md-6 offset-3 card p-3 mt-5 shadow-lg border-0">
        <br>
        <span class="text-center"><a href="{{ route('todo.index') }}">Goto List</a></span>
        <p class="bold"><strong> {{ $todo->title }} </strong> </p>
        <p class=""> {{ $todo->todo }} </p>
    </div>
@endsection
