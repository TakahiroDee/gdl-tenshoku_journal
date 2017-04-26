<header class="l-header">
  <div class="l-inner">
    <h1 class="tj-logo"><a class="tj-logo__link" href="{{ action('TopController@index') }}">転職ジャーナル<span class="tj-logo__caption">Tenshoku Journal</span></a></h1>
  </div>
  <nav class="tj-gnav">
    <div class="l-inner">
      <ul class="tj-gnav__menu">
        <li class="tj-gnav__item um-dn"><a class="tj-gnav__link" href="{{ action('TopController@index') }}">HOME</a></li>
        <li class="tj-gnav__item"><a class="tj-gnav__link" href="{{ action('RankingController@index') }}">転職サイト・Agent</a></li>
        <li class="tj-gnav__item"><a class="tj-gnav__link" href="{{ action('SearchController@index') }}">求人をさがす</a></li>
        <li class="tj-gnav__item"><a class="tj-gnav__link" href="{{ url('knowhow')}}">転職を考えたら</a></li>
      </ul>
    </div>
  </nav>
</header>
