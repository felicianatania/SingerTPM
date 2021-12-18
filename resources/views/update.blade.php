<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Documents</title>
</head>
<body>
    <h1>Update Song Form</h1>
    <form action="{{route('updateSong', ['id' => $song->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="formGroupExampleInput" value="{{$song->title}}" placeholder="Input title here">
        </div>
        <div class="mb-3">
            <label for="singer" class="form-label">Singer</label>
            <input name="singer" type="text" class="form-control" id="formGroupExampleInput" value="{{$song->singer}}" placeholder="Input singer here">
        </div>
        <div class="mb-3">
            <label for="album" class="form-label">Album</label>
            <input name="album" type="text" class="form-control" id="formGroupExampleInput" value="{{$song->album}}" placeholder="Input album here">
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input name="country" type="text" class="form-control" id="formGroupExampleInput" value="{{$song->country}}" placeholder="Input country here">
        </div>
        <div class="mb-3">
            <label for="release" class="form-label">Release</label>
            <input name="release" type="date" class="form-control" id="formGroupExampleInput" value="{{$song->release}}" placeholder="Input Date">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input name="price" type="numeric" class="form-control" id="formGroupExampleInput" value="{{$song->price}}" placeholder="Input price here">
        </div>
        {{-- @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
        <button type="submit" class="btn btn-success">Confirm</button>
    </form>
</body>
</html>
