<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">LOGIN</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter Email" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="pass" placeholder="Enter A Password" required>
          </div>
          <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember_me">Remember me</label>
          </div>
          <div class="pass_link"><a href="#">Forgot password?</a></div>
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
