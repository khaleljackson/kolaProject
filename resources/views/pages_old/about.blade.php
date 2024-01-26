@extends('template.default')
        @section('css')
        <link rel="stylesheet" href="css/about.css">
        @endsection
        @section('content')
        <!--=============== Start About Us ===============-->
        <section class="aboutUs">
            <img class="topUp" src="image/world.png" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="head-tit">
                            <h3>About Us</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="68.99" height="88.719" viewBox="0 0 68.99 88.719">
                                <defs>
                                  <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                    <stop offset="0" stop-color="#c58b2c"/>
                                    <stop offset="1" stop-color="#f1c31c"/>
                                  </linearGradient>
                                </defs>
                                <g id="Group_212" data-name="Group 212" transform="translate(-577.193 -730.444)">
                                  <path id="Path_16620" data-name="Path 16620" d="M590.915,810.981l36.523-65.939,6.684,8.538,4.481.857-11.595-14.811-41.184,74.355h43.328l-1.732-3Z" fill="#ae761c"/>
                                  <path id="Path_16621" data-name="Path 16621" d="M635.412,816.163H582.284l44.479-80.3,9.382,11.983,2.362-1.85-12.174-15.55-49.14,88.719h59.951Z" fill="url(#linear-gradient)"/>
                                  <path id="Path_16622" data-name="Path 16622" d="M646.183,755.8l-5.476-6.994-2.362,1.85,3.348,4.276Z" fill="url(#linear-gradient)"/>
                                  <path id="Path_16623" data-name="Path 16623" d="M616.986,760.12l-13.053,23.834.658.359,12.834-23.434Z" fill="url(#linear-gradient)"/>
                                  <path id="Path_16624" data-name="Path 16624" d="M623.822,747.639l-3.8,6.93.658.359,3.576-6.53Z" fill="url(#linear-gradient)"/>
                                  <path id="Path_16625" data-name="Path 16625" d="M623.546,811.625H589.633l12.154-22.191-.439-.76-12.98,23.7h35.612Z" fill="url(#linear-gradient)"/>
                                </g>
                            </svg>                                                                                                       
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      @foreach($brief as $data)
                        <div class="content">
                            <img class="logo" src="image/logo.png" alt="">
                            <p>{{$data->content}}</p>
                            <div class="but">
                                <svg class="rightt" xmlns="http://www.w3.org/2000/svg" width="30.949" height="37.5" viewBox="0 0 30.949 37.5">
                                    <g id="Group_204" data-name="Group 204" transform="translate(-264.418 -1126.25)">
                                      <path id="Path_16610" data-name="Path 16610" d="M273,1126.25h-2.106v1.5H273a17.25,17.25,0,0,1,0,34.5h-8.2l1.267,1.5H273a18.75,18.75,0,0,0,0-37.5Z" fill="#c59d2c"/>
                                      <path id="Path_16611" data-name="Path 16611" d="M264.686,1127.75h1.98v-1.5h-3.247Z" transform="translate(1)" fill="#c59d2c"/>
                                      <path id="Path_16612" data-name="Path 16612" d="M287.471,1128.055l-.968,1.145a20.612,20.612,0,0,1,2.026,29.631l.98,1.16a22.121,22.121,0,0,0-2.038-31.936Z" fill="#c59d2c"/>
                                    </g>
                                </svg>                                  
                                <a href="#">
                                    <h3>read more <img class="send" src="image/send.png" alt=""></h3>
                                </a>
                                <svg class="leftt" xmlns="http://www.w3.org/2000/svg" width="22.638" height="17.547" viewBox="0 0 22.638 17.547">
                                    <path id="Path_16613" data-name="Path 16613" d="M184.849,1162.25H182a17.259,17.259,0,0,1-17.189-16.047l-1.332,1.576A18.763,18.763,0,0,0,182,1163.75h4.117Z" transform="translate(-163.479 -1146.203)" fill="#c59d2c"/>
                                </svg>                                  
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <div class="vision">
                            <div class="tit">
                                <h3>Our vision</h3>
                                <svg id="Group_21" data-name="Group 21" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="69.228" height="30.177" viewBox="0 0 69.228 30.177">
                                    <defs>
                                      <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#c58b2c"/>
                                        <stop offset="1" stop-color="#f1c31c"/>
                                      </linearGradient>
                                      <linearGradient id="linear-gradient-2" x1="0" y1="-186.887" x2="1" y2="-186.887" xlink:href="#linear-gradient"/>
                                    </defs>
                                    <path id="Path_5081" data-name="Path 5081" d="M626.009,736.537h-15.4l9.859-9.74,1.059-12.838-20.278,20.277-2.038-2.04,25.835-25.837-1.791,21.74-5.623,5.553h7.182l7.881-7.879a5.9,5.9,0,0,1,4.169-1.728h28.69a2.885,2.885,0,0,1,2.885,2.885H636.862a3.011,3.011,0,0,0-2.129.882Z" transform="translate(-599.21 -706.36)" fill="url(#linear-gradient)"/>
                                    <path id="Rectangle_11" data-name="Rectangle 11" d="M0,0H22.353a0,0,0,0,1,0,0V.551a.891.891,0,0,1-.891.891H.891A.891.891,0,0,1,0,.551V0A0,0,0,0,1,0,0Z" transform="translate(38.515 21.809)" fill="url(#linear-gradient-2)"/>
                                    <path id="Path_5082" data-name="Path 5082" d="M605.181,729.566l-2.25-1.529,12.3-12.214-.288,3.981Z" transform="translate(-596.907 -700.503)" fill="url(#linear-gradient)"/>
                                </svg>                                                                                                            
                            </div>
                            <img src="image/vicon.png" alt="">
                            @foreach($vision as $data)
                            <p>{{$data->content}}</p>
                            @endforeach
                        </div>
                    </div>
                    <!-- start mission -->
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="mission">
                            <div class="tit">
                                <h3>Our Mission</h3>
                                <svg id="Group_21" data-name="Group 21" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="69.228" height="30.177" viewBox="0 0 69.228 30.177">
                                    <defs>
                                      <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#c58b2c"/>
                                        <stop offset="1" stop-color="#f1c31c"/>
                                      </linearGradient>
                                      <linearGradient id="linear-gradient-2" x1="0" y1="-186.887" x2="1" y2="-186.887" xlink:href="#linear-gradient"/>
                                    </defs>
                                    <path id="Path_5081" data-name="Path 5081" d="M626.009,736.537h-15.4l9.859-9.74,1.059-12.838-20.278,20.277-2.038-2.04,25.835-25.837-1.791,21.74-5.623,5.553h7.182l7.881-7.879a5.9,5.9,0,0,1,4.169-1.728h28.69a2.885,2.885,0,0,1,2.885,2.885H636.862a3.011,3.011,0,0,0-2.129.882Z" transform="translate(-599.21 -706.36)" fill="url(#linear-gradient)"/>
                                    <path id="Rectangle_11" data-name="Rectangle 11" d="M0,0H22.353a0,0,0,0,1,0,0V.551a.891.891,0,0,1-.891.891H.891A.891.891,0,0,1,0,.551V0A0,0,0,0,1,0,0Z" transform="translate(38.515 21.809)" fill="url(#linear-gradient-2)"/>
                                    <path id="Path_5082" data-name="Path 5082" d="M605.181,729.566l-2.25-1.529,12.3-12.214-.288,3.981Z" transform="translate(-596.907 -700.503)" fill="url(#linear-gradient)"/>
                                </svg>     
                            </div>
                            @foreach($mission as $data)
                            <p>{{$data->content}}</p>
                            @endforeach
                            <div class="social">
                                @foreach($social_links as $data)
                                <ul>
                                  <a href="{{$data->facebook}}">
                                    <li class="wow flipInX" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                        <svg class="backk" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70.947" height="60.563" viewBox="0 0 70.947 60.563">
                                            <defs>
                                              <linearGradient id="hana" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#3c9d7e"/>
                                                <stop offset="1" stop-color="#c59d2c"/>
                                              </linearGradient>
                                            </defs>
                                            <g id="Group_129" data-name="Group 129" transform="translate(-185.512 -365.477)">
                                              <g id="Group_128" data-name="Group 128">
                                                <path id="Path_11553" data-name="Path 11553" d="M249.414,368.436l-3.55,13.854,2.373-.9,4.077-15.911-66.8,18.532,34.641,34.641,1.468-1.468L189.5,385.058Z" fill="url(#hana)"/>
                                                <path id="Path_11554" data-name="Path 11554" d="M244.991,382.567l3.453-13.3-57.806,15.873,22.109,22.109,1.468-1.468L194.63,386.2l50.951-13.99-2.769,11.214Z" fill="url(#hana)"/>
                                                <path id="Path_11555" data-name="Path 11555" d="M256.459,391.663,245.1,390.233l-.217,1.728,8.374,1.054L230.934,422.6l-3.2-7.173-.93,1.988,3.719,8.623Z" fill="url(#hana)"/>
                                              </g>
                                            </g>
                                        </svg>
                                        <svg class="soci" xmlns="http://www.w3.org/2000/svg" width="12.808" height="25.615" viewBox="0 0 12.808 25.615">
                                            <path id="Path_9488" data-name="Path 9488" d="M151.513,387.069h2.338V383a30.353,30.353,0,0,0-3.407-.18c-3.371,0-5.681,2.121-5.681,6.018v3.588h-3.72v4.553h3.72v11.456h4.562V396.976h3.57l.567-4.553h-4.138v-3.137c0-1.316.355-2.217,2.189-2.217Z" transform="translate(-141.043 -382.816)" fill="#cd952a"/>
                                        </svg>                                                                           
                                    </li>
                                    </a>
                                    <a href="{{$data->instagram}}">
                                    <li class="wow flipInX" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                        <svg class="backk" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70.947" height="60.563" viewBox="0 0 70.947 60.563">
                                            <defs>
                                              <linearGradient id="hana" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#3c9d7e"/>
                                                <stop offset="1" stop-color="#c59d2c"/>
                                              </linearGradient>
                                            </defs>
                                            <g id="Group_129" data-name="Group 129" transform="translate(-185.512 -365.477)">
                                              <g id="Group_128" data-name="Group 128">
                                                <path id="Path_11553" data-name="Path 11553" d="M249.414,368.436l-3.55,13.854,2.373-.9,4.077-15.911-66.8,18.532,34.641,34.641,1.468-1.468L189.5,385.058Z" fill="url(#hana)"/>
                                                <path id="Path_11554" data-name="Path 11554" d="M244.991,382.567l3.453-13.3-57.806,15.873,22.109,22.109,1.468-1.468L194.63,386.2l50.951-13.99-2.769,11.214Z" fill="url(#hana)"/>
                                                <path id="Path_11555" data-name="Path 11555" d="M256.459,391.663,245.1,390.233l-.217,1.728,8.374,1.054L230.934,422.6l-3.2-7.173-.93,1.988,3.719,8.623Z" fill="url(#hana)"/>
                                              </g>
                                            </g>
                                        </svg>
                                        <svg class="soci" xmlns="http://www.w3.org/2000/svg" width="16.043" height="16.045" viewBox="0 0 16.043 16.045">
                                            <g id="Group_43" data-name="Group 43" transform="translate(-219 -386.786)">
                                              <path id="Path_5131" data-name="Path 5131" d="M235,391.5a5.88,5.88,0,0,0-.373-1.946,4.113,4.113,0,0,0-2.348-2.348,5.85,5.85,0,0,0-1.946-.373c-.859-.041-1.132-.05-3.311-.05s-2.451.009-3.307.047a5.835,5.835,0,0,0-1.946.373,3.9,3.9,0,0,0-1.423.928,3.95,3.95,0,0,0-.925,1.419,5.9,5.9,0,0,0-.373,1.947c-.041.859-.05,1.132-.05,3.31s.009,2.451.047,3.307a5.888,5.888,0,0,0,.373,1.947,4.107,4.107,0,0,0,2.348,2.347,5.851,5.851,0,0,0,1.946.373c.856.038,1.129.047,3.307.047s2.452-.009,3.307-.047a5.836,5.836,0,0,0,1.947-.373,4.105,4.105,0,0,0,2.348-2.347,5.9,5.9,0,0,0,.373-1.947c.037-.856.047-1.128.047-3.307S235.039,392.359,235,391.5Zm-1.445,6.551a4.4,4.4,0,0,1-.276,1.489,2.664,2.664,0,0,1-1.523,1.524,4.435,4.435,0,0,1-1.489.275c-.847.038-1.1.047-3.241.047s-2.4-.009-3.242-.047a4.4,4.4,0,0,1-1.488-.275,2.647,2.647,0,0,1-1.521-1.521,4.424,4.424,0,0,1-.275-1.489c-.038-.846-.048-1.1-.048-3.241s.01-2.4.048-3.241a4.413,4.413,0,0,1,.275-1.489,2.448,2.448,0,0,1,.6-.921,2.493,2.493,0,0,1,.922-.6,4.417,4.417,0,0,1,1.489-.276c.846-.037,1.1-.047,3.241-.047s2.4.01,3.241.047a4.405,4.405,0,0,1,1.489.276,2.651,2.651,0,0,1,1.52,1.52,4.423,4.423,0,0,1,.276,1.489c.037.847.047,1.1.047,3.241S233.594,397.208,233.557,398.054Z" fill="#c59d2c"/>
                                              <path id="Path_5132" data-name="Path 5132" d="M227.024,390.688a4.122,4.122,0,1,0,4.122,4.122A4.123,4.123,0,0,0,227.024,390.688Zm0,6.8a2.674,2.674,0,1,1,2.674-2.674A2.674,2.674,0,0,1,227.024,397.484Z" fill="#c59d2c"/>
                                              <path id="Path_5133" data-name="Path 5133" d="M232.272,390.525a.963.963,0,1,1-.963-.962A.962.962,0,0,1,232.272,390.525Z" fill="#c59d2c"/>
                                            </g>
                                        </svg>                                                                                                              
                                    </li>
                                    </a>
                                    <a href="{{$data->twitter}}">
                                    <li class="wow flipInX" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                        <svg class="backk" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70.947" height="60.563" viewBox="0 0 70.947 60.563">
                                            <defs>
                                              <linearGradient id="hana" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                                <stop offset="0" stop-color="#3c9d7e"/>
                                                <stop offset="1" stop-color="#c59d2c"/>
                                              </linearGradient>
                                            </defs>
                                            <g id="Group_129" data-name="Group 129" transform="translate(-185.512 -365.477)">
                                              <g id="Group_128" data-name="Group 128">
                                                <path id="Path_11553" data-name="Path 11553" d="M249.414,368.436l-3.55,13.854,2.373-.9,4.077-15.911-66.8,18.532,34.641,34.641,1.468-1.468L189.5,385.058Z" fill="url(#hana)"/>
                                                <path id="Path_11554" data-name="Path 11554" d="M244.991,382.567l3.453-13.3-57.806,15.873,22.109,22.109,1.468-1.468L194.63,386.2l50.951-13.99-2.769,11.214Z" fill="url(#hana)"/>
                                                <path id="Path_11555" data-name="Path 11555" d="M256.459,391.663,245.1,390.233l-.217,1.728,8.374,1.054L230.934,422.6l-3.2-7.173-.93,1.988,3.719,8.623Z" fill="url(#hana)"/>
                                              </g>
                                            </g>
                                        </svg>
                                        <svg class="soci" xmlns="http://www.w3.org/2000/svg" width="18.383" height="14.936" viewBox="0 0 18.383 14.936">
                                            <g id="Group_50" data-name="Group 50" transform="translate(-298.358 -388.064)">
                                              <g id="Group_49" data-name="Group 49">
                                                <path id="Path_5144" data-name="Path 5144" d="M316.741,389.832a7.837,7.837,0,0,1-2.172.6,3.744,3.744,0,0,0,1.658-2.083,7.532,7.532,0,0,1-2.39.912,3.769,3.769,0,0,0-6.519,2.577,3.889,3.889,0,0,0,.088.86,10.668,10.668,0,0,1-7.768-3.942,3.769,3.769,0,0,0,1.158,5.037,3.725,3.725,0,0,1-1.7-.464v.041a3.786,3.786,0,0,0,3.019,3.7,3.751,3.751,0,0,1-.988.124,3.36,3.36,0,0,1-.713-.064,3.8,3.8,0,0,0,3.521,2.625,7.571,7.571,0,0,1-4.672,1.607,7.043,7.043,0,0,1-.9-.051,10.727,10.727,0,0,0,16.508-9.033c0-.167-.006-.328-.014-.487A7.53,7.53,0,0,0,316.741,389.832Z" fill="#c59d2c"/>
                                              </g>
                                            </g>
                                        </svg>                                                                                                                
                                    </li>
                                    </a>
                                </ul>
                                @endforeach
                            </div>                                                                                                       
                        </div>
                    </div>
                    <!-- start Board of Directors -->
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="board">
                            <div class="tit">
                                <h3>Board of Directors</h3>
                                <svg id="Group_21" data-name="Group 21" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="69.228" height="30.177" viewBox="0 0 69.228 30.177">
                                    <defs>
                                      <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                        <stop offset="0" stop-color="#c58b2c"/>
                                        <stop offset="1" stop-color="#f1c31c"/>
                                      </linearGradient>
                                      <linearGradient id="linear-gradient-2" x1="0" y1="-186.887" x2="1" y2="-186.887" xlink:href="#linear-gradient"/>
                                    </defs>
                                    <path id="Path_5081" data-name="Path 5081" d="M626.009,736.537h-15.4l9.859-9.74,1.059-12.838-20.278,20.277-2.038-2.04,25.835-25.837-1.791,21.74-5.623,5.553h7.182l7.881-7.879a5.9,5.9,0,0,1,4.169-1.728h28.69a2.885,2.885,0,0,1,2.885,2.885H636.862a3.011,3.011,0,0,0-2.129.882Z" transform="translate(-599.21 -706.36)" fill="url(#linear-gradient)"/>
                                    <path id="Rectangle_11" data-name="Rectangle 11" d="M0,0H22.353a0,0,0,0,1,0,0V.551a.891.891,0,0,1-.891.891H.891A.891.891,0,0,1,0,.551V0A0,0,0,0,1,0,0Z" transform="translate(38.515 21.809)" fill="url(#linear-gradient-2)"/>
                                    <path id="Path_5082" data-name="Path 5082" d="M605.181,729.566l-2.25-1.529,12.3-12.214-.288,3.981Z" transform="translate(-596.907 -700.503)" fill="url(#linear-gradient)"/>
                                </svg>     
                            </div>                                                                                                   
                        </div>
                    </div>
                    @foreach($directors as $data)
                    <div class="col-lg-3">
                        <div class="person">
                            <svg id="Group_115" data-name="Group 115" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="92.776" height="130" viewBox="0 0 92.776 130">
                                <defs>
                                  <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                    <stop offset="0" stop-color="#c58b2c"/>
                                    <stop offset="1" stop-color="#f1c31c"/>
                                  </linearGradient>
                                </defs>
                                <path id="Path_11542" data-name="Path 11542" d="M498.628,687.621H432.346l63.475-112.4L513.263,605.3l-1.748,1.013-15.671-27.019L435.807,685.6h62.821Z" transform="translate(-422.43 -563.537)" fill="url(#linear-gradient)"/>
                                <path id="Path_11543" data-name="Path 11543" d="M479.976,672H404.158l73.174-130,19.6,33.714-1.746,1.015L477.36,546.068,407.613,669.98h72.363Z" transform="translate(-404.158 -542)" fill="url(#linear-gradient)"/>
                            </svg>   
                            <div class="imagg">                                   
                                <img src="{{ asset('storage/' . $data->image )}}" alt="">
                            </div>
                            <h3>{{$data->name}}</h3>
                            <p>{{$data->title}}</p>
                        </div>
                    </div>
                  @endforeach

                </div>
            </div>
        </section>
        <!--=============== End About Us ===============-->
       @endsection