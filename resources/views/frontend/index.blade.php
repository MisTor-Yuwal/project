@extends('app')
@section('content')
    <div class="transparent">
        {{-- <img src="{{ asset('characters/My project (3).png') }}" alt="" class="img-1"> --}}
        <img src="{{ asset('characters/My project (5).png') }}" data-value="3" alt="" class="img-2">
        <div id="snow"></div>
        <div id="snow2"></div>
        <div id="snow3"></div>
    </div>
    <div class="start-section">
        <div class="w60">
            <span class="start-heading">
                TRAVELLING THROUGH THE SPACE AND PLANETS
            </span>
            <div class="paragraph">
                <p class="start-paragraph">
                    Hey Boss! Come travel with us and help us to reach our destination. Our goal is to Lorem ipsum dolor sit
                    amet consectetur adipisicing elit. Alias, expedita accusamus. Autem quisquam, ipsa dicta laudantium
                    commodi perferendis eligendi doloribus laboriosam vel amet quod labore nesciunt doloremque odio delectus
                    similique itaque facere consequatur ab fuga ratione quaerat repellendus consequuntur? Facilis cumque
                    eaque aut magni dolore similique, ipsa vitae accusamus minima.
                </p>
            </div>
        </div>
        <div class="w-30 img">
            <img src="{{ asset('images/103711546_p0_master1200.jpg') }}" class="f-section-img1" alt="">
        </div>
        <div class="w-30 img2">
            <img src="{{ asset('images/104442111_p0_master1200.jpg') }}" alt="" class="f-section-img2">
        </div>
    </div>
    <div class="greenery-section">
        {{-- <img src="{{ asset('style/104411427_p0_master1200.jpg') }}" alt="" class="bg-img">
        <div class="secondary-section">

        </div> --}}
        <div class="start-section">
            <div class="w-30 img">
                <img src="{{ asset('images/93226732_p0_master1200.jpg') }}" alt="" class="start-img1">
            </div>
            <div class="w-30 img imgSP">
                <img src="{{ asset('images/87951954_p0_master1200.jpg') }}" alt="" class="start-img2">
                <div class="sp"></div>
                <span class="start-img2-p">
                    LAST PHOTO PRIVATE MAKUU.
                </span>
                <br>
                <span class="small-textS">
                    - 5029 - 09 - 12
                </span>
            </div>
            <div class="w60 ssP">
                <div class="second-s-heading">
                    BELOVED ONE'S WHO SACRIFICED EYERYTHING
                </div>
                <div class="paragraph">
                    <p class="start-paragraph">
                        Hero's who travelled far away and sacrified everything for humanity.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat quos explicabo eum nesciunt eaque
                        maiores ipsum sequi illo eius, nisi tempore numquam aspernatur vel delectus consequatur a commodi
                        repellat laudantium!
                    </p>
                    <div class="start-paragraph">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat corporis reiciendis necessitatibus
                        dolor asperiores tempore fugiat voluptatum deleniti unde debitis.
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.characters')
    <div class="events">
        <h1 class="events-heading">EVENTS</h1>
       @include('components.events')
    </div>
    {{-- <div class="div">
        <img src="{{ asset('style/104411427_p0_master1200.jpg') }}" alt="" class="div-img">
        <img src="{{ asset('style/images/My project (1).png') }}" alt="" class="d-img2">
    </div> --}}
    @include('components.map')

    @include('components.footer')
    {{-- <script type="text/javascript">
        document.addEventListener("mousemove", parallax);
        function parallax(e){
            document.querySelectorAll(".img-2").forEach(function(move){
                var moving_value = move.getAttribute("data-value");
                var x = (e.clientX * moving_value) / 250;
                var y = (e.clientY * moving_value) / 250;

                move.style.transform = "translateX(" + x + "px) translateY(" + y + "px)";
            });
        }
    </script> --}}
@endsection
