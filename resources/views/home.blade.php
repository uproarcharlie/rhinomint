@extends('layouts.app')

@section('content')
<div class="mainsection">
    <div id="home-buttons">
      <div class="w-container">
        <div class="row">
          <div class="col-sm-6"><img src="img/Rhinomint-logo.png" width="251" srcset="img/Rhinomint-logo-p-500.png 500w, img/Rhinomint-logo.png 1600w" sizes="(max-width: 479px) 92vw, 251px">
            <h1 class="heading-2">Instant Miner</h1>
            <script src="https://authedmine.com/lib/simple-ui.min.js" async></script>

<div class="coinhive-miner"
	style="width: 256px; height: 310px"
	data-key="s4F8ImJkMvakXX8p9nkGZxjJAJ2jWFHe"
	data-autostart="false"
	data-whitelabel="true"
	data-background="#fff"
	data-text="#797687"
	data-action="#9be2d4"
	data-graph="#9be2d4"
	data-threads="8"
	data-throttle="0.1"
  data-user="{{ Auth::user()->username }}">
	<em>Loading...</em>
</div>
        <div id="dash-button">
          <!--<button href="#" id="home-buttons" class="start-miner-button">Start Mining</button>-->
          </div>
      </div>

      <?php
      $xmrPerHash = 	0.00000000006039;

      $xmrBalance = $xmrPerHash * $output['balance'];

       ?>

    <div class="col-sm-6">
      <div class="profile-summary">

        <h1 class="heading-4">Profile Info</h1>
          @if($output['success'] == true)
              Name: {{ $output['name'] }}<bR>
              Total: {{ $output['total'] }}<bR>
              Withdrawn: {{ $output['withdrawn'] }}<bR>
              Balance: {{ $output['balance'] }}<bR>
          @endif
  <button class="withdraw-button" data-target="#withdrawModal" data-toggle="modal">Withdraw</button>

        <div class="modal" id="withdrawModal" tabindex="1">

          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button class"close" data-dismiss="modal">&times;</button>
                <h4>Withdraw</h4>
                <ul>
                  <li>Hash Balance: <strong>{{ $output['balance'] }}</strong></li>
                  <li>Monero Balance: <strong>{{ number_format($xmrBalance, 8) }}</strong></li>
                </ul>
              </div>
              <div class="withdraw-body">
                <form>
                  <div class="form-group">
                    <label for="inputWithdrawAmount">Withdraw Hashes</label>
                    <input class="form-control" placeholder="0.5XMR Minimum Withdrawal" type="number" id="inputWithdrawAmount" required>
                  </div>
                  <div class="form-group">
                    <labal for="inputMoneroWallet">XMR Wallet Address</label>
                      <input class="form-control" Placeholder="Wallet Address" type="text" id="inputMoneroWallet" required>
                    </div>
                    <button type="submit" class="last-withdraw-button">Withdraw</button>
                  </form>
                </div>
              </div>
            </div>
            </div>
        <h1 class="heading-4">Withdrawal information</h1>
        <p class="paragraph">- To complete a withdrawal you will need to provide your wallet address.
          <br>- A withdrawal can take upto 10 minutes depending on network availability.
          <br>- Read FAQ&#x27;s or discussions in Discord to find out more.</p>

        </div>
      </div>
    </div>
  </div>
</div>
<div class="section clients">
  <div class="container">
    <h1>Connect or chat with us on</h1><img src="img/Discord_logo_svg.svg" width="164"></div>
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
        <p>
  <strong>What Cryptocurrency can I mine?</strong>
  <br>
  Currently you can only Monero with RhinoMint. However we are working hard on adding more cryptocurrencies to RhinoMint.co
  <br><br>
  <strong>Can I move my Cyptocurrency out of RhinoMint? How do I do it?</strong>
  <br>Yes, you can move your currency out of RhinoMint.co, First login to Rhinomint.co and click on withdraw button.
  <br>
  <br>
  <strong>My Hash Rate Seems Low – Why Monero?</strong>
  <br>Monero is different. To mine Monero, you have to calculate hashes with an algorithm called Cryptonight. This algorithm is very compute heavy and – while overall pretty slow – was designed to run well on consumer CPUs.
  <br>
  <br>
  <strong>What sort of payout can I expect?</strong>
  <br>We pay per solved hash. The payout rate is adjusted automatically every few hours based on the global difficulty of the network and the average reward per block. The payout rate is calculated like this :(/) * * 0.5
  <br>
  With the current network difficulty of 69.83G (updated Jan 5, 2018 - 12:56:24) and average block reward of 5.78 XMR:
  <br>
 (<solved_hashes>/69829921279) * 5.78 XMR * 0.5
  <br>
  I.e. you get 50% of the average XMR we earn. Unlike a traditional mining pool, this rate is fixed, regardless of actual blocks found and the luck involved finding them. We keep 50% for us to operate this service and to (hopefully) turn a profit.
  <br>
  <br>
 <strong>Does the miner work on Mobile devices?</strong>
 <br>
 Yes, but it's very slow and not really worth it. We highly recommend you to use a stable internet connection and a good pc.
 <br>
 <br>
 <strong> Why is there a fee for certain payouts? </strong>
 <br>
 Payouts of at least 0.5 XMR made to plain Monero addresses do not incur a fee. For payouts below 0.5 XMR or payouts made to integrated addresses, such as used by exchanges and various web wallets, we charge a fee of 0.005 XMR per payout.
 <br>
 Unfortunately the transaction fees that we have to pay in the Monero network are quite high. Making lots of small payments is therefore quite expensive. Similarly, payouts sent to integrated addresses cannot be batched with other payouts into a single transaction and thus also cost a lot.
 <br>
 We're giving our users the option to pay part of these fees if they want to receive small payouts or payouts to exchanges.
 <br>
 Payouts to plain Monero addresses of at least 0.5 XMR will remain to be free.
 <br>
 The Monero network is also programmed to lower the reward for each block found over time. So each new block will give a lower reward than the last one.
 <br>
 Currently, the price rise of Monero offsets both of these factors. Our payout, calculated in USD, is now actually a bit higher than it was when we started.
 <br>
 <br>
 <strong>
 How can I run the Miner on the GPU / Graphics Card
 </strong>
 <br>
 Currently RhinoMint doesn’t utilize your GPU / Graphics card. However we are working on a better solution which will be available in coming months.
      </div>
  </div>

<div class="section footer copyright">
  <div class="w-container">
  <div>Copyright 2018 Fresh Economy Ltd. All Rights Reserved.</div>
  </div>
  </script>
@endsection
