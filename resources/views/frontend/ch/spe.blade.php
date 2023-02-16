@extends('frontend.ch.capp')

@section('character')
    {{-- <h1>spe</h1> --}}
    <div class="spe-character">
        <div class="spew-25">
            <div class="st-heading">
                <a href="/character" class="back"><</a>
                <span class="st-head">
                    SPE/990-XEC
                </span>
            </div>
            <div class="st-characters">
                <img src="{{ asset('characters/spe/My project.png') }}" alt="" class="st-ch2 sc">
            </div>
            <div class="st-characters">
                <img src="{{ asset('characters/spe/My project (1).png') }}" alt="" class="st-ch2 sc">
            </div>
            <div class="st-characters">
                <img src="{{ asset('characters/spe/My project102.png') }}" alt="" class="st-ch1 sc">
            </div>
            <div class="st-characters">
                <img src="{{ asset('characters/spe/My project101.png') }}" alt="" class="spe-ch4 sp4">
            </div>
        </div>
        <div class="spew-25 wp">
            <div class="selected-name">
                <span class="sel-name">
                    SILIVIYA
                </span>
            </div>
            <div class="selected-details">
                <span class="st-detail">
                    Siliviya, she is know for her drone controlls and operations.
                </span>
                <div class="ability">
                    <span class="detail-ab st-detail">
                        Ability: Technicals/Hacking
                    </span>
                </div>
                <div class="ability">
                    <span class="detail-ab st-detail">
                        Weapon: Drone's & Computers
                    </span>
                </div>
                <div class="home">
                    <span class="detail-h st-detail">
                        HOME:  SPE/990-XEC
                    </span>
                </div>
            </div>
        </div>
        <div class="spew-50">
            <div class="selected-character">
                <img src="{{ asset('characters/spe/My project (3).png') }}" alt="" class="selected-img-spe">
            </div>
        </div>
    </div>
@endsection
