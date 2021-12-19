<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    <h1>View Songs</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Singer</th>
            <th scope="col">Album</th>
            <th scope="col">Country</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($songs as $song)
                <tr>
                <th scope="row">{{ $song->id }}</th>
                <td>{{ $song->title }}</td>
                <td>{{ $song->singer }}</td>
                <td>{{ $song->album }}</td>
                <td>{{ $song->country }}</td>
                <td>
                    <a href="{{route('getSongById', ['id'=>$song->id])}}"><button type="submit" class="btn btn-success">Edit</button></a>
                    <form action="{{route('delete', ['id'=>$song->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>

                </tr>
            @endforeach
        </tbody>
      </table>

      {{-- <form action="{{route('getCreatePage')}}" method="get">
        <button type="submit" class="btn btn-success">Create Song</button>
      </form> --}}
      <a href="{{route('getCreatePage')}}"><button type="submit" class="btn btn-success">Input Song</button></a>
      {{-- <button type="button" class="btn btn-success" onclick="window.location='{{ route('createSong') }}'">Create Song</button> --}}
</body>
</html>
