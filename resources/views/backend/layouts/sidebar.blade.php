 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link @if($active_class !='dashboard') collapsed @endif" href="{{ url('panel/dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard </span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link  @if($active_class != 'user') collapsed @endif" href="{{ url('panel/user/list') }}">
          <i class="bi bi-person"></i>
          <span>Users</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link @if($active_class != 'category') collapsed @endif" href="{{ url('panel/category/list') }}">
          <i class="bi bi-person"></i>
          <span>Category</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link @if($active_class != 'blog') collapsed @endif" href="{{ url('panel/blog/list') }}">
          <i class="bi bi-question-circle"></i>
          <span>Blog</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-envelope"></i>
          <span>Help</span>
        </a>
      </li><!-- End Contact Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->
