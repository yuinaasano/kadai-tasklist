@extends('layouts.app')

@section('content')
@if (Auth::id() == $task->user_id)
    <h1>Create page</h1>
    
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('content', 'task:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('status', 'status:') !!}
                    {!! Form::select('status', array(
                        'no touch' => 'no touch', 
                        'working' => 'working',
                        'done' => 'done'
                        ),['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('submit', ['class' => 'btn btn-primary']) !!}
                
            {!! Form::close() !!}
            @else
            {!! redirect('/'); !!}
            @endif
        </div>
    </div>
    
    
 <!--Write content for each page here -->
@endsection