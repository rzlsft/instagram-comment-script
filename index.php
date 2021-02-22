

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RZLSFT · Instagram ücretsiz yorum scripti</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<meta name="theme-color" content="#7952b3">


    <style>
    	html,
body {
  overflow-x: hidden; /* Prevent scroll on narrow devices */
}

body {
  padding-top: 56px;
}

@media (max-width: 991.98px) {
  .offcanvas-collapse {
    position: fixed;
    top: 56px; /* Height of navbar */
    bottom: 0;
    left: 100%;
    width: 100%;
    padding-right: 1rem;
    padding-left: 1rem;
    overflow-y: auto;
    visibility: hidden;
    background-color: #343a40;
    transition: transform .3s ease-in-out, visibility .3s ease-in-out;
  }
  .offcanvas-collapse.open {
    visibility: visible;
    transform: translateX(-100%);
  }
}

.nav-scroller {
  position: relative;
  z-index: 2;
  height: 2.75rem;
  overflow-y: hidden;
}

.nav-scroller .nav {
  display: flex;
  flex-wrap: nowrap;
  padding-bottom: 1rem;
  margin-top: -1px;
  overflow-x: auto;
  color: rgba(255, 255, 255, .75);
  text-align: center;
  white-space: nowrap;
  -webkit-overflow-scrolling: touch;
}

.nav-underline .nav-link {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: .875rem;
  color: #6c757d;
}

.nav-underline .nav-link:hover {
  color: #007bff;
}

.nav-underline .active {
  font-weight: 500;
  color: #343a40;
}

.text-white-50 { color: rgba(255, 255, 255, .5); }

.bg-purple { background-color: #6f42c1; }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>
  <body class="bg-light">
    


<main class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
    <H1>R</H1>
    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1">zlsft - Instagram ücretsiz yorum scripti</h1>
    
    </div>
  </div>


  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Ayarlar</h6>
    
   
   <form id="yorumForm">
  <fieldset >
   
    <div class="mb-3">
    	<br>
      <label  class="form-label">Gönderi Linki :</label>
      <input name="media" type="text" class="form-control">
    </div>
    <div class="mb-3">
      <label  class="form-label">Yorumunuz</label>
     <input name="text" type="text"class="form-control">
    </div>

      <div class="mb-3">
      <label  class="form-label">Kaç Adet</label>
     <input name="adet" type="text"class="form-control">
    </div>

     <div class="mb-3">
      <label  class="form-label">Yorumlar Arası bekleme saniyesi</label>
     <input name="delay" type="text"class="form-control">
    </div>

    <div class="mb-3">
      <label  class="form-label">Yorumunun Sonuna Random Koy</label>
     <select name="random" class="form-select">
       <option value="0" class="form-option">Koyma</option>
       <option value="1" class="form-option">Sayı koy (orn: #165489)</option>
       <option value="2" class="form-option">Yazı koy (orn: #afdg3s)</option>
     </select>
    </div>


    <?php 
   

     ?>
   
   <div align="center">
   	<div id="loader2" style="color: #6f42c1!important;" class="spinner-border" role="status">
		</div>
   	 <button id="yorumButton" type="button" class="btn btn-primary" style="background-color: #6f42c1!important; border-color: #6f42c1!important;">Yorumları Gönder</button>
   </div>
  </fieldset>
</form>



  </div>
  <div class="my-3 p-3 bg-body rounded shadow-sm">
     <form id="userKaydet">
  <fieldset >
   
    <div class="mb-3">
    	<br>
      <label  class="form-label">Username</label>
      <input name="username" type="text" class="form-control">
    </div>
    <div class="mb-3">
      <label  class="form-label">Password</label>
     <input name="password" type="text" class="form-control">
    </div>

    <div class="mb-3">
      <label  class="form-label">Proxy</label>
     <input name="proxy" type="text" class="form-control">
    </div>
   
   <div align="center">
   	<div id="loader" style="color: #6f42c1!important;" class="spinner-border" role="status">
		</div>
   	 <button type="button" id="userButton" class="btn btn-primary" style="background-color: #6f42c1!important;border-color: #6f42c1!important;">User Ekle</button>
   </div>
  </fieldset>
</form>
  </div>

   <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Userler</h6>

<?php 
error_reporting(0);
$dosya = fopen('userler.txt', 'r');
$icerik = fread($dosya, filesize('userler.txt'));
$donusturme=explode("-",$icerik);
$s=1;
foreach ($donusturme as $donus) {
  $degerler=explode(",",$donus);
  $username = str_replace("[", "", $degerler[0]);
  @$password = str_replace("]", "", $degerler[1]);
  @$proxy = str_replace("]", "", $degerler[2]);

  if (!empty($password)) {
  	# code...
 
	?>
 <div class="d-flex text-muted pt-3">
      <svg  class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title></title><rect width="100%" height="100%" fill="#6f42c1"/><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg><?=$s?>

      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark"><b style="color: #6f42c1!important;">Username: </b><?=$username ?> ||| <b style="color: #6f42c1!important;">Şifre: </b><?= $password?> || <b style="color: #6f42c1!important;">Proxy</b> : <?=$proxy?></strong>
        
      </p>
    </div>
	<?php
	 }
	 $s++;
}
fclose($dosya);
 ?>

  



  </div>
<div id="sonuc"></div>
</main>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
<script>
$(document).ready(function(){
	$("#loader").hide(1);
	$("#userButton").on("click", function(){ 
		$("#loader").toggle(1);
		$("#userButton").hide(1);
		var userkaydetme = $("#userKaydet").serialize(); 
		$.ajax({
			url:'controller.php',
			type:'POST',
			data:userkaydetme,
			dataType: 'json',
			success:function(e){ 
				$("#loader").hide(1);
				$("#userButton").toggle(1);
				if (e.durum == "hata") {
					Swal.fire(
  e.message,
  '',
  'warning'
)
				}else if(e.durum == "basarili"){
					Swal.fire(
  e.message,
  '',
  'success'
)
				}
			}
		});
		
	});
$("#loader2").hide(1);
	$("#yorumButton").on("click", function(){ 
		$("#loader2").toggle(1);
		$("#yorumButton").hide(1);
		var yorum = $("#yorumForm").serialize(); 
		$.ajax({
			url:'controller.php',
			type:'POST',
			data:yorum,
			dataType: 'json',
			success:function(e){ 
				$("#loader2").hide(1);
				$("#yorumButton").toggle(1);
				if (e.durum == "hata") {
					Swal.fire(
  e.message,
  '',
  'warning'
)
				}else if(e.durum == "basarili"){
					Swal.fire(
  e.message,
  '',
  'success'
)
				}
			}
		});
		
	});
});
</script>
  </body>
</html>
