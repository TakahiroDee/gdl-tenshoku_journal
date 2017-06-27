<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RankingControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetSite()    
    {
    	// 1.正常に動作しているか (http status)　* メソッド数 / 404 503ハンドリング
    	$this->visit('/ranking/site')->assertResponseOK();
		// 2.view has 何らかの値　（dataインスタンスで判断）
		$this->visit('/ranking/site')->see('結局どのサイトがいいの？みんなの口コミから選ぶ転職サイト総合ランキング');		
		// 3.service typeがあっているか
		$this->visit('/ranking/site')->see('リクナビNEXT');
		// 4.公開フラグのものしか表示されないか
		// 5.WPデータ取得テスト
		$this->visit('/ranking/site')->assertViewHasAll(['pages','posts']);
		// 6.口コミが適切かどうか
		// 7.口コミ取得のprivateメソッドが意図するデータを返すか
    }
    public function testGetAgent()
    {
    	// 1.正常に動作しているか (http status)　* メソッド数 / 404 503ハンドリング
    	$this->visit('/ranking/agent')->assertResponseOK();
		// 2.view has 何らかの値　（dataインスタンスで判断）
		$this->visit('/ranking/agent')->see('評判・口コミで選ぶ！転職エージェント徹底比較ランキング');		
		// 3.service typeがあっているか
		$this->visit('/ranking/agent')->see('リクルートエージェント');
		// 4.公開フラグのものしか表示されないか
		// 5.WPデータ取得テスト
		$this->visit('/ranking/agent')->assertViewHasAll(['pages','posts']);
		// 6.口コミが適切かどうか
		// 7.口コミ取得のprivateメソッドが意図するデータを返すか
    }
    public function testGetWoman()
    {
    	// 1.正常に動作しているか (http status)　* メソッド数 / 404 503ハンドリング
    	$this->visit('/ranking/woman')->assertResponseOK();
		// 2.view has 何らかの値　（dataインスタンスで判断）
		$this->visit('/ranking/woman')->see('女性向け転職サイト・転職エージェント総合ランキング');
		// 3.service typeがあっているか
		$this->visit('/ranking/woman')->see('とらばーゆ');
		// 4.公開フラグのものしか表示されないか
		// 5.WPデータ取得テスト
		$this->visit('/ranking/woman')->assertViewHasAll(['pages','posts']);
		// 6.口コミが適切かどうか
		// 7.口コミ取得のprivateメソッドが意図するデータを返すか
    }
    public function testGetItweb()
    {
    	// 1.正常に動作しているか (http status)　* メソッド数 / 404 503ハンドリング
    	$this->visit('/ranking/itweb')->assertResponseOK();
		// 2.view has 何らかの値　（dataインスタンスで判断）
		$this->visit('/ranking/itweb')->see('ITWeb系転職サイト・エージェントランキング');
		// 3.service typeがあっているか
		$this->visit('/ranking/itweb')->see('Find Job');
		// 4.公開フラグのものしか表示されないか
		// 5.WPデータ取得テスト
		$this->visit('/ranking/itweb')->assertViewHasAll(['pages','posts']);
		// 6.口コミが適切かどうか
		// 7.口コミ取得のprivateメソッドが意図するデータを返すか
    }
    public function testGetHaken()
    {
    	// 1.正常に動作しているか (http status)　* メソッド数 / 404 503ハンドリング
    	$this->visit('/ranking/haken')->assertResponseOK();
		// 2.view has 何らかの値　（dataインスタンスで判断）
		$this->visit('/ranking/haken')->see('登録はここで決まり！派遣サイトおすすめランキング');
		// 3.service typeがあっているか
		$this->visit('/ranking/haken')->see('リクナビ派遣');
		// 4.公開フラグのものしか表示されないか
		// 5.WPデータ取得テスト
		$this->visit('/ranking/haken')->assertViewHasAll(['pages','posts']);
		// 6.口コミが適切かどうか
		// 7.口コミ取得のprivateメソッドが意図するデータを返すか
    }
    
}
