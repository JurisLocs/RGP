@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/cv" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit Post</h1>
                    <p>Veikt izmaiņas</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Vārds Uzvārds</label>
                                <input type="text" id="name" class="form-control" name="name"
                                       placeholder="Vārds Uzvārds" value="{{ $user->name }}" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="id_number">Personas kods/Reģistrācijas nr.</label>
                                <input type="text" id="id_number" class="form-control" name="id_number"
                                       placeholder="Personas kods" value="{{ $user->id_number }}" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="name">Tips</label>
                                <input type="text" id="type" class="form-control" name="type"
                                       placeholder="Tips" value="{{ $user->type }}" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
