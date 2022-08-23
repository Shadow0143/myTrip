<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Login</title>
  </head>
  <body>
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100">
          <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
            <h1>Meilleur Holidays</h1>
            <span class="login100-form-title-1">
              Log In
            </span>
          </div>
          <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
              <span class="label-input100">Username</span>
              <input class="input100" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
                <span class="focus-input100">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
              <span class="label-input100">Password</span>
              <input class="input100" type="password" name="password" id="password" placeholder="Enter password">
              @error('password')
                <span class="focus-input100">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="container-login100-form-btn">
              <button class="login100-form-btn" type="submit">
                Login
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");
    * {
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }
    .flex-r,
    .flex-c {
      justify-content: center;
      align-items: center;
      display: flex;
    }
    .flex-c {
      flex-direction: column;
    }
    .flex-r {
      flex-direction: row;
    }
    .container-login100-form-btn {
      padding-top: 10px
    }
    .container {
      width: 100%;
      min-height: 100vh;
      padding: 20px 10px;
      background: #e5e5e5;
      font-family: 'Poppins', sans-serif;
    }
    .login-text {
      background-color: #f6f6f6;
      max-width: 400px;
      min-height: 500px;
      border-radius: 10px;
      padding: 10px 20px;
    }
    .logo {
      margin-bottom: 20px;
    }
    .logo span,
    .logo span i {
      font-size: 25px;
      color: #0d8aa7;
    }
    .login-text h1 {
      font-size: 25px;
    }
    .login-text p {
      font-size: 15px;
      color: #000000b2;
    }
    form {
      align-items: flex-start !important;
      width: 100%;
      margin-top: 15px;
    }
    .input-box {
      margin: 10px 0px;
      width: 100%;
    }
    .label {
      font-size: 15px;
      color: black;
      margin-bottom: 3px;
    }
    .input {
      background-color: #f6f6f6;
      padding: 0px 5px;
      border: 2px solid rgba(216, 216, 216, 1);
      border-radius: 10px;
      overflow: hidden;
      justify-content: flex-start;
    }
    input {
      border: none;
      outline: none;
      padding: 10px 5px;
      background-color: #f6f6f6;
      flex: 1;
    }
    .input i {
      color: rgba(0, 0, 0, 0.4);
    }
    .check span {
      color: #000000b2;
      font-size: 15px;
      font-weight: bold;
      margin-left: 5px;
    }
    .btn {
      color: #ffffff;
      border-radius: 30px;
      padding: 10px 15px;
      background: linear-gradient(122.33deg, #68bed1 30.62%, #1e94e9 100%);
      margin-top: 30px;
      margin-bottom: 10px;
      font-size: 16px;
      transition: all 0.3s linear;
    }
    .btn:hover {
      transform: translateY(-2px);
    }
    .extra-line {
      font-size: 15px;
      font-weight: 600;
    }
    .extra-line a {
      color: #0095b6;
    }
    .wrap-input100 {
      margin-bottom: 10px
    }
    @font-face {
      font-family: Poppins-Regular;
      src: url('../fonts/poppins/Poppins-Regular.ttf');
    }
    @font-face {
      font-family: Poppins-Medium;
      src: url('../fonts/poppins/Poppins-Medium.ttf');
    }
    @font-face {
      font-family: Poppins-Bold;
      src: url('../fonts/poppins/Poppins-Bold.ttf');
    }
    @font-face {
      font-family: Poppins-SemiBold;
      src: url('../fonts/poppins/Poppins-SemiBold.ttf');
    }
    * {
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
    }
    body,
    html {
      height: 100%;
      font-family: Poppins-Regular, sans-serif;
    }
    a {
      font-family: Poppins-Regular;
      font-size: 14px;
      line-height: 1.7;
      color: #666666;
      margin: 0px;
      transition: all 0.4s;
      -webkit-transition: all 0.4s;
      -o-transition: all 0.4s;
      -moz-transition: all 0.4s;
    }
    a:focus {
      outline: none !important;
    }
    a:hover {
      text-decoration: none;
      color: #57b846;
    }
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      margin: 0px;
    }
    p {
      font-family: Poppins-Regular;
      font-size: 14px;
      line-height: 1.7;
      color: #666666;
      margin: 0px;
    }
    ul,
    li {
      margin: 0px;
      list-style-type: none;
    }
    input {
      outline: none;
      border: none;
    }
    input[type="number"] {
      -moz-appearance: textfield;
      appearance: none;
      -webkit-appearance: none;
    }
    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {
      -webkit-appearance: none;
    }
    textarea {
      outline: none;
      border: none;
    }
    textarea:focus,
    input:focus {
      border-color: transparent !important;
    }
    input:focus::-webkit-input-placeholder {
      color: transparent;
    }
    input:focus:-moz-placeholder {
      color: transparent;
    }
    input:focus::-moz-placeholder {
      color: transparent;
    }
    input:focus:-ms-input-placeholder {
      color: transparent;
    }
    textarea:focus::-webkit-input-placeholder {
      color: transparent;
    }
    textarea:focus:-moz-placeholder {
      color: transparent;
    }
    textarea:focus::-moz-placeholder {
      color: transparent;
    }
    textarea:focus:-ms-input-placeholder {
      color: transparent;
    }
    input::-webkit-input-placeholder {
      color: #999999;
    }
    input:-moz-placeholder {
      color: #999999;
    }
    input::-moz-placeholder {
      color: #999999;
    }
    input:-ms-input-placeholder {
      color: #999999;
    }
    textarea::-webkit-input-placeholder {
      color: #999999;
    }
    textarea:-moz-placeholder {
      color: #999999;
    }
    textarea::-moz-placeholder {
      color: #999999;
    }
    textarea:-ms-input-placeholder {
      color: #999999;
    }
    label {
      display: block;
      margin: 0;
    }
    button {
      outline: none !important;
      border: none;
      background: transparent;
    }
    button:hover {
      cursor: pointer;
    }
    iframe {
      border: none !important;
    }
    .txt1 {
      font-family: Poppins-Regular;
      font-size: 13px;
      line-height: 1.4;
      color: #999999;
    }
    .limiter {
      width: 100%;
      margin: 0 auto;
    }
    .container-login100 {
      width: 100%;
      min-height: 100vh;
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      padding: 15px;
      background: #ebeeef;
    }
    .wrap-login100 {
      width: 670px;
      background: #fff;
      border-radius: 10px;
      overflow: hidden;
      position: relative;
    }
    .login100-form-title {
      width: 100%;
      position: relative;
      z-index: 1;
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      flex-wrap: wrap;
      flex-direction: column;
      align-items: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      padding: 50px 15px 44px 15px;
    }
    .login100-form-title-1 {
      font-size: 30px;
      color: #fff;
      text-transform: uppercase;
      line-height: 1.2;
      text-align: center;
    }
    .login100-form-title::before {
      content: "";
      display: block;
      position: absolute;
      z-index: -1;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      background-color: #ffcd22;
    }
    .login100-form {
      width: 100%;
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      padding: 43px 88px 93px 190px;
    }
    .wrap-input100 {
      width: 100%;
      position: relative;
      border-bottom: 1px solid #b2b2b2;
    }
    .label-input100 {
      font-size: 15px;
      color: #808080;
      line-height: 1.2;
      text-align: right;
      position: absolute;
      top: 14px;
      left: -105px;
      width: 80px;
    }
    .input100 {
      font-size: 15px;
      color: #555555;
      line-height: 1.2;

      display: block;
      width: 100%;
      background: transparent;
      padding: 0 5px;
    }
    .focus-input100 {
      position: absolute;
      display: block;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      pointer-events: none;
    }
    .focus-input100::before {
      content: "";
      display: block;
      position: absolute;
      bottom: -1px;
      left: 0;
      width: 0;
      height: 1px;
      -webkit-transition: all 0.6s;
      -o-transition: all 0.6s;
      -moz-transition: all 0.6s;
      transition: all 0.6s;
      background: #ffcd22;
    }
    input.input100 {
      height: 45px;
    }
    .input100:focus+.focus-input100::before {
      width: 100%;
    }
    .has-val.input100+.focus-input100::before {
      width: 100%;
    }
    .input-checkbox100 {
      display: none;
    }
    .label-checkbox100 {
      font-family: Poppins-Regular;
      font-size: 13px;
      color: #999999;
      line-height: 1.4;
      display: block;
      position: relative;
      padding-left: 26px;
      cursor: pointer;
    }
    .label-checkbox100::before {
      content: "\f00c";
      font-family: FontAwesome;
      font-size: 13px;
      color: transparent;
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: center;
      align-items: center;
      position: absolute;
      width: 18px;
      height: 18px;
      border-radius: 2px;
      background: #fff;
      border: 1px solid #e6e6e6;
      left: 0;
      top: 50%;
      -webkit-transform: translateY(-50%);
      -moz-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      -o-transform: translateY(-50%);
      transform: translateY(-50%);
    }
    .input-checkbox100:checked+.label-checkbox100::before {
      color: #57b846;
    }
    .container-login100-form-btn {
      width: 100%;
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      flex-wrap: wrap;
    }
    .login100-form-btn {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 0 20px;
      min-width: 160px;
      height: 50px;
      background-color: #ffcd22;
      border-radius: 25px;
      font-family: Poppins-Regular;
      font-size: 16px;
      color: #fff;
      line-height: 1.2;
      -webkit-transition: all 0.4s;
      -o-transition: all 0.4s;
      -moz-transition: all 0.4s;
      transition: all 0.4s;
    }
    .login100-form-btn:hover {
      background-color: #333333;
    }
    @media (max-width: 576px) {
      .login100-form {
        padding: 43px 15px 57px 117px;
      }
    }
    @media (max-width: 480px) {
      .login100-form {
        padding: 43px 15px 57px 15px;
      }
      .label-input100 {
        text-align: left;
        position: unset;
        top: unset;
        left: unset;
        width: 100%;
        padding: 0 5px;
      }
    }
    .validate-input {
      position: relative;
    }
    .alert-validate::before {
      content: attr(data-validate);
      position: absolute;
      max-width: 70%;
      background-color: #fff;
      border: 1px solid #c80000;
      border-radius: 2px;
      padding: 4px 25px 4px 10px;
      top: 50%;
      -webkit-transform: translateY(-50%);
      -moz-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      -o-transform: translateY(-50%);
      transform: translateY(-50%);
      right: 2px;
      pointer-events: none;
      font-family: Poppins-Medium;
      color: #c80000;
      font-size: 13px;
      line-height: 1.4;
      text-align: left;
      visibility: hidden;
      opacity: 0;
      -webkit-transition: opacity 0.4s;
      -o-transition: opacity 0.4s;
      -moz-transition: opacity 0.4s;
      transition: opacity 0.4s;
    }
    .alert-validate::after {
      content: "\f06a";
      font-family: FontAwesome;
      display: block;
      position: absolute;
      color: #c80000;
      font-size: 15px;
      top: 50%;
      -webkit-transform: translateY(-50%);
      -moz-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      -o-transform: translateY(-50%);
      transform: translateY(-50%);
      right: 8px;
    }
    .alert-validate:hover:before {
      visibility: visible;
      opacity: 1;
    }
    @media (max-width: 992px) {
      .alert-validate::before {
        visibility: visible;
        opacity: 1;
      }
    }
  </style>
</html>