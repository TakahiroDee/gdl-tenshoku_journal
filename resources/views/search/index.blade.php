@extends('layout.layout')

@section('title')
@endsection

{{-- meta keyword for this page --}}
@section('meta-keyword')
転職、求人、転職サイト、転職エージェント、口コミ、評判
@endsection

{{-- meta description for this page --}}
@section('meta-description')
転職ジャーナルは、転職を検討し始めたすべての人向けのライフスタイルマガジンです。自分にあった転職サイト・転職エージェントの選び方や、
各転職サービスが掲載している求人を比較して、自分にあったサービスを見つけることができます。
@endsection

{{-- l-wrapper's id --}}
@section('page-id','p-search')


@section('content')
<div class="l-inner">
  <div class="ui breadcrumb">
    <div class="c-breadcrumb u-lg-ms1rem">
      <a class="section" href="/">HOME</a>
      <i class="right angle icon divider"></i>
      <a class="section" href="{{ action('SearchController@index') }}">求人をさがす</a>
      <i class="right angle icon divider"></i>

      @if(!empty($data['selected_job_code_list']) || !empty($data['selected_area_code_list']))
      <div class="section">求人検索結果</div>
      @else
      <div class="section">全国・全職種の求人一覧</div>
      @endif

    </div>
  </div>
</div>
<main class="l-main">
  @include('inc.search.searchpanel')
  <div class="l-inner l-row l-col">
    <div class="l-col-lg-8">

      @if(!empty($data['selected_job_code_list']) || !empty($data['selected_area_code_list']))
      <h1>求人検索結果</h1>
      @else
      <h1>全国・全職種の求人一覧</h1>
      @endif

      <div class="l-main_lf_1">
        <div class="c-searchResult">          
          {!! $cassettes->links('vendor.pagination.semantic-ui') !!}
        </div>
      </div>
      <div class="l-main_lf_2">

        @foreach($cassettes as $cassette)
        <div class="c-searchCassette ui grey segment">
          <h2 class="c-searchCassette__title">
            <a href="{{ action('SearchController@showByJobCode', [$cassette->pathname, $cassette->job_code_full, $cassette->rqmt_id] )}}">
              {{ $cassette->cmpny_name }}
            </a>
          </h2>
          <p class="c-searchCassette__lead"><a class="c-searchCassette__link">{{ $cassette->subtitle }}</a></p>

          <table class="c-searchCassette__table ui table">
            <tbody>
              <tr>
                <th class="four wide">仕事内容</th>
                <td class="tweleve wide">{!! mb_substr($cassette->content,0,60) . '...' !!}</td>
              </tr>
              <tr>
                <th class="four wide">勤務地</th>
                <td class="tweleve wide">{!! mb_substr($cassette->workplace,0,60) . '...' !!}</td>
              </tr>
              <tr>
                <th class="four wide">給与</th>
                <td class="tweleve wide">{!! mb_substr($cassette->payment,0,60) !!}</td>
              </tr>
              <tr>
                <th class="four wide">提供元</th>
                <td class="tweleve wide"><span class="is-{{ $cassette->sitename }}"></span></td>
              </tr>
            </tbody>
          </table>
          <div class="c-searchCassette__buttons">
            <div class="c-searchCassette__button ui orange button"><a class="c-searchCassette__link" href="#">いますぐ登録！</a></div>
            <div class="c-searchCassette__button ui teal button">
              <a class="c-searchCassette__link" href="{{ action('SearchController@showByJobCode', [$cassette->pathname, $cassette->job_code_full, $cassette->rqmt_id] )}}">
                求人の詳細を見る
              </a>
            </div>
          </div>
        </div>
        @endforeach

      </div>
      <div class="l-main_lf_3">
        <div class="c-searchResult">          
          {!! $cassettes->links('vendor.pagination.semantic-ui') !!}
        </div>
      </div>
    </div>
    <div class="l-col-lg-4">
      <div class="l-aside">
        <aside class="l-aside_rg_1">
          <div class="c-searchSidePanel">
            <div class="ui card warning message">
              <div class="content">
                <p class="header">複数の転職サイト・エージェントの求人を一括検索</p>
                <p class="description">このサイトでは複数の転職サイト・エージェントの求人を一括検索することができます。きになる求人があれば、このサイト経由で会員登録・エントリー可能です。</p>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
</main>
@endsection
