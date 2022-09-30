@extends('layouts.app');

@section('content')

<h3 class="fw-bolder text-center">
    Settle Balance
</h3>

<form action="{{ route('settlebalance',Auth::user()->id">
    <div>
        <label class="lead fw-bolder mx-3 mb-3" for="amount">Enter amount: </label>
        <input class="w-25" type="text" id="amount" >
    </div>

    <div>
        <label class="lead fw-bolder mx-3 mb-3" for="modeofpayment">Select mode of payment: </label>
        <select class="w-25" id="modeofpayment" >
           <option value="">Mtn Mobile Money</option> 
        </select>
    </div>

    <div>
        <label class="lead fw-bolder mx-3 mb-3" for="phonenumber">Enter phone number: </label>
        <input class="w-25" type="text" id="phonenumber" >
    </div>

    <button class="float-end px-3 py-1">Settle balance</button>


</form>

@endsection