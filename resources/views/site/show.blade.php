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
          <a class="section" href="{{ action('SiteController@index') }}">転職サイト総合ランキング</a>
          <i class="right angle icon divider"></i>
          <span>{{ $ranking->service_name }}の評判・口コミ</span></div>
      </div>
    </div>
  </div>
  <div class="l-inner l-row">
    <main class="l-col-lg-8">
      <div class="l-main_lf_1">
        <article class="c-detail">
          <h1><span>第{{ $ranking->rank }}位</span>{{ $ranking->service_name }} の評判・口コミ</h1>
          <div class="c-block ui items">
            <div class="item">
              <div class="ui small image"><img src="/dist/image/{{ $ranking->thumbnail_path }}"></div>
              <div class="content">
                <div class="description">
                  <p>
                    {{ $ranking->summary }}
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="ui ordered list">
            <a class="item" href="#bs-1">{{ $ranking->service_name }}のメリットと口コミ</a>
            <a class="item" href="#bs-2">{{ $ranking->service_name }}のデメリットと口コミ</a>
            <a class="item" href="#bs-3">掲載している求人について</a>
            <a class="item" href="#bs-4">総論・どういう人におすすめか</a></div>
          <section>
            <div class="c-block">
              <h2 class="c-block__subheader" id="bs-1">1.{{ $ranking->service_name }}のメリットと口コミ</h2>
              <div class="c-block__section">
                <h3 class="c-block__thirdheader">{{ $ranking->service_name }}のメリット<i class="thumbs up icon"></i></h3>
                <p>リクルートエージェントの場合、まずは初回の面談ヒアリングがとても特徴的です。</p>
                <p>多くの転職エージェントは、概ね「給与」や「職種」、「勤務地」などの情報を聞いたらあとはとりあえず求人を片っ端から見せるようなスタンスを取ることが多いですが、 リクルートエージェントの場合はより具体的に今の会社のどういったところが不満に思っているのか、将来的にどういった志向を持っているか（あくまで現時点で）、といった定性的な背景を重視する 傾向にあります。</p>
                <p>求人数自体は他社と比べて圧倒的に多い自負があるからでしょう、「給与」や「職種」といった大前提な条件以外に、転職者の方が 実際に入社した際にその企業の風土や会社の志向に合うかどうかなどを踏まえて提案するために、細かいヒアリングを積み重ねます。その中で別の企業や業界の方が 向いている可能性があると感じれば、転職者本人が気づいていなかった選択肢についても提示してくれるなど、本当にプロのコンサルタントとしての提案が特徴です （もちろん担当する転職エージェントによって程度の差はありますので100%の保証ではありません）。</p>
                <p>またリクルートエージェントの特徴的なスタンスとして キャリアアドバイザーから見て、その転職者の方にとって現時点で転職がベストな選択肢でない場合、転職そのものを無理に進めないという一貫したポリシーがあります。 転職は必ずしも、良い結果を産むわけではないのでその転職者にとって今の企業に残ることが提案する求人の企業と比べてベストならそれをはっきりと伝えるようです。</p>
              </div>
              <div class="c-block__section">
                <h3 class="c-block__thirdheader">{{ $ranking->service_name }}利用者の声<i class="talk outline icon"></i></h3>
                <div class="ui comments c-voices">
                  <div class="ui raised segment">
                    <div class="comment c-voice">
                      <div class="c-voice__author"><a class="avatar c-voice__avatar"><span class="c-voice__avatar30w"></span></a>
                        <div class="content c-voice__meta"><span class="author">30代 女性 営業職</span>
                          <div class="metadata">
                            <div class="ui star rating disabled" data-rating="4" data-max-rating="5"></div>
                          </div>
                        </div>
                      </div>
                      <div class="content c-voice__comment">
                        <div class="text">
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです/
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです/
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ui comments c-voices">
                  <div class="ui raised segment">
                    <div class="comment c-voice">
                      <div class="c-voice__author"><a class="avatar c-voice__avatar"><span class="c-voice__avatar30w"></span></a>
                        <div class="content c-voice__meta"><span class="author">30代 女性 営業職</span>
                          <div class="metadata">
                            <div class="ui star rating disabled" data-rating="4" data-max-rating="5"></div>
                          </div>
                        </div>
                      </div>
                      <div class="content c-voice__comment">
                        <div class="text">
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです/
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです/
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ui comments c-voices">
                  <div class="ui raised segment">
                    <div class="comment c-voice">
                      <div class="c-voice__author"><a class="avatar c-voice__avatar"><span class="c-voice__avatar30w"></span></a>
                        <div class="content c-voice__meta"><span class="author">30代 女性 営業職</span>
                          <div class="metadata">
                            <div class="ui star rating disabled" data-rating="4" data-max-rating="5"></div>
                          </div>
                        </div>
                      </div>
                      <div class="content c-voice__comment">
                        <div class="text">
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです/
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです/
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="c-block__section">
                <h3 class="c-block__thirdheader">{{ $ranking->service_name }}のメリットまとめ<i class="pointing up icon"></i></h3>
                <div class="ui celled list">
                  <div class="item"><i class="checkmark icon"></i><span>17万件という業界最大規模の取り扱い求人数(*)</span></div>
                  <div class="item"><i class="checkmark icon"></i><span>30万人の転職成功者実績という圧倒的な安心感</span></div>
                  <div class="item"><i class="checkmark icon"></i><span>きめ細やかな面談・ヒアリングとそれにもとづく求人の提案力</span></div>
                </div>
              </div>
              <div class="c-double__buttons">
                <button class="ui orange button c-button"><a href="{{ $ranking->link }}">{{ $ranking->service_name }}へ登録</a></button>
                <button class="ui teal button c-button"><a href="#">{{ $ranking->service_name }}の求人をみる  </a></button>
              </div>
              <h2 class="c-block__subheader" id="bs-2">2.{{ $ranking->service_name }}のデメリットと口コミ</h2>
              <div class="c-block__section">
                <h3 class="c-block__thirdheader">{{ $ranking->service_name }}のデメリット<i class="thumbs down icon"></i></h3>
                <p>リクルートエージェントのネガティブな側面としては、担当者によるサポート力の差が挙げられます。</p>
                <p>これはそもそも他社と比べてキャリアアドバイザーの母数が多いと言うことの裏返しなのでしょうが、ベテランのアドバイザーと新人のアドバイザーでは差はかなり出るようです。 例えば、企業への応募やキャリアアドバイザーへの相談の連絡の素早さや、求人提案時の細かな対応力などはどうしても差は出てくるようです（とはいえこれはリクルートエージェントに限ったことともいえませんが）。                    </p>
                <p>ただし、リクルートエージェントでは、こういったキャリアアドバイザーの対応に不満を感じた場合、サポートセンターに問い合わせ担当者のチェンジもできるようです。 あまりにもひどい場合はそういった選択肢も含めて利用してみるといいでしょう。</p>
              </div>
              <div class="c-block__section">
                <h3 class="c-block__thirdheader">{{ $ranking->service_name }}利用者の声<i class="talk outline icon"></i></h3>
                <div class="ui comments c-voices">
                  <div class="ui raised segment">
                    <div class="comment c-voice">
                      <div class="c-voice__author"><a class="avatar c-voice__avatar"><span class="c-voice__avatar30w"></span></a>
                        <div class="content c-voice__meta"><span class="author">30代 女性 営業職</span>
                          <div class="metadata">
                            <div class="ui star rating disabled" data-rating="4" data-max-rating="5"></div>
                          </div>
                        </div>
                      </div>
                      <div class="content c-voice__comment">
                        <div class="text">
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです/
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです/
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ui comments c-voices">
                  <div class="ui raised segment">
                    <div class="comment c-voice">
                      <div class="c-voice__author"><a class="avatar c-voice__avatar"><span class="c-voice__avatar30w"></span></a>
                        <div class="content c-voice__meta"><span class="author">30代 女性 営業職</span>
                          <div class="metadata">
                            <div class="ui star rating disabled" data-rating="4" data-max-rating="5"></div>
                          </div>
                        </div>
                      </div>
                      <div class="content c-voice__comment">
                        <div class="text">
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです/
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです/
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ui comments c-voices">
                  <div class="ui raised segment">
                    <div class="comment c-voice">
                      <div class="c-voice__author"><a class="avatar c-voice__avatar"><span class="c-voice__avatar30w"></span></a>
                        <div class="content c-voice__meta"><span class="author">30代 女性 営業職</span>
                          <div class="metadata">
                            <div class="ui star rating disabled" data-rating="4" data-max-rating="5"></div>
                          </div>
                        </div>
                      </div>
                      <div class="content c-voice__comment">
                        <div class="text">
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです/
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです/
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="c-block__section">
                <h3 class="c-block__thirdheader">{{ $ranking->service_name }}のデメリットまとめ<i class="pointing up icon"></i></h3>
                <div class="ui celled list">
                  <div class="item"><i class="checkmark icon"></i><span>17万件という業界最大規模の取り扱い求人数(*)</span></div>
                  <div class="item"><i class="checkmark icon"></i><span>30万人の転職成功者実績という圧倒的な安心感</span></div>
                  <div class="item"><i class="checkmark icon"></i><span>きめ細やかな面談・ヒアリングとそれにもとづく求人の提案力</span></div>
                </div>
              </div>
              <div class="c-double__buttons">
                <button class="ui orange button c-button"><a href="{{ $ranking->link }}">{{ $ranking->service_name }}へ登録</a></button>
                <button class="ui teal button c-button"><a href="#">{{ $ranking->service_name }}の求人をみる  </a></button>
              </div>
              <h2 class="c-block__subheader" id="bs-3">3.掲載している求人について</h2>
              <div class="c-block__section">
                <p>リクルートエージェントの取り扱う求人は実に幅広く、各職種の求人が満遍なく掲載されています。ああああああああああああああああああ</p>
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
                      <td>16%                            </td>
                    </tr>
                    <tr>
                      <td>事務・管理職</td>
                      <td>7,893</td>
                      <td>24%                            </td>
                    </tr>
                    <tr>
                      <td>営業職</td>
                      <td>8,098</td>
                      <td>16%                            </td>
                    </tr>
                    <tr>
                      <td>事務・管理職</td>
                      <td>7,893</td>
                      <td>24%                            </td>
                    </tr>
                    <tr>
                      <td>営業職</td>
                      <td>8,098</td>
                      <td>16%                            </td>
                    </tr>
                    <tr>
                      <td>事務・管理職</td>
                      <td>7,893</td>
                      <td>24%                            </td>
                    </tr>
                    <tr>
                      <td>営業職</td>
                      <td>8,098</td>
                      <td>16%                            </td>
                    </tr>
                    <tr>
                      <td>事務・管理職</td>
                      <td>7,893</td>
                      <td>24%                            </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <h2 class="c-block__subheader" id="bs-4">4.総論・どう言う人におすすめか</h2>
              <div class="c-block__section">
                <p>総合評価で1位、案件の質・量で1位、また転職エージェントでは間違いなく実績No.1ですので、転職を検討するすべての方におすすめです。</p>
                <p>
                  しかし、担当者の当たり外れが多かったりと、『リクルートエージェント』 1社だけを利用して転職活動をするのはおすすめできません。
                  転職活動をする際は、『リクルートエージェント』のデメリットを補いつつ、併用するとメリットがあるエージェントを併用すると良いでしょう。
                  下記4社から、追加で2社ほど利用すれば万全です。
                </p>
                <p>
                  95%の人が同時に併用する総合エージェント｜DODA
                  転職が初めての方、手厚いサポートを求める方｜パソナキャリア
                  年収が最低でも500万を超えるハイキャリアの方｜JACリクルートメント
                  外資案件を含めて検討したい方でJACが合わなかった人｜アデコ
                  業種によっては専門性にかけるという口コミも多々見受けられるため、専門性に満足できなかった場合、下記業界別に特化型のエージェントを併用すると良いでしょう。
                </p>
                <p>※『JACリクルートメント』は業界特化型エージェントではないのですが、「海外」「外資」「管理職」の転職では明らかにトップエージェントで圧倒的な実績ですので、あえて重ねて紹介をしております。</p>
                <div class="c-double__buttons">
                  <button class="ui orange button c-button"><a href="{{ $ranking->link }}">{{ $ranking->service_name }}へ登録</a></button>
                  <button class="ui teal button c-button"><a href="#">{{ $ranking->service_name }}の求人をみる </a></button>
                </div>
              </div>
              <div class="c-block__section" id="bs-5">
                <p>その他の口コミ一覧</p>
                <div class="ui comments c-voices">
                  <div class="ui raised segment">
                    <div class="comment c-voice">
                      <div class="c-voice__author"><a class="avatar c-voice__avatar"><span class="c-voice__avatar30w"></span></a>
                        <div class="content c-voice__meta"><span class="author">30代 女性 営業職</span>
                          <div class="metadata">
                            <div class="ui star rating disabled" data-rating="4" data-max-rating="5"></div>
                          </div>
                        </div>
                      </div>
                      <div class="content c-voice__comment">
                        <div class="text">
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです/
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです/
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ui comments c-voices">
                  <div class="ui raised segment">
                    <div class="comment c-voice">
                      <div class="c-voice__author"><a class="avatar c-voice__avatar"><span class="c-voice__avatar30w"></span></a>
                        <div class="content c-voice__meta"><span class="author">30代 女性 営業職</span>
                          <div class="metadata">
                            <div class="ui star rating disabled" data-rating="4" data-max-rating="5"></div>
                          </div>
                        </div>
                      </div>
                      <div class="content c-voice__comment">
                        <div class="text">
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです/
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです/
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ui comments c-voices">
                  <div class="ui raised segment">
                    <div class="comment c-voice">
                      <div class="c-voice__author"><a class="avatar c-voice__avatar"><span class="c-voice__avatar30w"></span></a>
                        <div class="content c-voice__meta"><span class="author">30代 女性 営業職</span>
                          <div class="metadata">
                            <div class="ui star rating disabled" data-rating="4" data-max-rating="5"></div>
                          </div>
                        </div>
                      </div>
                      <div class="content c-voice__comment">
                        <div class="text">
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです/
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです/
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ui comments c-voices">
                  <div class="ui raised segment">
                    <div class="comment c-voice">
                      <div class="c-voice__author"><a class="avatar c-voice__avatar"><span class="c-voice__avatar30w"></span></a>
                        <div class="content c-voice__meta"><span class="author">30代 女性 営業職</span>
                          <div class="metadata">
                            <div class="ui star rating disabled" data-rating="4" data-max-rating="5"></div>
                          </div>
                        </div>
                      </div>
                      <div class="content c-voice__comment">
                        <div class="text">
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです/
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです/
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ui comments c-voices">
                  <div class="ui raised segment">
                    <div class="comment c-voice">
                      <div class="c-voice__author"><a class="avatar c-voice__avatar"><span class="c-voice__avatar30w"></span></a>
                        <div class="content c-voice__meta"><span class="author">30代 女性 営業職</span>
                          <div class="metadata">
                            <div class="ui star rating disabled" data-rating="4" data-max-rating="5"></div>
                          </div>
                        </div>
                      </div>
                      <div class="content c-voice__comment">
                        <div class="text">
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです/
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです/
                          転職しようと思い初めに登録したサービスがリクナビNEXTでした。
                          前職では総務部におり、人事を兼務で中途採用の広告を出した経験もあり、
                          その中でもいい印象だったのがリクナビNEXTです
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </article>
      </div>
    </main>
    <div class="l-col-lg-4">
      <div class="l-aside">
        <aside class="l-aside_rg_1">
          <div class="c-othersite">
            <h2>専門型サービスのランキングはこちら</h2>
            <div class="c-othersite__item c-othersite__woman"><a class="c-othersite__link" href="#">女性向け転職サービスランキング</a></div>
            <div class="c-othersite__item c-othersite__itweb"><a class="c-othersite__link" href="#">IT/Web系転職サービスランキング</a></div>
            <h2>転職エージェントのランキングはこちら</h2>
            <div class="c-othersite__item c-othersite__agent"><a class="c-othersite__link" href="#">転職エージェント総合ランキング</a></div>
          </div>
        </aside>
        <aside class="l-aside_rg_2">
          <div class="c-knowhow">
            <h2>タイプ別転職成功ノウハウ</h2>
            <ul class="c-knowhow__list">

              @foreach($pages as $page)
              <li class="c-knowhow__item"><a class="c-knowhow__link" href="{{ $page->guid }}"><img class="c-knowhow__thumb" src="/dist/image/feature-{{ $page->ID }}.jpg" width="55" height="55">
                  <p class="c-knowhow__lead">{{ $page->post_title }}</p></a></li>
              @endforeach

            </ul>
          </div>
          <div class="c-knowhow">
            <h2>転職を考えたら</h2>
            <ul class="c-knowhow__list">

              @foreach($posts as $post)
              <li class="c-knowhow__item"><a class="c-knowhow__link" href="{{ $post->link }}"><img class="c-knowhow__thumb" src="{{ $post->thumb }}" width="55" height="55">
                  <p class="c-knowhow__lead">{{ $post->title }}</p></a></li>
              @endforeach

            </ul>
          </div>
        </aside>
      </div>
    </div>
  </div>
</div>
@endsection
