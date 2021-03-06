<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
  <div class="container">
    <div class="navbar-wrapper">
      <a class="navbar-brand" href="{{ route('index') }}">
          <img width="35px" src="{{ asset('material') }}/img/logo@2x.png">
          <span class="text-dark">{{ $title }}</span>
          <span class="text-white">مؤسسه المهدی استان مرکزی</span>
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        <li class="nav-item {{ $activePage == 'news' ? ' active' : '' }}">
          <a id="btn_blog_posts" data-link="blog_posts" class="nav-link">
            <i class="material-icons">rss_feed</i> {{ __('s.news') }}
          </a>
        </li>
        <li class="nav-item">
          <a id="btn_courses" data-link="courses" class="nav-link">
            <i class="material-icons">school</i> {{ __('s.edu_content') }}
          </a>
        </li>
        <li class="nav-item">
          <a id="btn_service"  data-link="service" class="nav-link">
            <i class="material-icons">pages</i> {{ __('s.service') }}
          </a>
        </li>
        <li class="nav-item {{ $activePage == 'login' ? ' active' : '' }}">
          <a href="{{ route('login') }}" class="nav-link">
            <i class="material-icons">fingerprint</i> {{ __('s.login') }}
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- End Navbar -->
