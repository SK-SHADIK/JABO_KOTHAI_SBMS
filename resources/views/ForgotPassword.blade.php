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
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">OLD PASSWORD</span>
            <input type="text" name="pass" placeholder="Enter Old Password">
          </div>
        </div>
        <div class="user-details">
            <div class="input-box">
                <span class="details">New PASSWORD</span>
                <input type="text" name="pass" placeholder="Enter New Password" >
            </div>
            <div class="input-box">
                <span class="details">Re-Type PASSWORD</span>
                <input type="text" name="pass" placeholder="Enter Again Password">
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
