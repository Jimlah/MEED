<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ env("APP_NAME") }}</title>
  <style>
    * {
      margin: 0;
      padding:0;
    }
  </style>
</head>
<body class="w-full h-screen " >
  <div class="w-full h-screen bg-center bg-no-repeat bg-contain"  style="background-image: url('{{ asset("img/hm.jpg") }}')">
    <span class="text-white">Hey</span>
  </div>
</body>
</html>