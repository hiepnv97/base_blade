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
          <select class="form-select form-select-lg mb-3 custom-select select_gender_option" aria-label=".form-select-lg example">
            <option value="1" selected>One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
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
    </div>
  </div>
  @endsection