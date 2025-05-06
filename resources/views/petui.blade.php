@extends('main')

@section('content')
<div class="container">
    <div class="row hello">
        <div class="col-md-12 text-center">
            <br>
            <h1>Welcome, pet lover!</h1>
            <p style="font-size:large;">Every paw deserves a sweet home ❤️</p>
        </div>

    </div>
    <div class="row" style="align-content: center;">
    <img class = "img-fluid"  style="border-radius: 15px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);" src="https://img.freepik.com/free-photo/beautiful-shot-different-dog-breeds-resting_181624-19887.jpg?t=st=1745288793~exp=1745292393~hmac=85ac416000fb3d404b43398a324f65a29afb39e8f111873cae3dd8b58cd0928b&w=826">
    </div>
    <div class="row" style="text-align: center;">
        <h2><br>Have you always wanted to adopt a pet?</h2>
        <p style="font-size: large;">Give our furry companions chances to feel warmth and enjoyment with your arms.</p>
    </div>
</div>

        <div class="container Carousel1">
        <div class="container-fluid Carousel_1 text-center">
            <div class="row" >
                <div class="col-md-12 align-content-center">
                    <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" style="width: 70%; height: 70%; border-radius: 15px" src="https://img.freepik.com/free-photo/closeup-shot-one-ginger-cat-hugging-licking-other-isolated-white-wall_181624-32893.jpg?t=st=1745290733~exp=1745294333~hmac=b35c1f4b3b98b9ce0dd8c4d5a99b9e0e65cc6040630dac382e83013b016bd9ee&w=996" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" style="width: 70%; height: 70%; border-radius: 15px" src="https://img.freepik.com/free-photo/isolated-shot-retriever-dog-snuggling-with-calico-cat-front-white-background_181624-34866.jpg?t=st=1745290756~exp=1745294356~hmac=63208dc56e868064c3a7a1c66dcf8aec3e3a9b4fd0f038fbcb33eda68e5300c0&w=996" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" style="width: 70%; height: 70%; border-radius: 15px" src="https://img.freepik.com/premium-photo/cute-dog-cat-together-white-background_392895-469501.jpg?w=1380" alt="Third slide">
                            </div>

                        </div>

                        <!-- Navigation Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    hello cla
                </div>
            </div>
        </div>
@endsection
