@extends('frontend.ch.capp')
@section('character')
<div class="spe-character">
    <div class="spew-25">
        <div class="st-heading">
            <a href="/character" class="back"><</a>
            <span class="st-head">
                TERMINATOR"S
            </span>
        </div>
        <div class="st-characters">
            <img src="{{ asset('characters/te/My project.png') }}" alt="" class="xxefs-ch1 xxefs">
        </div>
        <div class="st-characters">
            <img src="{{ asset('characters/te/My project (1).png') }}" alt="" class="xxefs-ch1 xxefs">
        </div>
        <div class="st-characters">
            <img src="{{ asset('characters/te/My project (2).png') }}" alt="" class="xxefs-ch1 xxefs">
        </div>
        <div class="st-characters">
            <img src="{{ asset('characters/te/My project (4).png') }}" alt="" class="st-ch1 xxefs">
        </div>
    </div>
    <div class="spew-25 wp">
        <div class="selected-name">
            <span class="sel-name">
                AKARI
            </span>
        </div>
        <div class="selected-details">
            <span class="st-detail">
                Akari, member of terminator's known for unfailed mission's.
            </span>
            <div class="ability">
                <span class="detail-ab st-detail">
                    Ability: Termination of enemy, Locations
                </span>
            </div>
            <div class="ability">
                <span class="detail-ab st-detail">
                    Weapon: Kuro-Aka suit
                </span>
            </div>
            <div class="home">
                <span class="detail-h st-detail">
                    HOME:  UNKNOWN
                </span>
            </div>
        </div>
    </div>
    <div class="spew-50">
        <div class="selected-character">
            <img src="{{ asset('characters/te/My project (3).png') }}" alt="" class="selected-img-spe">
        </div>
    </div>
</div>
@endsection
