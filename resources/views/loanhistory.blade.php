@extends('layouts.app');

@section('content')

<!--- Page Heading --->
<h3 class="text-center fw-bolder"> Payment History </h3>

<!-- Payment History Table ---->
<table class="table loan-table">
    <tr>
        <th>
            ID
        </th>

        <th>
            MESSAGE
        </th>

        <th>
            STATUS
        </th>
        
        <th>
            DATE OF TRANSACTION
        </th>
    </tr>
        
</table>


@endsection