@extends('layout.app')
@section('body')
    <div class="col-md-6 offset-md-3">
        <br>
        <a href="{{ route('todo.create') }}" class="btn btn-info">Add new</a>
        <h3 class="text-center">Todo Lists</h3>

        <ul class="list-group">
            @foreach ($todos as $todo)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $todo->todo }}
                    <span class="pull-right"> {{$todo->created_at->diffForHumans()}} </span>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
