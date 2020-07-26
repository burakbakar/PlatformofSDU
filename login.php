 <?php 
include("vt.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz. 

?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="google-signin-client_id" content="443654870945-bvaofoe1vfp7jfu6e2c83a94fc19kvea.apps.googleusercontent.com">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
	<script src="script.js"></script>
	<title>login</title>
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    </head>

    <body background="background-website-E280AB403608205E280AC-E280ABE280AC.jpg">
	
        <script>
  			window.fbAsyncInit = function() {
    			FB.init({
      			appId      : '509557303105938',
      			cookie     : true,
      			xfbml      : true,
      			version    : 'v5.0'
    			});
      
    			
			FB.getLoginStatus(function(response) {
    			statusChangeCallback(response);
			});

  			};

  			(function(d, s, id){
    			var js, fjs = d.getElementsByTagName(s)[0];
     			if (d.getElementById(id)) {return;}
     			js = d.createElement(s); js.id = id;
     			js.src = "https://connect.facebook.net/en_US/sdk.js";
     			fjs.parentNode.insertBefore(js, fjs);
   			}(document, 'script', 'facebook-jssdk'));

			
			function checkLoginState() {
  			FB.getLoginStatus(function(response) {
    			statusChangeCallback(response);
  			});
		}
		</script>
        <form class="form-login">
            <div class="container">
                <h1 id="login">Giriş</h1>
                <label for="username">Kullanıcı Adı</label>
                    <br>
                    <input id="inputUsername" type="text" name="username" placeholder="kuladi" autofocus required>
                    <br>
                <label for="password">Şifre</label>
                    <br>
                    <input id="inputPassword" type="password" name="sifre" placeholder="Şifre" required>
                    <br>
                <label>
                    <button class="btn btn-1 btn-1a" id="girisbtn" type="submit">Giriş</button>
                </label>
                <label>
                    <button class="btn btn-1 btn-1a" id=kydlbtn type="submit"><a href='kayıtol.php'>Kaydol</a>	</button>
                </label>
                    <br>
                <label>
                    <p id="or">veya</p>
                </label>
                <label>
                    <div class="g-signin2" data-onsuccess="onSignIn"></div>
                    <br>
                    <fb:login-button scope="public_profile,email" id="fblogin" onlogin="checkLoginState();"></fb:login-button>
                </label>
                    <br>
                <label>
                    <span class="password">Şifremi unuttum <a href="#">tıkla!</a></span>
                </label>
            
            </div>
        </form>
		
	

    </body>
</html>
