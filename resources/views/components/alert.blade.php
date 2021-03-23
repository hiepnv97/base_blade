<div class="w-100">
  <div class="d-flex justify-content-center w-100">
    <div class="alert" id="alert">
      {{ $title }}
      <i class="fa fa-times close-alert__btn"></i>
    </div>
  </div>
</div>

<style>
  .alert {
  position: fixed;
  top: 0;
  z-index: 2000;
  padding: 22px 31px;
  width: 486px;
  margin: auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #3C9EFF;
  color: #FFFFFF;
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {top: -30px; opacity: 0;} 
  to {top: 0; opacity: 1;}
}

@keyframes fadein {
  from {top: -30px; opacity: 0;}
  to {top: 0; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {top: 0; opacity: 1;} 
  to {top: -30px; opacity: 0;}
}

@keyframes fadeout {
  from {top: 0; opacity: 1;}
  to {top: -30px; opacity: 0;}
}
</style>