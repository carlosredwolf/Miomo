<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
</head>

<body>
	<div style="padding: 30px 30px 40px 30px;">
		<p style="color:#CCB089;font-size: 40px;font-weight: bold;">Miomo</p>
		<p style="font-size: 20px;">{{ $name }},<br>Welcome to <strong>Miomo</strong> !</p>
		<br><br>
		<p style="font-size: 20px;">Please confirm your email.</p>
		<br><br>
		<p style="font-size: 20px;">To do this you simply have to click on the following link:</p>

		<a href="{{ secure_url('/register/verify/' . $confirmation_code) }}" style="padding: 10px 10px 10px 10px;font-size: 20px;background-color:#CCB089;color:#FFF;height: 40px;border-radius: 5px;">
			Click to confirm your email
		</a>
		<br>
		<p style="font-size: 20px;">If you can not see this button, copy this link into your browser:</p>
		<br>
		<a style="font-size: 20px;color:#CCB089;" href="{{ secure_url('/register/verify/' . $confirmation_code) }}">{{ secure_url('/register/verify/' . $confirmation_code) }}</a>
    <br><br>
</body>
  <footer style="background-color:#22333A;height: 100px">
      <div class="container">
        <ul>
            <!--<li><a href="terminos">Terms and conditions</a></li>
              <li><a href="privacidad">Política de privacidad</a></li>-->
            </ul>
            {{-- <p style="font-weight: bold; padding-top:40px;color:#fff;text-align: center; text-decoration:none; ">Copyright © miomo.net</p>
            <p style="text-decoration:none; font-weight: bold; color:#fff;text-align: center;">contact@miomo.net</p> --}}
          </div>
  </footer>
	</div>
</html>
