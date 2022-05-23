<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
    form {
      display:block;
      
    }
  </style>
  <title>Document</title>
</head>
<body>
  <form action="/anime/insert" method="post" enctype="multipart/form-data">
    @csrf
    title: <input type="text" name="title" id=""><br>
    description: <input type="textarea" name="description" id=""><br>
    release date: <input type="date" name="release_date" id=""><br>
    episode: <input type="number" name="episode" id=""><br>
    status: <input type="text" name="status" id="">
    <input type="submit" value="submit" name="submit">
  </form>
</body>
</html>