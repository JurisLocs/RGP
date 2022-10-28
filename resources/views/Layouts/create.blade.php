@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/" class="btn btn-outline-primary btn-sm">Atpakaļ</a>
                <div class="">
                    <h1 class="display-4">Izveidot jaunu ierakstu</h1>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Vārds</label>
                                <input type="text" id="name" class="form-control" name="name"
                                       placeholder="Vārds Uzvārds" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="id_number">Personas kods vai reģistrācijas numurs</label>
                                <input id="id_number" class="form-control" name="id_number" placeholder=""
                                          required></input>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="type">Fiziska/Juridiska persona</label>
                                <input id="type" class="form-control" name="type" placeholder=""
                                        required></input>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Create Post
                                </button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

@endsection
