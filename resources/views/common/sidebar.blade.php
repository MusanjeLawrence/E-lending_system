<ul class="navbar-nav  border-end px-4 primarycolor  m-0 vh-100" id="accordionSidebar ">


    <!-- Nav Item - Dashboard -->
    <li class="nav-item active dashboard-nav-item">
        <a class="nav-link" href="#">
            <img src="{{ asset('images/dashboard-icon.png')}}" alt="" width="32" height="32"
                class="d-inline-block align-text-center me-2">
            <span class="lead">Dashboard</span></a>
    </li>


    <!-- Heading -->
    <div class="sidebar-heading primary-textcolor lead">
        SECTIONS
    </div>

    <!-- Nav Item-Loan Profile-->
    <li class="nav-item">
        <a class="nav-link" href="{{route('loanprofile',encrypt(Auth::user()->id))}})}}">
            <img src="{{ asset('images/loan-profile-icon.png') }}" alt="" width="40" height="40"
                class="d-inline-block align-text-center ">
            <span class="lead">Loan Profile</span>
        </a>
    </li>

    <!-- Nav Item-Apply for Loan-->
    <li class="nav-item">
        <a class="nav-link" href="{{route('applyforloan',encrypt(Auth::user()->id))}})}}">
            <img src="{{ asset('images/apply-for-loan-icon.png') }}" alt="" width="40" height="40"
                class="d-inline-block align-text-center ">
            <span class="lead">Apply for Loan</span>
        </a>
    </li>

    <!-- Nav Item -Settle Balance-->
    <li class="nav-item">
        <a class="nav-link" href="{{route('settlebalance',encrypt(Auth::user()->id))}})}}">
            <img src="{{ asset('images/settle-balance-icon.png') }}" alt="" width="40" height="40"
                class="d-inline-block align-text-center ">
            <span class="lead">Settle Balance</span>
        </a>
    </li>

    <!-- Heading -->
    <div class="sidebar-heading lead primary-textcolor">
        TRANSACTIONS
    </div>

    <!-- Nav Item -Payment History-->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('loanhistory',encrypt(Auth::user()->id))}}) }}">
            <img src="{{ asset('images/payment-history-icon.png') }}" alt="" width="40" height="40"
                class="d-inline-block align-text-center ">
            <span class="lead">Payment History</span>
        </a>
    </li>

    <!-- Nav Item -Log out-->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            <img src="{{ asset('images/log-out-icon.png') }}" alt="" width="40" height="40"
                class="d-inline-block align-text-center ">
            <span class="lead">Log out</span>
        </a>

        
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
    </li>
</ul>