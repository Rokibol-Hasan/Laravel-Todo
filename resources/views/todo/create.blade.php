@extends('layout.app')
@section('body')
    <div class="col-md-6 offset-3">
        <br>
        <form action="{{route('todo.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="todo">List Item</label>
                <input type="text" name="todo" id="todo" class="form-control">
                @error('todo')
                  <div class="alert alert-danger py-1 my-2">  {{$message}} </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-info mt-2" name="submit">Save</button>
        </form>
    </div>
@endsection
