/*
 * @vm_config
 */
var vm_config = (function(){
  /*----------config----------*/
  let i,tr,trtags,table_dom,
      search_modal_pc,search_modal_sp,
      isSmartphone;

  /*-------PC template---------*/
  tr = `
    <tr>
      <td>
        <div class="ui checkbox">
          <input type="checkbox" id="c_1"/>
          <label for="c_1" class="t-searchModal__tableLabel">法人営業</label>
        </div>
      </td>
    </tr>`;

  trtags = '';
  //- duplicate tr tags -
  for(i = 0; i < 9; i++){
    trtags += tr
  }

  table_dom = `
    <table class="ui single line table t-searchModal__table">
      <thead class="t-searchModal__tableHead">
        <tr>
          <th>営業・企画・マーケティング系</th>
        </tr>
      </thead>
      <tbody class="t-searchModal__tableBody" style="font-weight:normal;">`
      + trtags +
      `</tbody>
    </table>`;

  search_modal_pc =`
    <div class="ui modal">
      <i class="close icon"></i>
      <div class="header tj-searchModal__header">
        希望の職種を入力
      </div>
      <div class="content tj-searchModal__content">
        <div class="t-searchModal__tableBox">`
          + table_dom + table_dom +
        `</div>
        <div class="t-searchModal__tableBox">`
          + table_dom + table_dom +
        `</div>
      </div>
      <div class="actions">
        <div class="ui black deny button">条件をクリア</div>
        <div class="ui positive right labeled icon button">この条件で登録<i class="checkmark icon"></i></div>
      </div>
    </div>`;

  /*-------SP template---------*/
  search_modal_sp = `
  <div class="test-modal" style="background: rgba(0,0,0,0.7);position: absolute;top:0;left:0;width: 100%;padding-top:12.0rem;padding-left:3%;padding-right:3%;box-sizing:border-box;z-index:2;display:none;">
    <span style="color:#FFF;font-size:2.4rem;display:block;text-align:right;padding-bottom:0.7em;">×</span>
    <table style="font-size:1.2rem;width:100%;background:#FFF;border:1px solid rgba(34, 36, 38, 0.15);border-radius:0.28571429rem;border-collapse:separate;border-spacing:0px;position:relative;">
      <thead style="text-align:left;">
        <tr>
          <th style="padding:0.92857143em 0.78571429em;background:#FFF;font-weight: normal;">職種を選択</th>
        </tr>
      </thead>
      <tbody style="verticla-align:middle;">
        <tr>
          <td style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
            <p data-target="job_1" style="margin:0;">営業・企画・マーケティング系<i class="caret down icon"></i></p>
            <ul style="padding-top:0.92857143em;display:none;"class="job_1">
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_1_1"/><label for="c_1_1" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_1_2"/><label for="c_1_2" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_1_3"/><label for="c_1_3" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_1_4"/><label for="c_1_4" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_1_5"/><label for="c_1_5" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_1_6"/><label for="c_1_6" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_1_7"/><label for="c_1_7" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_1_8"/><label for="c_1_8" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="text-align: right;border-top:1px solid rgba(34, 36, 38, 0.1);padding:1.5em 0;">
                <div class="ui black deny button" style="padding:1.0rem;display:inline-block;">条件をクリア</div>
                <div class="ui positive right labeled icon button" style="padding:1.0rem;display:inline-block;">この条件で検索<i class="checkmark icon"></i></div>
              </li>
            </ul>
          </td>
        </tr>
        <tr>
          <td style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
            <p data-target="job_2" style="margin:0;">営業・企画・マーケティング系<i class="caret down icon"></i></p>
            <ul style="padding-top:0.92857143em;display:none;"class="job_2">
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_2_1"/><label for="c_2_1" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_2_2"/><label for="c_2_2" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_2_3"/><label for="c_2_3" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_2_4"/><label for="c_2_4" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_2_5"/><label for="c_2_5" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_2_6"/><label for="c_2_6" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_2_7"/><label for="c_2_7" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_2_8"/><label for="c_2_8" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="text-align: right;border-top:1px solid rgba(34, 36, 38, 0.1);padding:1.5em 0;">
                <div class="ui black deny button" style="padding:1.0rem;display:inline-block;">条件をクリア</div>
                <div class="ui positive right labeled icon button" style="padding:1.0rem;display:inline-block;">この条件で検索<i class="checkmark icon"></i></div>
              </li>
            </ul>
          </td>
        </tr>
        <tr>
          <td style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
            <p data-target="job_3" style="margin:0;">営業・企画・マーケティング系<i class="caret down icon"></i></p>
            <ul style="padding-top:0.92857143em;display:none;"class="job_3">
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_3_1"/><label for="c_3_1" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_3_2"/><label for="c_3_2" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_3_3"/><label for="c_3_3" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_3_4"/><label for="c_3_4" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_3_5"/><label for="c_3_5" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_3_6"/><label for="c_3_6" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_3_7"/><label for="c_3_7" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_3_8"/><label for="c_3_8" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="text-align: right;border-top:1px solid rgba(34, 36, 38, 0.1);padding:1.5em 0;">
                <div class="ui black deny button" style="padding:1.0rem;display:inline-block;">条件をクリア</div>
                <div class="ui positive right labeled icon button" style="padding:1.0rem;display:inline-block;">この条件で検索<i class="checkmark icon"></i></div>
              </li>
            </ul>
          </td>
        </tr>
        <tr>
          <td style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
            <p data-target="job_4" style="margin:0;">営業・企画・マーケティング系<i class="caret down icon"></i></p>
            <ul style="padding-top:0.92857143em;display:none;"class="job_4">
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_4_1"/><label for="c_4_1" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_4_2"/><label for="c_4_2" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_4_3"/><label for="c_4_3" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_4_4"/><label for="c_4_4" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_4_5"/><label for="c_4_5" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_4_6"/><label for="c_4_6" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_4_7"/><label for="c_4_7" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_4_8"/><label for="c_4_8" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="text-align: right;border-top:1px solid rgba(34, 36, 38, 0.1);padding:1.5em 0;">
                <div class="ui black deny button" style="padding:1.0rem;display:inline-block;">条件をクリア</div>
                <div class="ui positive right labeled icon button" style="padding:1.0rem;display:inline-block;">この条件で検索<i class="checkmark icon"></i></div>
              </li>
            </ul>
          </td>
        </tr>
        <tr>
          <td style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
            <p data-target="job_5" style="margin:0;">営業・企画・マーケティング系<i class="caret down icon"></i></p>
            <ul style="padding-top:0.92857143em;display:none;"class="job_5">
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_5_1"/><label for="c_5_1" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_5_2"/><label for="c_5_2" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_5_3"/><label for="c_5_3" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_5_4"/><label for="c_5_4" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_5_5"/><label for="c_5_5" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_5_6"/><label for="c_5_6" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_5_7"/><label for="c_5_7" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_5_8"/><label for="c_5_8" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="text-align: right;border-top:1px solid rgba(34, 36, 38, 0.1);padding:1.5em 0;">
                <div class="ui black deny button" style="padding:1.0rem;display:inline-block;">条件をクリア</div>
                <div class="ui positive right labeled icon button" style="padding:1.0rem;display:inline-block;">この条件で検索<i class="checkmark icon"></i></div>
              </li>
            </ul>
          </td>
        </tr>
        <tr>
          <td style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
            <p data-target="job_6" style="margin:0;">営業・企画・マーケティング系<i class="caret down icon"></i></p>
            <ul style="padding-top:0.92857143em;display:none;"class="job_6">
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_6_1"/><label for="c_6_1" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_6_2"/><label for="c_6_2" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_6_3"/><label for="c_6_3" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_6_4"/><label for="c_6_4" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_6_5"/><label for="c_6_5" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_6_6"/><label for="c_6_6" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_6_7"/><label for="c_6_7" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;">
                <div class="ui checkbox" style="width:100%;"><input type="checkbox" id="c_6_8"/><label for="c_6_8" style="display:block;width:100%;height;100%;font-size:1.2rem;cursor:pointer;"><span style="display:inline-block;width:0.5em;"></span>法人営業</label></div>
              </li>
              <li style="text-align: right;border-top:1px solid rgba(34, 36, 38, 0.1);padding:1.5em 0;">
                <div class="ui black deny button" style="padding:1.0rem;display:inline-block;">条件をクリア</div>
                <div class="ui positive right labeled icon button" style="padding:1.0rem;display:inline-block;">この条件で検索<i class="checkmark icon"></i></div>
              </li>
            </ul>
          </td>
        </tr>
      </tbody>
      <tfoot style="text-align: right;">
        <tr>
          <th style="border-top:1px solid rgba(34, 36, 38, 0.1);padding:0.92857143em 0.78571429em;background:#F9FAFB;font-weight: normal;">
            <div class="ui black deny button" style="padding:1.0rem;display:inline-block;">条件をクリア</div>
            <div class="ui positive right labeled icon button" style="padding:1.0rem;display:inline-block;">この条件で検索<i class="checkmark icon"></i></div>
          </th>
        </tr>
      </tfoot>
    </table>
  </div>`

  /*-------UserAgentCheck---------*/
  isSmartphone = function(){
    let ua = window.navigator.userAgent.toLowerCase();

    if(ua.indexOf('iphone') > -1 || ua.indexOf('ipad') > -1 || ua.indexOf('android') > -1){
      return true
    }
    return false
  }

  //*-------Public API--------*/
  return {
    search_modal_pc : {
      template : search_modal_pc
    },
    search_modal_sp : {
      template : search_modal_sp
    },
    isSmartphone : isSmartphone
  }
})();


