@extends('layouts.master')

@section('content')

    <form method="post" action="/save" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile" name="file">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <br/>


@endsection