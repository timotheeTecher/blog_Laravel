@extends('base')

@section('content')
    <div class="jumbotron bg-light">
        <h1 class="display-3 text-center">Articles</h1>
        <div class="articles row justify-content-center">
            @foreach($articles as $article)
                <div class="col-md-6 p-4">
                    <div class="card my-3 p-3">
                        <div class="car-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text">{{$article->subtitle}}</p>
                            <div class="mb-3">
                                <span class="badge bg-dark">{{$article->category->label}}</span>
                            </div>                            
                            <a href="{{route('article', $article->slug)}}" class="btn btn-primary">
                                Lire la suite
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-5">
            {{$articles->links('vendor.pagination.custom')}}
        </div>
    </div>
@endsection