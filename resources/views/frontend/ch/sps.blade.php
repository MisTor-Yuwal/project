@extends('frontend.ch.capp')
@section('character')
<div class="spe-character">
    <div class="spew-25">
        <div class="st-heading">
            <a href="/character" class="back"><</a>
            <span class="st-head">
                SP"S
            </span>
        </div>
        <div class="st-characters">
            <img src="{{ asset('characters/sps/My project102.png') }}" alt="" class="xxefs-ch1 xxefs">
        </div>
        <div class="st-characters">
            <img src="{{ asset('characters/sps/My project103.png') }}" alt="" class="xxefs-ch1 xxefs">
        </div>
        <div class="st-characters">
            <img src="{{ asset('characters/sps/My project104.png') }}" alt="" class="xxefs-ch1 xxefs">
        </div>
        <div class="st-characters">
            <img src="{{ asset('characters/sps/My project1011.png') }}" alt="" class="st-ch2 sc">
        </div>
    </div>
    <div class="spew-25 wp">
        <div class="selected-name">
            <span class="sel-name">
                YUKINA
            </span>
        </div>
        <div class="selected-details">
            <span class="st-detail">
                Yukina member of sp"s, also know as snow queen.Her sword-skills are real deal.
            </span>
            <div class="ability">
                <span class="detail-ab st-detail">
                    Ability: Double Katana,Fast
                </span>
            </div>
            <div class="ability">
                <span class="detail-ab st-detail">
                    Weapon: Not Ordinary Katana
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
            <img src="{{ asset('characters/sps/My project.png') }}" alt="" class="selected-img">
        </div>
    </div>
</div>
@endsection
