@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} detail page</h1>
    
    <p>Task: {{ $task->content }}</p>
    <p>Status: {{ $task->status }}</p>
    
    {!! link_to_route('tasks.edit', 'edit task', ['id' => $task->id]) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('delete') !!}
    {!! Form::close() !!}
<!-- Write content for each page here -->

@endsection