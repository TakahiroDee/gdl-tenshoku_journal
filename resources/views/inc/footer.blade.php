<footer class="l-footer">
  <div class="l-inner l-footer-logo">
    <div class="c-logo"><a class="c-logo__link" href="/"><img src="/dist/image/journal_logo.png" alt="転職ジャーナル"></a></div>
  </div>
  <div class="l-inner l-row">
    <div class="l-col-lg-9">
      <div class="c-footer">
        <div class="c-footer__item">
          <p class="c-footer__itemHeader"><a href="{{ action('AgentController@index') }}">転職サイト・Agent</a></p>
          <ul>
            <li><a href="{{ action('SiteController@index') }}">転職サイト総合ランキング</a></li>
            <li><a href="{{ action('AgentController@index') }}">転職エージェント総合ランキング</a></li>
            <li><a href="{{ action('ItwebController@index') }}">IT Web系転職サービスランキング</a></li>
            <li><a href="{{ action('WomanController@index') }}">女性向け転職サービスランキング</a></li>
            <li><a href="{{ action('HakenController@index') }}">派遣サイトランキング</a></li>
          </ul>
        </div>
        <div class="c-footer__item">
          <p class="c-footer__itemHeader"><a href="{{ action('SearchController@index') }}">求人をさがす</a></p>
          <ul style="display: flex;">
            <li data-id="footer-searchby-job">
              <p><a href="#">領域・職種からさがす</a></p>
              <ul>
                <li><a href="#">IT・Web系の求人</a></li>
                <li><a href="#">クリエイティブ系の求人</a></li>
                <li><a href="#">バックオフィス系の求人</a></li>
                <li><a href="#">営業の求人</a></li>
                <li><a href="#">医療系の求人</a></li>
                <li><a href="#">飲食系の求人</a></li>
                <li><a href="#">運輸・物流・警備・設備管理の求人</a></li>
                <li><a href="#">介護・福祉・保育の求人</a></li>
                <li><a href="#">企画系の求人</a></li>
                <li><a href="#">教育系の求人</a></li>
                <li><a href="#">金融系の求人</a></li>
                <li><a href="#">不動産・建築・設計・土木の求人</a></li>
                <li><a href="#">販売・サービス系の求人</a></li>
                <li><a href="#">製造・生産・開発・研究職の求人</a></li>
                <li><a href="#">専門職の求人</a></li>
                <li><a href="#">その他</a></li>
              </ul>
            </li>
            <li data-id="footer-searchby-area">
              <p><a href="#">勤務地からさがす</a></p>
              <ul>
                <li><a href="#">北海道の求人</a></li>
                <li><a href="#">東北の求人</a></li>
                <li><a href="#">関東の求人</a></li>
                <li><a href="#">東海の求人</a></li>
                <li><a href="#">北信越の求人</a></li>
                <li><a href="#">関西の求人</a></li>
                <li><a href="#">中国・四国の求人</a></li>
                <li><a href="#">九州・沖縄の求人</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="c-footer__item">
          <p class="c-footer__itemHeader" data-id="footer-knowhow"><a href="/knowhow">転職を考えたら</a></p>
          <p class="c-footer__itemHeader"><a href="#">運営者情報</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>
