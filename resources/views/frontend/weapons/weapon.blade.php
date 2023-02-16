<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <title>Weapons</title>
</head>
<body>
    <div class="weapons-container">
        @include('components.nav')
        <div class="weapons-ve">
            <div class="weapon-section">
                <div class="space"></div>
                <div class="weapon-heading">
                    <span class="weapon-head">
                        WEAPON"S
                    </span>
                </div>
                <div class="weapons">
                    <div class="space"></div>
                    <div class="w1">
                        <img src="{{ asset('images/weapons,others/wp1.png') }}" alt="" class="w1-img">
                        <div class="wp-detail">
                            <span class="wp-name">
                                HTA-A.S.M-BERMUDA
                            </span>
                        </div>
                    </div>
                    <div class="w1 w2">
                        <img src="{{ asset('images/weapons,others/wp2.png') }}" alt="" class="w1-img">
                        <div class="wp-detail">
                            <span class="wp-name">
                                HTA - L ALADE DIAFROST-19000
                            </span>
                        </div>
                    </div>
                    <div class="w1 w2">
                        <img src="{{ asset('images/weapons,others/wp3.png') }}" alt="" class="w1-img">
                        <div class="wp-detail">
                            <span class="wp-name">
                                SG-Gr BLADE REAXIS-32000
                            </span>
                        </div>
                    </div>
                    <div class="w1 w2">
                        <img src="{{ asset('images/weapons,others/wp4.png') }}" alt="" class="w1-img">
                        <div class="wp-detail w4">
                            <span class="wp-name">
                                0OA
                            </span>
                        </div>
                    </div>
                    <div class="w1 w2">
                        <img src="{{ asset('images/weapons,others/wp5.png') }}" alt="" class="w1-img">
                        <div class="wp-detail">
                            <span class="wp-name">
                                GRh-A.P.A-CARMINE-VZ
                            </span>
                        </div>
                    </div>
                    <div class="w1 w2">
                        <img src="{{ asset('images/weapons,others/wp6.png') }}" alt="" class="w1-img">
                        <div class="wp-detail">
                            <span class="wp-name">
                                MGia-G.M.K-DEVASTATE
                            </span>
                        </div>
                    </div>
                    <div class="w1 w2">
                        <img src="{{ asset('images/weapons,others/wp7.png') }}" alt="" class="w1-img">
                        <div class="wp-detail">
                            <span class="wp-name">
                                §G-T.V.R-FRONTAL BURST
                            </span>
                        </div>
                    </div>
                    <div class="w1 w2">
                        <img src="{{ asset('images/weapons,others/wp8.png') }}" alt="" class="w1-img">
                        <div class="wp-detail">
                            <span class="wp-name">
                                HTA-A.B-MAELSTROM DISCHARGER
                            </span>
                        </div>
                    </div>
                    <div class="w1 w2">
                        <img src="{{ asset('images/weapons,others/wp9.png') }}" alt="" class="w1-img">
                        <div class="wp-detail">
                            <span class="wp-name">
                                HTA - H.A STINGER DELUGEARS-79001
                            </span>
                        </div>
                    </div>
                    <div class="w1">
                        <img src="{{ asset('images/weapons,others/wp10.png') }}" alt="" class="w1-img">
                        <div class="wp-detail">
                            <span class="wp-name">
                                GRh-DZ-VERMILIONTRICK
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vehicles">
                <div class="vehicles-section">
                    <div class="space"></div>
                    <div class="weapon-heading vesh">
                        <span class="weapon-head">
                            VEHICLES/SUITS
                        </span>
                    </div>
                    <div class="space"></div>
                    <div class="vehiclesundsuits">
                        <div class="v1">
                            <img src="{{ asset('images/weapons,others/su1.png') }}" alt="" class="v1-img">
                            <div class="vs-detail">
                                <span class="vs-name">
                                    K-4 OSPREY
                                </span>
                            </div>
                        </div>
                        <div class="v1 w2">
                            <img src="{{ asset('images/weapons,others/su2.png') }}" alt="" class="v1-img">
                            <div class="vs-detail">
                                <span class="vs-name">
                                    K-3 ALBATRUS
                                </span>
                            </div>
                        </div>
                        <div class="v1 w2">
                            <img src="{{ asset('images/weapons,others/veh2.png') }}" alt="" class="v2-img">
                            <div class="vs-detail vs2">
                                <span class="vs-name">
                                    ROVER
                                </span>
                            </div>
                        </div>
                        <div class="v1">
                            <img src="{{ asset('images/weapons,others/veh1.png') }}" alt="" class="v1-img">
                            <div class="vs-detail vs3">
                                <span class="vs-name">
                                    NO.2 EXPERIMENTAL FIREPOWER SUPPORT CRUISER
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
