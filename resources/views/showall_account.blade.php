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

                </div>

                <table class="table ml-5">
                  <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Edit</th>
                  </tr>
                  @foreach ($accounts as $account)
                  <tr>
                    <td>
                        {{ $account->title }}
                    </td>
                    <td> {{ $account->description }}</td>
                    <td> {{ $account->amount }}</td>
                    <td> <a href="/account/{{ $account->id }}">
                      <button class="btn btn-outline-success btn-sm">Edit Account</button>
                  </a> </td>
                  </tr> 
                  @endforeach
                </table>

            </div>
        </div>
    </div>
</div>
@endsection
