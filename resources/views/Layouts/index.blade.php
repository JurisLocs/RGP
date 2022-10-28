@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">RGP</h1>
                        <p>Sample text</p>
                    </div>
                    <div class="col-4">
                        <p>Create new User</p>
                        <a href="/create/user" class="btn btn-primary btn-sm">Add User</a>
                    </div>
                </div>
                @forelse($users as $user)
                    <ul>
                        <li><a href="./{{ $user->id }}">{{ ucfirst($user->name) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No blog Posts available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
