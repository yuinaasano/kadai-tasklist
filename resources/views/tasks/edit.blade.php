@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} edit page</h1>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
    
        {!! Form::label('content', 'task:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('update') !!}
        
    {!! Form::close() !!}

<!-- Write content for each page here -->

@endsection