<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>LOGIN</title>
   </head>
<body>
  <div class="container">
    <div class="title">LOGIN</div>
    @if (Session::has('fail'))
      <div class="alert">{{Session::get('fail')}}</div>
    @endif
    <div class="content">
      <form action="{{route('StoreLogin')}}" method="POST">
      {{ csrf_field() }}
        <div class="user-details">
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="mail" placeholder="Enter Email" value="{{old('mail')}}">
            @error('mail')
              <div class="error">{{$message}}</div><br>
            @enderror
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="pass" placeholder="Enter A Password" value="{{old('pass')}}">
            @error('pass')
              <div class="error">{{$message}}</div><br>
            @enderror
          </div>
          <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember_me">Remember me</label>
          </div>
          <div class="pass_link"><a href="ForgotPassword">Forgot password?</a></div>
        </div>
        
        <div class="button">
          <button>Login</button>
        </div>
      </form>
    </div>
    <p>Don't Have An Account <div class="pass_link"><a href="Regestration">Regester Now</a></div></p>
  </div>

</body>
</html>
