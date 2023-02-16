@extends('layouts.app')

@section('content')
    <div class="backend-container">
        <div class="profile">
            <div class="bew-20">
                <div class="backend-side-nav">
                    <div class="nav-items">
                        <div class="user-name">
                            <a href="/" class="u-name">
                                RS9
                            </a>
                        </div>
                    </div>
                    <div class="nav-items">
                        <div class="user-name">
                            <a href="/home" class="u-name">
                                DASHBOARD
                            </a>
                        </div>
                    </div>
                    <div class="nav-items">
                        <div class="user-name">
                            <a href="/character" class="u-name">
                                CHARACTER"S
                            </a>
                        </div>
                    </div>
                    <div class="nav-items">
                        <div class="user-name">
                            <a href="" class="u-name">
                                TIER"S
                            </a>
                        </div>
                    </div>
                    <div class="nav-items">
                        <div class="user-name">
                            <a href="/weapons" class="u-name">
                                WEAPONS
                            </a>
                        </div>
                    </div>
                    <div class="nav-items">
                        <div class="user-name">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="u-name">
                                {{-- LOGOUT --}}
                                {{ __('LOGOUT') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            {{-- <a href="{{ Auth::logout(); }}" class="u-name">
                                LOGOUT
                            </a> --}}
                            {{-- {{ Auth::logout(); }} --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="bew-50 bendwm">
                <div class="current-character-section">
                    <div class="char-w-30">
                        <div class="character-profile">
                            <div class="character-card">
                                <img src="{{ asset('style/images/profile103v2.png') }}" alt="" class="character-profile-img">
                            </div>
                            <div class="character-card-body">
                                <span class="backend-character-name">
                                    CODE : 0012<br>
                                    ABILITY : AIM/SNIPER AND ASSULT<br>
                                    GROUP : ST"S
                                </span>
                            </div>
                            <div class="backend-character-detail">
                                <span class="bchar-detail">
                                    PHASE 3 OF CODE NAME 0012 (HANABI). HANABI IS A MEMBER OF "NOIR ST"S"
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="char-w-70">
                        <div class="current-character">
                            <img src="{{ asset('style/images/profile102.png') }}" alt="" class="backend-character">
                        </div>
                    </div>
                </div>
            </div>
            <div class="bew-30">
                <div class="player-profile">
                    <div class="players-section">
                        <div class="players-detail">
                            <a href="" class="player-detail">
                                {{ Str::upper(Auth::user()->name) }}
                                {{-- {{ Auth::user()->name }} --}}
                                {{-- NOIR --}}
                            </a>
                        </div>
                        <div class="players-detail">
                            <a href="" class="player-detail">
                                level
                            </a>
                        </div>
                        <div class="players-detail">
                            <a href="" class="player-detail">
                                EMAIL
                            </a>
                        </div>
                        <div class="players-detail">
                            <a href="" class="player-detail">
                                settings
                            </a>
                        </div>
                        <div class="players-detail">
                            <a href="" class="player-detail">
                                change pass && email
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
