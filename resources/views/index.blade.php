@extends('layouts.guest')
@section('title', 'Acce-Abuja')
@section('content')
    <div class="container-fluid m-0 p-0">
        {{-- --}}

        <div class="bg-orange m-0 p-1">
            <p class="al-ansar m-0 text-white text-center text-sm-left d-md-none">Al-Ansar Center for Comprehensive
                Education</p>
        </div>
        {{-- video --}}
        {{-- <video width="100%" height="auto" class="video" loop muted autoplay>
            <source src="/video/acce.mp4" type="video/mp4">
        </video> --}}
        <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;">
            <iframe style="width:100%;height:100%;position:absolute;left:0px;top:0px;overflow:hidden"
                src="https://www.youtube.com/embed/EZAkP8jP5fY?playlist=EZAkP8jP5fY&loop=1&autoplay=1&mute=1&enablejsapi=1&loop=1&controls=0&modestbranding=1&" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        {{-- <iframe width="1280" height="720" src="//www.youtube.com/embed/-Nqqlsy45iA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
        {{-- <iframe width="1280" height="720" src="https://www.youtube.com/embed/EZAkP8jP5fY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}


    <!-- slideshow -->
    {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="12"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="13"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="14"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="15"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="16"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="17"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="18"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="19"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="20"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="21"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item d-2 animate__animated animate__rotateInUpLeft active">
                <img src="/image/slide24.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__backInDown">
                <img src="/image/slide21.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__slideInUp">
                <img src="/image/slide1.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__rotateInUpLeft">
                <img src="/image/slide2.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__rotateInUpLeft">
                <img src="/image/slide25.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__rotateInUpLeft">
                <img src="/image/slide26.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__rotateInUpLeft">
                <img src="/image/slide27.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__zoomInDown">
                <img src="/image/slide3.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__zoomInUp">
                <img src="/image/slide4.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__lightSpeedInRight">
                <img src="/image/slide5.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__slideInUp">
                <img src="/image/slide6.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__fadeInDown">
                <img src="/image/slide7.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__shakeY">
                <img src="/image/slide8.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__shakeX">
                <img src="/image/slide9.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__flash">
                <img src="/image/slide10.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__bounceInLeft">
                <img src="/image/slide11.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__bounceInRight">
                <img src="/image/slide17.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__bounceInLeft">
                <img src="/image/slide13.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__bounceInDown">
                <img src="/image/slide14.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__backInUp">
                <img src="/image/slide15.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__backInRight">
                <img src="/image/slide16.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__backInLeft">
                <img src="/image/slide17.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__backInDown">
                <img src="/image/slide18.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__zoomInDown">
                <img src="/image/slide19.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__heartBeat">
                <img src="/image/slide20.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__lightSpeedInRight">
                <img src="/image/slide22.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
            <div class="carousel-item d-2 animate__animated animate__lightSpeedInRight">
                <img src="/image/slide23.jpg" class="d-block w-100" alt="image/school.jpg">
                <div class="carousel-caption d-none alert alert-dismissible">
                    <button type="button" class="close text-color-2 icon-close" data-dismiss="alert">&times;</button>
                    <p class="w-100 py-1 m-0 bg-orange"></p>
                    <marquee behavior="scroll" direction="right">
                        <h5 class="bg-color text-center text-white py-2 w-100">&nbsp;&nbsp;Admission!!!
                            &nbsp;Admission!!!&nbsp;
                            Admission!!!&nbsp;&nbsp;</h5>
                    </marquee>
                    <P class="display-5 text-capitalize">click <a href="{{ route('admission') }}">Here</a> to apply</P>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> --}}
    </div>

    <!-- about and calender -->
    <div class="dark container-fluid py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center bg-white d-block p-3 pt-lg-5 p">
                    <h2 class="teko text-uppercase">You are Welcome to our school</h2>
                    <h5 class="px-md-2 px-lg-4 bold">Assalamu alaikum warahmatullahi wabarakatuhu</h5>
                    <p class="px-md-2 px-lg-4">We are pleased to welcome you and your child to Al-Ansar
                        Centre for Comprehensive Education, here in Abuja, Nigeria.
                        We are very proud of our school and the goals we have set out
                        to achieve in helping our students fulfil their potential in
                        attaining success in this dynamic world and in the hereafter,
                        Insha Allah. We have a beautiful and comfortable environment
                        to simplify learning for your child.
                        We are confident your child will feel at home here at Al-Ansar
                        and we look forward to meeting you.</p>
                    <button class="btn btn-color m-2">More About Us</button>
                </div>
                <div class="col-md-6 px-2 round">
                    <h3 class="teko p-1 w-100 text-center text-white bg-color rounded">Upcoming Events</h3>
                    <div class="w-100 h-100 text-color-2">
                        <div class="card p-1">
                            <div class="card-header p-0">
                                <marquee behavior="scroll" direction="left">
                                    <h3 class="bg-orange text-white text-center py-2 w-100">
                                        &nbsp;&nbsp;&nbsp;&nbsp;Admission!!!&nbsp;&nbsp; &nbsp;Admission!!!&nbsp;</h3>
                                </marquee>
                            </div>
                            <img class="card-img-top p-2" src="/image/admission.jpeg" alt="">
                            <!--<div class="card-body text-center teko p-0 display-4 text-color">-->
                            <!--    NOV 2020-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid milk pb-5">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-8 d-flex">
                    <div class="w-100 pt-2">
                        <img src="/image/president.jpg" alt="" class="d-block" style="max-width: 180px;">
                    </div>
                    <div class="flex-grow-1 px-2">
                        <h3 class="text-color teko m-0 pt-2 text-color">Welcome Message From the Founder</h3>
                        <p>I am delighted to welcome you to a new and exciting school in the city of Abuja, the Federal
                            Capital
                            Territory. </p>
                        <p>First and foremost, I wish to thank the Almighty Allah for giving us the opportunity to serve our
                            community through the establishment of this highly rated school here in Gwarimpa. ACCE is
                            clearly a school
                            where they the desire to learn is contagious and students of all ability flourish because
                            everyone works
                            hard to create a learning environment where everybody is welcome and diversity is celebrated.
                        </p>
                        <a href="#" class="btn btn-color bg-color text-white mb-3">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <iframe height="315" src="https://www.youtube.com/embed/EZAkP8jP5fY" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen class="w-100"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-white p-3 mt-n5">
        <div class="container">
            <div class="row d-flex justify-content-center flex-wrap align-items-center">
                <div class="col-md-8 col-lg-9">
                    <h3 class="fira">ACCE is now opened for admission, click on the button to start your application or
                        download the application forms</h3>
                </div>
                <div class="col-md-4 col-lg-3">
                    <a href="{{ route('admission') }}" class="btn btn-lg btn-color text-white teko"> <i
                            class="fas fa-graduation-cap text-color-2  "></i>
                        Admission
                        Application</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid milk p-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h1 class="teko text-color-2">Our <span class="">Facilities</span> </h2>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-12 p-3">
                    <div class="card text-white bg-color">
                        <div class="card-body text-center justify-content-center">
                            <span class="bg-white rounded-circle p-3">
                                <i class="fas icons fa-chalkboard-teacher text-color-2 "></i>
                            </span>
                            <p class="mt-3">Our Teachers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-12 p-3">
                    <div class="card text-white bg-color">
                        <div class="card-body text-center justify-content-center">
                            <span class="bg-white rounded-circle p-3">
                                <i class="fas icons fa-book text-color-2 "></i>
                            </span>
                            <p class="mt-3">Library</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-12 p-3">
                    <div class="card text-white bg-color">
                        <div class="card-body text-center justify-content-center">
                            <span class="bg-white rounded-circle p-3">
                                <i class="fas icons fa-shuttle-van text-color-2 "></i>
                            </span>
                            <p class="mt-3">Transport</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-12 p-3">
                    <div class="card text-white bg-color">
                        <div class="card-body text-center justify-content-center">
                            <span class="bg-white rounded-circle p-3">
                                <i class="fas icons fa-bed text-color-2 "></i>
                            </span>
                            <p class="mt-3">Hostel</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-12 p-3">
                    <div class="card text-white bg-color">
                        <div class="card-body text-center justify-content-center">
                            <span class="bg-white rounded-circle p-3">
                                <i class="fab icons fa-xbox text-color-2 "></i>
                            </span>
                            <p class="mt-3">Games</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-12 p-3">
                    <div class="card text-white bg-color">
                        <div class="card-body text-center justify-content-center">
                            <span class="bg-white rounded-circle p-3">
                                <i class="fas icons fa-lightbulb text-color-2 "></i>
                            </span>
                            <p class="mt-3">Constant Power Supply</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-12 p-3">
                    <div class="card text-white bg-color">
                        <div class="card-body text-center justify-content-center">
                            <span class="bg-white rounded-circle p-3">
                                <i class="fas icons fa-utensils text-color-2 "></i>
                            </span>
                            <p class="mt-3">Canteen</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-12 p-3">
                    <div class="card text-white bg-color">
                        <div class="card-body text-center justify-content-center">
                            <span class="bg-white rounded-circle p-3">
                                <i class="fas icons fa-star-and-crescent text-color-2 "></i>
                            </span>
                            <p class="mt-3">Mosque</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-12 p-3">
                    <div class="card text-white bg-color">
                        <div class="card-body text-center justify-content-center">
                            <span class="bg-white rounded-circle p-3">
                                <i class="fas icons fa-wifi text-color-2 "></i>
                            </span>
                            <p class="mt-3">Internet</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-12 p-3">
                    <div class="card text-white bg-color">
                        <div class="card-body text-center justify-content-center">
                            <span class="bg-white rounded-circle p-3">
                                <i class="fas icons fa-volleyball-ball text-color-2 "></i>
                            </span>
                            <p class="mt-3">Sports</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-12 p-3">
                    <div class="card text-white bg-color">
                        <div class="card-body text-center justify-content-center">
                            <span class="bg-white rounded-circle p-3">
                                <i class="fas icons fa-clinic-medical text-color-2 "></i>
                            </span>
                            <p class="mt-3">Clinic</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-12 p-3">
                    <div class="card text-white bg-color">
                        <div class="card-body text-center justify-content-center">
                            <span class="bg-white rounded-circle p-3">
                                <i class="fas icons fa-hand-holding-usd text-color-2 "></i>
                            </span>
                            <p class="mt-3">ATM Services</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- latest event -->
    <div class="container-fluid">
        <div class="container">
            <h1 class="teko text-color-2 text-center mt-2">Latest Events</h2>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-3 p-3 border-2">
                        <div class="card text-left">
                            <img class="card-img-top" src="image/i6.jpg" alt="">
                            <div class="card-body">
                                <h4 class="card-title fjalla text-uppercase">Visit to Al-Ansar head office by MD and
                                    Management of Taj
                                    Bank plc</h4>
                                <a href="#" class="btn btn-color text-center stretched-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 p-3 border-2">
                        <div class="card text-left">
                            <img class="card-img-top" src="image/jaiz.jpg" alt="">
                            <div class="card-body">
                                <h4 class="card-title fjalla text-uppercase">Visit by Jaiz Bank management team to al-ansar
                                    foundation head office</h4>
                                <a href="#" class="btn btn-color text-center stretched-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 p-3 border-2">
                        <div class="card text-left">
                            <img class="card-img-top" src="image/i5.jpg" alt="">
                            <div class="card-body">
                                <h4 class="card-title fjalla text-uppercase">Visit to minister of information</h4>
                                <a href="#" class="btn btn-color text-center stretched-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 p-3 border-2">
                        <div class="card text-left">
                            <img class="card-img-top" src="image/i9.jpeg" alt="">
                            <div class="card-body">
                                <h4 class="card-title fjalla text-uppercase">Visit to nile university, Abuja</h4>
                                <a href="#" class="btn btn-color text-center stretched-link">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
