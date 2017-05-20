$(function(){
  var gnav    = document.querySelector('.l-header__lower');
  var headerH = document.querySelector('.l-header').clientHeight;

  var fixed_nav_bar = () => {
    var scrollTop = window.scrollY;

    if(scrollTop > headerH){
      gnav.classList.add('is-fixed');
      $(gnav).animate({"top" : "0"},'slow');
    }else{
      gnav.classList.remove('is-fixed');
    }
  }

  document.addEventListener('scroll',fixed_nav_bar,false);
});


$(function(){
  let $stuck = $('.tj-searchStuck__content');

  if($stuck.length > 0){
    var stuckOffset = $stuck.offset().top;
  }

  $(window).on('scroll resize',function(){
    // sicky menu
    var st = $(this).scrollTop();

    if(st > stuckOffset && window.innerWidth < 960){
      $stuck.css({'position':'static','width':'100%'});
    }else if(st > stuckOffset){
      if(window.innerWidth >= 960){
        $stuck.css({'position':'fixed','top': gnav.height() + 10 + 'px','width':'333px'});
      }else{
        $stuck.css({'position':'static','width':'100%'});
      }
    }else if(st < stuckOffset){
      $stuck.css({'position':'static','width':'100%'});
    }
  });

  // rating
  $('.ui.rating').rating('disable');
});


$(function(){
  if(navigator.userAgent.indexOf('iPhone') > -1 || navigator.userAgent.indexOf('Android') > -1){
    $('.c-searchModal__tableHead tr th').attr('data-toggle','hidden')
  }

  $(window).on('resize',function(){
    if(window.innerWidth <= 679){
      $('.c-searchModal__tableHead tr th').attr('data-toggle','hidden')
    }else{
      $('.c-searchModal__tableHead tr th').attr('data-toggle','show')
    }
  });
});


$(function(){
  $('.c-searchModal__tableHead').on('click',function(event){

    var currentStatus = event.target.getAttribute('data-toggle');
    if(currentStatus == "show"){
      event.target.setAttribute('data-toggle', "hidden");
      $(this).next().hide('slow');
    }else{
      event.target.setAttribute('data-toggle', "show");
      $(this).next().show('slow');
    }
  });
});



/*
 * @vm_config
 */
