/*
 * @vm_config
 */
Vue.component('search-panel',{
  template : `
    <div class="c-searchPanel">
      <table class="ui compact celled definition table">
        <tbody>
          <tr>
            <td>職種</td>
            <td>
              <button class="ui button">選択する</button>
              <ul class="c-searchPanel__selectedlist">
                <li>選択してください</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td>勤務地</td>
            <td>
              <button class="ui button">選択する</button>
              <ul class="c-searchPanel__selectedlist">
                <li>選択してください</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td>キーワード</td>
            <td>
              <div class="ui icon input">
                <input type="text" placeholder="キーワードを入力してください"><i class="search icon"></i>
              </div>
            </td>
          </tr>
        </tbody>
        <tfoot class="full-width">
          <tr>
            <th colspan="12">
              <div class="ui small button grey">条件をクリア</div>
              <div class="ui small button olive">この条件で検索する</div>
            </th>
          </tr>
        </tfoot>
      </table>
    </div>
  `,
})


let searchPanel = new Vue({
  el : '#search'
});
