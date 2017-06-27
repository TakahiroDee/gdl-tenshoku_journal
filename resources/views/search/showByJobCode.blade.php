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
@section('page-id','p-jobinfo')

@section('content')
<div class="l-inner">
  <div class="ui breadcrumb">
    <div class="c-breadcrumb u-lg-ms1rem">
      <a class="section" href="/">HOME</a>
      <i class="right angle icon divider"></i>
      <a class="section" href="{{ action('SearchController@index') }}">求人をさがす</a>
      <i class="right angle icon divider"></i>
      <a class="section" href="{{ action('SearchController@getIndexByJobBigCode',$data['pathname'])}}">
        {{ $data['job_code_big_value']}}
      </a>
      <i class="right angle icon divider"></i>
      <a class="section" href="{{ action('SearchController@getIndexByJobFullCode', [$data['pathname'], $data['job_code_full']]) }}">
        {{ $data['job_code_mid_value']}}
      </a>
      <i class="right angle icon divider"></i>
      <span class="section">{{ $description->cmpny_name }}の転職/求人</span>
    </div>
  </div>
</div>
<main class="l-main">
  <div class="l-inner l-row l-col">
    <main class="l-col-lg-12">
      <div class="c-header">
        <h1 class="c-header__title">
          <small>{{ $description->cmpny_name }}の転職/求人情報</small>
          {{ $description->subtitle }}
        </h1>
        <div class="c-header__meta">
          <small>提供元：{{ $data['rankingContent']->service_jp_name }}</small>
          <div class="c-header__servicelogo is-{{ $data['rankingContent']->service_id }}"></div>
        </div>
      </div>
      <div class="c-header__dates">
        @if(!preg_match('/^000/',$description->expired_at))
        <div>掲載終了予定日：{{ substr($description->expired_at,0,10) }}</div>
        @endif
        <div>最終掲載確認日：{{ substr($description->last_confirmed_at,0,10) }}</div>
      </div>
      <div class="l-main_lf_1">
        <article class="c-detail">
          <div class="c-detail__box ui bottom attached segment">
            <div class="c-detail__content">
              <h2>この求人について</h2>

              @if( strlen($description->message) > 0)
              <p>{!! $description->message !!}</p>
              <div class="ui divider"></div>
              @endif

              <div class="c-searchCassette">
                <table class="ui table">
                  <tbody>
                    <tr>
                      <th class="four wide">仕事内容</th>
                      <td class="tweleve wide">
                        @if( strlen( $description->content_wiz_tag ) > 0)
                        {!! $description->content_wiz_tag !!}
                        @else
                        <p>
                          {{ $description->content }}
                        </p>
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <th class="four wide">勤務地</th>
                      <td class="tweleve wide">
                        @if( strlen( $description->workplace_wiz_tag ) > 0)
                        @php
                        echo preg_replace('/\n+/', '<br>',$description->workplace_wiz_tag)
                        @endphp
                        @else
                        <p>{{ $description->workplace }}</p>
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <th class="four wide">給与</th>
                      <td class="tweleve wide">
                        @if( strlen( $description->payment_wiz_tag ) > 0)
                        {!! nl2br($description->payment_wiz_tag) !!}
                        @else
                        <p>{{ nl2br($description->payment) }}</p>
                        @endif
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="c-detail__sticky">
              <a class="ui orange button c-single__button" href="#" data-id="sticky-button">
                {{ $data['rankingContent']->service_jp_name }}に登録
              </a>
            </div>
          </div>
        </article>
      </div>
      <div class="l-main_lf_2">
        <div class="c-asto ui segment">
          <h2>{{ $data['rankingContent']->service_jp_name }}について</h2>
          <div class="ui items">
            <div class="item">
              <a class="ui small image">
                <img class="c-ranking__thumb" src="/dist/image/{{ $data['rankingContent']->thumbnail_path }}" alt="{{ $data['rankingContent']->service_jp_name }}">
              </a>
              <div class="content">
                <div class="description">
                  <p>
                    {{ $data['rankingContent']->summary }}
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="c-asto__footer">
            <div class="c-asto__point"><span>ここがポイント<i class="pointing up icon"></i></span>
              <ul>
                @if(!is_null($data['rankingContent']->positive_point_1))
                <li><i class="checkmark icon"></i>{{ $data['rankingContent']->positive_point_1 }}</li>
                @endif
                @if(!is_null($data['rankingContent']->positive_point_2))
                <li><i class="checkmark icon"></i>{{ $data['rankingContent']->positive_point_2 }}</li>
                @endif
                @if(!is_null($data['rankingContent']->positive_point_3))
                <li><i class="checkmark icon"></i>{{ $data['rankingContent']->positive_point_3 }}</li>
                @endif
              </ul>
            </div>
            <div class="c-asto__detailbutton">
              <a class="ui teal button c-single__button" href="{{ action('RankingController@show',[$data['rankingContent']->service_type, $data['rankingContent']->service_id])}}">
                {{ $data['rankingContent']->service_jp_name }}について詳しく
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="l-main_lf_3">
        <h2>{{ $data['rankingContent']->service_jp_name }}が扱うこの職種での別の求人</h2>

        @if(count($data['relatedJob']) == 4)
        <div class="c-otherjob ui cards is-justify">
        @else
        <div class="c-otherjob ui cards">
        @endif

          @foreach($data['relatedJob'] as $job)
          <div class="ui card">
            <div class="content">
              <div class="header">{{ dynamicSubstring($job->cmpny_name) }}</div>
            </div>
            <div class="content">
              <div class="ui small feed">
                <div class="event">
                  <div class="content">
                    <div class="meta">職種</div>
                    <div class="summary">{{ dynamicSubstring($job->subtitle) }}</div>
                  </div>
                </div>
                <div class="event">
                  <div class="content">
                    <div class="meta">仕事の内容</div>
                    <div class="summary">{{ dynamicSubstring($job->content) }}</div>
                  </div>
                </div>
                <div class="event">
                  <div class="content">
                    <div class="meta">勤務地</div>
                    <div class="summary">{{ dynamicSubstring($job->workplace) }}</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="extra content">
              <a class="ui olive button" href="{{ action('SearchController@showByJobCode', [$data['pathname'], $job->job_code_full, $job->rqmt_id]) }}">詳細をみる</a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </main>
  </div>
</main>
@endsection
