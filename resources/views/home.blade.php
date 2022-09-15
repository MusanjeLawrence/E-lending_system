@extends('layouts.app')

@section('content')
<div class="container-fluid pt-5">
                    <div class="row">

                        <!--Apply for Loan Card-->
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <span class="lead primary-textcolor">
                                            Loan Application
                                        </span>
                                                <img src="{{ asset('images/apply-for-loan-icon.png') }}" alt="" width="40"
                                                    height="40">
                                    </div>

                                    <h4 class="fw-bold">Apply Now</h4>
                                    <p class="primary-textcolor fw-bold">@14% interest rate per month</p>
                                </div>
                            </div>
                        </div>

                        <!-- Application History Card-->
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <span class="lead primary-textcolor">
                                            Application History
                                        </span>
                                                <img src="{{ asset('images/application-history-icon.png') }}" alt="" width="30"
                                                    height="40">
                                    </div>

                                    <h4 class="fw-bold">Settle Balance</h4>
                                    <p class="primary-textcolor fw-bold">pay online via mobile money</p>
                                </div>
                            </div>

                        </div>

                        <!--Your Borrowing Records Card-->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <span class="lead primary-textcolor">Your Borrowing Records</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Loan Armonetization Card-->
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <span class="lead primary-textcolor">
                                            Loan Analysis
                                        </span>
                                                <img src="{{ asset('images/loan-analysis-icon.png') }}" alt="" width="40"
                                                    height="40">
                                    </div>

                                    <h4 class="fw-bold">Loan Analysis</h4>
                                    <p class="fw-bold primary-textcolor mb-0">Check Loan Calculator</p>
                                    <p class="fw-bold primary-textcolor">Check interest to be paid</p>
                                </div>
                            </div>
                        </div>

                        <!-- Application History Card-->
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <span class="primary-textcolor lead">
                                            Payment History
                                        </span>
                                                <img src="{{ asset('images/payment-history-icon.png') }}" alt="" width="40"
                                                    height="40">
                                    </div>

                                    <h4 class="fw-bold">View History</h4>
                                    <p class="fw-bold primary-textcolor">check your balance & payment history</p>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
</div>
@endsection