document.addEventListener('DOMContentLoaded',()=>{
  /*********************************************
   * SearchPanel Components
   *********************************************/
  Vue.component('search-panel',{
    props : ['selectedJobData','selectedAreaData','keyword'],
    template : `
      <div class="c-searchPanel">
        <table class="ui compact celled definition table">
          <tbody>
            <search-panel-job :JobCodeLists="currentJobCode" v-on:onClickJob="relayData('onClickJob')"></search-panel-job>
            <search-panel-area :AreaCodeLists="currentAreaCode" v-on:onClickArea="relayData('onClickArea')"></search-panel-area>
            <tr>
              <td>キーワード</td>
              <td>
                <div class="ui icon input">
                  <input type="text" placeholder="キーワードを入力してください" v-on:keyup="fillKeyword" v-model="currentKeyword"><i class="search icon"></i>
                </div>
              </td>
            </tr>
          </tbody>
          <tfoot class="full-width">
            <tr>
              <th colspan="12">
                <div class="ui small button grey" v-on:click="allReset">条件をクリア</div>
                <div class="ui small button olive">この条件で検索する</div>
              </th>
            </tr>
          </tfoot>
        </table>
      </div>
    `,
    computed : {
      currentJobCode : function(){
        if(_.isEmpty(this.selectedJobData)){
          return ['選択してください'];
        }else{
          return this.selectedJobData;
        }
      },
      currentAreaCode : function(){
        if(_.isEmpty(this.selectedAreaData)){
          return ['選択してください'];
        }else{
          return this.selectedAreaData;
        }
      },
      currentKeyword : function(){
        return this.keyword;
      }
    },
    methods : {
      relayData(value){
        this.$emit(value);
      },
      allReset(){
        this.$emit('allReset');
      },
      fillKeyword(event){
        let keyword = event.target.value;
        this.$emit('fillKeyword',keyword);
      }
    }
  });

  Vue.component('search-panel-job',{
    props : ['JobCodeLists'],
    template : `
    <tr>
      <td>職種</td>
      <td>
        <button class="ui button" v-on:click="onClickJob">選択する</button>
        <ul class="c-searchPanel__selectedlist">
          <li v-for="item in JobCodeLists">{{ item }}</li>
        </ul>
      </td>
    </tr>
    `,
    methods : {
      onClickJob : function(){
        this.$emit('onClickJob');
      }
    }
  });

  Vue.component('search-panel-area',{
    props : ['AreaCodeLists'],
    template : `
    <tr>
      <td>勤務地</td>
      <td>
        <button class="ui button" v-on:click="onClickArea">選択する</button>
        <ul class="c-searchPanel__selectedlist">
          <li v-for="item in AreaCodeLists">{{ item }}</li>
        </ul>
      </td>
    </tr>
    `,
    methods : {
      onClickArea : function(){
        this.$emit('onClickArea');
      }
    }
  });

  /*********************************************
   * SearchModal Components
   *********************************************/
  Vue.component('search-job-modal',{
    template : `
    <div class="c-modalwrap">
      <div class="ui modal job pc">
        <i class="close icon"></i>
        <div class="header c-searchModal__header">
          希望の職種を入力
        </div>
        <div class="content c-searchModal__content">
          <div class="c-searchModal__tableBox">
            <table class="ui single line table c-searchModal__table">
              <thead class="c-searchModal__tableHead">
                <tr>
                  <th data-toggle="show">営業・企画・マーケティング系</th>
                </tr>
              </thead>
              <tbody class="c-searchModal__tableBody" style="font-weight:normal;">
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_1" v-on:change="selectJob"/>
                      <label for="c_1" class="c-searchModal__tableLabel">法人営業</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_2" v-on:change="selectJob"/>
                      <label for="c_2" class="c-searchModal__tableLabel">個人営業</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_3" v-on:change="selectJob"/>
                      <label for="c_3" class="c-searchModal__tableLabel">よしもと興業</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_4" v-on:change="selectJob"/>
                      <label for="c_4" class="c-searchModal__tableLabel">人力車</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_5" v-on:change="selectJob"/>
                      <label for="c_5" class="c-searchModal__tableLabel">渡辺プロ</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_6" v-on:change="selectJob"/>
                      <label for="c_6" class="c-searchModal__tableLabel">たけし軍団</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_7" v-on:change="selectJob"/>
                      <label for="c_7" class="c-searchModal__tableLabel">大竹まこと</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_8" v-on:change="selectJob"/>
                      <label for="c_8" class="c-searchModal__tableLabel">つんく</label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="ui single line table c-searchModal__table">
              <thead class="c-searchModal__tableHead">
                <tr>
                  <th data-toggle="show">営業・企画・マーケティング系</th>
                </tr>
              </thead>
              <tbody class="c-searchModal__tableBody" style="font-weight:normal;">
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_1" v-on:change="selectJob"/>
                      <label for="c_1" class="c-searchModal__tableLabel">法人営業</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_2" v-on:change="selectJob"/>
                      <label for="c_2" class="c-searchModal__tableLabel">個人営業</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_3" v-on:change="selectJob"/>
                      <label for="c_3" class="c-searchModal__tableLabel">よしもと興業</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_4" v-on:change="selectJob"/>
                      <label for="c_4" class="c-searchModal__tableLabel">人力車</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_5" v-on:change="selectJob"/>
                      <label for="c_5" class="c-searchModal__tableLabel">渡辺プロ</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_6" v-on:change="selectJob"/>
                      <label for="c_6" class="c-searchModal__tableLabel">たけし軍団</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_7" v-on:change="selectJob"/>
                      <label for="c_7" class="c-searchModal__tableLabel">大竹まこと</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_8" v-on:change="selectJob"/>
                      <label for="c_8" class="c-searchModal__tableLabel">つんく</label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="c-searchModal__tableBox">
            <table class="ui single line table c-searchModal__table">
              <thead class="c-searchModal__tableHead">
                <tr>
                  <th data-toggle="show">営業・企画・マーケティング系</th>
                </tr>
              </thead>
              <tbody class="c-searchModal__tableBody" style="font-weight:normal;">
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_1" v-on:change="selectJob"/>
                      <label for="c_1" class="c-searchModal__tableLabel">法人営業</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_2" v-on:change="selectJob"/>
                      <label for="c_2" class="c-searchModal__tableLabel">個人営業</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_3" v-on:change="selectJob"/>
                      <label for="c_3" class="c-searchModal__tableLabel">よしもと興業</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_4" v-on:change="selectJob"/>
                      <label for="c_4" class="c-searchModal__tableLabel">人力車</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_5" v-on:change="selectJob"/>
                      <label for="c_5" class="c-searchModal__tableLabel">渡辺プロ</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_6" v-on:change="selectJob"/>
                      <label for="c_6" class="c-searchModal__tableLabel">たけし軍団</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_7" v-on:change="selectJob"/>
                      <label for="c_7" class="c-searchModal__tableLabel">大竹まこと</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_8" v-on:change="selectJob"/>
                      <label for="c_8" class="c-searchModal__tableLabel">つんく</label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <table class="ui single line table c-searchModal__table">
              <thead class="c-searchModal__tableHead">
                <tr>
                  <th data-toggle="show">営業・企画・マーケティング系</th>
                </tr>
              </thead>
              <tbody class="c-searchModal__tableBody" style="font-weight:normal;">
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_1" v-on:change="selectJob"/>
                      <label for="c_1" class="c-searchModal__tableLabel">法人営業</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_2" v-on:change="selectJob"/>
                      <label for="c_2" class="c-searchModal__tableLabel">個人営業</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_3" v-on:change="selectJob"/>
                      <label for="c_3" class="c-searchModal__tableLabel">よしもと興業</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_4" v-on:change="selectJob"/>
                      <label for="c_4" class="c-searchModal__tableLabel">人力車</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_5" v-on:change="selectJob"/>
                      <label for="c_5" class="c-searchModal__tableLabel">渡辺プロ</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_6" v-on:change="selectJob"/>
                      <label for="c_6" class="c-searchModal__tableLabel">たけし軍団</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_7" v-on:change="selectJob"/>
                      <label for="c_7" class="c-searchModal__tableLabel">大竹まこと</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="ui checkbox">
                      <input type="checkbox" id="c_8" v-on:change="selectJob"/>
                      <label for="c_8" class="c-searchModal__tableLabel">つんく</label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="actions">
          <div class="ui black deny button" v-on:click="clearJob">条件をクリア</div>
          <div class="ui positive right labeled icon button">この条件で登録<i class="checkmark icon"></i></div>
        </div>
      </div>
    </div>
    `,
    methods : {
      selectJob(event){
        let el = event.target.nextElementSibling.innerHTML;
        this.$emit('selectJob',el);
      },
      clearJob(){
        $('.ui.single.table input').prop('checked',false);
        this.$emit('clearJob');
      }
    }
  });


  /*********************************************
   * SearchModal Components
   *********************************************/
  Vue.component('search-area-modal',{
    template : `
    <div class="c-modalwrap">
      <div class="ui modal area pc">
        <i class="close icon"></i>
        <div class="header c-searchModal__header">
          希望の勤務地を入力
        </div>
        <div class="content c-searchModal__content">
          <div class="c-searchModal__tableBox">
            <table class="ui celled striped table c-searchModal__table">
              <tbody class="c-searchModal__tableBody" style="font-weight:normal;">
                <tr>
                  <td class="collapsing">北海道</td>
                  <td>
                    <ul>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_1" v-on:change="selectArea"/>
                        <label for="a_1" class="c-searchModal__tableLabel">北海道</label>
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td class="collapsing">東北</td>
                  <td>
                    <ul>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_2" v-on:change="selectArea"/>
                        <label for="a_2" class="c-searchModal__tableLabel">青森県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_3" v-on:change="selectArea"/>
                        <label for="a_3" class="c-searchModal__tableLabel">岩手県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_4" v-on:change="selectArea"/>
                        <label for="a_4" class="c-searchModal__tableLabel">秋田県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_5" v-on:change="selectArea"/>
                        <label for="a_5" class="c-searchModal__tableLabel">宮城県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_6" v-on:change="selectArea"/>
                        <label for="a_6" class="c-searchModal__tableLabel">山形県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_7" v-on:change="selectArea"/>
                        <label for="a_7" class="c-searchModal__tableLabel">福島県</label>
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td class="collapsing">関東</td>
                  <td>
                    <ul>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_8" v-on:change="selectArea" />
                        <label for="a_8" class="c-searchModal__tableLabel">群馬県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_9" v-on:change="selectArea"/>
                        <label for="a_9" class="c-searchModal__tableLabel">栃木県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_10" v-on:change="selectArea"/>
                        <label for="a_10" class="c-searchModal__tableLabel">茨城県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_11" v-on:change="selectArea"/>
                        <label for="a_11" class="c-searchModal__tableLabel">埼玉県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_12" v-on:change="selectArea"/>
                        <label for="a_12" class="c-searchModal__tableLabel">東京都</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_13" v-on:change="selectArea"/>
                        <label for="a_13" class="c-searchModal__tableLabel">神奈川県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_14" v-on:change="selectArea"/>
                        <label for="a_14" class="c-searchModal__tableLabel">千葉県</label>
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td class="collapsing">東海</td>
                  <td>
                    <ul>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_15" v-on:change="selectArea"/>
                        <label for="a_15" class="c-searchModal__tableLabel">静岡県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_16" v-on:change="selectArea"/>
                        <label for="a_16" class="c-searchModal__tableLabel">愛知県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_17" v-on:change="selectArea"/>
                        <label for="a_17" class="c-searchModal__tableLabel">岐阜県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_18" v-on:change="selectArea"/>
                        <label for="a_18" class="c-searchModal__tableLabel">三重県</label>
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td class="collapsing">北信越</td>
                  <td>
                    <ul>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_19" v-on:change="selectArea"/>
                        <label for="a_19" class="c-searchModal__tableLabel">山梨県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_20" v-on:change="selectArea"/>
                        <label for="a_20" class="c-searchModal__tableLabel">長野県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_21" v-on:change="selectArea"/>
                        <label for="a_21" class="c-searchModal__tableLabel">新潟県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_22" v-on:change="selectArea"/>
                        <label for="a_22" class="c-searchModal__tableLabel">富山県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_23" v-on:change="selectArea"/>
                        <label for="a_23" class="c-searchModal__tableLabel">石川県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_24" v-on:change="selectArea"/>
                        <label for="a_24" class="c-searchModal__tableLabel">福井県</label>
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td class="collapsing">関西</td>
                  <td>
                    <ul>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_25" v-on:change="selectArea"/>
                        <label for="a_25" class="c-searchModal__tableLabel">大阪府</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_26" v-on:change="selectArea"/>
                        <label for="a_26" class="c-searchModal__tableLabel">京都府</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_27" v-on:change="selectArea"/>
                        <label for="a_27" class="c-searchModal__tableLabel">兵庫県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_28" v-on:change="selectArea"/>
                        <label for="a_28" class="c-searchModal__tableLabel">滋賀県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_29" v-on:change="selectArea"/>
                        <label for="a_29" class="c-searchModal__tableLabel">奈良県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_30" v-on:change="selectArea"/>
                        <label for="a_30" class="c-searchModal__tableLabel">和歌山県</label>
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td class="collapsing">中国・四国</td>
                  <td>
                    <ul>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_31" v-on:change="selectArea"/>
                        <label for="a_31" class="c-searchModal__tableLabel">岡山県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_32" v-on:change="selectArea"/>
                        <label for="a_32" class="c-searchModal__tableLabel">鳥取県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_33" v-on:change="selectArea"/>
                        <label for="a_33" class="c-searchModal__tableLabel">島根県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_34" v-on:change="selectArea"/>
                        <label for="a_34" class="c-searchModal__tableLabel">広島県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_35" v-on:change="selectArea"/>
                        <label for="a_35" class="c-searchModal__tableLabel">山口県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_36" v-on:change="selectArea"/>
                        <label for="a_36" class="c-searchModal__tableLabel">香川県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_37" v-on:change="selectArea"/>
                        <label for="a_37" class="c-searchModal__tableLabel">高知県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_38" v-on:change="selectArea"/>
                        <label for="a_38" class="c-searchModal__tableLabel">徳島県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_39" v-on:change="selectArea"/>
                        <label for="a_39" class="c-searchModal__tableLabel">愛媛県</label>
                      </li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td class="collapsing">九州・沖縄</td>
                  <td>
                    <ul>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_40" v-on:change="selectArea"/>
                        <label for="a_40" class="c-searchModal__tableLabel">福岡県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_41" v-on:change="selectArea"/>
                        <label for="a_41" class="c-searchModal__tableLabel">大分県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_42" v-on:change="selectArea"/>
                        <label for="a_42" class="c-searchModal__tableLabel">佐賀県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_43" v-on:change="selectArea"/>
                        <label for="a_43" class="c-searchModal__tableLabel">長崎県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_44" v-on:change="selectArea"/>
                        <label for="a_44" class="c-searchModal__tableLabel">宮崎県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_45" v-on:change="selectArea"/>
                        <label for="a_45" class="c-searchModal__tableLabel">熊本県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_46" v-on:change="selectArea"/>
                        <label for="a_46" class="c-searchModal__tableLabel">鹿児島県</label>
                      </li>
                      <li class="ui checkbox">
                        <input type="checkbox" id="a_47" v-on:change="selectArea"/>
                        <label for="a_47" class="c-searchModal__tableLabel">沖縄県</label>
                      </li>
                    </ul>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="actions">
          <div class="ui black deny button" v-on:click="clearArea">条件をクリア</div>
          <div class="ui positive right labeled icon button">この条件で登録<i class="checkmark icon"></i></div>
        </div>
      </div>
    </div>
    `,
    methods : {
      selectArea(event){
        let el = event.target.nextElementSibling.innerHTML;
        this.$emit('selectArea',el);
      },
      clearArea(){
        $('.ui.striped.table input').prop('checked',false);
        this.$emit('clearArea');
      }
    }
  });

  /*********************************************
   * SearchVueWrap
   *********************************************/
  Vue.component('search-vue-wrap',{
    template : `
      <div style="width:100%;">
        <search-panel @onClickJob="showJobModal" @onClickArea="showAreaModal" @allReset="clearAllCheckList" @fillKeyword="storeKeyword" :selectedJobData="selectedJobArray" :selectedAreaData="selectedAreaArray" :keyword="keyword"></search-panel>
        <search-job-modal @selectJob="storeJobCheckList" @clearJob="clearJobCheckList"></search-job-modal>
        <search-area-modal @selectArea="storeAreaCheckList" @clearArea="clearAreaCheckList"></search-area-modal>
      </div>
    `,
    data() {
      return {
        selectedJobArray : [],
        selectedAreaArray : [],
        keyword : [],
      }
    },
    methods : {
      showJobModal(){
        $('.ui.modal.job.pc').modal('show');
      },
      showAreaModal(){
        $('.ui.modal.area.pc').modal('show');
      },
      storeJobCheckList(value){
        let pos = this.selectedJobArray.indexOf(value);
        if(pos > -1){
          this.selectedJobArray.splice(pos,1);
        }else{
          this.selectedJobArray.push(value);
        }
      },
      storeAreaCheckList(value){
        let pos = this.selectedAreaArray.indexOf(value);
        if(pos > -1){
          this.selectedAreaArray.splice(pos,1);
        }else{
          this.selectedAreaArray.push(value);
        }
      },
      storeKeyword(value){
        this.keyword = [];
        this.keyword.push(value);
      },
      clearJobCheckList(){
        this.selectedJobArray = [];
      },
      clearAreaCheckList(){
        this.selectedAreaArray = [];
      },
      clearAllCheckList(){
        this.selectedJobArray = [];
        this.selectedAreaArray = [];
        this.keyword = [];

        let inputAll = document.querySelectorAll('.ui.modal input');
        for(input of inputAll){
          if(input.checked){
            input.checked = false;
          }
        }
      }
    }
  });

  // vue instance
  let root = new Vue({
    el : '.l-searchPanel'
  });
},false);
