@extends('layouts.app');

@section('content')

<h3 class="text-center fw-bolder">Loan Application</h3>

<form action="{{route('applyforloan',Auth::user()->id)}}">
<div class="row">
    <label class="col-6 lead fw-bolder" for="loantype">Loan Type</label>
    <label class="col-6 lead fw-bolder" for="noofmonths">How many months?</label>
</div>
<div class="row" >
    <div class="col-6">
        <input class="w-50" type="text" id="loantype" >
    </div>
    <div class="col-6" >
        <input class="w-50" type="text" id="noofmonths" >
    </div>
</div>
<div class="row">
    <label  class="col-6 lead fw-bolder" for="loanamount">Loan Amount</label>
    <label  class="col-6 lead fw-bolder" for="paymentmode">Select payment mode: </label>
</div>
<div class="row" >
    
<div  class="col-6">
    <input class="w-50" type="text" id="loanamount" >
</div>

<div class="col-6">
    <select  class="w-50" name="paymentmode" id="paymentmode">
    <option value="">
        Mtn Mobile Money
    </option></select>
</div>
</div>
<div >
    <label class="lead fw-bolder" for="mobilemoneyno">Mobile money number</label>
</div>
<div>
<input class="w-25" type="text" id="mobilemoneyno" >
</div>

<div >
    <button class="float-end primarycolor px-4 py-1">
        Apply
    </button>
</div>
</form>


@endsection