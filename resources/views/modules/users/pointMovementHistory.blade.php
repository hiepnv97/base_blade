@extends('layouts.master')
@section('content')
<div class="users-list">
  <div class="text-left users-list__title">
    <span class="f-w6">ポイント移動履歴</span>
  </div>
  <div class="card">
    <div class="text-left f-w3">
      <div class="d-flex flex-wrap align-items-end list-option--top-point">
        <div>
          <p>ユーザーID</p>
          <input type="text" class="name" />
        </div>
        <div>
          <p>種別</p>
          <select class="form-select form-select-lg custom-select select-gender__option" aria-label=".form-select-lg example">
            <option value="1">一般</option>
            <option value="2">スカウト</option>
            <option value="3" selected></option>
          </select>
        </div>
        <div>
          <p>移動日時（開始）</p>
          <input type="date" class="start-date">
        </div>
        <div>
          <p>移動日時（終了）</p>
          <input type="date" class="end-date">
        </div>
        <div>
          <p>取得/消費</p>
          <select class="form-select form-select-lg custom-select select-gender__option" aria-label=".form-select-lg example">
            <option value="1">一般</option>
            <option value="2">スカウト</option>
            <option value="3" selected></option>
          </select>
        </div>
        <div class="f-w6">
          <button class="btn-search btn-primary" @click="search()">
            検索
          </button>
        </div>
      </div>
    </div>
    <hr />
    <div class="point-list__content">
      <div class="d-flex justify-content-start align-items-center record">
        <select class="form-select form-select-lg custom-select record__select" aria-label=".form-select-lg example">
          <option value="1" selected>10</option>
          <option value="2">15</option>
          <option value="3">20</option>
        </select>
        <span>件表示</span>
      </div>
      <div class="point-list__content-table">
        <table>
          <tr>
            <th>
              <div class="d-flex justify-content-between f-w6 fields">
                ユーザーID
                <div>
                  <i class="fa fa-arrow-down active"></i>
                  <i class="fa fa-arrow-up"></i>
                </div>
              </div>
            </th>
            <th>
              <div class="d-flex justify-content-between f-w6 fields">
                性別
                <div>
                  <i class="fa fa-arrow-down"></i>
                  <i class="fa fa-arrow-up"></i>
                </div>
              </div>
            </th>
            <th>
              <div class="d-flex justify-content-between f-w6 fields">
                移動日時
                <div>
                  <i class="fa fa-arrow-down"></i>
                  <i class="fa fa-arrow-up"></i>
                </div>
              </div>
            </th>
            <th>
              <div class="d-flex justify-content-between f-w6 fields">
                取得ポイント
                <div>
                  <i class="fa fa-arrow-down"></i>
                  <i class="fa fa-arrow-up"></i>
                </div>
              </div>
            </th>
            <th>
              <div class="d-flex justify-content-between f-w6 fields">
                消費ポイント
                <div>
                  <i class="fa fa-arrow-down"></i>
                  <i class="fa fa-arrow-up"></i>
                </div>
              </div>
            </th>
            <th>
              <div class="d-flex justify-content-between f-w6 fields">
                摘要
                <div>
                  <i class="fa fa-arrow-down"></i>
                  <i class="fa fa-arrow-up"></i>
                </div>
              </div>
            </th>
          </tr>
          <tr class="f-w3 user-info">
            <td>12345</td>
            <td>男性</td>
            <td>2020-02-01 00:00</td>
            <td>3,200 pt</td>
            <td>3,200 pt</td>
            <td>ポイント購入</td>
          </tr>
          <tr class="f-w3 user-info">
            <td>12345</td>
            <td>男性</td>
            <td>2020-02-01 00:00</td>
            <td>3,200 pt</td>
            <td>3,200 pt</td>
            <td>ポイント購入</td>
          </tr>
          <tr class="f-w3 user-info">
            <td>12345</td>
            <td>男性</td>
            <td>2020-02-01 00:00</td>
            <td>3,200 pt</td>
            <td>3,200 pt</td>
            <td>ポイント購入</td>
          </tr>
          <tr class="f-w3 user-info">
            <td>12345</td>
            <td>男性</td>
            <td>2020-02-01 00:00</td>
            <td>3,200 pt</td>
            <td>3,200 pt</td>
            <td>ポイント購入</td>
          </tr>
          <tr class="f-w3 user-info">
            <td>12345</td>
            <td>男性</td>
            <td>2020-02-01 00:00</td>
            <td>3,200 pt</td>
            <td>3,200 pt</td>
            <td>ポイント購入</td>
          </tr>
          <tr class="f-w3 user-info">
            <td>12345</td>
            <td>男性</td>
            <td>2020-02-01 00:00</td>
            <td>3,200 pt</td>
            <td>3,200 pt</td>
            <td>ポイント購入</td>
          </tr>
          <tr class="f-w3 user-info">
            <td></td>
            <td></td>
            <td class="text-right f-w6">合計</td>
            <td>333,333,200 pt</td>
            <td>333,333,200 pt</td>
            <td></td>
          </tr>
        </table>
      </div>
    </div>
    <div class="row table__footer">
      <div class="col-lg-4 table__footer__text f-w3">
        <span>26 </span>
        <span>件中 </span>
        <span>1 </span>
        <span>から </span>
        <span>10 </span>
        <span>まで表示</span>
      </div>
      <div class="col-lg-8 table__footer__pagination">
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-end">
            <li class="page-item disabled">
              <span class="page-link" href="#" tabindex="-1" aria-disabled="true">前</span>
            </li>
            <li class="page-item active"><span class="page-link" href="#">1</span></li>
            <li class="page-item"><span class="page-link" href="#">2</span></li>
            <li class="disabled page-item"><span class="page-link">...</span></li>
            <li class="page-item"><span class="page-link" href="#">3</span></li>
            <li class="page-item">
              <span class="page-link" href="#">次</span>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  @endsection