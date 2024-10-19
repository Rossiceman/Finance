<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="fa-solid fa-chart-line"></i> Winner</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">首頁</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.reuters.com/">市場情報</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                付費解鎖
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item disabled" id="s02_btn01" href="#">會員權限管理</a></li>
                <li><a class="dropdown-item disabled" id="s02_btn02" href="#">會員數據分析</a></li>
              </ul>
            </li>
          </ul>
          <div>
            <span class="h4 fw-300 d-none" id="s02_login_username">會員 <span class="fw-300" id="s02_login_username_text">xxx</span></span>
            <button class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#loginModal" id="s02_login_btn">登入</button>
            <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#registerModal" id="s02_register_btn">註冊</button>
            <button class="btn btn-danger d-none" id="s02_logout_btn">登出</button>
          </div>
        </div>
      </div>
    </nav>

    @yield("content")
    <div>
        <!-- Modal -->
        @include("front.register")
    </div>
</body>
</html>
