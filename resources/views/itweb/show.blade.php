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
          <a class="section" href="{{ action('RankingController@index') }}">転職サイト・Agent</a>
          <i class="right angle icon divider"></i>
          <a class="section" href="{{ action('ItwebController@index') }}">ITWeb系転職サイト・エージェントランキング</a>
          <i class="right angle icon divider"></i>
          <span>{{ $contents->service_jp_name }}の評判・口コミ</span></div>
      </div>
    </div>
  </div>
  <div class="l-inner l-row">
    <main class="l-col-lg-8">
      @include('inc.detail')
    </main>
    @include('inc.sidebar.itweb')

  </div>
</div>
@endsection
