<ul>
    @if (Session::has('LoggedStu'))
    <li class="menu-item-has-children">
      <a href="{{route('home')}}" title="">Home</a>
    </li>
    <li class="menu-item-has-children">
      <a href="{{route('internship')}}">Internships</a>
    </li>
    @elseif(Session::has('LoggedEmp'))
    <li class="menu-item-has-children">
      <a href="{{route('home')}}" title="">Home</a>
    </li>
    <li class="menu-item-has-children">
      <a href="{{route('employer.dashboard')}}">Dashboard</a>
    </li>
    <li class="menu-item-has-children">
      <a href="{{route('employer.postinternshipform.get')}}">Post Internship</a>
    </li>
    @else
    <li class="enu-item-has-children">
      <a href="{{route('home')}}" title="">Home</a>
    </li>
    <li class="menu-item-has-children">
      <a href="{{route('internship')}}">Internships</a>
    </li>
    <li class="menu-item-has-children">
      <a href="#" title="">Register</a>
      <i class="la la-angle-down"></i>
      <ul>
          <li><a href="{{route('student.register')}}" title="">As An Student</a></li>
          <li><a href="{{route('employer.register')}}" title="">As An Employer/Company</a></li>
      </ul>
    </li>
    <li class="menu-item-has-children">
      <a href="#" title="">Login</a>
      <i class="la la-angle-down"></i>
      <ul>
          <li><a onclick="openStudentLogin()" title="">As An Student</a></li>
          <li><a onclick="openEmployerLogin()" title="">As An Employer/Company</a></li>
      </ul>
    </li>
    @endif
  </ul>