@extends('layout.layout')

@section('title')
@endsection

{{-- meta keyword for this page --}}
@section('meta-keyword','転職、求人、転職サイト、転職エージェント、口コミ、評判')

{{-- meta description for this page --}}
@section('meta-description','転職ジャーナルは、転職を検討し始めたすべての人向けのライフスタイルマガジンです。自分にあった転職サイト・転職エージェントの選び方や、
各転職サービスが掲載している求人を比較して、自分にあったサービスを見つけることができます。')

{{-- l-wrapper's id --}}
@section('page-id','p-ranking')

@section('content')
<div class="l-hero">
  <div class="l-inner l-ranktop">
    <div class="ui breadcrumb">
      <div class="c-breadcrumb">
        <a class="section" href="/">HOME</a>
        <i class="right angle icon divider"></i>
        <span class="section">転職サイト・Agent</span>
      </div>
    </div>  
  </div>
  <div class="c-splithero">
    <div class="c-splithero__thumb">
    </div>
    <div class="c-splithero__text">
      <h1 class="c-splithero__title">転職サイト・転職エージェントランキングとは？</h1>
      <span class="c-splithero__divider"></span>
      <div class="c-splithero__contentBox">
        <p>転職の理由は人によって様々です。<br/>スキルを磨いて今の仕事でキャリアアップしていきたい人もいれば、<br/>
        未経験で全く新しい仕事にチャレンジしてみたい人もいます。</p>
        <p>またポジティブな理由だけじゃなく、<br/>今の仕事がとにかく嫌で辞めたいけれど<br/>やりたいことがないといった人もいれば<br/>
        育児や介護など家族の都合で働きたいけど選択肢が限られる人もいます</p>
        <p>転職ジャーナルでは単に人気のサイトをオススメするのではなく、<br/>タイプに合わせて利用すべきサービスを紹介しています。</p>
      </div>
    </div>
  </div>  
</div>
<div class="l-main l-ranktop">
  <div class="l-inner l-row">
    <main class="l-col-lg-8">
      <div class="l-main_lf_1">
        <div class="ui items c-ranking__item">
          <h2 class="c-ranking__lead">みんなが選ぶ、転職サイトランキング</a></h2>
          <div class="item content">
            <a class="c-ranking__link" href="{{ action('RankingController@siteIndex') }}">
              <div class="c-ranking__billboard c-ranking__site"></div>
              <div class="c-ranking__contentBox">          
                <p class="c-ranking__excerpt">転職サイトなんてどこも同じ。そう思っていませんか？職種や年齢によって向いている転職サイトはさまざま。 あなたのタイプに応じてピッタリの転職サイトが見つかります。</p>
              </div>
            </a>
          </div>
          <div class="ui list">
            @foreach($datas['site'] as $ranking)
            <a class="item" href="{{ action('RankingController@show',['site',$ranking->service_id]) }}"><i class="right triangle icon"></i>{{ $ranking->service_jp_name }}</a>
            @endforeach
          </div>
        </div>
        <div class="ui items c-ranking__item">
          <h2 class="c-ranking__lead">決定版！転職エージェントランキング</h2>
          <div class="item content">
            <a class="c-ranking__link" href="{{ action('RankingController@agentIndex') }}">
              <div class="c-ranking__billboard c-ranking__agent"></div>
              <div class="c-ranking__contentBox">              
                <p class="c-ranking__excerpt">転職エージェントというとスキルが高い人、ヘッドハンティングされるような人が利用するものだと思っていませんか？ 実は利用者だけでいえば、若手や第二新卒の人が最も多く一般的なものなのです。まずはどんな転職エージェントがあるのか調べてみましょう。</p>
              </div>
            </a>
          </div>
          <div class="ui list">
            @foreach($datas['agent'] as $ranking)
            <a class="item" href="{{ action('RankingController@show',['agent',$ranking->service_id]) }}"><i class="right triangle icon"></i>{{ $ranking->service_jp_name }}</a>
            @endforeach
          </div>
        </div>
        <div class="ui items c-ranking__item">
          <h2 class="c-ranking__lead">IT系転職サイト・エージェントランキング</h2>
          <div class="item content">
            <a class="c-ranking__link" href="{{ action('RankingController@itwebIndex') }}">
              <div class="c-ranking__billboard c-ranking__itweb"></div>
              <div class="c-ranking__contentBox">              
                <p class="c-ranking__excerpt">Webプロデューサー・プランナー・ディレクター・Webデザイナー・UI/UXデザイナー・ Webエンジニア・アプリケーションエンジニア・SE・インフラエンジニア・Webマーケター向け転職サイト・エージェントランキングです。</p>
              </div>
            </a>
          </div>
          <div class="ui list">
            @foreach($datas['itweb'] as $ranking)
            <a class="item" href="{{ action('RankingController@show',['itweb',$ranking->service_id]) }}"><i class="right triangle icon"></i>{{ $ranking->service_jp_name }}</a>
            @endforeach
          </div>
        </div>
        <div class="ui items c-ranking__item">
          <h2 class="c-ranking__lead">女性向け転職サービスランキング</h2>
          <div class="item content">
            <a class="c-ranking__link" href="{{ action('RankingController@womanIndex') }}">
              <div class="c-ranking__billboard c-ranking__woman"></div>
              <div class="c-ranking__contentBox">              
                <p class="c-ranking__excerpt">働き方の多様性や女性の社会進出が叫ばれる中、どうやって仕事を続けていけばいいのか不安になることもありますよね。バリバリ仕事を続けていきたいキャリアタイプの方、家庭と仕事を両立したいタイプの方にも合う女性向け転職サービスランキングです。</p>                
              </div>
            </a>
          </div>
          <div class="ui list">
            @foreach($datas['woman'] as $ranking)
            <a class="item" href="{{ action('RankingController@show',['woman',$ranking->service_id]) }}"><i class="right triangle icon"></i>{{ $ranking->service_jp_name }}</a>
            @endforeach
          </div>
        </div>
      </div>      
    </main>
    <div class="l-col-lg-4">
      <div class="l-aside">                
        <aside class="l-aside_rg_2">
          <div class="c-knowhow">
            <span class="ui pointing below label" style="margin: 0;">あわせて読みたい！</span>
            <h2>タイプ別転職成功ノウハウ</h2>
            <ul class="c-knowhow__list">

              @forelse($pages as $page)
              <li class="c-knowhow__item">
                <a class="c-knowhow__link" href="{{ make_relative_path($page->guid) }}">
                  <img class="c-knowhow__thumb" src="/dist/image/feature-{{ $page->ID }}.jpg" width="70" height="55" alt="{{ $page->post_title }}">
                  <p class="c-knowhow__lead">{{ $page->post_title }}</p>
                </a>
              </li>
              @empty
              <li></li>
              @endforelse

            </ul>
          </div>
          <div class="c-knowhow">
            <h2>転職を考えたら</h2>
            <ul class="c-knowhow__list">

              @forelse($posts as $post)
              <li class="c-knowhow__item">
                <a class="c-knowhow__link" href="{{ make_relative_path($post->link) }}">
                  <img class="c-knowhow__thumb" src="{{ make_relative_path($post->thumb) }}" width="70" height="55" alt="{{ $post->title }}">
                  <p class="c-knowhow__lead">{{ $post->title }}</p>
                </a>
              </li>
              @empty
              <li></li>
              @endforelse

            </ul>
          </div>
        </aside>
      </div>
    </div>
  </div>
</div>
@endsection
