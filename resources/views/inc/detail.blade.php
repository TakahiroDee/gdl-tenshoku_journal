<div class="l-main_lf_1">
  <article class="c-detail">
    <h1>
      <span>第{{ $contents->rank }}位</span>{{ $contents->service_jp_name }} の評判・口コミ
    </h1>
    <div class="c-block ui items">
      <div class="item">
        <div class="ui small image">
          <img src="/dist/image/{{ $contents->thumbnail_path }}" alt="{{ $contents->service_jp_name }}">
        </div>
        <div class="content">
          <div class="description">
            <p>
              {{ nl2br($contents->summary) }}
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="ui message">
      <div class="ui ordered list">
        <a class="item" href="#bs-1">{{ $contents->service_jp_name }}のメリットと口コミ</a>
        <a class="item" href="#bs-2">{{ $contents->service_jp_name }}のデメリットと口コミ</a>
        <a class="item" href="#bs-3">掲載している求人について</a>
        <a class="item" href="#bs-4">こんな人は{{ $contents->service_jp_name }}を利用すべき</a>
      </div>
    </div>
    <section>
      <div class="c-block">
        <h2 class="c-block__subheader" id="bs-1">1.{{ $contents->service_jp_name }}のメリットと口コミ</h2>
        <div class="c-block__section">
          <h3 class="c-block__thirdheader">{{ $contents->service_jp_name }}のメリット<i class="thumbs up icon"></i></h3>
          {!! nl2br($contents->description_1) !!}
        </div>
        <div class="c-block__section">
          <h3 class="c-block__thirdheader">{{ $contents->service_jp_name }}利用者の声<i class="talk outline icon"></i></h3>

          @forelse($good_reps as $good_rep)
          <div class="ui comments c-voices">
            <div class="ui raised segment">
              <div class="comment c-voice">
                <div class="c-voice__author">
                  <a class="avatar c-voice__avatar">
                    <span class="{{ $good_rep->avatar_type }}"></span>
                  </a>
                  <div class="content c-voice__meta">
                    <span class="author">{{ $good_rep->age }} {{ $good_rep->gender }} {{ $good_rep->job }}</span>
                    <div class="metadata">
                      <div class="ui star rating disabled" data-rating="{{ $good_rep->rating }}" data-max-rating="5"></div>
                    </div>
                  </div>
                </div>
                <div class="content c-voice__comment">
                  <div class="text">
                    {{ $good_rep->comment }}
                  </div>
                </div>
              </div>
            </div>
          </div>
          @empty
          <div></div>
          @endforelse

        </div>
        <div class="c-block__section">
          <h3 class="c-block__thirdheader">{{ $contents->service_jp_name }}のメリットまとめ<i class="pointing up icon"></i></h3>
          <div class="ui celled list">
            @if(!is_null($contents->positive_point_1))
            <div class="item"><i class="checkmark icon"></i><span>{{ $contents->positive_point_1 }}</span></div>
            @endif

            @if(!is_null($contents->positive_point_2))
            <div class="item"><i class="checkmark icon"></i><span>{{ $contents->positive_point_2 }}</span></div>
            @endif

            @if(!is_null($contents->positive_point_3))
            <div class="item"><i class="checkmark icon"></i><span>{{ $contents->positive_point_3 }}</span></div>
            @endif

          </div>
        </div>

        @if($contents->crawling_flag === 1)
        <div class="c-double__buttons">
          <div class="ui orange button c-button">
            <a href="{{ $contents->url }}">いますぐ登録！</a>
          </div>
          <div class="ui teal button c-button">
            <a href="{{ action('SearchController@getIndexByServiceId', $contents->service_id )}}">{{ $contents->service_jp_name }}の求人を見てみる</a>
          </div>
        </div>
        @else
        <div class="c-single__button">
          <div class="ui orange button c-button">
            <a href="{{ $contents->url }}">いますぐ登録！</a>
          </div>
        </div>
        @endif



        <h2 class="c-block__subheader" id="bs-2">2.{{ $contents->service_jp_name }}のデメリットと口コミ</h2>
        <div class="c-block__section">
          <h3 class="c-block__thirdheader">{{ $contents->service_jp_name }}のデメリット<i class="thumbs down icon"></i></h3>
          {!! nl2br($contents->description_2) !!}
        </div>
        <div class="c-block__section">
          <h3 class="c-block__thirdheader">{{ $contents->service_jp_name }}利用者の声<i class="talk outline icon"></i></h3>

          @forelse($bad_reps as $bad_rep)
          <div class="ui comments c-voices">
            <div class="ui raised segment">
              <div class="comment c-voice">
                <div class="c-voice__author">
                  <a class="avatar c-voice__avatar">
                    <span class="{{ $bad_rep->avatar_type }}"></span>
                  </a>
                  <div class="content c-voice__meta">
                    <span class="author">{{ $bad_rep->age }} {{ $bad_rep->gender }} {{ $bad_rep->job }}</span>
                    <div class="metadata">
                      <div class="ui star rating disabled" data-rating="{{ $bad_rep->rating }}" data-max-rating="5"></div>
                    </div>
                  </div>
                </div>
                <div class="content c-voice__comment">
                  <div class="text">
                    {{ $bad_rep->comment }}
                  </div>
                </div>
              </div>
            </div>
          </div>
          @empty
          <div></div>
          @endforelse

        </div>
        <div class="c-block__section">
          <h3 class="c-block__thirdheader">{{ $contents->service_jp_name }}のデメリットまとめ<i class="pointing up icon"></i></h3>
          <div class="ui celled list">
            @if(!is_null($contents->negative_point_1))
            <div class="item"><i class="checkmark icon"></i><span>{{ $contents->negative_point_1 }}</span></div>
            @endif

            @if(!is_null($contents->negative_point_2))
            <div class="item"><i class="checkmark icon"></i><span>{{ $contents->negative_point_2 }}</span></div>
            @endif

            @if(!is_null($contents->negative_point_3))
            <div class="item"><i class="checkmark icon"></i><span>{{ $contents->negative_point_3 }}</span></div>
            @endif

          </div>
        </div>

        @if($contents->crawling_flag === 1)
        <div class="c-double__buttons">
          <div class="ui orange button c-button">
            <a href="{{ $contents->url }}">いますぐ登録！</a>
          </div>
          <div class="ui teal button c-button">
            <a href="{{ action('SearchController@getIndexByServiceId', $contents->service_id )}}">{{ $contents->service_jp_name }}の求人を見てみる</a>
          </div>
        </div>
        @else
        <div class="c-single__button">
          <div class="ui orange button c-button">
            <a href="{{ $contents->url }}">いますぐ登録！</a>
          </div>
        </div>
        @endif




        <h2 class="c-block__subheader" id="bs-3">3.掲載している求人について</h2>
        <div class="c-block__section">
          {!! $contents->description_3 !!}
          <table class="ui grey table">
            <thead>
              <tr>
                <th>職種</th>
                <th>求人数</th>
                <th>割合</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>営業職</td>
                <td>8,098</td>
                <td>16%</td>
              </tr>
              <tr>
                <td>事務・管理職</td>
                <td>7,893</td>
                <td>24%</td>
              </tr>
              <tr>
                <td>営業職</td>
                <td>8,098</td>
                <td>16%</td>
              </tr>
              <tr>
                <td>事務・管理職</td>
                <td>7,893</td>
                <td>24%</td>
              </tr>
              <tr>
                <td>営業職</td>
                <td>8,098</td>
                <td>16%</td>
              </tr>
              <tr>
                <td>事務・管理職</td>
                <td>7,893</td>
                <td>24%</td>
              </tr>
              <tr>
                <td>営業職</td>
                <td>8,098</td>
                <td>16%</td>
              </tr>
              <tr>
                <td>事務・管理職</td>
                <td>7,893</td>
                <td>24%</td>
              </tr>
            </tbody>
          </table>
        </div>
        <h2 class="c-block__subheader" id="bs-4">4.総論・どう言う人におすすめか</h2>
        <div class="c-block__section">
          {!! nl2br($contents->description_4) !!}


          @if($contents->crawling_flag === 1)
          <div class="c-double__buttons">
            <div class="ui orange button c-button">
              <a href="{{ $contents->url }}">いますぐ登録！</a>
            </div>
            <div class="ui teal button c-button">
              <a href="{{ action('SearchController@getIndexByServiceId', $contents->service_id )}}">{{ $contents->service_jp_name }}の求人を見てみる</a>
            </div>
          </div>
          @else
          <div class="c-single__button">
            <div class="ui orange button c-button">
              <a href="{{ $contents->url }}">いますぐ登録！</a>
            </div>
          </div>
          @endif


        </div>
        <div class="c-block__section" id="bs-5">
          <p>その他の口コミ一覧</p>

          @forelse($recent_reps as $recent_rep)
          <div class="ui comments c-voices">
            <div class="ui raised segment">
              <div class="comment c-voice">
                <div class="c-voice__author">
                  <a class="avatar c-voice__avatar">
                    <span class="{{ $recent_rep->avatar_type }}"></span>
                  </a>
                  <div class="content c-voice__meta">
                    <span class="author">{{ $recent_rep->age }} {{ $recent_rep->gender }} {{ $recent_rep->job }}</span>
                    <div class="metadata">
                      <div class="ui star rating disabled" data-rating="{{ $recent_rep->rating }}" data-max-rating="5"></div>
                    </div>
                  </div>
                </div>
                <div class="content c-voice__comment">
                  <div class="text">
                    {{ $recent_rep->comment }}
                  </div>
                </div>
              </div>
            </div>
          </div>
          @empty
          <div></div>
          @endforelse

        </div>
      </div>
    </section>
  </article>
</div>
