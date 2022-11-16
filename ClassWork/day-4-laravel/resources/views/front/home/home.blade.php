<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css">
</head>
<body>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <a href="" class="navbar-brand">LOGO</a>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
                    <li><a href="{{route('product')}}" class="nav-link">Product</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center pb-5">All Blogs</h1>
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-4 py-3">
                                <div class="card">
                                    <img src="{{asset('/assets/images/'.$product['image'])}}" alt="" style="height: 250px">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$product['name']}}</h4>
                                        <p>{{$product['desc']}}</p>
                                        <a href="" class="btn btn-outline-dark">View Details</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="{{asset('/')}}assets/js/bootstrap.bundle.js"></script>


</body>
</html>
