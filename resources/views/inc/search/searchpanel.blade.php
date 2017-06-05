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
