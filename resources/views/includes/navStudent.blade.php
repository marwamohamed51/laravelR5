<!-- navbar start -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Students</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="{{ Request::is('addStudent') ? 'active' : '' }}">
        <a href="{{route('addStudent')}}">Add student</a>
      </li>
      <li class="{{ Request::is('studentList') ? 'active' : '' }}">
        <a href="{{route('studentList')}}">List</a>
      </li>
      <li class="{{ Request::is('/') ? 'active' : '' }}">
        <a href="#">Page 2</a>
      </li>
      <li class="{{ Request::is('/') ? 'active' : '' }}">
        <a href="#">Page 3</a>
      </li>
    </ul>
  </div>
</nav>
<!-- navbar end -->