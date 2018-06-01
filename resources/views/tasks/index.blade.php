@extends('layouts.app')

@section('content')

    <h1>Tasklist</h1>
    
    @if (count($tasks) > 0)
     <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Task</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>
                        @if ($task->status=="no touch") 
                            <button class="btn btn-danger">{{ $task->status }}</button>
                        @elseif($task->status=="working")
                            <button class="btn btn-warning">{{ $task->status }}</button>
                        @else
                            <button class="btn btn-success">{{ $task->status }}</button>
                        @endif
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    
    {!! link_to_route('tasks.create', 'create page', null, ['class' => 'btn btn-primary']) !!}

<!-- Write content for each page here -->

@endsection