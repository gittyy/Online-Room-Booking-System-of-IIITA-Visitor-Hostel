<html>
<head>
   <meta name="google-signin-client_id" content="446144230686-lam76do77qqujqjjujvvi67uja5hg23s.apps.googleusercontent.com">
</head>
<body>
  <script>
    function onSignIn(googleUser) {
      var profile = googleUser.getBasicProfile();
      var user_name = profile.getName();
      alert(user_name);
	  window.location.href = "userinfo.php";
    }

    function onLoad() {
      gapi.load('auth2,signin2', function() {
        var auth2 = gapi.auth2.init();
        auth2.then(function() {
          // Current values
          var isSignedIn = auth2.isSignedIn.get();
          var currentUser = auth2.currentUser.get();

          if (!isSignedIn) {
            // Rendering g-signin2 button.
            gapi.signin2.render('google-signin-button', {
              'onsuccess': 'onSignIn'  
            });
          }
        });
      });
    }
  </script>

  <div id="google-signin-button"></div>

  <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
</body>
</html>