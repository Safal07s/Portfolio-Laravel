 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('dashboard')}}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

 
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#users" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="users" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="../users/create.php">
          <i class="bi bi-circle"></i><span>Create User</span>
        </a>
      </li>
      <li>
        <a href="../users/index.php">
          <i class="bi bi-circle"></i><span>Manage Users</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#abouts" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Abouts</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="abouts" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="../abouts/create.php">
          <i class="bi bi-circle"></i><span>Create Abouts</span>
        </a>
      </li>
      <li>
        <a href="../abouts/index.php">
          <i class="bi bi-circle"></i><span>Manage Abouts</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#skills" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Skills</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="skills" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{route('skills.create')}}">
          <i class="bi bi-circle"></i><span>Create Skills</span>
        </a>
      </li>
      <li>
        <a href="{{route('skills.index')}}">
          <i class="bi bi-circle"></i><span>Manage Skills</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#files" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Files</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="files" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{route('files.create')}}">
          <i class="bi bi-circle"></i><span>Add File</span>
        </a>
      </li>
      <li>
        <a href="{{route('files.index')}}">
          <i class="bi bi-circle"></i><span>Manage Files</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#facts" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Facts</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="facts" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{route('facts.create')}}">
          <i class="bi bi-circle"></i><span>Add Facts</span>
        </a>
      </li>
      <li>
        <a href="{{route('facts.index')}}">
          <i class="bi bi-circle"></i><span>Manage Facts</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#contacts" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Contacts</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="contacts" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{route('contacts.create')}}">
          <i class="bi bi-circle"></i><span>Add Contacts</span>
        </a>
      </li>
      <li>
        <a href="{{route('contacts.index')}}">
          <i class="bi bi-circle"></i><span>Manage Contacts</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#services" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="services" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{route('services.create')}}">
          <i class="bi bi-circle"></i><span>Add Services</span>
        </a>
      </li>
      <li>
        <a href="{{route('services.index')}}">
          <i class="bi bi-circle"></i><span>Manage Services</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->
  
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#settings" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="settings" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{route('settings.create')}}">
          <i class="bi bi-circle"></i><span>Add Settings</span>
        </a>
      </li>
      <li>
        <a href="{{route('settings.index')}}">
          <i class="bi bi-circle"></i><span>Manage Settings</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->
  
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#testimonials" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Testimonials</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="testimonials" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="../testimonials/create.php">
          <i class="bi bi-circle"></i><span>Add Testimonials</span>
        </a>
      </li>
      <li>
        <a href="../testimonials/index.php">
          <i class="bi bi-circle"></i><span>Manage Testimonials</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#resume-Titles" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Resume-Titles</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="resume-Titles" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="../resume_Titles/create.php">
          <i class="bi bi-circle"></i><span>Add Resume-Titles</span>
        </a>
      </li>
      <li>
        <a href="../resume_titles/index.php">
          <i class="bi bi-circle"></i><span>Manage Resume-titles</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#resume" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Resume</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="resume" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="../resume/create.php">
          <i class="bi bi-circle"></i><span>Add Resume</span>
        </a>
      </li>
      <li>
        <a href="../resume/index.php">
          <i class="bi bi-circle"></i><span>Manage Resume</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->


  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="users-profile.html">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-faq.html">
      <i class="bi bi-question-circle"></i>
      <span>F.A.Q</span>
    </a>
  </li><!-- End F.A.Q Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-contact.html">
      <i class="bi bi-envelope"></i>
      <span>Contact</span>
    </a>
  </li><!-- End Contact Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-register.html">
      <i class="bi bi-card-list"></i>
      <span>Register</span>
    </a>
  </li><!-- End Register Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-login.html">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Login</span>
    </a>
  </li><!-- End Login Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-error-404.html">
      <i class="bi bi-dash-circle"></i>
      <span>Error 404</span>
    </a>
  </li><!-- End Error 404 Page Nav -->
</ul>

</aside><!-- End Sidebar-->
