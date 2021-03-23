@extends('layouts.master')
@section('content')
<div class="user-detail">
  <div class="user-detail__title d-flex justify-content-between align-items-center">
    <span class="f-w6">ユーザー管理</span>
    <div>
      <button class="btn-left" data-toggle="modal" data-target="#modal-give-point">ポイント付与</button>
      <a href="/users">
        <button class="btn-right">一覧に戻る</button>
      </a>
    </div>
    <div class="modal fade" id="modal-give-point" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <span class="modal-title f-w6">ポイント付与</span>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body give-point">
            <p class="f-w6">付与ポイント</p>
            <div class="f-w6 d-flex justify-content-center align-items-center">
              <input class="f-w3" />
              <span class="f-w6 point">pt</span>
            </div>
            <button class="give-point__btn">付与する</button>
          </div>
        </div>
      </div>
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
          <div class="card card-rank text-left">
            <header class="card-header f-w6">
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
                    メモです。メモです。メモです。メモです。メモです。 メモです。メモです。メモです。メモです。メモです。メモです。 メモです。メモです。
                  </textarea>
                </div>
              </div>
            </div>
            <footer class="card-footer f-w3 text-right">
              <button class="btn-primary card-footer__btn">
                保存
              </button>
            </footer>
          </div>
        </div>
        <div id="alert-save-info" class="w-100 alert-success">
          @include('components.alert', ['title' => '保存しました。'])
        </div>
        <div id="alert-give-point" class="w-100 alert-success">
          @include('components.alert', ['title' => 'ポイントを付与しました。'])
        </div>
      </div>
      <div class="row user-detail__content-image">
        <div class="col">
          <div class="card">
            <header class="card-header text-left f-w6">
              プロフィール画像
            </header>
            <div class="card__content d-flex justify-content-start flex-wrap">
              <img src="" alt="" />
              <img src="" alt="" />
              <img src="" alt="" />
              <img src="" alt="" />
              <img src="" alt="" />
              <img src="" alt="" />
              <img src="" alt="" />
              <img src="" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card">
            <header class="card-header f-w6">
              プロフィール情報
            </header>
            <div class="card__content">
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">生年月日</div>
                <div class="col-sm-9">1990年4月4日</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">居住地</div>
                <div class="col-sm-9">県埼玉</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">プレーエリア</div>
                <div class="col-sm-9">埼玉県、茨城県、山梨県</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">職業</div>
                <div class="col-sm-9">弁護士</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">身長</div>
                <div class="col-sm-9">193 cm</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">交際ステータス</div>
                <div class="col-sm-9">既婚</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">ベストスコア</div>
                <div class="col-sm-9">99</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">アベレージスコア</div>
                <div class="col-sm-9">99</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">ゴルフ歴</div>
                <div class="col-sm-9">10年以上</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">年間ラウンド数</div>
                <div class="col-sm-9">10</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">タバコ</div>
                <div class="col-sm-9">吸わない</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">プレー中の飲酒</div>
                <div class="col-sm-9">飲む</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">年収</div>
                <div class="col-sm-9">3,000 万円</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">会員券</div>
                <div class="col-sm-9">あり</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">体型</div>
                <div class="col-sm-9">ぽっちゃり</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">車種</div>
                <div class="col-sm-9">ベンツ</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">タイプ</div>
                <div class="col-sm-9">綺麗系</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">合流方法</div>
                <div class="col-sm-9">現地集合</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">シチュエーション</div>
                <div class="col-sm-9">楽しくゴルフ</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">自己紹介</div>
                <div class="col-sm-6 w-60">自己紹介です。自己紹介です。自己紹介です。自己紹介です。自己紹介です。自己紹介です。自己紹介です。</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">30分料金</div>
                <div class="col-sm-9">30,000 円</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">交通費</div>
                <div class="col-sm-9">30,000 円</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">指名料</div>
                <div class="col-sm-9">30,000 円</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">最終ログイン</div>
                <div class="col-sm-9">01/01/2021 0:00:00</div>
              </div>
              <div class="row user-detail__content-last-info">
                <div class="col-sm-3 f-w6">スカウトリンク</div>
                <div class="col-sm-9"><a href="#">https://sample.com</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card">
            <header class="card-header f-w6">
              口座情報
            </header>
            <div class="card__content">
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">金融機関名</div>
                <div class="col-sm-9">三菱UFJ銀行</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">支店名</div>
                <div class="col-sm-9">東京支店</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">口座種別</div>
                <div class="col-sm-9">普通</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">口座番号</div>
                <div class="col-sm-9">1234567</div>
              </div>
              <div class="row user-detail__content-info">
                <div class="col-sm-3 f-w6">口座名義</div>
                <div class="col-sm-9">タナカショウジ（カ</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="button--footer text-right">
        <button type="button" class="sale-support__btn" data-toggle="modal" data-target="#modal-sale-support">
          スカウトに変更
        </button>
        <button type="button" class="button--footer--right delete-user__btn " data-toggle="modal" data-target="#modal-delete-user">
          削除
        </button>
      </div>
      <div class="modal fade modal-two-button" id="modal-sale-support" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center">
              <p>本当にこの一般ユーザーをスカウト ユーザーに変更してよろしいですか？</p>
              <div class="d-flex justify-content-between">
                <button class="sale-support__btn-success btn-accept">変更する</button>
                <button class="sale-support__btn-cancel btn-cancel">キャンセル</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade modal-two-button" id="modal-delete-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-center">
              <p>本当にこのユーザーを削除して よろしいですか？</p>
              <div class="d-flex justify-content-between">
                <button class="delete-user__btn-success btn-accept">削除する</button>
                <button class="delete-user__btn-cancel btn-cancel">キャンセル</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="alert-sale-support" class="w-100 alert-success">
        @include('components.alert', ['title' => '変更しました。'])
      </div>
    </div>
  </div>
</div>
@endsection