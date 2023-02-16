@extends('frontend.ch.capp')

@section('character')
<div class="spe-character">
    <div class="spew-25">
        <div class="st-heading">
            <a href="/character" class="back"><</a>
            <span class="st-head">
                XXEFS-012
            </span>
        </div>
        <div class="st-characters">
            <img src="{{ asset('characters/xxefs/My project 101.png') }}" alt="" class="st-ch2 sc">
        </div>
        <div class="st-characters">
            <img src="{{ asset('characters/xxefs/My project 102.png') }}" alt="" class="st-ch2 sc">
        </div>
        <div class="st-characters">
            <img src="{{ asset('characters/xxefs/My project (2).png') }}" alt="" class="xxefs-ch1 xxefs">
        </div>
        <div class="st-characters">
            <img src="{{ asset('characters/xxefs/My project (3).png') }}" alt="" class="spe-ch4 sp4">
        </div>
    </div>
    <div class="spew-25 wp">
        <div class="selected-name">
            <span class="sel-name">
                RYUSIA
            </span>
        </div>
        <div class="selected-details">
            <span class="st-detail">
                Ryusia. As you can see she is an dragon and also she is MOE.
            </span>
            <div class="ability">
                <span class="detail-ab st-detail">
                    Ability: Green Fire Breathe, Strength
                </span>
            </div>
            <div class="ability">
                <span class="detail-ab st-detail">
                    Weapon: Strength
                </span>
            </div>
            <div class="home">
                <span class="detail-h st-detail">
                    HOME:  XXEFS-012
                </span>
            </div>
        </div>
    </div>
    <div class="spew-50">
        <div class="selected-character">
            <img src="{{ asset('characters/xxefs/My project (2).png') }}" alt="" class="selected-img-xxfes">
        </div>
    </div>
</div>
@endsection
