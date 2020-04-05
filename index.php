<!doctype html>

<html lang="tr">
  <head>
    <meta name="author" content="Hakan Öztürk">
    <title>Web Teknolojileri Proje Ödevi</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">

  </head>
  <body>

    <?php
    if (!$_POST) {
    }
    else {
      $mail = preg_split("/@/", $_POST["girilenMail"]);
      $giren = $mail[0];
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <nav class="navbar navbar-expand-md sticky-top navbar-light">
      <a class="navbar-brand">Hakan Öztürk</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#pills-tab" aria-controls="pills-tab" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="pills-tab" role="tablist">
          <ul class="nav nav-pills mr-auto">
            <li class="nav-item">
              <a class="nav-link active" id="pills-hakkinda" data-toggle="pill" href="#hakkinda" role="tab" aria-controls="pills-hakkinda" aria-selected="true">Hakkında</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-ozgecmis-tab" data-toggle="pill" href="#ozgecmis" role="tab" aria-controls="pills-ozgecmis" aria-selected="false">Özgeçmiş</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-sehrim-tab" data-toggle="pill" href="#sehrim" role="tab" aria-controls="pills-sehrim" aria-selected="false">Şehrim</a>
            </li>
          </ul>
          <?php 
                  if (!$_POST) {
                    echo "
                    <span class='nav-item'>
                      <a class='nav-link' href='login.html'>Giriş Yap</a>
                    </span>
                    ";
                  }
                  else {
                    echo "
                    <a class='nav-link dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'><b>$giren</b> olarak giriş yapıldı.</a>
                    <div class='dropdown-menu dropdown-menu-left dropdown-menu-md-right'>
                      <a class='dropdown-item' href='/index.php'>Çıkış</a>
                    </div>
                    ";
                  }
                ?>
        </div>
      </nav>
      <div class="tab-content" id="pills-tabcontent">
        <div class="tab-pane fade show active" id="hakkinda" role="tabpanel" aria-labelledby="pills-hakkinda-tab">

<div class="container-fluid">
  <div class="row">
    <div class="col-1"></div>
    <div class="col" style="background-color:#ffffff;">
      <div class="row" style="height: 5px;"></div>
      Merhaba Dünya! #hakkinda

    </div>
    <div class="col-1"></div>
  </div>
</div>

        </div>

        <div class="tab-pane fade" id="ozgecmis" role="tabpanel" aria-labelledby="pills-ozgecmis-tab">

<div class="container-fluid"> 
 <div class="row">
   <div class="col-1"></div>
   <div class="col" style="background-color:#ffffff;">
     <div class="row" style="height: 5px;"></div>
     Merhaba Dünya! #ozgecmis

   </div>
   <div class="col-1"></div>
 </div>
</div>

        </div>

        <div class="tab-pane fade" id="sehrim" role="tabpanel" aria-labelledby="pills-sehrim-tab">

<div class="container-fluid"> 
 <div class="row">
   <div class="col-1"></div>
   <div class="col" style="background-color:#ffffff;">
     <div class="row" style="height: 5px;"></div>
     Merhaba Dünya! #sehrim

   </div>
   <div class="col-1"></div>
 </div>
</div>

        </div>

      </div>
    </body>
</html>