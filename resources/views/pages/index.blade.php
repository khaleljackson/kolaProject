@extends('template.default')
    @section('content')

    <div class="container">
        <div class="row">
            <!-- jumbotron -->
            <div class="jumbotron jumbotron-fluid col-12">
                <div class="container">
                    <h1 class="display-3">Welcome To Akl Albayt</h1>
                    <p class="lead">Home screen consist of all the current restruants</p>
                </div>
            </div>
            <!-- END of jumbtron -->
            @foreach($cocker as $data)
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="card">
                    <a href="./{{$data->id}}"><img class="card-img-top" src="{{ asset('storage/' . $data->avatar )}}" style="width:full; height:250px; padding:5px; border:10px solid white; border-radius: 20%;" alt=""></a>
                    <div class="card-body">
                        <h5 class="card-title">{{$data->name}}</h5>
                        <p class="card-text">{{$data->address}}</p>
                        <p class="card-text">{{$data->phone}}</p>
                        <hr>
                        <a href="./{{$data->id}}">
                            <button class="btn btn-primary" type="button">Menu</button>
                        </a>
                        
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

        
@endsection