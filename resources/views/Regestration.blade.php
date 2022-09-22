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
    @if (Session::has('fail'))
      <div class="alert">{{Session::get('fail')}}</div>
    @endif
    <div class="content">
      <form action="{{route('StoreRegestration')}}" method="POST">
        {{@csrf_field()}}
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="fname" placeholder="Enter First Name">
            @error('fname')
              <div class="error">{{$message}}</div><br>
            @enderror
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="lname" placeholder="Enter Last Name">
            @error('lname')
              <div class="error">{{$message}}</div><br>
            @enderror
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="mail" placeholder="Enter Email">
            @error('mail')
              <div class="error">{{$message}}</div><br>
            @enderror
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phn" placeholder="Enter Phone Number">
            @error('phn')
              <div class="error">{{$message}}</div><br>
            @enderror
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="pass" placeholder="Enter A Password">
            @error('pass')
              <div class="error">{{$message}}</div><br>
            @enderror
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="repass" placeholder="ENTER Password Again">
            @error('repass')
              <div class="error">{{$message}}</div><br>
            @enderror
          </div>
          <div class="input-box">
            <span class="details">Select User Type</span>
            <select name="type">
              <option>SELECT ONE...</option>
              <option>Student</option>
              <option>Normal Passenger</option>
              <option>Bus Company</option>
            </select>
            @error('type')
              <div class="error">{{$message}}</div><br>
            @enderror
          </div>
          <div class="input-box">
            <span class="details">Image (Optional)</span>
            <input type="file" name="image">
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="add" placeholder="Enter Address">
            @error('add')
              <div class="error">{{$message}}</div><br>
            @enderror
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value="Male" id="dot-1">
          <input type="radio" name="gender" value="Female" id="dot-2">
          <input type="radio" name="gender" value="Other" id="dot-3">
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
          @error('ggender')
            <div class="error">{{$message}}</div><br>
          @enderror
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
