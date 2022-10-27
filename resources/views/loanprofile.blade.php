@extends('layouts.app');

@section('content')

<div class="container">
    <!-- Page Heading -->
    <h3 class="text-center fw-bolder">Loan Profile</h3>

    <!-- Table of Loan Profile -->
    <table class="table loan-profile-table">
        <tr scope="row">
            <th>Full name: Agaba Edwin</th>
            <th>Blacklisted: </th>

        </tr>

        <tr scope="row">
            <th>Username: AgabaEd</th>
            <th>Email: </th>
        </tr>

        <tr scope="row">
            <th>Phone number : +256703207426</th>
            <th>Maximum credit: 200,000 UGX</th>
        </tr>

        <tr scope="row">
            <th>
                Net Salary: 3,500,000 UGX
            </th>
            <th>
                Bank Acc: 43432545
            </th>
        </tr>
        <tr scope="row">
            <th>
                Loan status: 0 loans
            </th>
        </tr>
    </table>

</div>

@endsection