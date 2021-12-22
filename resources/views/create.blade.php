@extends('layouts.layout')
@section('content')
    <h1>Input Song Form</h1>
    <form action="{{ route('createSong') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input title here">
        </div>
        <div class="mb-3">
            <label for="singer" class="form-label">Singer</label>
            <input name="singer" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input singer here">
        </div>
        <div class="mb-3">
            <label for="album" class="form-label">Album</label>
            <input name="album" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input album here">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Album Cover</label>
            <input class="form-control" type="file" id="image" name='image'>
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input name="country" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input country here">
        </div>
        {{-- <div class="mb-3">
            <label for="genreId" class="form-label">Genre</label>
            <select name="genreId" class="form-select" aria-label="Default select example">
                <option selected>Select Genre</option>
                <option value="1">Pop</option>
                <option value="2">Rock</option>
                <option value="3">Jazz</option>
              </select>
        </div> --}}
        <div class="mb-3">
            <label for="release" class="form-label">Release</label>
            <input name="release" type="date" class="form-control" id="formGroupExampleInput" placeholder="Input Date">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input name="price" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Input price here">
        </div>
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-success">Insert</button>
    </form>
@endsection
