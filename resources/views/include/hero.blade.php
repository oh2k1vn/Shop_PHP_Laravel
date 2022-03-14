 <!-- hero section -->
 <div class="hero">
    <div class="slider">
        <div class="container">
            
            <!-- slide item -->
            @foreach ($banner as $item)       
            <div class="slide active">
                <div class="info">
                    <div class="info-content">
                        {{-- <h3 class="top-down">
                            JBL TUNE 750TNC
                        </h3> --}}
                        <h2 class="top-down trans-delay-0-2">
                            {{$item->title}}
                        </h2>
                        <p class="top-down trans-delay-0-4">
                            {{$item->content}}
                        </p>
                        <div class="top-down trans-delay-0-6">
                            <button class="btn-flat btn-hover">
                                <span>Mua ngay</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="img top-down">
                    <img src="{{ asset('images/banner/'.$item->image) }}" alt="">
                </div>
            </div>
            @endforeach
        </div>
        <!-- slider controller -->
        <button class="slide-controll slide-next">
            <i class='bx bxs-chevron-right'></i>
        </button>
        <button class="slide-controll slide-prev">
            <i class='bx bxs-chevron-left'></i>
        </button>
        <!-- end slider controller -->
    </div>
</div>
<!-- end hero section -->