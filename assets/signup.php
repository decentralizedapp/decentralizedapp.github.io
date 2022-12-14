
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');

body {
  background: linear-gradient(to top right, #4199fe, #74b4fe);
}

.login {
  width: 360px;
  padding: 8% 0 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: 'Comfortaa', cursive;
}

.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  border-radius: 10px;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
}

.form input {
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  border-radius: 5px;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  font-family: 'Comfortaa', cursive;
}

.form input:focus {
  background: #dbdbdb;
}

.form button {
  font-family: 'Comfortaa', cursive;
  text-transform: uppercase;
  outline: 0;
  background: #4b6cb7;
  width: 100%;
  border: 0;
  border-radius: 5px;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}

.form button:active {
  background: #4199fe;
}

.form span {
  font-size: 75px;
  color: #4199fe;
}
    </style>


    </div>
    <div class="login">
        <div class="form">
          <form class="login-form" method="post" action="createaccount.php">
            <span class="material-icons">Admin</span>
            <img src="assets/images/WC.jpg" alt="company-logo" style="max-width:60px">
            <input name="username" type="text" placeholder="email">
            <input name="password" type="password" placeholder="password" required>
            <button type="submit">Register</button>
        
          </form>  
            <a href="login.php">Login</a>
        </div>
           
      </div>
</html>