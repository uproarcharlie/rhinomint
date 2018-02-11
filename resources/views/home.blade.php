@extends('layouts.app')

@section('content')
<div id="mining" class="mainsection">
    <div id="home-buttons">
      <div class="w-container">
        <div class="row">
          <div class="col-sm-6"><img src="img/Rhinoblockchain.png" width="251" sizes="(max-width: 479px) 92vw, 251px">
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
      $xmrPerHash = 	0.00000000002003;

      $xmrBalance = $xmrPerHash * @$output['balance'];

       ?>

    <div class="col-sm-6">
      <div class="profile-summary">

        <h1 class="heading-4">Profile Info</h1>
          @if(session('success'))
              <p>{{ session('success') }}</p>
          @endif

          @if(session('error'))
              <p>{{ session('error') }}</p>
          @endif

          @if($output['success'] == true)
              Name: {{ $output['name'] }}<bR>
              Total: {{ $output['total'] }}<bR>
              Withdrawn: {{ $output['withdrawn'] }}<bR>
              Balance: {{ @$output['balance'] }}<bR>
          @endif
  <button class="withdraw-button" data-target="#withdrawModal" data-toggle="modal">Withdraw</button>

        <div class="modal" id="withdrawModal" tabindex="1">

          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button class="close" data-dismiss="modal">&times;</button>
                <h4>Withdraw</h4>
                <ul>
                  <li>Hash Balance: <strong>{{ @$output['balance'] }}</strong></li>
                  <li>Monero Balance: <strong>{{ number_format($xmrBalance, 8) }}</strong></li>
                </ul>
              </div>
              <div class="withdraw-body">
                <form action="" method="post" id="withdrawlform" name="withdrawlform" onsubmit="return CheckValues();">
                    {!! csrf_field() !!}
                  <div class="form-group">
                    <label for="inputWithdrawAmount">Withdraw Hashes</label>
                    <input class="form-control" name="amount" id="amount" placeholder="0.5XMR Minimum Withdrawal" type="number" id="inputWithdrawAmount" required>
                  </div>
                  <div class="form-group">
                    <labal for="inputMoneroWallet">XMR Wallet Address</label>
                      <input class="form-control" Placeholder="Wallet Address" type="text" id="inputMoneroWallet" value="text" required>
                    </div>
                    <button type="submit" class="withdraw-button">Withdraw</button>
                    <br>You currently don't have enough XMR to withdraw.</br>
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
    <div class="small-text">Hot ICOs people are investing in right now!</div>
    <img src="img/coinfi.jpg" width="70" class="press-logo">
    <img src="img/Appcoins.png" width="70" class="press-logo">
    <img src="img/refereum.png" width="70" class="press-logo">
    <img src="img/jibrelnetwork.png" width="70" class="press-logo">
    <img src="img/retainly.png" width="70" class="press-logo">
  </div>
</div>

<div class="section">
  <div class="container">
    <h2>Use your office or home PC to mine Cyptocurrencies with RhinoBlockchain\</h2>
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
  </div>

  <div class="how-it-works">
    <div class="container">
      <h2>How it works</h2>
      <div class="row">
        <div class="col-sm-3">
          <div data-ix="fade-in-on-scroll" class="plan-wrapper">
            <h3>Sign Up</h3>
            <div class="price-point"><span>The first step is to sign up, there are no sign up fees or lengthy registration process.<br>
              The whole signup process takes less than 5 minutes.<br>
            </span></div>

        </div>
      </div>
        <div class="col-sm-3">
          <div data-ix="fade-in-on-scroll" class="plan-wrapper">
            <h3>Login</h3>
            <div class="price-point"><span>After you have signed up, login to our website from your desired computer. </span>
            </div>

        </div>
      </div>
        <div class="col-sm-3">
          <div data-ix="fade-in-on-scroll" class="plan-wrapper">
            <h3>Start mining</h3>
            <div class="price-point">After logging in just click on start mining and start collecting Monero.
            </div>

        </div>
      </div>
        <div class="col-sm-3">
          <div data-ix="fade-in-on-scroll" class="plan-wrapper">
            <h3>Profit</h3>
            <div class="price-point">
              After you have generated enough Monero (a few hours) you are eligible to checkout and transfer the Monero you have generated to your personal wallet or an exchange of your choice.
            </div>

        </div>
      </div>
    </div>
  </div>
    <div id="FAQ" class="additional-contact"></div>
  </div>

  <div class="section">
    <div class="container">
      <h2>F.A.Q.</h2>
      </div>
      <div class="container">
        <p>
  <strong>What Cryptocurrency can I mine?</strong>
  <br>
  Currently you can only generate Monero with RhinoBlockchain. However we are working hard on adding more cryptocurrencies to RhinoBlockchain.com
  <br><br>
  <strong>I want to move my Cyptocurrency out of RhinoBlockchain? How do I do it?</strong>
  <br>Yes, you can move your currency out of RhinoBlockchain.com, First login to RhinoBlockchain.com and click on the withdraw button.
  <br>
  <br>
  <strong>My Hash Rate Seems Low – Why Monero?</strong>
  <br>Monero is different. To mine Monero, you have to calculate hashes with an algorithm called Cryptonight. This algorithm is very compute heavy and – while overall pretty slow – was designed to run well on consumer CPUs instead of GPUs.
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
 How can I run the Miner on the GPU / Graphics Card?
 </strong>
 <br>
 Currently RhinoBlockchain doesn’t utilize your GPU / Graphics card. However we are working on a better solution which will be available in the coming months.
 <br>
 <strong>
 How can I run the Miner on the GPU / Graphics Card?
 </strong>
 <br>
 Currently RhinoBlockchain doesn’t utilize your GPU / Graphics card. However we are working on a better solution which will be available in the coming months.
 <br>
 <strong>
 Is there a minimum amount I can Withdraw.
 </strong>
 <br>
 0.5XMR.
      </div>
  </div>

<div class="section footer copyright">
  <div class="w-container">
  <div>Copyright 2018 Fresh Economy Ltd. All Rights Reserved.</div>
  </div>
  </script>

  <script type="text/javascript">
      function CheckValues()
      {
          if((Number(document.getElementById('amount').value) * 0.00000000006039) < 0.5)
          {
              alert("You must have more than 0.5XMR to withdraw!");
              document.getElementById('amount').focus();
              return false;
          }
      }
  </script>

@endsection
