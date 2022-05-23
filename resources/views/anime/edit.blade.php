<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update Anime</title>
</head>
<body>
  <form action="/anime/{{ $animeEdit->id }}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
    title: <input type="text" name="title" id="" value="{{ $animeEdit->title }}"><br>
    
    description: <input type="textarea" name="description" id="" value="{{ $animeEdit->description }}"><br>
    
    release date: <input type="date" name="release_date" id="" value="{{ $animeEdit->release_date }}"><br>
    
    episode: <input type="number" name="episode" id="" value="{{ $animeEdit->episode }}"><br>

    status: <input type="text" name="status" id="" value="{{ $animeEdit->status }}" ><br>
    
    <input type="submit" value="submit" name="submit">
  </form>
</body>
</html>