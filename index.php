<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prime Association for Feauture Educators</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  </head>
  <body>

    <!-- Mobile Sidebar Menu Button -->
    <button class="sidebar-menu-button">
      <span class="material-symbols-rounded">menu</span>
    </button>
    <aside class="sidebar">
      <!-- Sidebar Header -->
      <header class="sidebar-header">
        <a href="#" class="header-logo">
          <img src="pafe.jpg" alt="PAFE" /> 
          
        </a>
        <button class="sidebar-toggler">
          <span class="material-symbols-rounded">chevron_left</span>
        </button>
      </header>
      <nav class="sidebar-nav">
        <!-- Primary Top Nav -->
        <ul class="nav-list primary-nav">
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="bi bi-columns-gap"></i>
              <span class="nav-label">Dashboard</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Dashboard</a></li>
            </ul>
          </li>
          <!-- Dropdown -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="bi bi-bell"></i>
              <span class="nav-label">Announcements</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Announcements</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="bi bi-megaphone"></i>
              <span class="nav-label">Promotions</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Promotions</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown-container">
            <a href="#" class="nav-link dropdown-toggle">
            <i class="bi bi-calendar3"></i>
              <span class="nav-label">Events</span>
              <span class="dropdown-icon material-symbols-rounded">keyboard_arrow_down</span>
            </a>
            <!-- Dropdown Menu -->
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Events</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">Create Event</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">View  Schedule</a></li>
            </ul>
          </li>
          <!-- Dropdown -->
          <li class="nav-item dropdown-container">
            <a href="#" class="nav-link dropdown-toggle">
            <i class="bi bi-receipt"></i>
              <span class="nav-label">Attendance</span>
              <span class="dropdown-icon material-symbols-rounded">keyboard_arrow_down</span>
            </a>
            <!-- Dropdown Menu -->
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Attendance</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">Attendance Records</a></li>
              <li class="nav-item"><a href="#" class="nav-link dropdown-link">Attendance Check-In</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="bi bi-person-video"></i>
              <span class="nav-label">User Management</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">User</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="bi bi-chat-left-text"></i>
              <span class="nav-label">Feedback</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Feedback</a></li>
            </ul>
          </li>
        </ul>
        <!-- Secondary Bottom Nav -->
        <ul class="nav-list secondary-nav">
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="bi bi-book"></i>
              <span class="nav-label">Generate Report</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Generate</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <span class="material-symbols-rounded">logout</span>
              <span class="nav-label">Sign Out</span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link dropdown-title">Sign Out</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </aside>

    <!-- Script -->
    <script src="script.js"></script>
  </body>
</html>