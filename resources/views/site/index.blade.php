@extends('layout.layout')

@section('title')
@endsection

@section('content')
<div id="page-ranking">
  <div class="m-hero">
    <div class="l-inner">
      <div class="ui breadcrumb tj-breadcrumb">
        <div class="l-inner">
          <a class="section tj-breadcrumb_first" href="{{ action('TopController@index') }}">HOME</a>
          <i class="right angle icon divider"></i>
          <a class="section" href="{{ action('RankingController@index') }}">転職サイト・Agent</a>
          <i class="right angle icon divider"></i>
          <div class="section">転職サイト総合ランキング</div>
        </div>
      </div>
      <h1 class="m-hero__lead">結局どのサイトがいいの？みんなの口コミから選ぶ転職サイト総合ランキング</h1>
    </div>
  </div>
  <div class="l-main">
    <div class="l-inner l-row">
      <div class="l-col l-col-lg-8">
        <p class="tj-ranking__pageLead">
          自分自身で求人を探したい、エージェントから提案されたものだけだと見逃している求人がある気がする、など
          転職活動に時間がしっかりと割け、なおかつ可能性を狭めたくないなら、提案型の転職エージェントよりも転職サイトの利用がオススメです。
          複数の転職サイトの中から、利用者数・求人数・機能など総合的に見て、オススメの転職サイトを集めました。
        </p>
        <div class="tj-ranking"></div>
        <div class="tj-ranking__item">
          <h2 class="tj-ranking__itemTitle"><span>第1位</span>リクナビNEXT</h2>
          <div class="ui items">
            <div class="item"><a class="ui small image"><img class="tj-ranking__itemThumb" src="/dist/image/thumb_next.jpg"></a>
              <div class="content">
                <div class="description">
                  <p>転職サイトの代名詞とも言える古くからある大手サイト。9000件以上の求人を掲載し(*2017年3月確認時点)、特に営業職の求人掲載数は他のサイトと比較し 圧倒的に多いです。</p>
                </div>
              </div>
            </div>
          </div>
          <div class="tj-ranking__itemDescription"><span class="tj-ranking__itemDescriptionCatch">ここがポイント<i class="pointing up icon"></i></span>
            <ul class="tj-ranking__itemDescriptionList">
              <li><i class="checkmark icon tj-ranking__itemDescriptionListIcon"></i>他サイトと比べて比較的年収が高めの求人が多い</li>
              <li><i class="checkmark icon tj-ranking__itemDescriptionListIcon"></i>第二新卒・未経験歓迎の求人が豊富</li>
              <li><i class="checkmark icon tj-ranking__itemDescriptionListIcon"></i>提携エージェントから求人が紹介されるスカウト機能</li>
            </ul><span class="tj-ranking__itemDescriptionCatch">利用者の声<i class="talk outline icon"></i></span>
            <div class="ui comments tj-ranking__itemDescriptionVoice">
              <div class="comment"><a class="avatar tj-ranking__itemDescriptionVoiceThumb"><img src="/dist/image/wireframes/image.png"></a>
                <div class="content tj-ranking__itemDescriptionVoiceComment"><a class="author">30代 女性 営業職</a>
                  <div class="metadata">
                    <div class="ui star rating" data-rating="4" data-max-rating="5"></div>
                  </div>
                  <div class="text">
                    転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                    前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、その中でもいい印象だったのがリクナビNEXTです...
                  </div>
                </div>
              </div>
              <div class="comment"><a class="avatar tj-ranking__itemDescriptionVoiceThumb"><img src="/dist/image/wireframes/image.png"></a>
                <div class="content tj-ranking__itemDescriptionVoiceComment"><a class="author">20代 男性 販売職</a>
                  <div class="metadata">
                    <div class="ui star rating" data-rating="5" data-max-rating="5"></div>
                  </div>
                  <div class="text">
                    転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                    前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、その中でもいい印象だったのがリクナビNEXTです...
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tj-ranking__itemButtons">
            <button class="ui orange button tj-ranking__itemDetailButton">クチコミ・詳細を見る</button>
            <button class="ui teal button tj-ranking__itemSearchButton">リクナビNEXTの求人を見てみる</button>
          </div>
        </div>
        <div class="tj-ranking__item">
          <h2 class="tj-ranking__itemTitle"><span>第2位</span>リクナビNEXT</h2>
          <div class="ui items">
            <div class="item"><a class="ui small image"><img class="tj-ranking__itemThumb" src="/dist/image/thumb_type.jpg"></a>
              <div class="content">
                <div class="description">
                  <p>転職サイトの代名詞とも言える古くからある大手サイト。9000件以上の求人を掲載し(*2017年3月確認時点)、特に営業職の求人掲載数は他のサイトと比較し 圧倒的に多いです。</p>
                </div>
              </div>
            </div>
          </div>
          <div class="tj-ranking__itemDescription"><span class="tj-ranking__itemDescriptionCatch">ここがポイント<i class="pointing up icon"></i></span>
            <ul class="tj-ranking__itemDescriptionList">
              <li><i class="checkmark icon tj-ranking__itemDescriptionListIcon"></i>他サイトと比べて比較的年収が高めの求人が多い</li>
              <li><i class="checkmark icon tj-ranking__itemDescriptionListIcon"></i>第二新卒・未経験歓迎の求人が豊富</li>
              <li><i class="checkmark icon tj-ranking__itemDescriptionListIcon"></i>提携エージェントから求人が紹介されるスカウト機能</li>
            </ul><span class="tj-ranking__itemDescriptionCatch">利用者の声<i class="talk outline icon"></i></span>
            <div class="ui comments tj-ranking__itemDescriptionVoice">
              <div class="comment"><a class="avatar tj-ranking__itemDescriptionVoiceThumb"><img src="/dist/image/wireframes/image.png"></a>
                <div class="content tj-ranking__itemDescriptionVoiceComment"><a class="author">30代 女性 営業職</a>
                  <div class="metadata">
                    <div class="ui star rating" data-rating="4" data-max-rating="5"></div>
                  </div>
                  <div class="text">
                    転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                    前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、その中でもいい印象だったのがリクナビNEXTです...
                  </div>
                </div>
              </div>
              <div class="comment"><a class="avatar tj-ranking__itemDescriptionVoiceThumb"><img src="/dist/image/wireframes/image.png"></a>
                <div class="content tj-ranking__itemDescriptionVoiceComment"><a class="author">20代 男性 販売職</a>
                  <div class="metadata">
                    <div class="ui star rating" data-rating="5" data-max-rating="5"></div>
                  </div>
                  <div class="text">
                    転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                    前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、その中でもいい印象だったのがリクナビNEXTです...
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tj-ranking__itemButtons">
            <button class="ui orange button tj-ranking__itemDetailButton">クチコミ・詳細を見る</button>
            <button class="ui teal button tj-ranking__itemSearchButton">リクナビNEXTの求人を見てみる</button>
          </div>
        </div>
        <div class="tj-ranking__item">
          <h2 class="tj-ranking__itemTitle"><span>第3位</span>リクナビNEXT</h2>
          <div class="ui items">
            <div class="item"><a class="ui small image"><img class="tj-ranking__itemThumb" src="/dist/image/thumb_baitoru.jpg"></a>
              <div class="content">
                <div class="description">
                  <p>転職サイトの代名詞とも言える古くからある大手サイト。9000件以上の求人を掲載し(*2017年3月確認時点)、特に営業職の求人掲載数は他のサイトと比較し 圧倒的に多いです。</p>
                </div>
              </div>
            </div>
          </div>
          <div class="tj-ranking__itemDescription"><span class="tj-ranking__itemDescriptionCatch">ここがポイント<i class="pointing up icon"></i></span>
            <ul class="tj-ranking__itemDescriptionList">
              <li><i class="checkmark icon tj-ranking__itemDescriptionListIcon"></i>他サイトと比べて比較的年収が高めの求人が多い</li>
              <li><i class="checkmark icon tj-ranking__itemDescriptionListIcon"></i>第二新卒・未経験歓迎の求人が豊富</li>
              <li><i class="checkmark icon tj-ranking__itemDescriptionListIcon"></i>提携エージェントから求人が紹介されるスカウト機能</li>
            </ul><span class="tj-ranking__itemDescriptionCatch">利用者の声<i class="talk outline icon"></i></span>
            <div class="ui comments tj-ranking__itemDescriptionVoice">
              <div class="comment"><a class="avatar tj-ranking__itemDescriptionVoiceThumb"><img src="/dist/image/wireframes/image.png"></a>
                <div class="content tj-ranking__itemDescriptionVoiceComment"><a class="author">30代 女性 営業職</a>
                  <div class="metadata">
                    <div class="ui star rating" data-rating="4" data-max-rating="5"></div>
                  </div>
                  <div class="text">
                    転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                    前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、その中でもいい印象だったのがリクナビNEXTです...
                  </div>
                </div>
              </div>
              <div class="comment"><a class="avatar tj-ranking__itemDescriptionVoiceThumb"><img src="/dist/image/wireframes/image.png"></a>
                <div class="content tj-ranking__itemDescriptionVoiceComment"><a class="author">20代 男性 販売職</a>
                  <div class="metadata">
                    <div class="ui star rating" data-rating="5" data-max-rating="5"></div>
                  </div>
                  <div class="text">
                    転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                    前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、その中でもいい印象だったのがリクナビNEXTです...
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tj-ranking__itemButtons">
            <button class="ui orange button tj-ranking__itemDetailButton">クチコミ・詳細を見る</button>
            <button class="ui teal button tj-ranking__itemSearchButton">リクナビNEXTの求人を見てみる</button>
          </div>
        </div>
        <div class="tj-ranking__item">
          <h2 class="tj-ranking__itemTitle"><span>第4位</span>リクナビNEXT</h2>
          <div class="ui items">
            <div class="item"><a class="ui small image"><img class="tj-ranking__itemThumb" src="/dist/image/thumb_hatalike.jpg"></a>
              <div class="content">
                <div class="description">
                  <p>転職サイトの代名詞とも言える古くからある大手サイト。9000件以上の求人を掲載し(*2017年3月確認時点)、特に営業職の求人掲載数は他のサイトと比較し 圧倒的に多いです。</p>
                </div>
              </div>
            </div>
          </div>
          <div class="tj-ranking__itemDescription"><span class="tj-ranking__itemDescriptionCatch">ここがポイント<i class="pointing up icon"></i></span>
            <ul class="tj-ranking__itemDescriptionList">
              <li><i class="checkmark icon tj-ranking__itemDescriptionListIcon"></i>他サイトと比べて比較的年収が高めの求人が多い</li>
              <li><i class="checkmark icon tj-ranking__itemDescriptionListIcon"></i>第二新卒・未経験歓迎の求人が豊富</li>
              <li><i class="checkmark icon tj-ranking__itemDescriptionListIcon"></i>提携エージェントから求人が紹介されるスカウト機能</li>
            </ul><span class="tj-ranking__itemDescriptionCatch">利用者の声<i class="talk outline icon"></i></span>
            <div class="ui comments tj-ranking__itemDescriptionVoice">
              <div class="comment"><a class="avatar tj-ranking__itemDescriptionVoiceThumb"><img src="/dist/image/wireframes/image.png"></a>
                <div class="content tj-ranking__itemDescriptionVoiceComment"><a class="author">30代 女性 営業職</a>
                  <div class="metadata">
                    <div class="ui star rating" data-rating="4" data-max-rating="5"></div>
                  </div>
                  <div class="text">
                    転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                    前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、その中でもいい印象だったのがリクナビNEXTです...
                  </div>
                </div>
              </div>
              <div class="comment"><a class="avatar tj-ranking__itemDescriptionVoiceThumb"><img src="/dist/image/wireframes/image.png"></a>
                <div class="content tj-ranking__itemDescriptionVoiceComment"><a class="author">20代 男性 販売職</a>
                  <div class="metadata">
                    <div class="ui star rating" data-rating="5" data-max-rating="5"></div>
                  </div>
                  <div class="text">
                    転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                    前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、その中でもいい印象だったのがリクナビNEXTです...
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tj-ranking__itemButtons">
            <button class="ui orange button tj-ranking__itemDetailButton">クチコミ・詳細を見る</button>
            <button class="ui teal button tj-ranking__itemSearchButton">リクナビNEXTの求人を見てみる</button>
          </div>
        </div>              
      </div>
      <div class="l-col l-col-lg-4">
        <div class="tj-topSidebar">
          <aside class="tj-otherRankingBnr">
            <h2>専門型サービスのランキングはこちら</h2>
            <div class="tj-otherRankingBnr__item"><a href="#" style="display:block;width: 100%;max-width: 320px;height: 60px;line-height: 60px;background: #dedede;color: #BBB;margin: 0 auto 30px;text-align: center;">女性向け転職サービスランキング</a></div>
            <div class="tj-otherRankingBnr__item"><a href="#" style="display:block;width: 100%;max-width: 320px;height: 60px;line-height: 60px;background: #dedede;color: #BBB;margin: 0 auto 30px;text-align: center;">IT/Web系転職サービスランキング</a></div>
          </aside>
          <aside class="tj-otherRankingBnr">
            <h2>転職エージェントのランキングはこちら</h2>
            <div class="tj-otherRankingBnr__item"><a href="#" style="display:block;width: 100%;max-width: 320px;height: 60px;line-height: 60px;background: #dedede;color: #BBB;margin: 0 auto 30px;text-align: center;">転職エージェント総合ランキング</a></div>
          </aside>
          <aside class="tj-knowhow">
            <h2>転職を考えたら</h2>
            <ul class="tj-knowhow__list">

              @foreach($pages as $page)
              <li class="tj-knowhow__item">
                <a class="tj-knowhow__link" href="{{ $page->guid }}">
                  <img class="tj-knowhow__thumb" src="/dist/image/purpose-thumb-{{ $page->ID }}.jpg" width="55" height="55">
                  <div class="tj-knowhow__lead">
                    <p>{{ $page->post_title }}</p>
                  </div></a></li>
              @endforeach

              @foreach($posts as $post)
              <li class="tj-knowhow__item">
                <a class="tj-knowhow__link" href="{{ $post->link }}">
                  <img class="tj-knowhow__thumb" src="{{ $post->thumb }}" width="55" height="55">
                  <div class="tj-knowhow__lead">
                    <p>{{ $post->title }}</p>
                  </div></a></li>
              @endforeach
            </ul>
          </aside>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
