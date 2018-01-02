@extends('layouts.app')

@section('content')
<div class="mainsection">
    <div id="home-buttons">
      <div class="w-container">
        <div class="row">
          <div class="col-sm-6"><img src="img/Rhinomint-logo.png" width="251" srcset="img/Rhinomint-logo-p-500.png 500w, img/Rhinomint-logo.png 1600w" sizes="(max-width: 479px) 92vw, 251px">
            <h1 class="heading-2">Instant Miner</h1><img src="img/bcfe29eb2d01253b9b6e9966bf248ee0.gif" data-ix="fade-in-on-load" width="280" class="main-image">
            <div id="home-buttons">
        <button href="#" id="home-buttons" class="start-miner-button">Start Mining</button>
        </div>
      </div>
    <div class="col-sm-6">
      <div class="profile-summary">
        <h1 class="heading-4">My Profile: {{ Auth::user()->username }}</h1>
        <p class="paragraph"><strong>Total Mined: 8</strong><br>
            <br><strong>Unconfirmed monero:</strong> <strong>8</strong><br>
          <button href="#" class="withdraw-button">Withdraw</button>
        <h1 class="heading-3">Withdrawal information</h1>
        <p class="paragraph-3">- To complete a withdrawal you will need to provide your wallet address.
          <br>- A withdrawal can take upto 10 minutes depending on network availability.
          <br>- Read FAQ&#x27;s or discussions in Discord to find out more.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section clients">
  <div class="container">
    <h1>Connect or chat with us on</h1><img src="img/Discord_logo_svg.svg" width="164"></div>
</div>
<div class="section footer copyright">
  <div class="w-container">
    <div>Copyright 2014 Metric. All Rights Reserved. Brand logos for demonstration purposes only.</div>
  </div>
@endsection
