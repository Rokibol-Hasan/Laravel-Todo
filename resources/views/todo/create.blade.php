@extends('layout.app')
@section('body')
    <div class="col-md-6 offset-3 card p-3 mt-5 shadow-lg border-0">
        <br>
        <h3 class="my-3 text-center">Add new toto list</h3>
        <form action="{{route('todo.store')}}/@yield('editId')" method="POST">
            @csrf
            @yield('editMethod')
            <div class="form-group">
                <label for="title">List Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="@yield('title')">
                @error('title')
                  <div class="alert alert-danger py-1 my-2">  {{$message}} </div>
                @enderror
                <label for="todo">List Item</label>
                <textarea type="text" name="todo" id="todo" class="form-control" placeholder="List description">@yield('todo')</textarea>
                @error('todo')
                  <div class="alert alert-danger py-1 my-2">  {{$message}} </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-info mt-2" name="submit">Save</button>
        </form>
    </div>
@endsection
