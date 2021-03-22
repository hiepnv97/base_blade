@extends('layouts.master')
@section('content')
<div class="user-detail">
  <div class="user-detail__title d-flex justify-content-between align-items-center">
    <span class="f-w6">ユーザー管理</span>
    <div>
      <button class="btn-left">ポイント付与</button>
      <button class="btn-right">一覧に戻る</button>
    </div>
  </div>
  <div class="user-detail__content">
    <div>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <header class="card-header f-w6 text-left">基本情報</header>
            <div class="card__content text-left">
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">ユーザーID</div>
                <div class="col-sm-9">12345</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">種別</div>
                <div class="col-sm-9">一般</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">ユーザー名</div>
                <div class="col-sm-9">タナカタナカ</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">姓名</div>
                <div class="col-sm-9">タナカタナカ</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">セイメイ</div>
                <div class="col-sm-9">タナカタナカ</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">性別</div>
                <div class="col-sm-9">男性</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">本人確認</div>
                <div class="col-sm-9">確認済み</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">ログイン種別</div>
                <div class="col-sm-9">Eメール</div>
              </div>
              <div class="row user-detail__content-last-info">
                <div class="col-sm-3 f-w6">Eメール</div>
                <div class="col-sm-9">sample@sample.com</div>
              </div>
            </div>
          </div>
          <div class="card card-point-info text-left">
            <header class="card-header f-w6">ポイント情報</header>
            <div class="card__content">
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">保有ポイント</div>
                <div class="col-sm-9">1,000 pt</div>
              </div>
              <div class="row user-detail__content-last-info">
                <div class="col-sm-3 f-w6">保有ポイント</div>
                <div class="col-sm-9">1,000 pt</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card h-100 text-left">
            <header class="card-header">
              ランク情報
            </header>
            <div class="card__content">
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">ゴルフランク</div>
                <div class="col-sm-9">GOLD</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">PreGoランク</div>
                <div class="col-sm-9">
                  <select class="form-select form-select-lg custom-select select-option" aria-label=".form-select-lg example">
                    <option value="1">一般</option>
                    <option value="2">スカウト</option>
                    <option value="3" selected>GOLD</option>
                  </select>
                </div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">総合ランク</div>
                <div class="col-sm-9">GOLD</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">ファウンダー</div>
                <div class="col-sm-9">GOLD</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">面接</div>
                <div class="col-sm-9">
                  <select class="form-select form-select-lg custom-select select-option" aria-label=".form-select-lg example">
                    <option value="1">一般</option>
                    <option value="2">スカウト</option>
                    <option value="3" selected>実施済み</option>
                  </select>
                </div>
              </div>
              <div class="row user-detail__content-last-info">
                <div class="col-sm-3 f-w6">MEMO</div>
                <div class="col-sm-9">
                  <textarea cols="9" rows="15" class="w-100">
メモです。メモです。メモです。メモです。メモです。メモです。 メモです。メモです。メモです。メモです。メモです。メモです。 メモです。メモです。メモです。メモです。メモです。メモです。 メモです。メモです。メモです。メモです。メモです。メモです。 メモです。メモです。メモです。メモです。メモです。メモです。 メモです。メモです。メモです。メモです。メモです。メモです。 メモです。メモです。メモです。メモです。メモです。メモです。 メモです。メモです。メモです。メモです。メモです。メモです。 メモです。メモです。メモです。メモです。メモです。メモです。
                  </textarea>
                </div>
              </div>
            </div>
            <footer class="card-footer">
              <button>保存</button>
            </footer>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection