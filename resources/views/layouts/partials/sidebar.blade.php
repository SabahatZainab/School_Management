<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">School</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <!--navigation-->

    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('home')}}" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul></ul>
        </li>
        <li>
            <a href="{{ route('users.index')}}" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Users&Roles Management</div>
            </a>
            <ul>
                <li><a href="{{ route('users.index') }}"> <i class='bx bx-radio-circle'></i> Manage Users</a></li>
                <li><a href="{{ route('roles.index') }}"> <i class='bx bx-radio-circle'></i> Manage Role</a></li>
                <li><a href="{{ route('permissions.index') }}"> <i class='bx bx-radio-circle'></i> Manage Permission</a></li>
                <!-- <li><a href="{{ route('products.index') }}"> <i class='bx bx-radio-circle'></i> Manage Product</a></li> -->
            </ul>
        </li>
    </ul>
</div>


