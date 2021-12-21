@extends('layouts.layout')
@section('content')
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
@endsection
