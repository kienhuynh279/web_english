    <footer class="footer-area section_gap_footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 row footer-bottom d-flex justify-content-between">
            @if(!empty($banner))
                @foreach($banner as $item )
                @if($item->status == 1)
                    @if($item->id == 107)
                        <img src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}" weight="60px" height="60px" alt="">
                    @endif
                @endif
                @endforeach
            @endif
            <div class="footer-social">
              <a href="#"><i class="ti-facebook"></i></a>
              <a href="#"><i class="ti-instagram"></i></a>
              <a href="#"><i class="ti-email"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4 class="text-center">Chứng chỉ</h4>
            <ul>
              <li class="text-center"><a style="color:  #fff" href="#">KET</a></li>
              <li class="text-center"><a style="color:  #fff" href="#">PET</a></li>
              <li class="text-center"><a style="color:  #fff" href="#">Toeic</a></li>
              <li class="text-center"><a style="color:  #fff" href="#">Ielts</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4 class="text-center">Ôn thi lớp 10</h4>
            <ul>
              <li class="text-center"><a style="color:  #fff" href="#">Luyện đề</a></li>
              <li class="text-center"><a style="color:  #fff" href="#">Theo dạng đề</a></li>
              <li class="text-center"><a style="color:  #fff" href="#">Theo chuyên đề</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4 class="text-center">Ôn thi THPT</h4>
            <ul>
              <li class="text-center"><a style="color:  #fff" href="#">Luyện đề</a></li>
              <li class="text-center"><a style="color:  #fff" href="#">Theo dạng đề</a></li>
              <li class="text-center"><a style="color:  #fff" href="#">Theo chuyên đề</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4 class="text-center">Ôn thi đại học</h4>
            <ul>
              <li class="text-center"><a style="color:  #fff" href="#">Luyện đề</a></li>
              <li class="text-center"><a style="color:  #fff" href="#">Theo dạng đề</a></li>
              <li class="text-center"><a style="color:  #fff" href="#">Theo chuyên đề</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4 class="text-center">Chuyên nghành</h4>
            <ul>
              <li class="text-center"><a style="color:  #fff" href="#">Điện lạnh</a></li>
              <li class="text-center"><a style="color:  #fff" href="#">Điện công nghiệp</a></li>
              <li class="text-center"><a style="color:  #fff" href="#">Thư tín thương mại</a></li>
              <li class="text-center"><a style="color:  #fff" href="#">Nhà Hàng KS</a></li>
            </ul>
          </div>
        </div>
      </div>
</footer>