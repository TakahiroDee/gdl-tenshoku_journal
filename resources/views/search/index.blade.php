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
      <div class="section">全国の全職種の求人一覧</div>
    </div>
  </div>
</div>
<main class="l-main">
  <div class="l-inner l-row l-searchPanel">
    <search-vue-wrap></search-vue-wrap>    
  </div>
  <div class="l-inner l-row l-col">
    <main class="l-col-lg-8">
      <h1>全国・全職種の求人一覧</h1>
      <div class="l-main_lf_1">
        <div class="c-searchResult">
          <p class="c-searchResult__count"><strong>7,719件</strong>（1～50件を表示中）</p>
          <div class="c-searchResult__pagination ui pagination menu">
            <a class="active item">1</a>
            <a class="item">2</a>
            <a class="item">3</a>
            <div class="disabled item">...</div>
            <a class="item">12</a>
          </div>
        </div>
      </div>
      <div class="l-main_lf_2">

        @for($i = 0; $i < 30; $i++)
        <div class="c-searchCassette ui grey segment">
          <h2 class="c-searchCassette__title">エス・エー・エス株式会社</h2><span class="c-searchCassette__meta">提供元：リクナビNEXT</span>
          <p class="c-searchCassette__lead"><a class="c-searchCassette__link">【システムエンジニア】自社開発／プライム案件／定着率97.9％／5期連続売上UP／月給75万円スタートも可能</a></p>
          <table class="ui table">
            <tbody>
              <tr>
                <th class="four wide">仕事内容</th>
                <td class="tweleve wide">SIerとして大手企業に常駐し、金融や流通、クレジットカードのシステム開発、 勤怠管理や給与明細の自社パッケージ開発など幅広いフィールドで…</td>
              </tr>
              <tr>
                <th class="four wide">勤務地</th>
                <td class="tweleve wide">東京都港区三田(本社)および都内近郊 【本社】 〒108-0073　東京都港区三田3-4-10 4F（リーラヒジリザカビル） ※グーグ…</td>
              </tr>
              <tr>
                <th class="four wide">給与</th>
                <td class="tweleve wide">月給36～75万円（別途残業精算あり） ◎経験や能力に応じて決定します ◎独自の人事評価制度あり ※試用期間3ヶ月あり／給…</td>
              </tr>
            </tbody>
          </table>
          <div class="c-searchCassette__buttons">
            <div class="c-searchCassette__button ui orange button"><a class="c-searchCassette__link" href="#">いますぐ登録！</a></div>
            <div class="c-searchCassette__button ui teal button"><a class="c-searchCassette__link" href="#">求人の詳細を見る       </a></div>
          </div>
        </div>
        @endfor

      </div>
      <div class="l-main_lf_3">
        <div class="c-searchResult">
          <p class="c-searchResult__count"><strong>7,719件</strong>（1～50件を表示中）</p>
          <div class="c-searchResult__pagination ui pagination menu">
            <a class="active item">1</a>
            <a class="item">2</a>
            <a class="item">3</a>
            <div class="disabled item">...</div>
            <a class="item">12</a>
          </div>
        </div>
      </div>
    </main>
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
