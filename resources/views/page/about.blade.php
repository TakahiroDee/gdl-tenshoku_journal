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
  <div class="l-inner">
    <div class="l-col-lg-8" style="margin: 60px auto;">
      <h1 style="color: #666;">転職ジャーナルについて</h1>
      <p>転職ジャーナルは、転職を考えるすべての人向けの情報収集サイトです。転職を意識し始めた人、すでに検討し始めてどのサービスを利用しようか悩んでいる人、実際に求人を検索しはじめている人、どのような人でもお役に立てる情報を届けることを目的としています。</p>
      <p>掲載情報につきましては、適宜取材や調査を行い、正確に最新の情報をお伝えするよう努めておりますが、お気づきの点、もしくは誤りがございましたら、ご連絡くださいますようお願いいたします。<br/>
      特に求人情報につきましては、掲載期間に準じて転載するように努めておりますが、掲載元のWebサイト側都合による、予告なき掲載終了などによって掲載の終了および募集が終了している場合がございます。あらかじめご了承ください。</p>
      <p>掲載情報をご利用いただく場合、お客様の責任においてご利用いただきますようお願いいたします。当サイトでは一切の責任を負いかねますので、ご容赦ください。</p>

      <table class="ui celled striped table" style="margin: 50px 0;">
        <thead>
          <th colspan="3">運営者情報</th>
        </thead>
        <tbody>
          <tr>
            <td>運営元</td>
            <td>G-DesignLab</td>
          </tr>
          <tr>
            <td>連絡先</td>
            <td>hello.gdesignlab@gmail.com</td>
          </tr>
          <tr>
            <td>事業内容</td>
            <td>メディア開発 / Webコンサルティング事業</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
