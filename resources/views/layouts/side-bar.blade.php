<div id="NavBarIudyogSide">
    <ul class="mobileNavLink">
        <li class="navLink"><a class="Active" href="{{ url('/') }}">Home</a></li>
        <li class="navLink">
            <a class="" href="{{ url('/') }}">Courses</a>
            <ul class="subMenu">
                <li><a href="">All Courses</a></li>
                <li>
                    <a href="javascript:void(0)">Sub Menu 2</a>
                    <ul class="subMenu">
                        <li><a href="">All Sub Menu 2</a></li>
                        <li><a href="">Sub Menu 2.1</a></li>
                        <li><a href="">Sub Menu 2.2</a></li>
                        <li><a href="">Sub Menu 2.3</a></li>
                    </ul>
                </li>
                <li><a href="">Sub Menu 3</a></li>
                <li><a href="">Sub Menu 4</a></li>
                <li><a href="">Sub Menu 5</a></li>
            </ul>
        </li>
        <li class="navLink"><a class="" href="">About Us</a></li>
        <li class="navLink"><a href="">Event</a></li>
        <li class="navLink"><a class="" href="">Contact Us</a></li>
        <li><a href="{{ url('razorpay-payment') }}" class="pay">Pay Now<i class="fa fa-credit-card" aria-hidden="true"></i></a></li>
    </ul>
</div>