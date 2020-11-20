<footer class="footer-area section_gap_footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 single-footer-widget">
                @if(!empty($banner))
                @foreach($banner as $item )
                @if($item->status == 1)
                @if($item->id == 107)
                <img style="margin: 30% 0 0 30%" src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}" weight="100px" height="100px" alt="">
                @endif
                @endif
                @endforeach
                @endif
            </div>
            <div class="col-md-3 single-footer-widget">
                <h4 class="text-center">Chứng chỉ</h4>
                <ul>
                    <li class="text-center"><a style="color:  #fff" href="#">KET</a></li>
                    <li class="text-center"><a style="color:  #fff" href="#">PET</a></li>
                    <li class="text-center"><a style="color:  #fff" href="#">Toeic</a></li>
                    <li class="text-center"><a style="color:  #fff" href="#">Ielts</a></li>
                </ul>
            </div>
            <div class=" col-md-3 single-footer-widget">
                <h4 class="text-center">Ôn thi vào lớp 10</h4>
                <h4 class="text-center">Ôn thi THPT</h4>
                <h4 class="text-center">Ôn thi Đại học</h4>
                <h4 class="text-center">Tiếng anh chuyên nghành</h4>
            </div>
            <div class="col-md-3 single-footer-widget">
                <h2>Mrs. Tên GV</h2>
                <p>Chức vụ</p>
                <br>
                <h4>Thông tin liên hệ</h4>
                <div class="col-lg-12 col-sm-12 footer-social">
                    <a href="#"><i style="color: #002663" class="fab fa-facebook-square fa-2x"></i></i></a>
                    <a href="#"><i style="color: #002663" class="fab fa-instagram fa-2x"></i></i></a>
                    <a href="#"><i style="color: #002663" class="fas fa-envelope fa-2x"></i></a>
                  </div>
            </div>
        </div>
</footer>