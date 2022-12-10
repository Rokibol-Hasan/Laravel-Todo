@extends('layout.app')
@section('body')
    <div class="col-md-6 offset-md-2 p-3 mt-5 shadow-lg border-0">
        <br>
        <a href="{{ route('todo.create') }}" class="btn btn-info">Add new</a>
        <h3 class="text-center">Todo Lists</h3>
        {{ Session::get('msg') }}
        <ul class="list-group">
            @foreach ($todos as $todo)
                <div class="row">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <li class="list-group-item my-2">
                                <a href="{{ route('todo.show', $todo->id) }}"
                                    style="text-decoration: none;">{{ $todo->title }}</a>
                                <i class="mx-2 pull-right">{{ $todo->updated_at->diffForHumans() }}</i>
                            </li>
                        </div>
                        <div class="d-flex ">
                            <ul class="\">
                                <li class="">
                                <div class="mx-2">
                                    <a class="" style="text-decoration: none;"
                                        href="{{ route('todo.edit', $todo->id) }}"> edit </a>
                                </div>
                                </li>
                                <li class="">
                                    <div>
                                        <form class="form-group" method="post"
                                            action="{{ route('todo.destroy', $todo->id) }}">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" style="border: none;" value="delete">delete</button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $todos->links('pagination::bootstrap-5') }}

        </ul>
    </div>
@endsection
