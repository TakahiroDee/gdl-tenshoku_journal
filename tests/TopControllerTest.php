<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TopControllerTest extends TestCase
{
    /**     
     * @return void
     */    

    public function testTopController()
    {
    	$base = $this->visit('/');

    	//1.正常に動作しているか (http status) / 404 503ハンドリング
    	$base->assertResponseOK();
    	//2.正常にHTTPメソッドを呼び出せているか (render template)
    	$base->assertResponseStatus(200);
    	//3.インスタンス変数が適切かどうか (assings)
    	$base->assertViewHasAll(['datas','pages','posts']);            
    }

}