/*
 * @vm construct
 */
var vm = new Vue({
  el : '#tj-searchModal',
  data : {
    currentView : vm_config.isSmartphone() ? 'search_modal_sp' : 'search_modal_pc',
    isSmartphone : vm_config.isSmartphone()
  },
  components : {
    'search_modal_pc' : vm_config.search_modal_pc,
    'search_modal_sp' : vm_config.search_modal_sp,
  },
  computed : {
    modalDevice : function(){
      return {
        'tj-searchModalPc' : !vm_config.isSmartphone(),
        'tj-searchModalSp' : vm_config.isSmartphone(),
      }
    }
  }
});


/*
 * @interaction
 */

$(function(){
  $('.tj-searchPanel [data-target="syokushu_btn"]').on('click',function(e){
      $('.ui.modal').modal('show');
      $('.test-modal').fadeIn();
  });


  var h = Math.max.apply( null, [document.body.clientHeight , document.body.scrollHeight, document.documentElement.scrollHeight, document.documentElement.clientHeight] );
  $('.test-modal').css('height',h);

  $('td p').on('click',function(e){
    var target = $(this).data('target');
    $('.' + target).slideToggle();
  });

  $('table').on('click',function(e){
    e.stopPropagation();
  })

  $('.test-modal').on('click',function(e){
    $(this).fadeOut();
  });
});
