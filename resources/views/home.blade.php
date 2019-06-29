@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <a href="/account/showall">
                            <button class="btn btn-outline-secondary btn-sm" style="float: right; margin-right: 10px;">Show All Accounts</button>
                        </a>
                        <a href="/account/create">
                            <button class="btn btn-outline-secondary btn-sm" style="float: right; margin-right: 10px;">Create Account</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
