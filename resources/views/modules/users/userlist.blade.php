@extends('layouts.master')
@section('content')
<div class="users-list">
  <div class="text-left users-list__title">
    <span class="f-w6">ユーザー管理</span>
  </div>
  <div class="card">
    <div class="text-left f-w3">
      <div class="d-flex flex-wrap list-option--top">
        <div>
          <p>ユーザーID</p>
          <input type="text" class="name" />
        </div>
        <div>
          <p>種別</p>
          <select class="form-select form-select-lg custom-select select_gender_option" aria-label=".form-select-lg example">
            <option value="1">一般</option>
            <option value="2">スカウト</option>
            <option value="3" selected></option>
          </select>
        </div>
        <div>
          <p>ユーザー名</p>
          <input type="text" class="user-name" />
        </div>
        <div>
          <p>姓</p>
          <input type="text" class="surname" />
        </div>
        <div>
          <p>姓</p>
          <input type="text" class="surname" />
        </div>
      </div>
      <div class="d-flex list-option--bottom flex-wrap">
        <div>
          <p>性別</p>
          <select class="form-select form-select-lg custom-select select_gender_option" aria-label=".form-select-lg example">
            <option value="1">男性</option>
            <option value="2">女性</option>
            <option value="3" selected></option>
          </select>
        </div>
        <div>
          <p>Eメール</p>
          <input type="email" class="email" v-model="filter.email" />
        </div>
        <div>
          <p>本人確認</p>
          <select class="form-select form-select-lg custom-select select_verification_status" aria-label=".form-select-lg example">
            <option value="0">未申請</option>
            <option value="1">申請中</option>
            <option value="2">却下</option>
            <option value="3">確認済み</option>
            <option value="4" selected></option>
          </select>
        </div>
        <div>
          <p>招待ユーザーID</p>
          <input type="text" class="name" v-model="filter.invitedUserId" />
        </div>
        <div class="f-w6">
          <button class="btn-search btn-primary" @click="search()">
            検索
          </button>
        </div>
      </div>
    </div>
    <hr />
    <div class="users-list__content">
      <div class="d-flex justify-content-start align-items-center record">
        <select class="form-select form-select-lg custom-select record__select" aria-label=".form-select-lg example">
          <option value="1" selected>5</option>
          <option value="2">10</option>
          <option value="3">15</option>
        </select>
        <span>件表示</span>
      </div>
      <div class="table">
        <table class="users-list__table">
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
                種別
                <div>
                  <i class="fa fa-arrow-down"></i>
                  <i class="fa fa-arrow-up"></i>
                </div>
              </div>
            </th>
            <th>
              <div class="d-flex justify-content-between f-w6 fields">
                ユーザー名
                <div>
                  <i class="fa fa-arrow-down"></i>
                  <i class="fa fa-arrow-up"></i>
                </div>
              </div>
            </th>
            <th>
              <div class="d-flex justify-content-between f-w6 fields">
                姓
                <div>
                  <i class="fa fa-arrow-down"></i>
                  <i class="fa fa-arrow-up"></i>
                </div>
              </div>
            </th>
            <th>
              <div class="d-flex justify-content-between f-w6 fields">
                名
                <div>
                  <i class="fa fa-arrow-down"></i>
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
                ログイン種別
                <div>
                  <i class="fa fa-arrow-down"></i>
                  <i class="fa fa-arrow-up"></i>
                </div>
              </div>
            </th>
            <th>
              <div class="d-flex justify-content-between f-w6 fields">
                Eメール
                <div>
                  <i class="fa fa-arrow-down"></i>
                  <i class="fa fa-arrow-up"></i>
                </div>
              </div>
            </th>
            <th>
              <div class="d-flex justify-content-between f-w6 fields">
                保有ポイント
                <div>
                  <i class="fa fa-arrow-down"></i>
                  <i class="fa fa-arrow-up"></i>
                </div>
              </div>
            </th>
            <th>
              <div class="d-flex justify-content-between f-w6 fields">
                総消費ポイント
                <div>
                  <i class="fa fa-arrow-down"></i>
                  <i class="fa fa-arrow-up"></i>
                </div>
              </div>
            </th>
            <th>
              <div class="d-flex justify-content-between f-w6 fields">
                本人確認
                <div>
                  <i class="fa fa-arrow-down"></i>
                  <i class="fa fa-arrow-up"></i>
                </div>
              </div>
            </th>
            <th>
              <div class="d-flex justify-content-between f-w6 fields">
                招待ユーザー
                <div>
                  <i class="fa fa-arrow-down"></i>
                  <i class="fa fa-arrow-up"></i>
                </div>
              </div>
            </th>
            <th>
              <div class="d-flex justify-content-between f-w6 fields">
                利用回数
                <div>
                  <i class="fa fa-arrow-down"></i>
                  <i class="fa fa-arrow-up"></i>
                </div>
              </div>
            </th>
            <th>
              <div class="d-flex justify-content-between f-w6 fields">
                ベストスコア
                <div>
                  <i class="fa fa-arrow-down"></i>
                  <i class="fa fa-arrow-up"></i>
                </div>
              </div>
            </th>
            <th>
              <div class="d-flex justify-content-between f-w6 fields">
                平均スコア
                <div>
                  <i class="fa fa-arrow-down"></i>
                  <i class="fa fa-arrow-up"></i>
                </div>
              </div>
            </th>
            <th>
              <div class="d-flex justify-content-between f-w6 fields">
                平均評価
                <div>
                  <i class="fa fa-arrow-down"></i>
                  <i class="fa fa-arrow-up"></i>
                </div>
              </div>
            </th>
            <th>
              <div class="d-flex justify-content-between f-w6 fields">
                ゴルフ歴
                <div>
                  <i class="fa fa-arrow-down"></i>
                  <i class="fa fa-arrow-up"></i>
                </div>
              </div>
            </th>
            <th>
              <div class="d-flex justify-content-between f-w6 fields">
                最終ログイン
                <div>
                  <i class="fa fa-arrow-down"></i>
                  <i class="fa fa-arrow-up"></i>
                </div>
              </div>
            </th>
            <th class="fields">
              編集
            </th>
          </tr>
          <tr class="f-w3 info">
            <td>12345</td>
            <td>一般</td>
            <td>タナカタナカ</td>
            <td>田中</td>
            <td>田中</td>
            <td>男性</td>
            <td>Eメール</td>
            <td>sample@sample.com</td>
            <td>1,000 pt</td>
            <td>1,000 pt</td>
            <td>確認済み</td>
            <td>12345</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>80</td>
            <td>10年以上</td>
            <td>01/02/2021 0:00:00</td>
            <td class="text-center">
              <a href="#">
                <button class="btn_user-detail">
                  編集
                </button>
              </a>
            </td>
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