<?php 
   session_start();
   // revoking access to php db config files (login.php/registration.php) by checking if the browser was on index.php :
   $_SESSION["step1"] = "-g32gpm32g-?edm`~,pfw"; 
   require_once 'layout' . DIRECTORY_SEPARATOR . 'header.php'; // instead of duplication header code ?>
<head>
   <title>Main Page</title>
</head>
<body>
   <h1> Main Page (Sign Up/Log In for unauthorized users here) </h1>
   <table id="table100">
      <tr>
         <td class="col1">
            <form id="regform" action="javascript:void(0);" method="post">
               <h5>Sign up</h5>
               <table id="table100">
                  <tr>
                     <td id="td10" style="text-align: rigth; font-size: smaller;">
                        login,<br>
                        password,<br>
                        confirm password,<br>
                        email,<br>
                        name,<br>
                     </td>
                     <td id="td50r">
                        <input type="text" required placeholder="Enter your login" id="login" form="regform" minlength="6" maxlength="200" autofocus="autofocus"><br>
                        <input type="password" required placeholder="Enter your password" id="password" form="regform" minlength="6" maxlength="200" pattern="^.*(?=.*\d.*\d)(?=.*[a-zA-Z].*[a-zA-Z]).*$" oninput='checkpasswordconfirmation();'><br>
                        <input type="password" required placeholder="Confirm your password" id="confirm_password" form="regform" minlength="6" maxlength="200" pattern="^[a-zA-Z0-9]+$" oninput='checkpasswordconfirmation();'><br>
                        <input type="email" required placeholder="Enter your email" id="email" maxlength="200" form="regform"><br>
                        <input type="text" required placeholder="Enter your full name" id="name" form="regform" minlength="2" maxlength="200" pattern="^[a-zA-Z]+$"><br>
                     </td>
                     <span id="hint"> hint: the registration fields will be fully validated only after the button is clicked. password - at least 6 characters, must include numbers and letters... any field has a maximum of 200 characters </span>
                     <td id="50l">
                        <span id="loginMessage"></span><br>
                        <span id="passwordMessage"></span><br>
                        <span id="confirmpasswordMessage"></span><br>
                        <span id="emailMessage"></span><br>
                        <span id="nameMessage"></span><br>
                        <span id="regMessage"></span><br>
                     </td>
                  </tr>
               </table>
               <button type="sumbit" form="regform" class="reg" id="reg">Sign up</button>
            </form>
         </td>
         <td class="col2">
            <form id="logform" action="javascript:void(0);" method="post">
               <h5>Log in</h5>
               <table id="table100">
                  <tr>
                     <td id="td50r">
                        <input type="text" required placeholder="Enter login" id="login1" form="logform" minlength="6" maxlength="200"><br>
                        <input type="password" required placeholder="Enter password" id="password1" form="logform" minlength="6" maxlength="200" pattern="^.*(?=.*\d.*\d)(?=.*[a-zA-Z].*[a-zA-Z]).*$"><br>
                        <label><input type="checkbox" class="password-checkbox">show password</label>
                     </td>
                     <td id="td50l">
                        <span id="loginMessage1"></span><br>
                        <span id="passwordMessage1"></span><br>
                     </td>
                  </tr>
               </table>
               <button type="submit" form="logform" class="auth" id="auth">Log in</button>
            </form>
         </td>
      </tr>
   </table>
   <?php require_once 'layout' . DIRECTORY_SEPARATOR . 'footer.php'; // instead of duplication footer code