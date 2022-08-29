<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/regestration.css')}}">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>REGESTRATION</title>
   </head>
<body>
  <div class="container">
    <div class="title">Create Account</div>
    <div class="content">
      <form action="{{route('StoreRegestration')}}" method="POST">
        {{@csrf_field()}}
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="p_name" placeholder="Enter First Name">
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="p_name" placeholder="Enter Last Name">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="p_mail" placeholder="Enter Email">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="p_phn" placeholder="Enter Phone Number">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="p_pass" placeholder="Enter A Password">
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="pass" placeholder="ENTER Password Again">
          </div>
          <div class="input-box">
            <span class="details">Image (Optional)</span>
            <input type="file" name="p_image">
          </div>
          <div class="input-box">
            <span class="details">Select User Type</span>
            <select>
              <option>Student</option>
              <option>Normal Passenger</option>
              <option>Bus Company</option>
          </select>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="p_gender" id="dot-1">
          <input type="radio" name="p_gender" id="dot-2">
          <input type="radio" name="p_gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Other</span>
            </label>
          </div>
        </div>
        <div class="button">
          <button>Regester</button>
        </div>
      </form>
    </div>
    <p>Already Have An Account <div class="pass_link"><a href="Login">Log In</a></div></p>
  </div>

</body>
</html>
