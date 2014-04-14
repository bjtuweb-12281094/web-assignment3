
<html>
<head><meta charset="utf-8"/>
  <title>index</title>
   <script type="text/javascript">
      function validate() {
        var name = document.getElementById("name");
        if (!name.value) {
          name.style.borderColor = "red";
          return (false);
        }
        var password = document.getElementById("password");
        if (!password.value) {
          password.style.borderColor = "red";
          return (false);
        }
      }
  </script>
</head>
<body>
  <form action="login.php" method="post">
  <p align="center">
    用户名 : <input id="name" type="text" name="name"/>
    密码 : <input id="password" type="password" name="password"/>
  </p>  
  <p align="center">
    <button type="submit" name="Submit" onclick="return validate()">登录</button>
    <input type="reset"name="reset"value="重置">&nbsp;
    <a class="a" href="register.php">注册</a>
  </p>
  </form>
</body>
</html>
