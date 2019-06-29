@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show All Accounts</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="/account" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                              <input type="text"  class="form-control" id="title" value="" required name="title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                              <input type="text"  class="form-control" id="description" value="" required name="description">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-success" style="float: right;">Add New Account</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
