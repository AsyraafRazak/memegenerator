<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <div class="container">
    <h2>Meme Generator</h2>
    <p>Press generate bbutton to generate list of memes</p>
    <a href="/generate-meme" class="btn btn-success mb-4">Generate Meme</a>
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Meme</th>
          <th>Image</th>
        </tr>
      </thead>
      <tbody>
        @foreach($memes as $meme)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$meme->name}}</td>
          <td><img src="{{$meme->url}}" alt="img" width=10%></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</body>

</html>