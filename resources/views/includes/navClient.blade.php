  <!-- navbar start -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Clients</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('addClient') ? 'active' : '' }}">
          <a href="{{route('addClient')}}">Add</a>
        </li>
        <li class="{{ Request::is('clientList') ? 'active' : '' }}">
          <a href="{{route('clientList')}}">List</a>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
    </div>
  </nav>
  <!-- navbar end -->