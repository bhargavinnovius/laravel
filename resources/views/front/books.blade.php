<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <base href="http://localhost/aziksha/"> -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets/css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Verdana' rel='stylesheet'>
        <style>
        body {
        font-family: 'Verdana';
        }
        </style>
        <link href='https://fonts.googleapis.com/css?family=Arial' rel='stylesheet'>
    <link rel="icon" href="assets/images/logo.png" type="image/png" sizes="16x16">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <title>Aziksha</title>
  </head>
  <body class="class-102">
    <!-- header -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white pt-0 pb-0">
        <div class="container-fluid ml-15 mr-15">
          <a class="navbar-brand" href="/">
            <img src="assets/images/logo.png" class="" alt="Aziksha" width="75px">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse row" id="navbarScroll">
            <div class="col-lg-8">
            <input class="form-control me-2" type="search" placeholder="search 1000+ books by title, publisher, author..." aria-label="Search">
            </div>
          </div>
        </div>
      </nav>
    
      <section class="p-3">
        <div class="container">
          <div class="row mt-4 mb-4">
            <div class="col-auto">
              <img src="assets/images/icons/avtar.png" width="75px" class="img-fluid" alt="">
            </div>
            <div class="col">
              <div class="px-2">
                <h3 class="card-title font-weight-bold-900">
                  MEDICAL BOOKS
                </h3>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="p-3">
        <div class="container">
          <div class="row mt-4 mb-4">
            @if ($books)
              @foreach ($books as $item)
              <div class="col-6 col-sm-6 col-md-6 col-lg-6 column-lg-20">
                <div class="mag-section mt-5 mx-auto">
                    <div>
                      <img class="card-img-top" src="{{$item->cover}}" alt="Card image cap">
                      <div class="">
                        <b class="card-title font-size-13">
                          {{$item->headline}}
                        </b>
                        <p class="card-text figure-caption no-padding font-size-12">
                          {{$item->author}}
                        </p>
                        <p class="card-text figure-caption no-padding font-size-12">
                          {{$item->author}}
                        </p>
                      </div>
                    </div>
                </div>
              </div>
              @endforeach
            @else
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
              <div>
                <h5>
                  Didn't find what you were looking for? 
                </h5>
              </div>
              <div class="mt-3">
                <h6>
                  Be assured, we're continuously adding books to our library. <b>Join our Waitlist</b> to stay updated! 
                </h6>
              </div>
              <div class="mt-5">
                  <a class="btn btn-primary border-radius-10" href="#">
                    <h6 class="font-weight-bold" style="padding: 3px 15px 0px 15px">
                      Join Waitlist
                    </h6>
                  </a>
              </div>
              <div>
                <img src="{{ url('assets/images/dog.png') }}" class="img-fluid mt-5" alt="404" width="650px">
              </div>
            </div>
            @endif 
              
              
              
          </div>
        </div>
      </section>

      <section class="p-3 text-brown">
        <div class="container">
          <div class="row mt-4 mb-4">
            
          </div>
        </div>
      </section>

    <!-- footer -->
    @include('front.layouts.footer')
    <!-- footer end -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>