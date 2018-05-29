@extends('layouts.app')

@section('content')

    <h1>Tasklist</h1>
    
    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }} > {{ $task->status }}</li>
            @endforeach    
        </ul>
    @endif
    
    {!! link_to_route('tasks.create', 'create page') !!}

<!-- Write content for each page here -->

@endsection