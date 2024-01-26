@extends('template.default')
    @section('content')
        <!--=============== Start Header ===============-->
        <section class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="content wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.3s">
                            <img src="image/logo.png" alt="">
                            <p>{!! $title !!}</p>
                        </div>
                        <div class="social">
                            @foreach($social_links as $data)
                            <ul>
                            <a href="{{$data->facebook}}">
                                <li class="wow flipInX" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                    <svg class="backk" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70.947" height="60.563" viewBox="0 0 70.947 60.563">
                                        <defs>
                                          <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                            <stop offset="0" stop-color="#3c9d7e"/>
                                            <stop offset="1" stop-color="#c59d2c"/>
                                          </linearGradient>
                                        </defs>
                                        <g id="Group_46" data-name="Group 46" transform="translate(-185.512 -365.477)">
                                          <g id="Group_45" data-name="Group 45">
                                            <path id="Path_5138" data-name="Path 5138" d="M249.414,368.436l-3.55,13.854,2.373-.9,4.077-15.911-66.8,18.532,34.641,34.641,1.468-1.468L189.5,385.058Z" fill="url(#linear-gradient)"/>
                                            <path id="Path_5139" data-name="Path 5139" d="M244.991,382.567l3.453-13.3-57.806,15.873,22.109,22.109,1.468-1.468L194.63,386.2l50.951-13.99-2.769,11.214Z" fill="url(#linear-gradient)"/>
                                            <path id="Path_5140" data-name="Path 5140" d="M256.459,391.663,245.1,390.233l-.217,1.728,8.374,1.054L230.934,422.6l-3.2-7.173-.93,1.988,3.719,8.623Z" fill="url(#linear-gradient)"/>
                                          </g>
                                        </g>
                                    </svg>
                                    <svg class="soci" xmlns="http://www.w3.org/2000/svg" width="12.808" height="25.615" viewBox="0 0 12.808 25.615">
                                        <path id="Path_9488" data-name="Path 9488" d="M151.513,387.069h2.338V383a30.353,30.353,0,0,0-3.407-.18c-3.371,0-5.681,2.121-5.681,6.018v3.588h-3.72v4.553h3.72v11.456h4.562V396.976h3.57l.567-4.553h-4.138v-3.137c0-1.316.355-2.217,2.189-2.217Z" transform="translate(-141.043 -382.816)"/>
                                    </svg>    
                                    <img src="image/hovso.png" alt="">                                                                       
                                </li>
                                </a>
                                <a href="{{$data->instagram}}">
                                <li class="wow flipInX" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                    <svg class="backk" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70.947" height="60.563" viewBox="0 0 70.947 60.563">
                                        <defs>
                                          <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                            <stop offset="0" stop-color="#3c9d7e"/>
                                            <stop offset="1" stop-color="#c59d2c"/>
                                          </linearGradient>
                                        </defs>
                                        <g id="Group_46" data-name="Group 46" transform="translate(-185.512 -365.477)">
                                          <g id="Group_45" data-name="Group 45">
                                            <path id="Path_5138" data-name="Path 5138" d="M249.414,368.436l-3.55,13.854,2.373-.9,4.077-15.911-66.8,18.532,34.641,34.641,1.468-1.468L189.5,385.058Z" fill="url(#linear-gradient)"/>
                                            <path id="Path_5139" data-name="Path 5139" d="M244.991,382.567l3.453-13.3-57.806,15.873,22.109,22.109,1.468-1.468L194.63,386.2l50.951-13.99-2.769,11.214Z" fill="url(#linear-gradient)"/>
                                            <path id="Path_5140" data-name="Path 5140" d="M256.459,391.663,245.1,390.233l-.217,1.728,8.374,1.054L230.934,422.6l-3.2-7.173-.93,1.988,3.719,8.623Z" fill="url(#linear-gradient)"/>
                                          </g>
                                        </g>
                                    </svg>
                                    <svg class="soci" xmlns="http://www.w3.org/2000/svg" width="16.043" height="16.045" viewBox="0 0 16.043 16.045">
                                        <g id="Group_43" data-name="Group 43" transform="translate(-219 -386.786)">
                                          <path id="Path_5131" data-name="Path 5131" d="M235,391.5a5.88,5.88,0,0,0-.373-1.946,4.113,4.113,0,0,0-2.348-2.348,5.85,5.85,0,0,0-1.946-.373c-.859-.041-1.132-.05-3.311-.05s-2.451.009-3.307.047a5.835,5.835,0,0,0-1.946.373,3.9,3.9,0,0,0-1.423.928,3.95,3.95,0,0,0-.925,1.419,5.9,5.9,0,0,0-.373,1.947c-.041.859-.05,1.132-.05,3.31s.009,2.451.047,3.307a5.888,5.888,0,0,0,.373,1.947,4.107,4.107,0,0,0,2.348,2.347,5.851,5.851,0,0,0,1.946.373c.856.038,1.129.047,3.307.047s2.452-.009,3.307-.047a5.836,5.836,0,0,0,1.947-.373,4.105,4.105,0,0,0,2.348-2.347,5.9,5.9,0,0,0,.373-1.947c.037-.856.047-1.128.047-3.307S235.039,392.359,235,391.5Zm-1.445,6.551a4.4,4.4,0,0,1-.276,1.489,2.664,2.664,0,0,1-1.523,1.524,4.435,4.435,0,0,1-1.489.275c-.847.038-1.1.047-3.241.047s-2.4-.009-3.242-.047a4.4,4.4,0,0,1-1.488-.275,2.647,2.647,0,0,1-1.521-1.521,4.424,4.424,0,0,1-.275-1.489c-.038-.846-.048-1.1-.048-3.241s.01-2.4.048-3.241a4.413,4.413,0,0,1,.275-1.489,2.448,2.448,0,0,1,.6-.921,2.493,2.493,0,0,1,.922-.6,4.417,4.417,0,0,1,1.489-.276c.846-.037,1.1-.047,3.241-.047s2.4.01,3.241.047a4.405,4.405,0,0,1,1.489.276,2.651,2.651,0,0,1,1.52,1.52,4.423,4.423,0,0,1,.276,1.489c.037.847.047,1.1.047,3.241S233.594,397.208,233.557,398.054Z"/>
                                          <path id="Path_5132" data-name="Path 5132" d="M227.024,390.688a4.122,4.122,0,1,0,4.122,4.122A4.123,4.123,0,0,0,227.024,390.688Zm0,6.8a2.674,2.674,0,1,1,2.674-2.674A2.674,2.674,0,0,1,227.024,397.484Z"/>
                                          <path id="Path_5133" data-name="Path 5133" d="M232.272,390.525a.963.963,0,1,1-.963-.962A.962.962,0,0,1,232.272,390.525Z"/>
                                        </g>
                                    </svg>     
                                    <img src="image/hovso.png" alt="">                                                                                                                                                                                
                                </li>
                                </a>
                                <a href="{{$data->twitter}}">
                                <li class="wow flipInX" data-wow-duration="0.8s" data-wow-delay="0.8s">
                                    <svg class="backk" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70.947" height="60.563" viewBox="0 0 70.947 60.563">
                                        <defs>
                                          <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                            <stop offset="0" stop-color="#3c9d7e"/>
                                            <stop offset="1" stop-color="#c59d2c"/>
                                          </linearGradient>
                                        </defs>
                                        <g id="Group_46" data-name="Group 46" transform="translate(-185.512 -365.477)">
                                          <g id="Group_45" data-name="Group 45">
                                            <path id="Path_5138" data-name="Path 5138" d="M249.414,368.436l-3.55,13.854,2.373-.9,4.077-15.911-66.8,18.532,34.641,34.641,1.468-1.468L189.5,385.058Z" fill="url(#linear-gradient)"/>
                                            <path id="Path_5139" data-name="Path 5139" d="M244.991,382.567l3.453-13.3-57.806,15.873,22.109,22.109,1.468-1.468L194.63,386.2l50.951-13.99-2.769,11.214Z" fill="url(#linear-gradient)"/>
                                            <path id="Path_5140" data-name="Path 5140" d="M256.459,391.663,245.1,390.233l-.217,1.728,8.374,1.054L230.934,422.6l-3.2-7.173-.93,1.988,3.719,8.623Z" fill="url(#linear-gradient)"/>
                                          </g>
                                        </g>
                                    </svg>
                                    <svg class="soci" xmlns="http://www.w3.org/2000/svg" width="18.383" height="14.936" viewBox="0 0 18.383 14.936">
                                        <g id="Group_50" data-name="Group 50" transform="translate(-298.358 -388.064)">
                                          <g id="Group_49" data-name="Group 49">
                                            <path id="Path_5144" data-name="Path 5144" d="M316.741,389.832a7.837,7.837,0,0,1-2.172.6,3.744,3.744,0,0,0,1.658-2.083,7.532,7.532,0,0,1-2.39.912,3.769,3.769,0,0,0-6.519,2.577,3.889,3.889,0,0,0,.088.86,10.668,10.668,0,0,1-7.768-3.942,3.769,3.769,0,0,0,1.158,5.037,3.725,3.725,0,0,1-1.7-.464v.041a3.786,3.786,0,0,0,3.019,3.7,3.751,3.751,0,0,1-.988.124,3.36,3.36,0,0,1-.713-.064,3.8,3.8,0,0,0,3.521,2.625,7.571,7.571,0,0,1-4.672,1.607,7.043,7.043,0,0,1-.9-.051,10.727,10.727,0,0,0,16.508-9.033c0-.167-.006-.328-.014-.487A7.53,7.53,0,0,0,316.741,389.832Z"/>
                                          </g>
                                        </g>
                                    </svg>   
                                    <img src="image/hovso.png" alt="">                                                                                                                                   
                                </li>
                                </a>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                    <!--slider-->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="slider wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.4s">
                            <svg class="backkk" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="316.541" height="370.181" viewBox="0 0 316.541 370.181">
                                <defs>
                                  <linearGradient id="linear-gradient-hana" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                    <stop offset="0" stop-color="#c58b2c"/>
                                    <stop offset="1" stop-color="#f1c31c"/>
                                  </linearGradient>
                                  <linearGradient id="linear-gradient-hana2" x1="0.561" y1="0.163" x2="0.457" y2="0.934" xlink:href="#linear-gradient-hana"/>
                                </defs>
                                <g id="hana" data-name="hana" transform="translate(-491.586 -119.797)">
                                  <path id="hanosh" data-name="hanosh" d="M808.128,116.3H746.043l-24,42.7" transform="translate(0 5)" fill="none" stroke="#ae761c" stroke-miterlimit="10" stroke-width="3"/>
                                  <g id="mohaa" data-name="mohaa" transform="translate(11)">
                                    <path id="naa" data-name="naa" d="M700.152,176.5l39.564,66.826,5.653-12.574L699.929,154,514.586,481.66H780.612v-11.27H533.91Z" transform="translate(-34 8.318)" fill="url(#linear-gradient-hana)"/>
                                    <path id="maa" data-name="maa" d="M737.432,247.739l-37.814-64.33-161.011,282.9H708.4v-11.27H557.99L699.907,205.687l32.425,53.693Z" transform="translate(-34 8.318)" fill="url(#linear-gradient-hana2)"/>
                                    <path id="faa" data-name="faa" d="M560.931,452.492h74.086v-11.27H580.4l119.426-208,26.358,43.465,4.365-13.519L699.7,210.807Z" transform="translate(-34 8.318)" fill="#c59d2c"/>
                                  </g>
                                </g>
                            </svg> 
                            
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                @foreach($slide_data as $data)
                                  <div class="swiper-slide">
                                    <div class="item">
                                        <img src="{{ asset('storage/' . $data->image )}}" alt="">
                                    </div>
                                  </div>
                                @endforeach
                                </div>
                            </div>
                            <div class="control">
                                <div class="buRight">
                                    <img src="image/left.png" alt="">
                                </div>
                                <div class="buLeft">
                                    <img src="image/right.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=============== End Header ===============-->

        <!--=============== Start Our partners ===============-->
        <section class="our-partners">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="tit wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="1.1s">
                                    <h3>Our partners & Clints</h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42.761" height="18.64" viewBox="0 0 42.761 18.64">
                                        <defs>
                                          <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                            <stop offset="0" stop-color="#c58b2c"/>
                                            <stop offset="1" stop-color="#f1c31c"/>
                                          </linearGradient>
                                        </defs>
                                        <g id="Group_22" data-name="Group 22" transform="translate(-277.507 -576.36)">
                                          <path id="Path_5083" data-name="Path 5083" d="M294.06,595h-9.513l6.091-6.016.653-7.93-12.524,12.525-1.26-1.26,15.958-15.959-1.106,13.428-3.473,3.43h4.436l4.868-4.867a3.642,3.642,0,0,1,2.575-1.067h17.721a1.782,1.782,0,0,1,1.782,1.782h-19.5a1.86,1.86,0,0,0-1.316.545Z" fill="url(#linear-gradient)"/>
                                          <path id="Rectangle_12" data-name="Rectangle 12" d="M0,0H13.807a0,0,0,0,1,0,0V0a.891.891,0,0,1-.891.891H.891A.891.891,0,0,1,0,0V0A0,0,0,0,1,0,0Z" transform="translate(301.297 589.831)" fill="url(#linear-gradient)"/>
                                          <path id="Path_5084" data-name="Path 5084" d="M282.618,594.312l-1.39-.945,7.6-7.545-.178,2.459Z" fill="url(#linear-gradient)"/>
                                        </g>
                                    </svg>                                                                           
                                </div>
                            </div>
                            @foreach($partners as $data)
                            <div class="col-lg-2">
                                <div class="part wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="1.2s">
                                    <img src="{{ asset('storage/' . $data->image )}}" style="width:100%" alt="">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=============== End Our partners ===============-->

        <!--=============== Start business gallery ===============-->
   <section class="business-gallery">
    <div class="container">
        <div class="backk">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tit">
                        <h3>Business Gallery</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42.761" height="18.64" viewBox="0 0 42.761 18.64">
                            <defs>
                              <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                <stop offset="0" stop-color="#c58b2c"/>
                                <stop offset="1" stop-color="#f1c31c"/>
                              </linearGradient>
                            </defs>
                            <g id="Group_22" data-name="Group 22" transform="translate(-277.507 -576.36)">
                              <path id="Path_5083" data-name="Path 5083" d="M294.06,595h-9.513l6.091-6.016.653-7.93-12.524,12.525-1.26-1.26,15.958-15.959-1.106,13.428-3.473,3.43h4.436l4.868-4.867a3.642,3.642,0,0,1,2.575-1.067h17.721a1.782,1.782,0,0,1,1.782,1.782h-19.5a1.86,1.86,0,0,0-1.316.545Z" fill="url(#linear-gradient)"/>
                              <path id="Rectangle_12" data-name="Rectangle 12" d="M0,0H13.807a0,0,0,0,1,0,0V0a.891.891,0,0,1-.891.891H.891A.891.891,0,0,1,0,0V0A0,0,0,0,1,0,0Z" transform="translate(301.297 589.831)" fill="url(#linear-gradient)"/>
                              <path id="Path_5084" data-name="Path 5084" d="M282.618,594.312l-1.39-.945,7.6-7.545-.178,2.459Z" fill="url(#linear-gradient)"/>
                            </g>
                        </svg>                                                                           
                    </div>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                      @foreach($gallary as $data)
                      <div class="swiper-slide">
                          <div class="row">
                            <!--slider-->
                            <div class="col-lg-6">
                                <div class="slider wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                    <div class="news">
                                        <span>5</span>
                                        <h3>February</h3>
                                        <svg class="date" xmlns="http://www.w3.org/2000/svg" width="88" height="57.63" viewBox="0 0 88 57.63">
                                            <path id="Path_5166" data-name="Path 5166" d="M595.079,783.294l.929,52.053,70.471,2.584,16.6-57.63Z" transform="translate(-595.079 -780.301)" fill="#3c9d7e"/>
                                        </svg>                                      
                                    </div>
                                    <svg class="backkk" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="264.085" height="310.336" viewBox="0 0 264.085 310.336">
                                        <defs>
                                        <linearGradient id="hanoosh" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                            <stop offset="0" stop-color="#c58b2c"/>
                                            <stop offset="1" stop-color="#f1c31c"/>
                                        </linearGradient>
                                        <linearGradient id="hanoosh2" x1="0.561" y1="0.163" x2="0.457" y2="0.934" xlink:href="#hanoosh"/>
                                        </defs>
                                        <g id="Group_60" data-name="Group 60" transform="translate(-217.457 -744.662)">
                                        <path id="Path_5153" data-name="Path 5153" d="M393.211,765.971l37.472,63.293,5.354-11.909L393,744.662,217.457,1055h251.96v-10.675H235.76Z" fill="url(#hanoosh)"/>
                                        <path id="Path_5154" data-name="Path 5154" d="M428.521,833.445l-35.815-60.929-152.5,267.947H401.019v-10.674H258.566L392.979,793.616l30.711,50.854Z" fill="url(#hanoosh2)"/>
                                        <path id="Path_5155" data-name="Path 5155" d="M261.352,1027.372h70.169V1016.7H279.79L392.9,819.7l24.965,41.167L422,848.06l-29.218-49.594Z" fill="#c59d2c"/>
                                        <path id="Path_5156" data-name="Path 5156" d="M408.948,875.73l-16.662-24.671-87.815,155.1H481.543l-12.125-25.473H348.166Z" fill="#c59d2c"/>
                                        </g>
                                    </svg>
                                    <div class="item">
                                        <img src="{{ asset('storage/' . $data->image )}}" alt="">
                                    </div>
                                    <div class="control">
                                        <div class="buRight">
                                            <img src="image/rightt.png" alt="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="52.02" height="30.669" viewBox="0 0 52.02 30.669">
                                                <path id="Path_5158" data-name="Path 5158" d="M495.862,1053.861l17.347,1.237,14.548-26.6-48.544-1.949Z" transform="translate(-477.388 -1025.472)" fill="none" stroke="#ae761c" stroke-miterlimit="10" stroke-width="2"/>
                                            </svg>                                          
                                        </div>
                                        <div class="buLeft">
                                            <img src="image/leftt.png" alt="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="51.93" height="29.919" viewBox="0 0 51.93 29.919">
                                                <path id="Path_5162" data-name="Path 5162" d="M544.461,1027.248l19.83,2.091L577,1051.781l-48.477,3.2Z" transform="translate(-526.725 -1026.185)" fill="none" stroke="#ae761c" stroke-miterlimit="10" stroke-width="2"/>
                                            </svg>                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="titel wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                    <h3>{{$data->title}}</h3>
                                    <p>{{$data->content}}</p>
                                </div>
                            </div>
                          </div>
                      </div>
                      @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        <!--=============== End business gallery ===============-->

        
@endsection