@extends('layout.layout')

@section('title')
@endsection

{{-- meta keyword for this page --}}
@section('meta-keyword','転職、求人、転職サイト、転職エージェント、口コミ、評判')

{{-- meta description for this page --}}
@section('meta-description','転職ジャーナルは、転職を検討し始めたすべての人向けのライフスタイルマガジンです。自分にあった転職サイト・転職エージェントの選び方や、
各転職サービスが掲載している求人を比較して、自分にあったサービスを見つけることができます。')

{{-- l-wrapper's id --}}
@section('page-id','p-top')

@section('content')
<div class="l-main">
  <div class="l-inner l-row">
    <main class="l-col-lg-8">
      <div class="l-main_lf_1">
        <div class="c-pickup l-row l-md-row">
          <a class="c-pickup__item c-pickup__site l-col-lg-6 l-col-md-6" href="{{ action('RankingController@siteIndex') }}">
            <p class="c-pickup__title">結局どのサイトがいいの？みんなのクチコミから選ぶ、転職サイト総合ランキング</p>
          </a>
          <a class="c-pickup__item c-pickup__agent l-col-lg-6 l-col-md-6" href="{{ action('RankingController@agentIndex') }}">
            <p class="c-pickup__title">評判・口コミで選ぶ！転職エージェント徹底比較ランキング</p>
          </a>
        </div>
      </div>
      <div class="l-main_lf_2">
        <div class="c-feature">
          <h2 class="l-section_title">タイプ・目的別に転職サービスをさがす</h2>

          @forelse($pages as $page)
          <article class="ui items c-feature__item">
            <a class="item c-feature__link content" href="{{ make_relative_path($page->guid) }}">
              <div class="image c-feature__thumb">
                <span data-thumbnail-ID="{{ $page->ID }}"></span>
              </div>
              <section class="c-feature__contentBox">
                <header class="c-feature__head">
                  <h1 class="c-feature__lead">{{ $page->post_title }}</h1>
                </header>
                <p class="description c-feature__excerpt">
                  {{ $page->headline }}
                </p>
              </section>
            </a>
          </article>
          @empty
          @endforelse

        </div>
      </div>
      <div class="l-main_lf_3">
        <h2 class="l-section_title">転職サイト / 転職エージェント徹底比較ランキング</h2>
        <div class="ui items c-ranking__item">
          <a class="item c-ranking__link content" href="{{ action('RankingController@siteIndex') }}">
            <div class="c-ranking__thumb c-ranking__site"></div>
            <div class="c-ranking__contentBox">
              <h3 class="c-ranking__lead">みんなが選ぶ、転職サイトランキング</h3>
              <p class="c-ranking__excerpt">転職サイトなんてどこも同じ。そう思っていませんか？職種や年齢によって向いている転職サイトはさまざま。 あなたのタイプに応じてピッタリの転職サイトが見つかります。</p>
            </div>
          </a>
        </div>
        <div class="ui items c-ranking__item">
          <a class="item c-ranking__link content" href="{{ action('RankingController@agentIndex') }}">
            <div class="c-ranking__thumb c-ranking__agent"></div>
            <div class="c-ranking__contentBox">
              <h3 class="c-ranking__lead">決定版！転職エージェントランキング</h3>
              <p class="c-ranking__excerpt">転職エージェントというとスキルが高い人、ヘッドハンティングされるような人が利用するものだと思っていませんか？ 実は利用者だけでいえば、若手や第二新卒の人が最も多く一般的なものなのです。まずはどんな転職エージェントがあるのか調べてみましょう。</p>
            </div>
          </a>
        </div>
        <div class="ui items c-ranking__item">
          <a class="item c-ranking__link content" href="{{ action('RankingController@itwebIndex') }}">
            <div class="c-ranking__thumb c-ranking__itweb"></div>
            <div class="c-ranking__contentBox">
              <h3 class="c-ranking__lead">IT系転職サイト・エージェントランキング</h3>
              <p class="c-ranking__excerpt">Webプロデューサー・プランナー・ディレクター・Webデザイナー・UI/UXデザイナー・ Webエンジニア・アプリケーションエンジニア・SE・インフラエンジニア・Webマーケター向け転職サイト・エージェントランキングです。</p>
            </div>
          </a>
        </div>
        <div class="ui items c-ranking__item">
          <a class="item c-ranking__link content" href="{{ action('RankingController@womanIndex') }}">
            <div class="c-ranking__thumb c-ranking__woman"></div>
            <div class="c-ranking__contentBox">
              <h3 class="c-ranking__lead">女性向け転職サービスランキング</h3>
              <p class="c-ranking__excerpt">働き方の多様性や女性の社会進出が叫ばれる中、どうやって仕事を続けていけばいいのか不安になることもありますよね。バリバリ仕事を続けていきたいキャリアタイプの方、
              家庭と仕事を両立したいタイプの方にも合う女性向け転職サービスランキングです。</p>
            </div>
          </a>
        </div>
        <!-- <div class="ui items c-ranking__item">
          <a class="item c-ranking__link content" href="#">
            <div class="c-ranking__thumb c-ranking__haken"></div>
            <div class="c-ranking__contentBox">
              <h3 class="c-ranking__lead">派遣サイトランキング</h3>
              <p class="c-ranking__excerpt">仕事もほどほどにやりながら、プライベートを両方充実させたいという方なら派遣で働くというのも一つの手です。 ここでは複数ある派遣サイトを目的に合わせてどのように使い分けるべきか、お伝えします。</p>
            </div>
          </a>
        </div> -->

      </div>
      <div class="l-main_lf_4">
        <div class="c-search">
          <h2 class="l-section_title">掲載している求人から転職サービスをさがす</h2>
          <div class="l-search_by l-search_by_work">
            <h3>領域・職種からさがす</h3>
            <div class="c-search__list">
              <div class="l-row l-md-row is-sp">
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__itweb" href="/search/job/itweb"><span class="c-search__meta u-p2em">IT / Web</span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__creative" href="/search/job/creative"><span class="c-search__meta u-p2em">クリエイティブ</span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__bkoffice" href="/search/job/backoffice"><span class="c-search__meta u-p05em">バックオフィス<br><small>一般/専門事務・総務・財務・経理・法務・人事など</small></span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__sales" href="/search/job/sales"><span class="c-search__meta u-p2em">営業</span></a></div>
              </div>
              <div class="l-row l-md-row is-sp">
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__medical" href="/search/job/medical"><span class="c-search__meta u-p2em">医療</span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__food" href="/search/job/food"><span class="c-search__meta u-p2em">飲食</span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__logi" href="/search/job/logi_security"><span class="c-search__meta u-p1em">運輸・物流<br>警備・設備管理</span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__care" href="/search/job/welfare"><span class="c-search__meta u-p2em">介護・福祉・保育</span></a></div>
              </div>
              <div class="l-row l-md-row is-sp">
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__marke" href="/search/job/marketing"><span class="c-search__meta u-p05em">企画<br><small>経営・事業・商品企画<br>マーケティング、管理職</small></span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__edu" href="/search/job/education"><span class="c-search__meta u-p2em">教育</span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__finance" href="/search/job/finance"><span class="c-search__meta u-p2em">金融                        </span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__estate" href="/search/job/realestate"><span class="c-search__meta u-p1em">不動産・建築<br>設計・土木</span></a></div>
              </div>
              <div class="l-row l-md-row is-sp">
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__service" href="/search/job/service"><span class="c-search__meta u-p2em">販売・サービス</span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__prod" href="/search/job/manufacturering"><span class="c-search__meta u-p1em">製造・生産<br>開発・研究職</span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__prof" href="/search/job/profession"><span class="c-search__meta u-p1em">専門職<br><small>コンサルタント・士業等</small></span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__other" href="/search/job/other"><span class="c-search__meta u-p2em">その他</span></a></div>
              </div>
            </div>
          </div>
          <div class="l-search_by l-search_by_area">
            <h3>勤務地からさがす</h3>
            <div class="c-search__list">
              <div class="l-row l-md-row is-sp">
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__hokkaido" href="/search/area/hokkaido"><span class="c-search__meta u-p2em">北海道</span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__tohoku" href="/search/area/tohoku"><span class="c-search__meta u-p2em">東北</span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__kanto" href="/search/area/kanto"><span class="c-search__meta u-p2em">関東</span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__tokai" href="/search/area/tokai"><span class="c-search__meta u-p2em">東海</span></a></div>
              </div>
              <div class="l-row l-md-row is-sp">
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__hokushin" href="/search/area/hokushinetsu"><span class="c-search__meta u-p2em">北信越</span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__kansai" href="/search/area/kansai"><span class="c-search__meta u-p2em">関西</span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__chushikoku" href="/search/area/chugokuShikoku"><span class="c-search__meta u-p2em">中国・四国</span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__kyushu" href="/search/area/kyushu"><span class="c-search__meta u-p2em">九州・沖縄</span></a></div>
              </div>
            </div>
          </div>
          <div class="l-search_by l-search_by_service">
            <h3>サービス名からさがす</h3>
            <div class="c-search__list">
              <div class="l-row l-md-row is-sp">
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__baitoru" href="/search/service/baitoru_next"><span class="c-search__meta u-p2em"></span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__hatalike" href="/search/service/hatalike"><span class="c-search__meta u-p2em"></span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__mynabi" href="/search/service/mynabi_agent"><span class="c-search__meta u-p2em"></span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__next" href="/search/service/rikunabi_next"><span class="c-search__meta u-p2em"></span></a></div>
              </div>
              <div class="l-row l-md-row is-sp">
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__rag" href="/search/service/recruit_agent"><span class="c-search__meta u-p2em"></span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__tora" href="/search/service/torabayu"><span class="c-search__meta u-p2em"></span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__type" href="/search/service/at_type"><span class="c-search__meta u-p2em"></span></a></div>
                <div class="c-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="c-search__link c-search__wkpt" href="/search/service/workport"><span class="c-search__meta u-p2em"></span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div class="l-col-lg-4">
      <div class="l-aside">
        <aside class="ui card c-newarrival l-aside_rg_1">
          <div class="content">
            <div class="header c-newarrival__title">{{ today() }}現在の新着・更新求人</div>
          </div>
          <div class="content"><span class="ui sub header c-newarrival__logo is-{{ $datas['results'][0]->sitename }}"></span>
            <div class="ui small feed">
              <div class="event">
                <div class="content">
                  <div class="summary">
                    <ul class="c-newarrival__list">                      
                      @forelse($datas['results'] as $result)
                      <li class="c-newarrival__item">
                        <a class="c-newarrival__link" href="{{ action('SearchController@showByJobCode',[$result->pathname, $result->job_code_full, $result->rqmt_id]) }}">{{ trim(preg_replace('/株式会社/','',$result->cmpny_name)) }}</a>
                      </li>
                      @empty
                      <li></li>
                      @endforelse
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="extra content">
            <p>現在サイトに掲載中の求人数<span class="c-newarrival__count">{{ number_format($datas['counts']) }}</span>件<br><span class="c-newarrival__updatedat">最終更新日
                <time datetime="{{ $datas['last_update'] }}">{{ $datas['last_update'] }}</time></span></p>
          </div>
        </aside>
        <aside class="l-aside_rg_2">
          <div class="c-knowhow">
            <h2>転職を考えたら</h2>
            <ul class="c-knowhow__list">

              @forelse($posts as $post)
              <li class="c-knowhow__item">
                <a class="c-knowhow__link" href="{{ make_relative_path($post->link) }}">
                  <img class="c-knowhow__thumb" src="{{ make_relative_path($post->thumb) }}" width="70" height="55" alt="{{ $post->title }}">
                  <p class="c-knowhow__lead">{{ $post->title }}</p>
                </a>
              </li>
              @empty
              <li></li>
              @endforelse

            </ul>
          </div>
        </aside>
        <aside class="l-aside_rg_3">
          <div class="c-about">
            <h2>このサイトについて</h2>
            <p class="c-about__content">
              転職ジャーナルは、転職を考えるすべての人向けの情報収集サイトです。転職を意識し始めた人、
              すでに検討し始めて どのサービスを利用しようか悩んでいる人、実際に求人を検索しはじめている人、
              どのような人でもお役に立てる情報を届けることを目的としています。 転職を意識し始めたばかりの
              方はぜひ、転職ノウハウをお読みになり自分と似たような環境の人がどのように悩みを解決しているのかを、
              参考になさってください。すでに検討して、どのサービスを利用しようか悩んでいる方については、
              各転職サイト・転職エージェントのランキングや クチコミから自分にあった転職サービスはどれなのかを
              調べてみることから始めましょう。大手だから、有名だからという理由で片っ端から登録しても、
              そこに本当に自分にあった求人が掲載されておらず、希望するものに出会えない場合があります。
              転職サイトであれば複数登録すればすむ話ですが、 転職エージェントですとエージェントへの希望や
              条件の伝え方を間違うと、かえってこんなはずではなかったというような結果になってしまう場合が
              あります。 このサイトでは、各転職サイト・転職エージェントが掲載している求人の一部を転載して
              いますので、このサイト上で実際に求人を検索していただき、 自分の希望に近い求人が多いサイトかを
              確かめた上で、比較・吟味し登録いただくこともできます。 最後に、すでに実際に求人を検索し
              はじめている方については、ぜひ本サイトで複数のサイトの求人を横断で検索して、希望に近い求人を
              さがしてみてください。 各求人には、各サイトへのリンクも合わせて記載しておりますので、気になる求人には、
              そのまま直接リンクして応募していただくことも可能です。 どんな理由であれ、転職を考えるすべての人が、
              求める情報に出会え希望の求人が見つかることができるようになることを目指して、このサイトは運営されています.
            </p>
          </div>
        </aside>
      </div>
    </div>
  </div>
</div>
@endsection
