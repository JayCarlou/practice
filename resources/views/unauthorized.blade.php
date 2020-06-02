@extends('adminlte::page')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Message</div>

                    <div class="card-body">
                        {{$role}}
                        Unauthorized access to this page.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

