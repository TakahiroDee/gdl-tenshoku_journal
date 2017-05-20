@extends('layout.layout')

@section('title')
@endsection

{{-- meta keyword for this page --}}
@section('meta-keyword','転職、求人、転職サイト、転職エージェント、口コミ、評判')

{{-- meta description for this page --}}
@section('meta-description','転職ジャーナルは、転職を検討し始めたすべての人向けのライフスタイルマガジンです。自分にあった転職サイト・転職エージェントの選び方や、
各転職サービスが掲載している求人を比較して、自分にあったサービスを見つけることができます。')

{{-- l-wrapper's id --}}
@section('page-id','p-itweb')

@section('content')
  <div class="l-hero">
    <div class="c-hero c-hero__itweb">
      <div class="l-inner">
        <div class="ui breadcrumb">
          <div class="c-breadcrumb">
            <a class="section" href="/">HOME</a>
            <i class="right angle icon divider"></i>
            <a class="section" href="{{ action('RankingController@index') }}">転職サイト・Agent</a>
            <i class="right angle icon divider"></i>
            <div class="section">ITWeb系転職サイト・エージェントランキング</div>
          </div>
        </div>
        <h1 class="c-hero__title">ITWeb系転職サイト・エージェントランキング</h1>
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
        <div class="l-main_lf_1">
          <p class="ui tabular menu c-tabmenu">
            <a class="active item c-tabmenu__item" id="frag-all" href="/ranking/itweb/#frag-all">
              全サービス一覧
            </a>
            <a class="item c-tabmenu__item" id="frag-agent" href="/ranking/itweb/agent/#frag-agent">
              転職エージェント<wbr/>ランキング
            </a>
            <a class="item c-tabmenu__item" id="frag-site" href="/ranking/itweb/site/#frag-site">
              転職サイトランキング
            </a>
          </p>
        </div>

        <div class="l-main_lf_2">

          @foreach($rankings as $ranking)

            <div class="c-ranking">
              <h2 class="c-ranking__title"><span>第{{ $ranking->rank }}位</span>{{ $ranking->service_jp_name }}</h2>
              <div class="ui items c-ranking__summary">
                <div class="item">
                  <a href="{{ action('ItwebController@show', $ranking->service_id) }}" class="ui small image">
                    <img class="c-ranking__thumb" src="/dist/image/{{ $ranking->thumbnail_path }}">
                  </a>
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

                    @if(isset($ranking->positive_point_1))
                      <li class="c-ranking__point"><i class="checkmark icon c-ranking__pointIcon"></i>{{ $ranking->positive_point_1 }}</li>
                    @endif

                    @if(isset($ranking->positive_point_2))
                      <li class="c-ranking__point"><i class="checkmark icon c-ranking__pointIcon"></i>{{ $ranking->positive_point_2 }}</li>
                    @endif

                    @if(isset($ranking->positive_point_3))
                      <li class="c-ranking__point"><i class="checkmark icon c-ranking__pointIcon"></i>{{ $ranking->positive_point_3 }}</li>
                    @endif

                  </ul>
                </div>

                <div class="c-ranking__section"><span class="c-ranking__catch">利用者の声<i class="talk outline icon"></i></span>
                  <div class="ui comments c-voices">

                    @foreach($reputations[$loop->index] as $reputation)
                      <div class="ui raised segment">
                        <div class="comment c-voice">
                          <div class="c-voice__author"><div class="avatar c-voice__avatar"><span class="{{ $reputation->avatar_type }}"></span></div>
                            <div class="content c-voice__meta">
                        <span class="author">
                          {{ $reputation->age }} / {{ $reputation->gender }} / {{ $reputation->job }}
                        </span>
                              <div class="metadata">
                                <div class="ui star rating disabled" data-rating="{{ $reputation->rating }}" data-max-rating="5"></div>
                              </div>
                            </div>
                          </div>
                          <div class="content c-voice__comment">
                            <div class="text">
                              {{ mb_substr($reputation->comment,0,199) }}...
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach

                  </div>
                </div>
                <div class="c-double__buttons">
                  <button class="ui orange button c-button"><a href="{{ action('ItwebController@show', $ranking->service_id) }}">クチコミ・詳細を見る</a></button>
                  <button class="ui teal button c-button"><a href="#">{{ $ranking->service_jp_name }}の求人を見てみる</a></button>
                </div>
              </div>
            </div>
          @endforeach

        </div>
      </main>
      @include('inc.sidebar.itweb')

    </div>
  </div>
@endsection
