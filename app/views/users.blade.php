@extends('layout')

@section('content')
    @foreach($users as $user)
        <p style="padding:10px; background:#eee;">{{ $user->name }}</p>
    @endforeach
@stop