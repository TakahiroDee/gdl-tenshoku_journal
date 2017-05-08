<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Ranking;
use App\Reputation;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('RankingsTableSeeder');
        // $this->call('ReputationsTableSeeder');
        Model::reguard();
    }
}


class RankingsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('rankings')->delete();

        $data = [
          [
            'service_type' => 'site',
            'rank' => 1,
            'service_name' => 'リクナビNEXT',
            'service_eg_name' => 'rikunabi_next',
            'thumbnail_path' => 'tmb_next.jpg',
            'summary' => 'リクルートキャリアが運営する言わずと知れた国内最大級の転職サイト。新卒の就職活動では「リクナビ」を使っていたという方も多いのではないでしょうか。そのリクナビの転職者向けサービスが「リクナビNEXT」です。特徴は何と言っても掲載している求人数の数。常時7,000〜8,000件程度の求人が掲載されており、その数は他の転職サイトを寄せ付けません。頻繁に更新される業界やこだわり条件ごとの求人特集や、レジュメ・職務経歴書と一緒にスカウトサービスに登録すると、サイトに非公開の求人が多数オファーの形式で届くのも魅力です。また最近ではフェアなどのイベントにも力を入れており、名古屋・大阪・東京・福岡など主要都市圏で頻繁に転職フェアを開催しています。転職活動を始めるならMUSTでチェックすべきサイトです。',
            'positive_point1' => '他サイトと比べて圧倒的No.1の求人数なので、選択肢を狭めないためにも登録はマスト！',
            'positive_point2' => '提携エージェントから求人が紹介されるスカウト機能と非公開求人',
            'positive_point3' => '頻繁に開催される転職フェアを通じて、多くの企業と出会える',
            'negative_point1' => 'hoge',
            'description1' => 'hoge',
            'link' => 'http://example.com',
          ],
          [
            'service_type' => 'site',
            'rank' => 2,
            'service_name' => '@type',
            'service_eg_name' => 'at_type',
            'thumbnail_path' => 'tmb_type.jpg',
            'summary' => '山崎育三郎さんのCMでお馴染みの、こちらも最大級の転職サイト@typeです。掲載求人数こそリクナビNEXTには及ばないものの、その分多機能なところが優れています。例えば、営業職に特化した「@type営業の転職」や女性専用の「女の転職@type」など、特定の領域については姉妹サイトとして別に運営されています。自分は特定の職種にしか興味ないという場合には、多くの中から探すよりはすでに欲しいものがまとまったものの中から探す方が効率がいいですよね。また診断に答えて性格の適性から合う求人を教えてくれるパーソナリティマッチング機能や、Facebookメッセンジャーと連携して新着求人を届けてくれる機能など他にはない機能が目白押しです。',
            'positive_point1' => '職種やテーマに特化した姉妹サイトを利用して求人検索を簡単に',
            'positive_point2' => '様々な切り口で求人を紹介してくれる豊富なレコメンド機能',
            'positive_point3' => null,
            'negative_point1' => 'hoge',
            'description1' => 'hoge',
            'link' => 'http://example.com',
          ],
          [
            'service_type' => 'site',
            'rank' => 3,
            'service_name' => 'バイトルNEXT',
            'service_eg_name' => 'baitoru_next',
            'thumbnail_path' => 'tmb_baitoru.jpg',
            'summary' => 'バイトルというとバイト探しのサイトを思い浮かべるかもしれませんが、こちらはその中でも正社員求人に特化したサイトです。コンセプトは「バイトやフリーター、未経験から正社員になる」で、その点、販売・アパレル・フード・サービス系や運輸系などの仕事が多いのが特徴です。もちろん営業や事務職などのオフィスワーク系もあります。リクナビNEXTや@typeと比べると東名阪以外の地方の地域の求人も比較的多く掲載されているのが特徴です。リクナビNEXTや@typeだと、地方"でも"募集している求人という形式ですが、バイトルNEXTの場合、地方で"しか"募集していない求人が他サイトより多く見受けられます。ただし求人検索機能が中心ですので、やりたいことが定まっていない、色々な選択肢から探したい方には少し機能不足かもしれません。',
            'positive_point1' => '未経験から正社員を希望する人は利用マストな転職サイト',
            'positive_point2' => '東名阪以外の地方の求人や、販売・サービス系の求人の掲載数が他のサイトよりも多数',
            'positive_point3' => null,
            'negative_point1' => 'hoge',
            'description1' => 'hoge',
            'link' => 'http://example.com',
          ],
          [
            'service_type' => 'site',
            'rank' => 4,
            'service_name' => 'はたらいく',
            'service_eg_name' => 'hatalike',
            'thumbnail_path' => 'tmb_hatalike.jpg',
            'summary' => 'はたらいくはリクルートジョブズが運営する地域密着型の求人サイトです。バイトルNEXT同様地方の求人が他の転職サイトに比べると多く掲載されています。地元でそのまま働きたい、UIターンしたんという方には必須のサイトです。未経験歓迎の求人も多く、フリーターやバイトから正社員になりたい方や、今の仕事環境を変えて異業種で働きたい方などにも非常に向いているサイトです。また会員限定で「らいく」という機能があり、企業から直接興味があることを応募前に示す、スカウトサービスに近い機能もあります。',
            'positive_point1' => '地元で働きたい、UIターンしたいといった人のための地域密着型転職サイト',
            'positive_point2' => 'スカウト機能に似た独自機能「らいく」を利用して応募前に企業の温度感を知ることができる',
            'positive_point3' => null,
            'negative_point1' => 'hoge',
            'description1' => 'hoge',
            'link' => 'http://example.com',
          ],
        ];

        for($i = 0; $i < count($data); $i++){
          Ranking::create([
            'service_type'    => $data[$i]['service_type'],
            'rank'            => $data[$i]['rank'],
            'service_name'    => $data[$i]['service_name'],
            'service_eg_name' => $data[$i]['service_eg_name'],          
            'thumbnail_path'  => $data[$i]['thumbnail_path'],
            'summary'         => $data[$i]['summary'],
            'positive_point1' => $data[$i]['positive_point1'],
            'positive_point2' => $data[$i]['positive_point2'],
            'positive_point3' => $data[$i]['positive_point3'],
            'negative_point1' => $data[$i]['negative_point1'],
            'description1'    => $data[$i]['description1'],
            'link'            => $data[$i]['link'],
          ]);
        }

    }
}



class ReputationsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('reputations')->delete();

        $comments = [
            '始めの面談時に持参した職務経歴書・履歴書について修正指導をしてくれた点や、こちらの希望をじっくり聞いてくれた上でキャリア指導をしてくれたので、サポート体制はしっかりしていました。 また、実際に面接が決まると、その会社の面接の傾向を事前に教えてくれ、その対応方法などもアドバイスしてくれたので、一人で転職活動をするより転職エージェントを利用していてよかったと心の底から思えました。',
            '志望先が外資系で、特殊な面接をする業界だったため不安が大きかったが、過去の面接質問例を頂いたり、実際に電話で練習に付き合ってくれたりと、本当によくして頂きました。担当者は外資系には詳しくなかったものの、社内にいる詳しいコンサルタントの方を連れてきてくれました。熱心さは他社に比べ物にならないです。',
            '結果的に転職は成功したが、先方への面接日時設定メールの送り忘れが生じていたことには愕然とした。担当コンサルタントが若いorあまりに忙しそうな場合は、重要な依頼ごとはこちらからチェックすることが必要。',
            'どうしても入社したい企業があり、それだけを目的にリクルートエージェントに登録しました。1回落ちてしまい途方にくれてましたが、担当コンサルタントの方が同企業の別部署配置を交渉してくれ、再度1次面接から再スタートして内定を頂きました。職務経歴書や面接対策は期待していたほどではなかったのが正直なところですが、特別なケースなのかもしれませんがこの交渉だけでも本当にありがたかったです。',
            '求人の量自体は多く、幅広く探すことが出来た。しかし似たり寄ったりな案件が多かったように感じる。サポート面だと、メールの連絡が遅い時があった。年収交渉や希望の交渉が上手くいっていなかった。ただし、面接対応はしっかりと対策してもらえたので結果的に良いが、内定承諾書の通知が遅れたこと、先方に遅く届いたことについてはそもそも社会人としてどうかと思った。',
            '担当者にもよると思いますが、内定が出た後、とにかく早く入社するようにと促がされた点が気になりました。その分、企業にも内定出しを迫ってくれたのでトータルでは感謝していますが、積極的すぎて自分のペースでやりたい人にはおすすめしにくいです。',
            'エージェントも紹介して報酬を得ているので、たまに営業っぽさが出てることもあり、全てが親身かというと、そうでもない印象を感じた。内定から入社までのクロージングがきつく、最後は重要な判断なので落ち着いて判断をさせてほしかった。先方企業の意向と内定承諾締め切りがあるから仕方ないのでしょうが。',
            '自分の希望を大体汲み取ってくれます。担当エージェントの力量にもよるのですが、自分の行きたい企業や業種と希望を明確に伝えれば、理想に近い企業を提示してくれます。また、自分の理想と違う企業を提案してもらった際にも、なぜその企業がいいのか？説明を求めればちゃんと説明してくれます。私の場合、優秀なエージェントがついてくれたお陰か悪い点はさほど無かったです。',
            '求人の量は業界No1とうたっている通り圧倒的です。自分の希望する業界で、理想に近い企業を発見することができます。企業情報もページを閲覧しただけで大体分かる感じに情報が乗っているので、質も高い方だと思います。一番いい点は、オファーメールのシステムです。重要度によってオファーメールがランク分けされており、中には社長面談確約オファーなどもあり、自分が本当に求められているのかどうなのかが分かりやすいです。そして、そのオファーメールを指標に、その企業へ入社できる確率も何となく分かって転職活動を有利に進められます。悪い点は、オファーメールが多くなると目移りして、中々企業を絞り込めなくなってしまう点です。いくつかの企業はやはり好条件だったりするので、そういった会社からオファーが来ると迷いまくります。',
            '始めの面談時に持参した職務経歴書・履歴書について修正指導をしてくれた点や、こちらの希望をじっくり聞いてくれた上でキャリア指導をしてくれたので、サポート体制はしっかりしていました。また、実際に面接が決まると、その会社の面接の傾向を事前に教えてくれ、その対応方法などもアドバイスしてくれたので、一人で転職活動をするより転職エージェントを利用していてよかったと心の底から思えました。そして、最後の企業との給与条件面での調整も、エージェントが間に入って交渉してくれたので、スムーズにいきました。最初から最後まで連絡体制は万全で、いつでも連絡が取れる状態であった点も、大手ならではで素晴らしいなという好印象を持ちました。',
            'キャリア相談に乗ってもらい、適確なアドバイスや他に自分と似たような事例のことも教えてくれて助かりました。また、企業によっては面接の際にアピールした方がいい点や自分なら何を武器に面接に挑んだ方がいいか？客観的なアドバイスが役に立ちました。ただ、ついてくれたエージェントが優秀だっただけかもしれませんが、そういったエージェントをつければ、転職を有利に進められることは間違いないです。'
          ];
        $avatar_thumbnails = ['human_avatar_20_m.png','human_avatar_20_w.png','human_avatar_30_m.png','human_avatar_30_w.png','human_avatar_40_m.png','human_avatar_40_w.png'];
        $ages              = ['20代前半','20代後半','30代前半','30代後半','40代前半','40代後半'];
        $genders           = ['男性','女性'];
        $jobs              = ['人材系営業職','販売・サービス職','専門職・コンサルタント','公務員・団体職員','広告業界','社内SE','エンジニア'];
        $service_names     = ['リクナビNEXT','@type','バイトルNEXT','はたらいく'];
        $dt                = Carbon::now();

        for($i = 0; $i < count($service_names); $i++){
          for($k = 0; $k < 10; $k++){
            Reputation::create([
              'avatar_thumbnail_path' => $avatar_thumbnails[mt_rand(0,count($avatar_thumbnails) - 1)],
              'age'                   => $ages[mt_rand(0,count($ages) - 1)],
              'gender'                => $genders[$i % count($genders)],
              'rating'                => mt_rand(0,5),
              'comment'               => $comments[mt_rand(0,count($comments) - 1)],
              'job'                   => $jobs[mt_rand(0,count($jobs) - 1)],
              'service_name'          => $service_names[$i],
              'virtual_created_date'  => $dt->subMonth(mt_rand(0,6)),
            ]);
          }
        }

    }
}
