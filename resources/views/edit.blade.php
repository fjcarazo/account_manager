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
                <div class="container ml-5 mb-2">
                  <form action="/account/add/{{$account->id}}" method="POST" class="mb-2">

                    {{ @method_field('PATCH') }}
                    {{ @csrf_field() }}
              
                    <div class="form-group">
                      <label for="title">Account Title: </label>
                      <label for="title">{{ $account->title }}</label>
                    
                    </div>
                    <div class="form-group">
                      <label for="description">Account Description:</label>
                      <label for="description">{{ $account->description }}</label>
                   
                    </div>
                    <div class="form-group">
                      <label for="description">Amount Available:</label>
                      @if( $account->amount <= 0 )
                        <label for="description" style="color:red">{{ $account->amount }}</label>
                      @else
                        <label for="description">{{ $account->amount }}</label>
                      @endif

                    </div>
                    <div class="form-group">
                      <label for="add">Add Amount</label>
                      <input type="number" name="add" id="add" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Amount</button>
                  </form>
                  
                  <ul class="mr-5" style="float: right;">
                      <li class="mb-2">
                          <form action="/account/{{ $account->id }}" method="POST">
                            {{ @method_field('DELETE') }}
                            {{ @csrf_field() }}
                    
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </li>
                      <li>
                        <form action="/account/withdraw/{{ $account->id }}" method="POST">
                              {{ @method_field('PATCH') }}
                              {{ @csrf_field() }}
                      
                              <div class="form-group">
                                <label for="withdraw">Withdraw Amount</label>
                                <input type="number" name="withdraw" id="withdraw" required>
                              </div>
                              <button type="submit" class="btn btn-primary">Withdraw Amount</button>
                          </form>
                        </li>
                  </ul>
                  
                  
                </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
