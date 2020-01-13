@extends('layouts/app')

@section('content')
        {!! Form::open(['action' => 'GamesController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
            </div>
            <div class="form-group">
                {{Form::label('number', 'Serial number')}}
                {{Form::number('number', '', ['class' => 'form-control', 'placeholder' => 'Serial number'])}}
            </div>
            <div class="form-group">
                {{Form::label('date', 'End of guarantee date')}}
                {{Form::date('date', \Carbon\Carbon::now(), ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('type', 'Game type')}}
                {{Form::select('type', ['J' => 'jackpot', 'O' => 'roulette', 'B' => 'blackjack', 'R' => 'retro'], 'J')}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
        
@endsection