<?php

use Illuminate\Support\Facades\Auth;

function totalFees() {
    if(Auth::check() && auth()->user()->fee) {
        return auth()->user()->fee->basic_fees + auth()->user()->fee->bar_council_fees + auth()->user()->fee->building_fees;
    }

    return false;
}