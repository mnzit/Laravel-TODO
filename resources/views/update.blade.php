@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form method="post" action="{{ route('todo.save', ['id' => $todo->id]) }}">
            {{csrf_field()}}
            <input type="text" class="form-control input-lg" name="todo" value="{{$todo->todo}}" placeholder="Create a new todo">
            </form>
        </div>
    </div>
    @stop