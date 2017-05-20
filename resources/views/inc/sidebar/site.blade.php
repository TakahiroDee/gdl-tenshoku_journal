<div class="l-col-lg-4">
  <div class="l-aside">
    <aside class="l-aside_rg_1">
      <div class="c-othersite">
        <h2>専門型サービスのランキングはこちら</h2>
        <div class="c-othersite__item c-othersite__woman"><a class="c-othersite__link" href="{{ action('WomanController@index') }}">女性向け転職サービスランキング</a></div>
        <div class="c-othersite__item c-othersite__itweb"><a class="c-othersite__link" href="{{ action('ItwebController@index') }}">IT/Web系転職サービスランキング</a></div>
        <h2>転職エージェントのランキングはこちら</h2>
        <div class="c-othersite__item c-othersite__agent"><a class="c-othersite__link" href="{{ action('AgentController@index') }}">転職エージェント総合ランキング</a></div>
      </div>
    </aside>
    <aside class="l-aside_rg_2">
      <div class="c-knowhow">
        <h2>タイプ別転職成功ノウハウ</h2>
        <ul class="c-knowhow__list">

          @foreach($pages as $page)
          <li class="c-knowhow__item"><a class="c-knowhow__link" href="{{ $page->guid }}"><img class="c-knowhow__thumb" src="/dist/image/feature-{{ $page->ID }}.jpg" width="55" height="55">
              <p class="c-knowhow__lead">{{ $page->post_title }}</p></a></li>
          @endforeach

        </ul>
      </div>
      <div class="c-knowhow">
        <h2>転職を考えたら</h2>
        <ul class="c-knowhow__list">

          @foreach($posts as $post)
          <li class="c-knowhow__item"><a class="c-knowhow__link" href="{{ $post->link }}"><img class="c-knowhow__thumb" src="{{ $post->thumb }}" width="55" height="55">
              <p class="c-knowhow__lead">{{ $post->title }}</p></a></li>
          @endforeach

        </ul>
      </div>
    </aside>
  </div>
</div>
