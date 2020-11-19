    <footer class="footer-area section_gap_footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 row footer-bottom d-flex justify-content-between">
            @if(!empty($banner))
                @foreach($banner as $item )
                @if($item->status == 1)
                    @if($item->id == 107)
                    <a href="{{route('home') }}">
                      <img src="{{Storage::url('/upload/img/banner/'.$item->avatar)}}" weight="60px" height="60px" alt="">
                    </a>
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
            {{-- @foreach($postcats) --}}
            <ul>
                @if(!empty($postcats))
               
                  @foreach($postcats as $cats)
                  @if($cats->status == 1)
                    @if($cats->id == 37)
                      @foreach($postcats as $child)
                        @if($child->id ==41 )
                          @foreach( $postcats as $child2)
                            @if( $child2->vi_tri==41)
                                <li class="text-center">
                                  <a style="color:#fff" href="{{asset($cats->slug.'/'.$child->slug.'/'.$child2->slug)}}">  {{$child2->title}}
                                  </a>
                                </li>                         
                            @endif 
                          @endforeach
                        @endif
                      @endforeach
                    @endif
                    @endif
                  @endforeach
                 
                @endif
          
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4 class="text-center">Ôn thi lớp 10</h4>
            <ul>
              @if(!empty($postcats))
            
                  @foreach($postcats as $cats)
                  @if($cats->status == 1)
                    @if($cats->id == 37)
                      @foreach($postcats as $child)
                        @if($child->id ==42 )
                          @foreach( $postcats as $child2)
                            @if( $child2->vi_tri==42)
                                <li class="text-center">
                                  <a style="color:#fff" href="{{asset($cats->slug.'/'.$child->slug.'/'.$child2->slug)}}">  {{$child2->title}}
                                  </a>
                                </li>                         
                            @endif 
                          @endforeach
                        @endif
                      @endforeach
                    @endif
                    @endif
                  @endforeach
              
                @endif
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4 class="text-center">Ôn thi THPT</h4>
            <ul>
              @if(!empty($postcats))
            
              @foreach($postcats as $cats)
              @if($cats->status == 1)
                @if($cats->id == 37)
                  @foreach($postcats as $child)
                    @if($child->id ==43 )
                      @foreach( $postcats as $child2)
                        @if( $child2->vi_tri==43)
                            <li class="text-center">
                              <a style="color:#fff" href="{{asset($cats->slug.'/'.$child->slug.'/'.$child2->slug)}}">  {{$child2->title}}
                              </a>
                            </li>                         
                        @endif 
                      @endforeach
                    @endif
                  @endforeach
                @endif
                @endif
              @endforeach
          
            @endif
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4 class="text-center">Ôn thi đại học</h4>
            <ul>
              @if(!empty($postcats))
             
              @foreach($postcats as $cats)
              @if($cats->status == 1)
                @if($cats->id == 37)
                  @foreach($postcats as $child)
                    @if($child->id ==44)
                      @foreach( $postcats as $child2)
                        @if( $child2->vi_tri==44)
                            <li class="text-center">
                              <a style="color:#fff" href="{{asset($cats->slug.'/'.$child->slug.'/'.$child2->slug)}}">  {{$child2->title}}
                              </a>
                            </li>                         
                        @endif 
                      @endforeach
                    @endif
                  @endforeach
                @endif
                @endif
              @endforeach
           
            @endif
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4 class="text-center">Chuyên nghành</h4>
            <ul>
              @if(!empty($postcats))
            
              @foreach($postcats as $cats)
              @if($cats->status == 1)
                @if($cats->id == 37)
                  @foreach($postcats as $child)
                    @if($child->id ==45)
                      @foreach( $postcats as $child2)
                        @if( $child2->vi_tri==45)
                            <li class="text-center">
                              <a style="color:#fff" href="{{asset($cats->slug.'/'.$child->slug.'/'.$child2->slug)}}">  {{$child2->title}}
                              </a>
                            </li>                         
                        @endif 
                      @endforeach
                    @endif
                  @endforeach
                @endif
                @endif
              @endforeach
           
            @endif
            </ul>
          </div>
        </div>
      </div>
</footer>