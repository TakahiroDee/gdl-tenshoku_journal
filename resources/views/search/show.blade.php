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
      <a class="section" href="#">XXXの求人一覧</a>
      <i class="right angle icon divider"></i>
      <span class="section">{{ $description->cmpny_name }}の転職/求人</span>
    </div>
  </div>
</div>
<main class="l-main">
  <div class="l-inner l-row l-col">
    <main class="l-col-lg-12">
      <div class="c-header">
        <h1 class="c-header__title"><small>{{ $description->cmpny_name }}の転職/求人情報</small>{{ $description->subtitle }}</h1><span class="c-header__meta"><small>提供元：{{ $rankingContent->service_jp_name }}</small><img src="/dist/image/{{ $rankingContent->thumbnail_path }}"></span>
      </div>
      <div class="l-main_lf_1">
        <article class="c-detail">
          <div class="ui top attached tabular menu">
            <div class="active item"><a>求人情報</a></div>
            <div class="item"><a>企業情報</a></div>
          </div>
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
                        {!! $description->workplace_wiz_tag !!}
                        @else
                        <p>{{ $description->workplace }}</p>
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <th class="four wide">給与</th>
                      <td class="tweleve wide">
                        @if( strlen( $description->payment_wiz_tag ) > 0)
                        {!! $description->payment_wiz_tag !!}
                        @else
                        <p>{{ $description->payment }}</p>
                        @endif
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="c-detail__sticky"><a class="ui orange button c-singlebutton" href="#" data-id="sticky-button">{{ $rankingContent->service_jp_name }}に登録</a></div>
          </div>
        </article>
      </div>
      <div class="l-main_lf_2">
        <div class="c-asto ui segment">
          <h2>{{ $rankingContent->service_jp_name }}について</h2>
          <div class="ui items">
            <div class="item"><a class="ui small image"><img class="c-ranking__thumb" src="/dist/image/{{ $rankingContent->thumbnail_path }}"></a>
              <div class="content">
                <div class="description">
                  <p>
                    {{ $rankingContent->summary }}
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="c-asto__footer">
            <div><span>ここがポイント<i class="pointing up icon"></i></span>
              <ul>
                @if(!is_null($rankingContent->positive_point_1))
                <li><i class="checkmark icon"></i>{{ $rankingContent->positive_point_1 }}</li>
                @endif
                @if(!is_null($rankingContent->positive_point_2))
                <li><i class="checkmark icon"></i>{{ $rankingContent->positive_point_2 }}</li>
                @endif
                @if(!is_null($rankingContent->positive_point_3))
                <li><i class="checkmark icon"></i>{{ $rankingContent->positive_point_3 }}</li>
                @endif
              </ul>
            </div>
            <div>
              <button class="ui teal button c-singlebutton">{{ $rankingContent->service_jp_name }}について詳しく</button>
            </div>
          </div>
        </div>
      </div>
      <div class="l-main_lf_3">
        <h2>{{ $rankingContent->service_jp_name }}が扱うこの職種での別の求人</h2>
        <div class="c-otherjob ui cards">
          @foreach($relatedJob as $job)
          <div class="ui card">
            <div class="content">
              <div class="header">{{ mb_substr($job->cmpny_name,0,15) }}...</div>
            </div>
            <div class="content">
              <div class="ui small feed">
                <div class="event">
                  <div class="content">
                    <div class="meta">職種</div>
                    <div class="summary">{{ mb_substr($job->subtitle,0,15) }}...</div>
                  </div>
                </div>
                <div class="event">
                  <div class="content">
                    <div class="meta">仕事の内容</div>
                    <div class="summary">{{ mb_substr($job->content,0,15) }}...</div>
                  </div>
                </div>
                <div class="event">
                  <div class="content">
                    <div class="meta">勤務地</div>
                    <div class="summary">{{ mb_substr($job->workplace,0,15) }}...</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="extra content">
              <a class="ui olive button" href="{{ action('SearchController@showJob', [$job->service_name, $job->job_code_big, $job->job_code_mid, $job->rqmt_id]) }}">詳細をみる</a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </main>
  </div>
</main>
@endsection
