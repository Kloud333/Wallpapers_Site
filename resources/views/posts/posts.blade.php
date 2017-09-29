@extends('layouts.master')

@section('content')

    <div class="row">

        @foreach($images as $image)

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <a href="/image/{{ $image->id }}"><img class="card-img-top" src="{{asset('images/'.$image->name)}}" alt=""></a>
            </div>

        @endforeach

    </div>
    <!-- /.row -->

@endsection