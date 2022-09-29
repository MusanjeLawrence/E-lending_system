@extends('layouts.app');

@section('content')

<center><h3>Loan Application</h3></center>

<form action="{{route('applyforloan',Auth::user()->id)}}">
<div>
    <label for="loantype">Loan Type</label>
    <label for="noofmonths">How many months?</label>
</div>
<div>
<input type="text" id="loantype" >
<input type="text" id="noofmonths" >
</div>
<div>
    <label for="loanamount">Loan Amount</label>
    <label for="paymentmode">Select payment mode: </label>
</div>
<div>
<input type="text" id="loanamount" >
<select name="paymentmode" id="paymentmode">
    <option value="">
        Mtn Mobile Money
    </option>
</select>
</div>
<div>
    <label for="loantype">Loan Type</label>
</div>
<div>
<input type="text" id="loantype" >
</div>
</form>


@endsection