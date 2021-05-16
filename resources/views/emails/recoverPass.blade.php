
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recovery Mail</title>
</head>
<body>
  <h2>Hello, {{ $user->firstname }}</h2>
  <br/> Please click on the below link to verify your email account
<br/>
<a href="{{ route('recoverPassword', [$user->verifyUser->token]) }}">Verify Email</a>
</body>
</html>