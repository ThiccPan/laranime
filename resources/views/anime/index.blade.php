<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <a href="/anime/create">Add new Anime</a>
  <table border="1">
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Description</th>
      <th>Release date</th>
      <th>Episode</th>
      <th>Status</th>
      <th>Created_at</th>
      <th>Updated_at</th>
      <th>Action</th>
    </tr>
    @foreach ($animes as $anime)
      <tr>
        <td>{{ $anime['id'] }}</td>
        <td>{{ $anime['title'] }}</td>
        <td>{{ $anime['description'] }}</td>
        <td>{{ $anime['release_date'] }}</td>
        <td>{{ $anime['episode'] }}</td>
        <td>{{ $anime['status'] }}</td>
        <td>{{ $anime['created_at'] }}</td>
        <td>{{ $anime['updated_at'] }}</td>
        <td><a href="/anime/{{ $anime->id }}/edit">edit</a> 
        <form action="/anime/{{ $anime->id }}" method="post">
          @csrf
          @method('delete')
          <input type="submit" name="submit" value="delete">
        </form>
      </tr>
    @endforeach
  </table>
</body>
</html>