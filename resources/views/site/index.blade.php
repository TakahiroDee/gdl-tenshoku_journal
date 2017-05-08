@extends('layout.layout')

@section('title')
@endsection

{{-- meta keyword for this page --}}
@section('meta-keyword','転職、求人、転職サイト、転職エージェント、口コミ、評判')

{{-- meta description for this page --}}
@section('meta-description','転職ジャーナルは、転職を検討し始めたすべての人向けのライフスタイルマガジンです。自分にあった転職サイト・転職エージェントの選び方や、
各転職サービスが掲載している求人を比較して、自分にあったサービスを見つけることができます。')

{{-- l-wrapper's id --}}
@section('page-id','p-site')

@section('content')
<div class="l-hero">
  <div class="c-hero c-hero__site">
    <div class="l-inner">
      <div class="ui breadcrumb">
        <div class="c-breadcrumb"><a class="section" href="/">HOME</a><i class="right angle icon divider"></i><a class="section" href="{{ action('RankingController@index') }}">転職サイト・Agent</a><i class="right angle icon divider"></i>
          <div class="section">転職サイト総合ランキング</div>
        </div>
      </div>
      <h1 class="c-hero__title">結局どのサイトがいいの？みんなの口コミから選ぶ転職サイト総合ランキング</h1>
    </div>
  </div>
</div>
<div class="l-main">
  <div class="l-inner l-row">
    <main class="l-col-lg-8">
      <div class="l-main_lf_1">
        <div class="c-headline">
          自分自身で求人を探したい、エージェントから提案されたものだけだと見逃している求人がある気がする、など
          転職活動に時間がしっかりと割け、なおかつ可能性を狭めたくないなら、提案型の転職エージェントよりも転職サイトの利用がオススメです。
          複数の転職サイトの中から、利用者数・求人数・機能など総合的に見て、オススメの転職サイトを集めました。
        </div>
      </div>
      <div class="l-main_lf_2">

        @foreach($rankings as $ranking)
        <div class="c-ranking">
          <h2 class="c-ranking__title"><span>第{{ $ranking->rank }}位</span>{{ $ranking->service_name }}</h2>
          <div class="ui items c-ranking__summary">
            <div class="item"><div class="ui small image"><img class="c-ranking__thumb" src="/dist/image/{{ $ranking->thumbnail_path }}"></div>
              <div class="content">
                <div class="description">
                  <p>{{ $ranking->summary }}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="c-ranking__description">
            <div class="c-ranking__section"><span class="c-ranking__catch">ここがポイント<i class="pointing up icon"></i></span>
              <ul class="c-ranking__points">

                @if(isset($ranking->positive_point1))
                <li class="c-ranking__point"><i class="checkmark icon c-ranking__pointIcon"></i>{{ $ranking->positive_point1 }}</li>
                @endif

                @if(isset($ranking->positive_point2))
                <li class="c-ranking__point"><i class="checkmark icon c-ranking__pointIcon"></i>{{ $ranking->positive_point2 }}</li>
                @endif

                @if(isset($ranking->positive_point3))
                <li class="c-ranking__point"><i class="checkmark icon c-ranking__pointIcon"></i>{{ $ranking->positive_point3 }}</li>
                @endif

              </ul>
            </div>
            <div class="c-ranking__section"><span class="c-ranking__catch">利用者の声<i class="talk outline icon"></i></span>
              <div class="ui comments c-voices">
                <div class="ui raised segment">
                  <div class="comment c-voice">
                    <div class="c-voice__author"><div class="avatar c-voice__avatar"><span class="c-voice__avatar30w"></span></div>
                      <div class="content c-voice__meta"><span class="author">30代 女性 営業職</span>
                        <div class="metadata">
                          <div class="ui star rating disabled" data-rating="4" data-max-rating="5"></div>
                        </div>
                      </div>
                    </div>                                      
                    <div class="content c-voice__comment">
                      <div class="text">
                        転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                        前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                        その中でもいい印象だったのがリクナビNEXTです...
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ui raised segment">
                  <div class="comment c-voice">
                    <div class="c-voice__author"><div class="avatar c-voice__avatar"><span class="c-voice__avatar30w"></span></div>
                      <div class="content c-voice__meta"><span class="author">30代 女性 営業職</span>
                        <div class="metadata">
                          <div class="ui star rating disabled" data-rating="4" data-max-rating="5"></div>
                        </div>
                      </div>
                    </div>
                    <div class="content c-voice__comment">
                      <div class="text">
                        転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                        前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                        その中でもいい印象だったのがリクナビNEXTです...
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-double__buttons">
              <button class="ui orange button c-button">クチコミ・詳細を見る</button>
              <button class="ui teal button c-button">リクナビNEXTの求人を見てみる  </button>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </main>
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
            <h2>転職を考えたら</h2>
            <ul class="c-knowhow__list">
              <li class="c-knowhow__item"><a class="c-knowhow__link" href="#"><img class="c-knowhow__thumb" src="http://dev.tenshoku-journal.com/knowhow/wp-content/uploads/2017/04/e_20170427.jpg" width="55" height="55">
                  <p class="c-knowhow__lead">採用のお悩み解決！ スタートアップが採用でやってきた裏ワザ公開《ビジネスサイド編》</p></a></li>
              <li class="c-knowhow__item"><a class="c-knowhow__link" href="#"><img class="c-knowhow__thumb" src="http://dev.tenshoku-journal.com/knowhow/wp-content/uploads/2017/04/e_20170427.jpg" width="55" height="55">
                  <p class="c-knowhow__lead">採用のお悩み解決！ スタートアップが採用でやってきた裏ワザ公開《ビジネスサイド編》</p></a></li>
              <li class="c-knowhow__item"><a class="c-knowhow__link" href="#"><img class="c-knowhow__thumb" src="http://dev.tenshoku-journal.com/knowhow/wp-content/uploads/2017/04/e_20170427.jpg" width="55" height="55">
                  <p class="c-knowhow__lead">採用のお悩み解決！ スタートアップが採用でやってきた裏ワザ公開《ビジネスサイド編》</p></a></li>
              <li class="c-knowhow__item"><a class="c-knowhow__link" href="#"><img class="c-knowhow__thumb" src="http://dev.tenshoku-journal.com/knowhow/wp-content/uploads/2017/04/e_20170427.jpg" width="55" height="55">
                  <p class="c-knowhow__lead">採用のお悩み解決！ スタートアップが採用でやってきた裏ワザ公開《ビジネスサイド編》</p></a></li>
              <li class="c-knowhow__item"><a class="c-knowhow__link" href="#"><img class="c-knowhow__thumb" src="http://dev.tenshoku-journal.com/knowhow/wp-content/uploads/2017/04/e_20170427.jpg" width="55" height="55">
                  <p class="c-knowhow__lead">採用のお悩み解決！ スタートアップが採用でやってきた裏ワザ公開《ビジネスサイド編》</p></a></li>
              <li class="c-knowhow__item"><a class="c-knowhow__link" href="#"><img class="c-knowhow__thumb" src="http://dev.tenshoku-journal.com/knowhow/wp-content/uploads/2017/04/e_20170427.jpg" width="55" height="55">
                  <p class="c-knowhow__lead">採用のお悩み解決！ スタートアップが採用でやってきた裏ワザ公開《ビジネスサイド編》</p></a></li>
              <li class="c-knowhow__item"><a class="c-knowhow__link" href="#"><img class="c-knowhow__thumb" src="http://dev.tenshoku-journal.com/knowhow/wp-content/uploads/2017/04/e_20170427.jpg" width="55" height="55">
                  <p class="c-knowhow__lead">採用のお悩み解決！ スタートアップが採用でやってきた裏ワザ公開《ビジネスサイド編》</p></a></li>
              <li class="c-knowhow__item"><a class="c-knowhow__link" href="#"><img class="c-knowhow__thumb" src="http://dev.tenshoku-journal.com/knowhow/wp-content/uploads/2017/04/e_20170427.jpg" width="55" height="55">
                  <p class="c-knowhow__lead">採用のお悩み解決！ スタートアップが採用でやってきた裏ワザ公開《ビジネスサイド編》</p></a></li>
              <li class="c-knowhow__item"><a class="c-knowhow__link" href="#"><img class="c-knowhow__thumb" src="http://dev.tenshoku-journal.com/knowhow/wp-content/uploads/2017/04/e_20170427.jpg" width="55" height="55">
                  <p class="c-knowhow__lead">採用のお悩み解決！ スタートアップが採用でやってきた裏ワザ公開《ビジネスサイド編》</p></a></li>
              <li class="c-knowhow__item"><a class="c-knowhow__link" href="#"><img class="c-knowhow__thumb" src="http://dev.tenshoku-journal.com/knowhow/wp-content/uploads/2017/04/e_20170427.jpg" width="55" height="55">
                  <p class="c-knowhow__lead">採用のお悩み解決！ スタートアップが採用でやってきた裏ワザ公開《ビジネスサイド編》</p></a></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </div>
</div>
@endsection
