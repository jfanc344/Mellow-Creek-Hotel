<div id="model-container1" onclick="modalexit()">

<div class="login-container">
  <div class="registerForm">
    <p class="formtitle">LOG IN</p>

  <form action="../../controller/loginprocess.php" method="post">
    <label><b>Username:</b></label>
    <input type="text" name="Username" id="Username" autofocus>
    <label><b>Password:</b></label>
    <input type="password" name="Password" id="Password">
    <div class="modal-buttons-cont">
      <a class="modal-no-buton" onclick="exitform()" onchange="openmodal()">Cancel</a>
    <button class="modal-yes-button" type="submit" name="login" id="login" value="login">Log in</button>
  </div>
  </form>
  </div>
</div>

</div>


<div id="model-container2" onclick="modalexit()">
<div class="login-container">
<div class="registerForm">
  <p class="formtitle">CUSTOMER SERVICE LOGIN</p>

<form action="../../controller/loginprocess.php" method="post">
  <label><b>Username:</b></label>
  <input type="text" name="Username" id="Username" autofocus>
  <label><b>Password:</b></label>
  <input type="password" name="Password" id="Password">
  <div class="modal-buttons-cont">
  <a class="modal-no-buton" onclick="exitform()">Cancel</a>
  <button  class="modal-yes-button" type="submit" name="service" id="service" value="service">Log in</button>
</div>
</form>
</div>
</div>
</div>


<div id="model-container3" onclick="modalexit()">
<div class="login-container">

  <div class="registerForm">
    <p class="formtitle">ADMIN LOGIN</p>

  <form action="../../controller/loginprocess.php" method="post">
    <label><b>Username:</b></label>
    <input type="text" name="Username" id="Username" autofocus>
    <label><b>Password:</b></label>
    <input type="password" name="Password" id="Password">
    <div class="modal-buttons-cont">
    <a class="modal-no-buton" onclick="exitform()">Cancel</a>
  <button class="modal-yes-button" type="submit" name="admin" id="admin" value="admin">Log in</button>
  </div>
  </form>
  </div>

</div>
</div>

<div id="Registermodal" onclick="modalexit()">
<div class="login-container">

  <div class="registerForm">
    <p class="formtitle">ADMIN LOGIN</p>
    <div class="errorbox">

    </div>

  </div>

</div>
</div>
