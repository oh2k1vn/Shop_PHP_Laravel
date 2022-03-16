 <!-- promotion section -->
 <div class="promotion">
     <div class="row">

         @foreach ($promotion as $item)
             <div class="col-4 col-md-12 col-sm-12">
                 <div class="promotion-box">
                     <div class="text">
                         <h3>{{ $item->name }}</h3>
                         <a href="{{ $item->route }}"> <button class="btn-flat btn-hover">Bộ sưu tầm</button></a>
                     </div>
                     <img src="{{ asset('images/promotion/' . $item->image) }}" alt="">
                 </div>
             </div>
         @endforeach
         {{-- <div class="col-4 col-md-12 col-sm-12">
            <div class="promotion-box">
                <div class="text">
                    <h3>JBL Quantum Series</h3>
                    <button class="btn-flat btn-hover"><span>Bộ sưu tầm</span></button>
                </div>
                <img src="./images/kisspng-beats-electronics-headphones-apple-beats-studio-red-headphones.png" alt="">
            </div>
        </div>
        <div class="col-4 col-md-12 col-sm-12">
            <div class="promotion-box">
                <div class="text">
                    <h3>True Wireless Earbuds</h3>
                    <button class="btn-flat btn-hover"><span>Bộ sưu tầm</span></button>
                </div>
                <img src="./images/JBL_TUNE220TWS_ProductImage_Pink_ChargingCaseOpen.png" alt="">
            </div>
        </div> --}}
     </div>
 </div>
 <!-- end promotion section -->
