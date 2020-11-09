    <footer class="footer-area section_gap">
      <div class="container">
        @if(!empty($banner))
        @foreach($banner as $item )
            @if($item->status == 1)
                @if($item->id == 107)
                    <img src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}" weight="60px" height="60px" alt="">
                @endif
            @endif
            @endforeach
        @endif
      <br>
      <br>
        <div class="row">
          <div class="col-lg-3 col-md-6 single-footer-widget">
            <h4>Abouts Us</h4>
            <ul>
              <li><a style="color:  #002347" href="#">User Manual</a></li>
              <li><a style="color:  #002347" href="#">Privacy Policy</a></li>
              <li><a style="color:  #002347" href="#">Terms of Use</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 single-footer-widget">
            <h4>Pass-level review</h4>
            <ul>
              <li><a style="color:  #002347" href="#">Put it to class 10</a></li>
              <li><a style="color:  #002347" href="#">High school graduation exam</a></li>
              <li><a style="color:  #002347" href="#">College entrance exam</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 single-footer-widget">
            <h4>Certificate of certificate</h4>
            <ul>
              <li><a style="color:  #002347" href="#">Toeic</a></li>
              <li><a style="color:  #002347" href="#">Toefl</a></li>
              <li><a style="color:  #002347" href="#">Ielts</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 single-footer-widget">
            <h4>Contact</h4>
            <ul>
              <li><a style="color:  #002347" href="#"><i class="ti-instagram"></i> Instagram</i></a></li>
              <li><a style="color:  #002347" href="#"><i class="ti-google"></i> gmail@gmail.com</i></a></li>
              <li><a style="color:  #002347" href="#"><i class="ti-facebook"></i> Account FB</i></a></li>
            </ul>
          </div>
        </div>
      </div>
</footer>