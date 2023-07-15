<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $this->getTitlePage(); ?></title>
  <link rel="stylesheet" href="public/css/libs.css">
  <link rel="stylesheet" href="public/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
  <header>
    <div class="container">
      <div class="menu_git">
        <div class="logo">
          <img src="public/img/icon_top.svg" alt="git"> 
        </div>
        <nav>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Repositories</a></li>
            <li><a href="#">Search</a></li>
            <li><a href="#">Groups</a></li>
          </ul>
        </nav>
         <!-- Search -->
         <div class="btnSearch">
                <i class="ri-search-line"></i>
            </div>
      </div>
    </div>
  </header>
  <?php echo $this->viewContent(); ?>


  <script src="public/js/libs.js"></script>
  <script src="public/js/main.js"></script>
</body>

</html>