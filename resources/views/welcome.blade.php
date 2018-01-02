@extends('layouts.app')
@section('content')

<div class="mainsection">
  <div class="w-container">
    <div class="row">
      <div class="col-sm-6"><img src="img/Rhinomint-logo.png" width="359" srcset="img/Rhinomint-logo-p-500.png 500w, img/Rhinomint-logo.png 1600w" sizes="(max-width: 479px) 92vw, (max-width: 767px) 75vw, (max-width: 991px) 46vw, 359px">
        <p class="paragraph-2">Use your home or office computer to start mining cryptocurrencies. All you need is a browser like Chrome, IE, Mozilla or Brave and internet.</p>
        <div id="home-buttons">
        <button href="#" class="start-miner-button">Start Mining</button><button href="#" class="withdraw-button">Withdraw</button>
      </div>
      </div>
      <div class="col-sm-6">
        <h1 class="mainheader">Instant Miner</h1><img src="{{ asset('/img/bcfe29eb2d01253b9b6e9966bf248ee0.gif') }}" data-ix="fade-in-on-load" width="362" class="main-image">
        </div>
      </div>
    </div>
  </div>

  <div class="section press">
    <div class="container">
      <div class="small-text">IN THE PRESS</div>
      <img src="img/logo_Fastcompany.svg" width="70" class="press-logo">
      <img src="img/logo_Forbes.svg" width="70" class="press-logo">
      <img src="img/logo_techcrunch.svg" width="70" class="press-logo">
      <img src="img/logo_Wired.svg" width="70" class="press-logo">
      <img src="img/logo_zdnet.svg" width="70" class="press-logo">
    </div>
  </div>

  <div class="section">
    <div class="container">
      <h2>Use your office or home PC to mine Cyptocurrencies with RhinoMint</h2>
      <div class="section-subtitle">Start making use of underused computers
      </div>
    </div>
      <div class="container">
      <div class="row">
        <div class="col-sm-6"><img src="img/Metric-screenshot2.png" data-ix="fade-in-on-scroll" srcset="img/Metric-screenshot2-p-500x320.png 500w, img/Metric-screenshot2-p-800x512.png 800w, img/Metric-screenshot2.png 814w" sizes="(max-width: 479px) 96vw, (max-width: 767px) 97vw, (max-width: 991px) 46vw, 460px">
      </div>
        <div class="col-sm-6">
          <div class="main-feature-group">
            <span class="iconic iconic-laptop iconic-lg" title="laptop" aria-hidden="true"></span>
            <h3>Web Application</h3>
            <p>Just go to our website from any computer and start mining. Login to saving what you have mined in your session.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
            <h3>Mobile Wallet</h3>
            <p>Download the Monero you have made to your mobile wallet.</p>
          </div>
          <div class="col-sm-6"><img src="img/Metric-screenshot-phone.png" data-ix="fade-in-on-scroll" srcset="img/Metric-screenshot-phone-p-500x243.png 500w, img/Metric-screenshot-phone-p-800x389.png 800w, img/Metric-screenshot-phone.png 1000w" sizes="(max-width: 479px) 96vw, (max-width: 767px) 97vw, (max-width: 991px) 46vw, 460px">
          </div>
        </div>
      </div>
    </div>

    <div class="how-it-works">
      <div class="container">
        <h2>How it works</h2>
        <div class="row">
          <div class="col-sm-3">
            <div data-ix="fade-in-on-scroll" class="plan-wrapper">
              <h3>Sign Up</h3>
              <div class="price-point"><span>The first step is to sign up, there is no sign up fees or lengthy registration process.<br>The whole signup process takes less then 5 mins.<br></span></div>
              <button href="#" class="how-it-works-button">Signup</button>
          </div>
        </div>
          <div class="col-sm-3">
            <div data-ix="fade-in-on-scroll" class="plan-wrapper">
              <h3>Login</h3>
              <div class="price-point"><span>After you have signed up, login to our website from your desired computer. </span>
              </div>
              <button href="#" class="how-it-works-button">Login</button>
          </div>
        </div>
          <div class="col-sm-3">
            <div data-ix="fade-in-on-scroll" class="plan-wrapper">
              <h3>Start mining</h3>
              <div class="price-point">After logging in just click on start mining and start collecting Monero.
              </div>
              <button href="#" class="how-it-works-button">Start Mining</button>
          </div>
        </div>
          <div class="col-sm-3">
            <div data-ix="fade-in-on-scroll" class="plan-wrapper">
              <h3>Profit</h3>
              <div class="price-point">After couple of hours or after you have generated a certain amount you are eligible to checkout and transfer the Monero you have generated to your personal wallet or an exchange of your choice.
              </div>
              <button href="#" class="how-it-works-button">Withdraw</button>
          </div>
        </div>
      </div>
    </div>
      <div class="additional-contact">Any questions? Contact us on Discord or Facebook messenger</div>
    </div>

    <div class="section">
      <div class="container">
        <h2>F.A.Q.</h2>
      </div>
      <div class="container">
        <p><strong>What Cryptocurrency can I mine?</strong><br>Currently you can only Monero with RhinoMint. However we are working hard on adding more cryptocurrencies to RhinoMint.co<br><br><strong>Can I move my Cyptocurrency out of RhinoMint? How do I do it?</strong><br>Yes, you can move your currency out of RhinoMint.co,<br><br><strong>My Hash Rate Seems Low – Why Monero?</strong><br>Monero is different. To mine Monero, you have to calculate hashes with an algorithm called Cryptonight. This algorithm is very compute heavy and – while overall pretty slow – was designed to run well on consumer CPUs.There are solutions to run the Cryptonight algorithm on a GPU instead, but the benefit is about 2x, not 10000x like for other algorithms used by Bitcoin or Ethereum. This makes Cryptonight a nice target for JavaScript and the Browser.Of course, when running through JavaScript performance still takes a bit of a toll, but it&#x27;s not that bad. Our miner uses WebAssembly and runs with about 65% of the performance of a native Miner. For an Intel i7 CPU (one of the fastest desktop CPUs) you should see a hashrate of about 90h/s. A native miner would get to 140h/s.We&#x27;d like to further close this gap and are working on solutions to do so.<br><br><strong>What sort of payout can I expect?</strong><br>We pay per solved hash. The payout rate is adjusted automatically every few hours based on the global difficulty of the network and the average reward per block. The payout rate is calculated like this:(/) * * 0.5<br><br>With the current network difficulty of 58.849G (updated Dec 23, 2017 - 22:03:00) and average block reward of 5.77 XMR:(/58849124194) * 5.77 XMR * 0.5 = 0.000069 XMR per 1M hashesI.e. you get 50% of the average XMR we earn. <br><br>Unlike a traditional mining pool, this rate is fixed, regardless of actual blocks found and the luck involved finding them. We keep 50% for us to operate this service and to (hopefully) turn a profit.We try to run this service with as much transparency as possible. If your users solve hashes, you get paid. Period. The minimum payout threshold is 0.02 XMR (~$7).Payouts are fully automated and are initiated every 2nd hour, 12 times a day. If you reach the minimum payout threshold, you&#x27;ll automatically receive your money in the next batch.</p>
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
    </div>






@endsection
