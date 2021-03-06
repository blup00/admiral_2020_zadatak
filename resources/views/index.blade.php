@extends('layouts/app')

@section('content')
        <div>
        <a href="/games/create">
            <button type="button" class="btn btn-primary mt-4">Add Game</button></a>
        </div>
        
        @if(count($games) > 0)
            <div class="d-flex flex-wrap">
            @foreach($games as $game)
                <div class="p-3 border border-primary rounded mt-4">
                <h3><a href="/games/{{$game->id}}">Name: {{$game->name}}</a></h3>
                    <p>Serial number: {{$game->serial_number}}</p>
                    <p>End of guarantee date: {{$game->end_of_guarantee_date}}</p>
                    <p>Game type: {{$game->game_type_id}}</p>
                    
                    <form method="post" class="delete_form" action="{{action('GamesController@destroy', $game->id)}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE" />
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </div>
            
            @endforeach
            {{$games->links()}}
        @else
            <p>No games found</p>
        @endif
@endsection