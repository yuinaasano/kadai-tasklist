@extends('layouts.app')

@section('content')

    <h1>Create page</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store'] !!}
    
        {!! Form::label('content', 'task:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('submit') !!}
        
    {!! Form::close() !!}

<!-- Write content for each page here -->

@endsection