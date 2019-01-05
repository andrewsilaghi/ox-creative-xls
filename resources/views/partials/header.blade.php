<nav class="navbar navbar-expand-lg navbar-light sticky-top">

  <a class="navbar-brand" href="{{ home_url('/') }}"><img class="navbar__logo" src="@asset('images/xls-logo.png')" alt=""></a>
      <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        &#9776;
      </button>
  @if (has_nav_menu('primary_navigation'))
    {!! wp_nav_menu($primarymenu) !!}
  @endif

</nav>
