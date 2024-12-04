<!DOCTYPE html>
<html lang="en">

<head>
  <title>Meme generator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <div class="text-center mb-4">
      <h2>Meme Generator</h2>
      <p>Press generate button to generate list of memes</p>
      <a href="/generate-meme" class="btn btn-success">Generate Meme</a>
    </div>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Meme</th>
          <th class="text-center">Image</th>
        </tr>
      </thead>
      <tbody>
        @foreach($memes as $meme)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$meme->name}}</td>
          <td class="text-center"><img src="{{$meme->url}}" alt="img" width=20%></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</body>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</html>