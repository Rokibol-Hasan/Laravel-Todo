@extends('layout.app')
@section('body')
    <div class="col-md-6 offset-3 card p-3 mt-5 shadow-lg border-0">
        <br>
        <h3 class="text-center">Go anywhere</h3>
        <ul>
            <li><a href="{{ route('todo.index') }}">View Your Plan</a></li>
            <li><a href="{{ route('todo.create') }}">Add Your Plan</a></li>
        </ul>
    </div>
@endsection
