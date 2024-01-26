@extends('template.default')
    @section('css')
    <link rel="stylesheet" href="css/OUR SERVICES.css">
    @endsection

    @section('content')
        <!--=============== Start OUR SERVICES ===============-->
        <section class="our-service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="head-tit wow bounceInDown" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <h3>OUR SERVICES</h3>
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
                            <p>OUR INVOLVEMENT AND SERVICES</p>                                                                                                       
                        </div>
                    </div>
                    <!-- CARD -->
                    @foreach($services as $data)
                    <div class="col-lg-4 col-sm-12">
                        <div class="serv wow bounceInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                            <svg class="backgroud" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="119.482" height="167.421" viewBox="0 0 119.482 167.421">
                                <defs>
                                  <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                    <stop offset="0" stop-color="#c58b2c"/>
                                    <stop offset="1" stop-color="#f1c31c"/>
                                  </linearGradient>
                                </defs>
                                <g id="Group_281" data-name="Group 281" transform="translate(-127 -261.058)">
                                  <path id="Path_11542" data-name="Path 11542" d="M517.707,719.975H432.346l81.747-144.749,22.463,38.729-2.251,1.305-20.182-34.8L436.8,717.373h80.9Z" transform="translate(-292.575 -299.115)" fill="url(#linear-gradient)"/>
                                  <path id="Path_11543" data-name="Path 11543" d="M501.8,709.421H404.158L498.395,542l25.245,43.419-2.249,1.307-22.959-39.488L408.607,706.82H501.8Z" transform="translate(-277.158 -280.942)" fill="url(#linear-gradient)"/>
                                </g>
                            </svg>                              
                            <div class="fream">
                                <img src="{{ asset('storage/' . $data->image )}}" alt="">
                            </div>
                            <h3>{{$data->title}}</h3>
                            <p>{{$data->description}}</p>
                            <div class="but">
                                <!-- <svg class="rightt" xmlns="http://www.w3.org/2000/svg" width="30.949" height="37.5" viewBox="0 0 30.949 37.5">
                                    <g id="Group_204" data-name="Group 204" transform="translate(-264.418 -1126.25)">
                                      <path id="Path_16610" data-name="Path 16610" d="M273,1126.25h-2.106v1.5H273a17.25,17.25,0,0,1,0,34.5h-8.2l1.267,1.5H273a18.75,18.75,0,0,0,0-37.5Z" fill="#c59d2c"/>
                                      <path id="Path_16611" data-name="Path 16611" d="M264.686,1127.75h1.98v-1.5h-3.247Z" transform="translate(1)" fill="#c59d2c"/>
                                      <path id="Path_16612" data-name="Path 16612" d="M287.471,1128.055l-.968,1.145a20.612,20.612,0,0,1,2.026,29.631l.98,1.16a22.121,22.121,0,0,0-2.038-31.936Z" fill="#c59d2c"/>
                                    </g>
                                </svg>                                  
                                <a href="#">
                                    <h3>read more <img src="image/send.png" alt=""></h3>
                                </a>
                                <svg class="leftt" xmlns="http://www.w3.org/2000/svg" width="22.638" height="17.547" viewBox="0 0 22.638 17.547">
                                    <path id="Path_16613" data-name="Path 16613" d="M184.849,1162.25H182a17.259,17.259,0,0,1-17.189-16.047l-1.332,1.576A18.763,18.763,0,0,0,182,1163.75h4.117Z" transform="translate(-163.479 -1146.203)" fill="#c59d2c"/>
                                </svg>                                   -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </section>
        <!--=============== End OUR SERVICES ===============-->
    @endsection
