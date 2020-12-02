<footer class="footer-area section_gap_footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 single-footer-widget">
                @if(!empty($banner))
                @foreach($banner as $item )
                @if($item->status == 1)
                @if($item->id == 107)
                <img style="margin: 30% 0 0 30%" src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}"
                    weight="100px" height="100px" alt="">
                @endif
                @endif
                @endforeach
                @endif
            </div>
            <div class="col-md-3 single-footer-widget">

                <h4 class="text-center">KET</h4>
                <h4 class="text-center">PET</h4>
                <h4 class="text-center">TOEIC</h4>
                <h4 class="text-center">IELTS</h4>
                </ul>
            </div>
            <div class=" col-md-3 single-footer-widget">
                <h4 class="text-center">Ôn thi vào lớp 10</h4>
                <h4 class="text-center">Ôn thi THPT</h4>
                <h4 class="text-center">Ôn thi Đại học</h4>
                <h4 class="text-center">Tiếng anh chuyên nghành</h4>
            </div>
            <div class="col-md-3 single-footer-widget">
                <h2 style="color: #fff">Mrs. Tên GV</h2>
                <h5 style="color: #fff">Chức vụ</h5>
                <br>
                <h4>Thông tin liên hệ</h4>
                <div class="col-lg-12 col-sm-12 footer-social">
                    <a href="#"><i style="color: #fff; margin-left:10px" class="fab fa-facebook-square fa-2x"></i></i></a>
                    <a href="#"><i style="color: #fff;margin-left:10px" class="fab fa-instagram fa-2x"></i></i></a>
                    <a href="#"><i style="color: #fff;margin-left:10px" class="fas fa-envelope fa-2x"></i></a>
                </div>
            </div>
        </div>
</footer>