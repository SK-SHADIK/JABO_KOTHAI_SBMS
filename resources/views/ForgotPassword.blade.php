<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/forgotPassword.css')}}">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>FORGET PASSWORD</title>
   </head>
<body>
  <div class="container">
    <div class="title">FORGET PASSWORD</div>
    @if (Session::has('fail'))
      <div class="alert">{{Session::get('fail')}}</div>
    @endif
    <div class="content">
      <form action="{{route('StoreForgotPassword')}}" method="POST">
        {{ csrf_field() }}
        <div class="user-details">
          <div class="input-box">
            <span class="details">EMAIL</span>
            <input type="text" name="mail" placeholder="Enter Your Email">
          </div>
          <div class="input-box">
            <span class="details">OLD PASSWORD</span>
            <input type="text" name="pass" placeholder="Enter Old Password">
          </div>
        </div>
        <div class="user-details">
            <div class="input-box">
                <span class="details">New PASSWORD</span>
                <input type="text" name="npass" placeholder="Enter New Password" >
            </div>
            <div class="input-box">
                <span class="details">Re-Type PASSWORD</span>
                <input type="text" name="rpass" placeholder="Enter Again Password">
            </div>
        </div>
        
        <div class="button">
          <button>DONE</button>
        </div>
        <h3>OR,</h3>
        <a href="ForgotPasswordGmail">
        <div class="button">With Gmail</div>
        </a>
      </form>
    </div>
  </div>

</body>
</html>
