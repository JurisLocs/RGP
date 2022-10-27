@extends('layouts.app')
@section('content')

    @foreach($users as $user)
        <h2>{{$user->name}}</h2>
        <p>{{$user->type}}</p>
        <p>{{$user->id_number}}</p>
        @foreach($user->properties as $property)
            <p>{{$property->name}}</p>
            <p>{{$property->status}}</p>
        @endforeach

    @endforeach

@endsection
