@extends('layouts.master')
@section('content')
    <div class="seats">
        <div id="seat-map">
            <div class="front">SCREEN</div>
        </div>
        <div class="booking-details">
            <p>Movie: <span> {{ DB::table('films')->where('film')->first() }}</span></p>
            <p>Time: <span>November 3, 21:00</span></p>
            <p>Seat: </p>
            <ul id="selected-seats"></ul>
            <p>Tickets: <span id="counter">0</span></p>
            <p>Total: <b>$<span id="total">0</span></b></p>
            <button class="checkout-button">BUY</button>
            <div id="legend"></div>
        </div>
        <div style="clear:both"></div>
    </div>
@stop