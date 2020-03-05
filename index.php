<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('templates/head.php')?>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />

</head>
<body>
<div class="row mt-5">
    <div class="col-md-6 m-auto">
        <div class="card card-body text-center">

            <p>Create an account or login</p>
            <a href="./views/register.php" class="btn btn-success btn-block mb-2">Register</a>
            <a href="views/loginSite.php" class="btn btn-success btn-block">Login</a>
        </div>
    </div>
</div>
    <div id="content"></div>
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#000",
      "text": "#0f0"
    },
    "button": {
      "background": "transparent",
      "text": "#0f0",
      "border": "#0f0"
    }
  },
  "position": "bottom-left"
});
</script>
</body>
</html>