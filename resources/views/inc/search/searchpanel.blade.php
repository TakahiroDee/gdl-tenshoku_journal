<div class="l-inner l-row l-searchPanel">
  <form class="c-searchPanel" method="post" name="search" action="/search">
    {{ csrf_field() }}
    <table class="ui compact celled definition table">
      <tbody>
        <tr>
          <td>職種</td>
          <td>
            <div class="ui button c-jobmodal">選択する</div>
            <div class="c-searchPanel__selectedlist">
            </div>
          </td>
        </tr>
        <tr>
          <td>勤務地</td>
          <td>
            <div class="ui button c-areamodal">選択する</div>
            <div class="c-searchPanel__selectedlist">
            </div>
          </td>
        </tr>
        <tr>
          <td>サービス名</td>
          <td>
            <ul class="c-service__list">
              <li class="ui checkbox c-service__item">
                @if($data['selected_service_list'] == 'baitoru_next')
                <input type="checkbox" id="s_baitoru_next" name="s_baitoru_next" checked="checked"/ >
                @else
                <input type="checkbox" id="s_baitoru_next" name="s_baitoru_next"/ >
                @endif
                <label for="s_baitoru_next">バイトルNEXT</label>
              </li>
              <li class="ui checkbox c-service__item">
                @if($data['selected_service_list'] == 'hatalike')
                <input type="checkbox" id="s_hatalike" name="s_hatalike" checked="checked"/ >
                @else
                <input type="checkbox" id="s_hatalike" name="s_hatalike"/ >
                @endif
                <label for="s_hatalike">はたらいく</label>
              </li>
              <li class="ui checkbox c-service__item">
                @if($data['selected_service_list'] == 'mynabi_agent')
                <input type="checkbox" id="s_mynabi_agent" name="s_mynabi_agent" checked="checked" / >
                @else
                <input type="checkbox" id="s_mynabi_agent" name="s_mynabi_agent"/ >
                @endif
                <label for="s_mynabi_agent">マイナビエージェント</label>
              </li>
              <li class="ui checkbox c-service__item">
                @if($data['selected_service_list'] == 'rikunabi_next')
                <input type="checkbox" id="s_rikunabi_next" name="s_rikunabi_next" checked="checked"/ >
                @else
                <input type="checkbox" id="s_rikunabi_next" name="s_rikunabi_next"/ >
                @endif
                <label for="s_rikunabi_next">リクナビNEXT</label>
              </li>
              <li class="ui checkbox c-service__item">
                @if($data['selected_service_list'] == 'recruit_agent')
                <input type="checkbox" id="s_recruit_agent" name="s_recruit_agent" checked="checked"/ >
                @else
                <input type="checkbox" id="s_recruit_agent" name="s_recruit_agent"/ >
                @endif
                <label for="s_recruit_agent">リクルートエージェント</label>
              </li>
              <li class="ui checkbox c-service__item">
                @if($data['selected_service_list'] == 'at_type')
                <input type="checkbox" id="s_at_type" name="s_at_type"/ checked>
                @else
                <input type="checkbox" id="s_at_type" name="s_at_type"/ >
                @endif
                <label for="s_at_type">＠type</label>
              </li>
              <li class="ui checkbox c-service__item">
                @if($data['selected_service_list'] == 'torabayu')
                <input type="checkbox" id="s_torabayu" name="s_torabayu" checked="checked" / >
                @else
                <input type="checkbox" id="s_torabayu" name="s_torabayu"/ >
                @endif
                <label for="s_torabayu">とらばーゆ</label>
              </li>
              <li class="ui checkbox c-service__item">
                @if($data['selected_service_list'] == 'workport')
                <input type="checkbox" id="s_workport" name="s_workport" checked="checked" / >
                @else
                <input type="checkbox" id="s_workport" name="s_workport"/ >
                @endif
                <label for="s_workport">ワークポート</label>
              </li>
            </ul>
          </td>
        </tr>
        <tr>
          <td>キーワード</td>
          <td>
            <div class="ui icon input">
              <input type="text" placeholder="キーワードを入力してください" name="keyword"><i class="search icon"></i>
            </div>
          </td>
        </tr>
      </tbody>
      <tfoot class="full-width">
        <tr>
          <th colspan="12">
            <div class="ui small button grey" data-button-type="all_clear">条件をクリア</div>
            <div class="ui small button olive" data-button-type="submit">この条件で検索する</div>
          </th>
        </tr>
      </tfoot>
    </table>
  </form>
  <div class="c-modalwrap">
    <div class="ui modal job">
      <i class="close icon"></i>
      <div class="header c-searchModal__header">
        希望の職種を入力
      </div>
      <div class="content c-searchModal__content">
        @foreach($data['job_modal'] as $jobdata)

        @if($loop->index % 2 == 0)
        <div class="c-searchModal__tableBox">
        @endif
          <table class="ui single line table c-searchModal__table">
            <thead class="c-searchModal__tableHead">
              <tr>
                <th data-toggle="show">{{ $jobdata['job_code_big_value'] }}</th>
              </tr>
            </thead>
            <tbody class="c-searchModal__tableBody" style="font-weight:normal;">
              <tr>
                <td>
                  <div class="ui checkbox">
                    <input type="checkbox" id="c_0{{ intval($loop->index) + 1 }}" class="c-searchModal__allcheck" name="c_0{{ intval($loop->index) + 1 }}"/>
                    <label for="c_0{{ intval($loop->index) + 1 }}" class="c-searchModal__tableLabel">すベて選択</label>
                  </div>
                </td>
              </tr>
              @foreach($jobdata['elems'] as $elem)
              <tr>
                <td>
                  <div class="ui checkbox">

                    @if(in_array($elem->job_code_full,$data['selected_job_code_list']))
                    <input type="checkbox" id="c_{{ $elem->job_code_full }}" class="c-searchModal__eachinput" name="c_{{ $elem->job_code_full }}" checked="checked"/>
                    @else
                    <input type="checkbox" id="c_{{ $elem->job_code_full }}" class="c-searchModal__eachinput" name="c_{{ $elem->job_code_full }}" />
                    @endif

                    <label for="c_{{ $elem->job_code_full }}" class="c-searchModal__tableLabel">{{ $elem->job_code_mid_value }}</label>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

        @if($loop->index % 2 == 1)
        </div>
        @endif

        @endforeach
      </div>

      <div class="actions">
        <div class="ui positive right labeled icon button" data-button-type="job_register">この条件で登録<i class="checkmark icon"></i></div>
        <div class="ui small button grey" data-button-type="job_clear">条件をクリア</div>
      </div>
    </div>


    <div class="c-modalwrap">
      <div class="ui modal area">
        <i class="close icon"></i>
        <div class="header c-searchModal__header">希望の勤務地を入力</div>
        <div class="content c-searchModal__content">
          <div class="c-searchModal__tableBox">
            <table class="ui celled striped table c-searchModal__table">
              <tbody class="c-searchModal__tableBody" style="font-weight:normal;">

                @foreach($data['area_modal'] as $areadata)
                <tr>
                  <td class="collapsing">{{ $areadata['block_code_value'] }}</td>
                  <td>
                    <ul>
                      @foreach($areadata['elems'] as $elem)
                      <li class="ui checkbox">

                        @if(in_array($elem->area_code,$data['selected_area_code_list']))
                        <input type="checkbox" id="a_{{ $elem->area_code }}" name="a_{{ $elem->area_code }}" checked="checked"/>
                        @else
                        <input type="checkbox" id="a_{{ $elem->area_code }}" name="a_{{ $elem->area_code }}" />
                        @endif

                        <label for="a_{{ $elem->area_code }}" class="c-searchModal__tableLabel">{{ $elem->area_code_value }}</label>
                      </li>
                      @endforeach
                    </ul>
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
        <div class="actions">
          <div class="ui positive right labeled icon button" data-button-type="area_register">この条件で登録<i class="checkmark icon"></i></div>
          <div class="ui small button grey" data-button-type="area_clear">条件をクリア</div>
        </div>
      </div>
    </div>

  </div>
</div>
