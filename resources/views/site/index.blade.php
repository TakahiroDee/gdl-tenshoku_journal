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
                  <p>リクルートキャリアが運営する言わずと知れた国内最大級の転職サイト。新卒の就職活動では「リクナビ」を使っていたという方も多いのではないでしょうか。
                    そのリクナビの転職者向けサービスが「リクナビNEXT」です。特徴は何と言っても掲載している求人数の数。常時7,000〜8,000件程度の求人が掲載されており、
                    その数は他の転職サイトを寄せ付けません。頻繁に更新される業界やこだわり条件ごとの求人特集や、レジュメ・職務経歴書と一緒にスカウトサービスに登録すると、
                    サイトに非公開の求人が多数オファーの形式で届くのも魅力です。また最近ではフェアなどのイベントにも力を入れており、名古屋・大阪・東京・福岡など
                    主要都市圏で頻繁に転職フェアを開催しています。転職活動を始めるならMUSTでチェックすべきサイトです。</p>
                </div>
              </div>
            </div>
          </div>
          <div class="tj-ranking__itemDescription"><span class="tj-ranking__itemDescriptionCatch">ここがポイント<i class="pointing up icon"></i></span>
            <ul class="tj-ranking__itemDescriptionList">
              <li><i class="checkmark icon tj-ranking__itemDescriptionListIcon"></i>他サイトと比べて圧倒的No.1の求人数なので、選択肢を狭めないためにも登録はマスト！</li>
              <li><i class="checkmark icon tj-ranking__itemDescriptionListIcon"></i>提携エージェントから求人が紹介されるスカウト機能と非公開求人</li>
              <li><i class="checkmark icon tj-ranking__itemDescriptionListIcon"></i>頻繁に開催される転職フェアを通じて、多くの企業と出会える</li>
            </ul><span class="tj-ranking__itemDescriptionCatch">利用者の声<i class="talk outline icon"></i></span>
            <div class="ui comments tj-ranking__itemDescriptionVoice">
              <div class="comment">
                <a class="avatar tj-ranking__itemDescriptionVoiceThumb">
                  <span class="tj-ranking__itemDescriptionVoiceAvatar avatar-30w"></span>
                </a>
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
              <div class="comment">
                <a class="avatar tj-ranking__itemDescriptionVoiceThumb">
                  <span class="tj-ranking__itemDescriptionVoiceAvatar avatar-20m"></span>
                </a>
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
          <h2 class="tj-ranking__itemTitle"><span>第2位</span>@type</h2>
          <div class="ui items">
            <div class="item"><a class="ui small image"><img class="tj-ranking__itemThumb" src="/dist/image/thumb_type.jpg"></a>
              <div class="content">
                <div class="description">
                  <p>山崎育三郎さんのCMでお馴染みの、こちらも最大級の転職サイト@typeです。掲載求人数こそリクナビNEXTには及ばないものの、その分多機能なところが優れています。
                  例えば、営業職に特化した「@type営業の転職」や女性専用の「女の転職@type」など、特定の領域については姉妹サイトとして別に運営されています。
                  自分は特定の職種にしか興味ないという場合には、多くの中から探すよりはすでに欲しいものがまとまったものの中から探す方が効率がいいですよね。
                  また診断に答えて性格の適性から合う求人を教えてくれるパーソナリティマッチング機能や、Facebookメッセンジャーと連携して新着求人を届けてくれる機能など
                  他にはない機能が目白押しです。</p>
                </div>
              </div>
            </div>
          </div>
          <div class="tj-ranking__itemDescription"><span class="tj-ranking__itemDescriptionCatch">ここがポイント<i class="pointing up icon"></i></span>
            <ul class="tj-ranking__itemDescriptionList">
              <li><i class="checkmark icon tj-ranking__itemDescriptionListIcon"></i>職種やテーマに特化した姉妹サイトを利用して求人検索を簡単に</li>
              <li><i class="checkmark icon tj-ranking__itemDescriptionListIcon"></i>様々な切り口で求人を紹介してくれる豊富なレコメンド機能</li>
            </ul><span class="tj-ranking__itemDescriptionCatch">利用者の声<i class="talk outline icon"></i></span>
            <div class="ui comments tj-ranking__itemDescriptionVoice">
              <div class="comment">
                <a class="avatar tj-ranking__itemDescriptionVoiceThumb">
                  <span class="tj-ranking__itemDescriptionVoiceAvatar avatar-30w"></span>
                </a>
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
              <div class="comment">
                <a class="avatar tj-ranking__itemDescriptionVoiceThumb">
                  <span class="tj-ranking__itemDescriptionVoiceAvatar avatar-20m"></span>
                </a>
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
          <h2 class="tj-ranking__itemTitle"><span>第3位</span>バイトルNEXT</h2>
          <div class="ui items">
            <div class="item"><a class="ui small image"><img class="tj-ranking__itemThumb" src="/dist/image/thumb_baitoru.jpg"></a>
              <div class="content">
                <div class="description">
                  <p>バイトルというとバイト探しのサイトを思い浮かべるかもしれませんが、こちらはその中でも正社員求人に特化したサイトです。
                  コンセプトは「バイトやフリーター、未経験から正社員になる」で、その点、販売・アパレル・フード・サービス系や運輸系などの仕事が多いのが特徴です。
                  もちろん営業や事務職などのオフィスワーク系もあります。リクナビNEXTや@typeと比べると東名阪以外の地方の地域の求人も比較的多く掲載されているのが特徴です。
                  リクナビNEXTや@typeだと、地方"でも"募集している求人という形式ですが、バイトルNEXTの場合、地方で"しか"募集していない求人が他サイトより多く見受けられます。
                  ただし求人検索機能が中心ですので、やりたいことが定まっていない、色々な選択肢から探したい方には少し機能不足かもしれません。</p>
                </div>
              </div>
            </div>
          </div>
          <div class="tj-ranking__itemDescription"><span class="tj-ranking__itemDescriptionCatch">ここがポイント<i class="pointing up icon"></i></span>
            <ul class="tj-ranking__itemDescriptionList">
              <li><i class="checkmark icon tj-ranking__itemDescriptionListIcon"></i>未経験から正社員を希望する人は利用マストな転職サイト</li>
              <li><i class="checkmark icon tj-ranking__itemDescriptionListIcon"></i>東名阪以外の地方の求人や、販売・サービス系の求人の掲載数が他のサイトよりも多数</li>
            </ul><span class="tj-ranking__itemDescriptionCatch">利用者の声<i class="talk outline icon"></i></span>
            <div class="ui comments tj-ranking__itemDescriptionVoice">
              <div class="comment">
                <a class="avatar tj-ranking__itemDescriptionVoiceThumb">
                  <span class="tj-ranking__itemDescriptionVoiceAvatar avatar-30w"></span>
                </a>
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
              <div class="comment">
                <a class="avatar tj-ranking__itemDescriptionVoiceThumb">
                  <span class="tj-ranking__itemDescriptionVoiceAvatar avatar-20m"></span>
                </a>
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
          <h2 class="tj-ranking__itemTitle"><span>第4位</span>はたらいく</h2>
          <div class="ui items">
            <div class="item"><a class="ui small image"><img class="tj-ranking__itemThumb" src="/dist/image/thumb_hatalike.jpg"></a>
              <div class="content">
                <div class="description">
                  <p>はたらいくはリクルートジョブズが運営する地域密着型の求人サイトです。バイトルNEXT同様地方の求人が他の転職サイトに比べると多く掲載されています。
                  地元でそのまま働きたい、UIターンしたんという方には必須のサイトです。未経験歓迎の求人も多く、フリーターやバイトから正社員になりたい方や、
                  今の仕事環境を変えて異業種で働きたい方などにも非常に向いているサイトです。また会員限定で「らいく」という機能があり、企業から直接興味があることを応募前に示す、
                  スカウトサービスに近い機能もあります。</p>
                </div>
              </div>
            </div>
          </div>
          <div class="tj-ranking__itemDescription"><span class="tj-ranking__itemDescriptionCatch">ここがポイント<i class="pointing up icon"></i></span>
            <ul class="tj-ranking__itemDescriptionList">
              <li><i class="checkmark icon tj-ranking__itemDescriptionListIcon"></i>地元で働きたい、UIターンしたいといった人のための地域密着型転職サイト</li>
              <li><i class="checkmark icon tj-ranking__itemDescriptionListIcon"></i>スカウト機能に似た独自機能「らいく」を利用して応募前に企業の温度感を知ることができる</li>
            </ul><span class="tj-ranking__itemDescriptionCatch">利用者の声<i class="talk outline icon"></i></span>
            <div class="ui comments tj-ranking__itemDescriptionVoice">
              <div class="comment">
                <a class="avatar tj-ranking__itemDescriptionVoiceThumb">
                  <span class="tj-ranking__itemDescriptionVoiceAvatar avatar-30w"></span>
                </a>
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
              <div class="comment">
                <a class="avatar tj-ranking__itemDescriptionVoiceThumb">
                  <span class="tj-ranking__itemDescriptionVoiceAvatar avatar-20m"></span>
                </a>
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
