<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Account;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_account');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $attributes['id_owner'] = auth()->id();
        Account::create($attributes);
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        //
    }

    public function showall()
    {
        $accounts = Account::all();

        return view('showall_account', compact('accounts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        return view('edit', compact('account'));
    }

    public function add(Account $account)
    {
        //Account::where('id',$account->id)->increment('amount',request('add'));

        $account->amount += request('add');
        $account->save();

        return redirect('home');
    }

    public function withdraw(Account $account)
    {
        //Account::where('id',$account->id)->increment('amount',request('add'));

        $account->amount -= request('withdraw');
        $account->save();

        return redirect('home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        $project->delete();
        return redirect('home');
    }
}
