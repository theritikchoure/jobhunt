<ul class="metismenu" id="menu">
    <li class="nav-label first">Main Menu</li>
    <li><a href="/admin/dashboard" aria-expanded="false"><i class="icon icon-layout-grid"></i><span
                class="nav-text">Dashboard</span></a></li>
    <li class="nav-label">Features</li>
    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-users-mm"></i><span
        class="nav-text">Employers</span></a>
        <ul aria-expanded="false">
            <li><a href="{{route('admin.allEmployers')}}">All Employers</a></li>
            <li><a href="{{route('admin.pendingEmployers')}}">Pending Employers</a></li>
        </ul>
    </li>
    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-tag"></i><span
        class="nav-text">Internhips</span></a>
        <ul aria-expanded="false">
            <li><a href="{{route('admin.allInternships')}}">All Internships</a></li>
            <li><a href="{{route('admin.pendingInternships')}}">Pending Internships</a></li>
        </ul>
    </li>
    <li><a href="{{route('admin.allStudents')}}" aria-expanded="false"><i class="icon icon-single-04"></i><span
        class="nav-text">Students</span></a></li>
    <li><a href="{{route('admin.category')}}" aria-expanded="false"><i class="icon icon-check-square-11"></i><span
        class="nav-text">Category</span></a></li>
</ul>