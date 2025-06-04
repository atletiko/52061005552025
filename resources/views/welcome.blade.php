<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Clefinspire Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fff;
    }

    .sidebar {
      height: 100vh;
      background: linear-gradient(to bottom, #f87171, #ef4444);
      color: white;
      padding-top: 2rem;
      position: fixed;
      width: 220px;
    }

    .sidebar h4 {
      font-weight: bold;
    }

    .sidebar .nav-link {
      color: white;
      font-size: 1.2rem;
      margin: 1rem 0;
    }

    .sidebar .nav-link.active {
      font-weight: bold;
      border-left: 3px solid white;
      padding-left: 12px;
    }

    .main-content {
      margin-left: 240px;
      padding: 2rem;
    }

    .card-custom {
      background-color: #f87171;
      color: white;
      border-radius: 10px;
      padding: 1rem;
      text-align: center;
      box-shadow: 2px 2px 4px rgba(0,0,0,0.2);
    }

    .progress {
      height: 16px;
      border-radius: 10px;
    }

    .progress-bar {
      background-color: #f87171;
    }

    .level-progress {
      height: 12px;
    }

    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .search-box input {
      border: none;
      border-bottom: 1px solid lightgray;
      background: transparent;
      padding: 0.3rem;
    }

    .user-circle {
      border: 2px solid lightgray;
      border-radius: 50%;
      width: 40px;
      height: 40px;
    }
  </style>
  <style>

/* hide the blue outline */
.form-control:focus {
    outline: 0 !important;
    border-color: initial;
    box-shadow: none;
}
    </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar d-flex flex-column align-items-center">
    <div class="mb-4 text-center">
      <div class="fs-1">🎼</div>
      <h4>Clefinspire</h4>
    </div>
    <nav class="nav flex-column w-100 text-center">
      <a class="nav-link active" href="#">Home</a>
      <a class="nav-link" href="#">Ear Training</a>
      <a class="nav-link" href="#">Music Theory</a>
    </nav>
  </div>

  <!-- Main Content -->
  <div class="main-content">

    <div class="topbar mb-4">
      <h2>Home</h2>
      <div class="d-flex align-items-center gap-3">
        <div class="search-box">
          <input type="text" placeholder="Search">
        </div>
        <div class="text-end">
          <div class="fw-bold">Beginner</div>
          <div class="text-muted">Level 4</div>
        </div>
        <div class="user-circle"></div>
      </div>
    </div>
<div class="row">
        <div class="input-group col-md-4">
            <span class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">
                    <i class="far fa-user"></i>
                </button>
            </span>
            <input class="form-control py-2" type="search" value="search" id="example-search-input">
        </div>
    </div>
    <h3>Welcome,  !</h3>

    <div class="row my-4">
      <div class="col-md-4">
        <div class="card-custom">
          <div class="fw-bold">Daily Quest</div>
          <h5>Complete a Course</h5>
          <div>Reward: 50 XP</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-custom">
          <div class="fw-bold">Learning Streak</div>
          <h1>⚡ 1</h1>
          <div>Day</div>
        </div>
      </div>
    </div>

    <h5 class="mb-3">Continue Learning</h5>

    <div class="mb-3">
      <div class="d-flex justify-content-between">
        <div>Ear Training - Chords</div>
        <small>80% Complete</small>
      </div>
      <div class="progress">
        <div class="progress-bar" style="width: 80%"></div>
      </div>
    </div>

    <div class="mb-3">
      <div class="d-flex justify-content-between">
        <div>Ear Training - Intervals</div>
        <small>30% Complete</small>
      </div>
      <div class="progress">
        <div class="progress-bar" style="width: 30%"></div>
      </div>
    </div>

    <div class="mb-4">
      <div class="d-flex justify-content-between">
        <div>Music Theory - Basics - Note Duration</div>
        <small>40% Complete</small>
      </div>
      <div class="progress">
        <div class="progress-bar" style="width: 40%"></div>
      </div>
    </div>

    <!-- Level Progress -->
    <div class="d-flex justify-content-between align-items-center">
      <div>Lv. 4</div>
      <div class="flex-grow-1 mx-3">
        <div class="progress level-progress">
          <div class="progress-bar" style="width: 50%"></div>
        </div>
        <div class="text-center mt-1 small">50/100 XP</div>
      </div>
      <div>Lv. 5</div>
    </div>
  </div>

</body>
</html>
