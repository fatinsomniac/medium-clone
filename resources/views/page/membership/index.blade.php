@extends('layouts.app', ['title' => 'Membership'])

@section('content')
    <div class="row justify-content-center">
        <div class="col-3">
            <div class="card" style="border: 1px solid black;">
                <div class="card-body">
                    <div class="card-title">
                        <b>
                            Single
                        </b>
                    </div>
                    <div class="card-text mt-3">
                        Ini single
                    </div>
                    <hr>
                    <div class="mt-3">
                        <a href="#" class="btn btn-dark">Get Membership</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="border: 1px solid black;">
                <div class="card-body">
                    <div class="card-title">
                        <b>
                            Premium
                        </b>
                    </div>
                    <div class="card-text mt-3">
                        Ini Premium
                    </div>
                    <hr>
                    <div class="mt-3">
                        <a href="#" class="btn btn-dark">Get Membership</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="border: 1px solid black;">
                <div class="card-body">
                    <div class="card-title">
                        <b>
                            Business
                        </b>
                    </div>
                    <div class="card-text mt-3">
                        Ini Business
                    </div>
                    <hr>
                    <div class="mt-3">
                        <a href="#" class="btn btn-dark">Get Membership</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection