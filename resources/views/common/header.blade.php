<nav class="navbar p-3 mb-5">
    <div class="container-fluid d-flex">
        <!--- SearchBar -->
        <div class="searchbar border p-1 w-50 d-flex">
            <input type="text" placeholder="Search for..." class="border-0 flex-grow-1">
            <img src="{{ asset('images/search-icon.png') }}" alt="" width="20" height="20">
        </div>


        <div class="border-end">

            <!--- Notifications Icon -->
            <img src="{{ asset('images/notifications-icon.png') }}" alt="" width="40" height="40" class="me-3">

            <!---Messages Icon -->
            <img src="{{ asset('images/messages-icon.png') }}" alt="" width="40" height="40" class="me-3">

        </div>

        <div class="d-flex">
            <!-- User name -->
            <p class="me-3 lead primary-textcolor">Agaba Edwin</p>

            <!--- User avatar -->
            <img src="{{ asset('images/user-avatar.svg') }}" alt="" width="60" height="60" class="rounded-circle">

        </div>
    </div>
</nav>