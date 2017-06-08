@extends('layout.layout')

@section('title','転職サイト総合ランキング')

{{-- meta keyword for this page --}}
@section('meta-keyword','転職、求人、転職サイト、転職エージェント、口コミ、評判')

{{-- meta description for this page --}}
@section('meta-description','転職ジャーナルは、転職を検討し始めたすべての人向けのライフスタイルマガジンです。自分にあった転職サイト・転職エージェントの選び方や、
各転職サービスが掲載している求人を比較して、自分にあったサービスを見つけることができます。')

{{-- l-wrapper's id --}}
@section('page-id','p-detail')

@section('content')
<div class="l-main">
  <div class="l-inner">
    <div class="ui breadcrumb">
      <div class="l-inner">
        <div class="c-breadcrumb">
          <a class="section" href="#">HOME</a>
          <i class="right angle icon divider"></i>
          <a class="section" href="{{ action('RankingController@topIndex') }}">転職サイト・Agent</a>
          <i class="right angle icon divider"></i>

          @if($contents->service_type == 'site')
          <a class="section" href="{{ action('RankingController@siteIndex') }}">転職サイト総合ランキング</a>
          @elseif($contents->service_type == 'agent')
          <a class="section" href="{{ action('RankingController@agentIndex') }}">転職エージェント徹底比較ランキング</a>
          @elseif($contents->service_type == 'haken')
          <a class="section" href="{{ action('RankingController@hakenIndex') }}">派遣サイトおすすめランキング</a>
          @elseif($contents->service_type == 'woman')
          <a class="section" href="{{ action('RankingController@womanIndex') }}">女性向け転職サイト・転職エージェント総合ランキング</a>
          @elseif($contents->service_type == 'itweb')
          <a class="section" href="{{ action('RankingController@itwebIndex') }}">ITWeb系転職サイト・エージェントランキング</a>
          @endif

          <i class="right angle icon divider"></i>
          <span>{{ $contents->service_jp_name }}の評判・口コミ</span></div>
      </div>
    </div>
  </div>
  <div class="l-inner l-row">
    <main class="l-col-lg-8">
      @include('inc.detail')
    </main>
    <div class="l-col-lg-4">
      <div class="l-aside">

        @if($contents->service_type == 'site')
          @include('inc.sidebar.site')
        @elseif($contents->service_type == 'agent')
          @include('inc.sidebar.agent')
        @elseif($contents->service_type == 'itweb')
          @include('inc.sidebar.itweb')
        @elseif($contents->service_type == 'haken')
          @include('inc.sidebar.haken')
        @elseif($contents->service_type == 'woman')
          @include('inc.sidebar.woman')
        @endif

        <aside class="l-aside_rg_2">
          <div class="c-knowhow">
            <h2>タイプ別転職成功ノウハウ</h2>
            <ul class="c-knowhow__list">

              @foreach($pages as $page)
              <li class="c-knowhow__item">
                <a class="c-knowhow__link" href="{{ make_relative_path($page->guid) }}">
                  <img class="c-knowhow__thumb" src="/dist/image/feature-{{ $page->ID }}.jpg" width="70" height="55" alt="{{ $page->post_title }}">
                  <p class="c-knowhow__lead">{{ $page->post_title }}</p>
                </a>
              </li>
              @endforeach

            </ul>
          </div>
          <div class="c-knowhow">
            <h2>転職を考えたら</h2>
            <ul class="c-knowhow__list">

              @foreach($posts as $post)
              <li class="c-knowhow__item">
                <a class="c-knowhow__link" href="{{ make_relative_path($post->link) }}">
                  <img class="c-knowhow__thumb" src="{{ make_relative_path($post->thumb) }}" width="70" height="55" alt="{{ $post->title }}">
                  <p class="c-knowhow__lead">{{ $post->title }}</p>
                </a>
              </li>
              @endforeach

            </ul>
          </div>
        </aside>
      </div>
    </div>
  </div>
</div>
@endsection
