@extends('todo.create')

@section('editId')
{{ $todo->id }}
@endsection

@section('title')
{{ $todo->title }}
@endsection

@section('todo')
{{ $todo->todo }}
@endsection

@section('editMethod')
{{ method_field('PUT') }}
@endsection

