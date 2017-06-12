<html>
<head>
<title>Admin Page</title>
<link rel="stylesheet" type="text/css"  href="css/style.css" />
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/particler.js"></script>

</head>
<body>
  <canvas id="first" class="molecules__wrapper"></canvas>

<div class="enterSite">
<button type="submit" class="btn btn-primary btn-block btn-large"  id="enter"><h1>Enter Site</h1></button>
</div>
</div>
<div class="login">
<h1>Login</h1>
  <form method="post" action="control/adminControl.php">
    <input type="text" name="name" placeholder="Username" autocomplete="off" required="required" />
    <input type="text" name="mobile" placeholder="Mobile" autocomplete="off" required="required" />
      <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
  </form>
</div>
<script type="text/javascript">
    var secondParticlerExample = new Particler("first", {
        fillColor: "#00FF96",
    });
</script>
<script src="js/userActions.js"></script>
  <script src="js/index.js"></script>
</body>
</html>
