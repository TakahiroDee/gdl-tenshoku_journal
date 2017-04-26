@extends('layout.layout')

@section('title')
@endsection
@section('content')
<div class="l-main" id="page-top">
  <div class="l-inner l-row">
    <div class="l-col l-col-lg-8">
      <div class="l-pickup">
        <div class="tj-pickup l-row l-md-row">
          <div class="tj-pickup__item l-col-lg-6 l-col-md-6">
            <p class="tj-pickup__lead"><a class="tj-pickup__link" href="{{ action('SiteController@index' )}}">結局どのサイトがいいの？みんなのクチコミから選ぶ、転職サイト総合ランキング</a></p>
          </div>
          <div class="tj-pickup__item l-col-lg-6 l-col-md-6">
            <p class="tj-pickup__lead"><a class="tj-pickup__link" href="#">
                結局どのサイトがいいの？みんなのクチコミから選ぶ、転職サイト総合ランキング
                </a></p>
          </div>
        </div>
      </div>
      <div class="l-articles">
        <div class="ui items tj-articles">
          <h2 class="tj-articles__lead">タイプ・目的別に転職サービスをさがす</h2>

          @foreach($pages as $page)
          <article class="item tj-articles__cassette">
            <div class="image tj-articles__thumb">
              <img src="/dist/image/purpose-thumb-{{ $page->ID }}.jpg">
            </div>
            <section class="tj-articles__section content"><a class="content tj-articles__link" href="{{ $page->guid }}">
                <h1 class="header tj-articles__title">{{ $page->post_title }}</h1>
                <p class="description tj-articles__excerpt">
                  {{ $page->headline }}
                </p></a></section>
          </article>
          @endforeach

        </div>
      </div>
      <div class="tj-ranking">
        <h2 class="tj-ranking__lead">転職サイト / 転職エージェント徹底比較ランキング</h2>
        <article class="tj-ranking__item l-row">
          <div class="tj-ranking__thumb l-col"></div>
          <section class="tj-ranking__section l-col"><a class="tj-ranking__link" href="{{ action('SiteController@index' )}}">
              <h1 class="tj-ranking__title">みんなが選ぶ、転職サイトランキング</h1>
              <p class="tj-ranking__excerpt">
                転職サイトなんてどこも同じ。そう思っていませんか？職種や年齢によって向いている転職サイトはさまざま。
                あなたのタイプに応じてピッタリの転職サイトが見つかります。
              </p></a></section>
        </article>
        <article class="tj-ranking__item l-row">
          <div class="tj-ranking__thumb l-col"></div>
          <section class="tj-ranking__section l-col"><a class="tj-ranking__link" href="#">
              <h1 class="tj-ranking__title">決定版！転職エージェントランキング</h1>
              <p class="tj-ranking__excerpt">
                転職エージェントってスキルが高い人、ヘッドハンティングされるような人がつかうものだと思っていませんか？
                実は利用者だけでいえば、若手や第二新卒の人が多くもっと身近なものなんです。まずは調べてみませんか。
              </p></a></section>
        </article>
        <article class="tj-ranking__item l-row">
          <div class="tj-ranking__thumb l-col"></div>
          <section class="tj-ranking__section l-col"><a class="tj-ranking__link" href="#">
              <h1 class="tj-ranking__title">IT系転職サイト・エージェントランキング</h1>
              <p class="tj-ranking__excerpt">
                Webプロデューサー・プランナー・ディレクター・Webデザイナー・UI/UXデザイナー・
                Webエンジニア・アプリケーションエンジニア・SE・インフラエンジニア・Webマーケター向け転職サイト・エージェントランキングです。
              </p></a></section>
        </article>
        <article class="tj-ranking__item l-row">
          <div class="tj-ranking__thumb l-col"></div>
          <section class="tj-ranking__section l-col"><a class="tj-ranking__link" href="#">
              <h1 class="tj-ranking__title">派遣サイトランキング</h1>
              <p class="tj-ranking__excerpt">
                仕事もほどほどにやりながら、プライベートを両方充実させたいという方なら派遣で働くというのも一つの手です。
                ここでは複数ある派遣サイトを目的に合わせてどのように使い分けるべきか、お伝えします。
              </p></a></section>
        </article>
        <!--
        <article class="tj-ranking__item l-row">
          <div class="tj-ranking__thumb l-col">Dummy</div>
          <section class="tj-ranking__section l-col"><a class="tj-ranking__link" href="#">
              <h1 class="tj-ranking__title">看護師転職エージェントランキング</h1></h1>
              <p class="tj-ranking__excerpt">
                看護師の転職といえば、直接病院に問い合わせたり、ハローワークの利用が一般的ですが、
                場合によっては転職エージェントを利用したほうが目的にあった病院を探せることができます。それはどのような場合でしょうか？</p>
              </p></a></section>
        </article>
        <article class="tj-ranking__item l-row">
          <div class="tj-ranking__thumb l-col">Dummy</div>
          <section class="tj-ranking__section l-col"><a class="tj-ranking__link" href="#">
              <h1 class="tj-ranking__title">薬剤師転職エージェントランキング</h1>
              <p class="tj-ranking__excerpt">
                Hogehoge

              </p></a></section>
        </article>
        -->
      </div>
      <div class="tj-search">
        <h2 class="tj-search__lead">掲載している求人から転職サービスをさがす</h2>
        <h3>領域・職種からさがす</h3>
        <ul class="tj-search__menu tj-search__work">
          <div class="l-row l-md-row">
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__itweb" href="#"><span class="u-p2em">IT / Web</span></a></li>
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__creative" href="#"><span class="u-p2em">クリエイティブ</span></a></li>
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__bkoffice" href="#"><span class="u-p05em">バックオフィス<br><small>一般/専門事務・総務・財務・経理・法務・人事など</small></span></a></li>
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__sales" href="#"><span class="u-p2em">営業</span></a></li>
          </div>
          <div class="l-row l-md-row">
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__medical" href="#"><span class="u-p2em">医療</span></a></li>
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__food" href="#"><span class="u-p2em">飲食</span></a></li>
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__logi" href="#"><span class="u-p1em">運輸・物流<br>警備・設備管理</span></a></li>
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__care" href="#"><span class="u-p2em">介護・福祉・保育</span></a></li>
          </div>
          <div class="l-row l-md-row">
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__planner" href="#">
              <span class="u-p05em">企画<br><small>経営・事業・商品企画 <br>マーケティング、管理職</small></span></a></li>
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__edu" href="#"><span class="u-p2em">教育</span></a></li>
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__finance" href="#"><span class="u-p2em">金融</span></a></li>
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__estate" href="#"><span class="u-p1em">不動産・建築<br>設計・土木</span></a></li>
          </div>
          <div class="l-row l-md-row">
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__service" href="#"><span class="u-p2em">販売・サービス</span></a></li>
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__prod" href="#"><span class="u-p1em">製造・生産<br>開発・研究職</span></a></li>
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__prof" href="#"><span class="u-p1em">専門職<br><small>コンサルタント、士業等</small></span></a></li>
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__other" href="#"><span class="u-p2em">その他</span></a></li>
          </div>
        </ul>
        <h3>勤務地からさがす</h3>
        <ul class="tj-search__menu tj-search__area">
          <div class="l-row l-md-row">
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__hokkaido" href="#"><span class="u-p2em">北海道</span></a></li>
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__tohoku" href="#"><span class="u-p2em">東北</span></a></li>
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__kanto" href="#"><span class="u-p2em">関東</span></a></li>
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__tokai" href="#"><span class="u-p2em">東海</span></a></li>
          </div>
          <div class="l-row l-md-row">
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__hokushin" href="#"><span class="u-p2em">北信越</span></a></li>
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__kansai" href="#"><span class="u-p2em">関西</span></a></li>
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__chushikoku" href="#"><span class="u-p2em">中国・四国</span></a></li>
            <li class="tj-search__item l-col-lg-3 l-col-md-3 u-ml13"><a class="tj-search__link tj-search__kyushu" href="#"><span class="u-p2em">九州・沖縄</span></a></li>
          </div>
        </ul>
      </div>
    </div>
    <div class="l-col l-col-lg-4">
      <div class="tj-topSidebar">
        <div class="ui card tj-newarrival">
          <div class="content">
            <div class="header tj-newarrival__lead">今週の新着・更新求人特集</div>
          </div>
          <div class="content">
            <h4 class="ui sub header tj-newarrival__logo">リクナビNEXT</h4>
            <div class="ui small feed">
              <div class="event">
                <div class="content">
                  <div class="summary"><a class="tj-newarrival__link" href="#">
                      <ul class="tj-newarrival__list">
                        <li class="tj-newarrival__item">三井住友信託銀行</li>
                        <li class="tj-newarrival__item">アミューズ</li>
                        <li class="tj-newarrival__item">本田技研工業</li>
                        <li class="tj-newarrival__item">アマゾン ウェブ サービス ジャパン</li>
                        <li class="tj-newarrival__item">博報堂</li>
                        <li class="tj-newarrival__item">アメリカン・エキスプレス・ジャパン</li>
                        <li class="tj-newarrival__item">順天堂大学</li>
                        <li class="tj-newarrival__item">日本アイビーエム・ソリューション・サービス</li>
                        <li class="tj-newarrival__item">積水化学工業</li>
                        <li class="tj-newarrival__item">日本オラクル</li>
                        <li class="tj-newarrival__item">丸紅新電力</li>
                        <li class="tj-newarrival__item">サイバー・コミュニケーションズ</li>
                        <li class="tj-newarrival__item">他</li>
                      </ul></a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="extra content">
            <p>現在サイトに掲載中の求人数<span class="tj-newarrival__crntcount">90,889</span>件<br><span class="tj-newarrival__updatedat">*最終更新日 2017.02.27</span></p>
          </div>
        </div>
        <aside class="tj-knowhow">
          <h2>転職を考えたら</h2>
          <ul class="tj-knowhow__list">

            @foreach($posts as $post)
            <li class="tj-knowhow__item"><a class="tj-knowhow__link" href="{{ $post->link }}"><img class="tj-knowhow__thumb" src="{{ $post->thumb }}" width="55" height="55">
                <div class="tj-knowhow__lead">
                  <p>{{ $post->title }}</p>
                </div></a></li>
            @endforeach

          </ul>
        </aside>
        <aside class="tj-about">
          <h2>このサイトについて</h2>
          <p class="tj-about__content">
            転職ジャーナルは、転職を考えるすべての人向けの情報収集サイトです。転職を意識し始めた人、すでに検討し始めて
            どのサービスを利用しようか悩んでいる人、実際に求人を検索しはじめている人、どのような人でもお役に立てる情報を届けることを目的としています。
            転職を意識し始めたばかりの方はぜひ、転職ノウハウをお読みになり自分と似たような環境の人がどのように悩みを解決しているのかを、
            参考になさってください。すでに検討して、どのサービスを利用しようか悩んでいる方については、各転職サイト・転職エージェントのランキングや
            クチコミから自分にあった転職サービスはどれなのかを調べてみることから始めましょう。大手だから、有名だからという理由で片っ端から登録しても、
            そこに本当に自分にあった求人が掲載されておらず、希望するものに出会えない場合があります。転職サイトであれば複数登録すればすむ話ですが、
            転職エージェントですとエージェントへの希望や条件の伝え方を間違うと、かえってこんなはずではなかったというような結果になってしまう場合があります。
            このサイトでは、各転職サイト・転職エージェントが掲載している求人の一部を転載していますので、このサイト上で実際に求人を検索していただき、
            自分の希望に近い求人が多いサイトかを確かめた上で、比較・吟味し登録いただくこともできます。
            最後に、すでに実際に求人を検索しはじめている方については、ぜひ本サイトで複数のサイトの求人を横断で検索して、希望に近い求人をさがしてみてください。
            各求人には、各サイトへのリンクも合わせて記載しておりますので、気になる求人には、そのまま直接リンクして応募していただくことも可能です。
            どんな理由であれ、転職を考えるすべての人が、求める情報に出会え希望の求人が見つかることができるようになることを目指して、このサイトは運営されています.
          </p>
        </aside>
      </div>
    </div>
  </div>
</div>
@endsection
