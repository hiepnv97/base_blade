@extends('layouts.master')
@section('content')
<div class="image-identity">
  <div class="image-identity__title">
    <span class="f-w6">本人確認画像承認</span>
  </div>
  <div class="card">
    <div class="d-flex justify-content-start align-items-center record">
      <select class="form-select form-select-lg custom-select record__select" aria-label=".form-select-lg example">
        <option value="1" selected>5</option>
        <option value="2">10</option>
        <option value="3">15</option>
      </select>
      <span>件表示</span>
    </div>
    <div class="table">
      <table class="image-identity__table">
        <tr>
          <th>
            <div class="d-flex justify-content-between f-w6 fields image-id">
              画像ID
              <div>
                <i class="fa fa-arrow-down icon"></i>
                <i class="fa fa-arrow-up icon"></i>
              </div>
            </div>
          </th>
          <th>
            <div class="d-flex justify-content-between f-w6 fields user-id">
              ユーザーID
              <div>
                <i class="fa fa-arrow-down active icon"></i>
                <i class="fa fa-arrow-up icon"></i>
              </div>
            </div>
          </th>
          <th>
            <div class="d-flex justify-content-between f-w6 fields image-type">
              画像種別
              <div>
                <i class="fa fa-arrow-down icon"></i>
                <i class="fa fa-arrow-up icon"></i>
              </div>
            </div>
          </th>
          <th>
            <div class="d-flex justify-content-between f-w6 fields image">
              申請画像
              <div>
                <i class="fa fa-arrow-down icon"></i>
                <i class="fa fa-arrow-up icon"></i>
              </div>
            </div>
          </th>
          <th>
            <div class="d-flex justify-content-between f-w6 fields time">
              申請日時
              <div>
                <i class="fa fa-arrow-down icon"></i>
                <i class="fa fa-arrow-up icon"></i>
              </div>
            </div>
          </th>
          <th>
            <div class="fields action">
              操作
            </div>
          </th>
        </tr>
        <tr class="f-w3 info">
          <td>
            <div>12345</div>
          </td>
          <td>
            <a href="#">
              <div> 123456</div>
            </a>
          </td>
          <td>
            <div>本人確認</div>
          </td>
          <td>
            <div class="d-flex justify-content-center align-items-center">
              <img src="#" alt="">
            </div>
          </td>
          <td>
            <div>2020-10-21 21:50:13</div>
          </td>
          <td class="text-center">
            <div class="image__btn">
              <button class="btn_accept-image">
                承認
              </button>
              <button class="btn_refuse-image" data-toggle="modal" data-target="#modal-refuse-image">
                却下
              </button>
            </div>
          </td>
        </tr>
      </table>
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
  <div id="alert-accept-image" class="w-100 alert-success">
    @include('components.alert', ['title' => '承認しました。'])
  </div>
  <div id="alert-refuse-image" class="w-100 alert-success">
    @include('components.alert', ['title' => '却下しました。'])
  </div>
  <div class="modal fade modal-two-button" id="modal-refuse-image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <p>本当にこの画像を却下して よろしいですか？</p>
          <div class="d-flex justify-content-between">
            <button class="refuse-image__btn-success btn-accept">却下する</button>
            <button class="refuse-image__btn-cancel btn-cancel">キャンセル</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection