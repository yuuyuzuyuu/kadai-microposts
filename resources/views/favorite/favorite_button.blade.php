@if (Auth::user()->is_favorite($micropost->id))
  {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
    {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-sm"]) !!}
  {!! Form::close() !!}
@else
  {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
    {!! Form::submit('Favorite', ['class' => "btn btn-success btn-sm"]) !!}
  {!! Form::close() !!}
@endif