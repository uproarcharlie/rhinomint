@extends('layouts.app')

@section('content')
<div id="margin-top" class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button><p>By signing up you agree to our Privacy and Terms of Service agreement.</p>
                            </div>
                        </div>
                    </form>
                    <strong>Terms of Service</strong>
                    <br>
                      1. You must not use RhinoMint for any illegal purposes.
                      <br>2. You must not reverse engineer, hack, exploit or otherwise attack RhinoMint or RhinoMint's servers.
                      <br>3. Attempting to exploit, hack or spam RhinoMint will lead to the termination of your account.
                      <br>4. We keep the right to terminate your account at any time for any reason.
                      <br>5. We are not responsible for damages to you, your servers, your users or your users' hardware caused directly or indirectly by RhinoMint.
                      <br>6. You may run RhinoMint  on computer that you are authorization to do so. If you run RhinoMint in people’s computers that they have not authorized, we will terminate your account.
                      <br>7. We reserve the right to extend these Terms of Service in the future.
                    <br>
                  <strong><h1>Privacy</h1></strong>
                    <br>
                      This privacy policy has been compiled to better serve those who are concerned with how their 'Personally Identifiable Information' (PII) is being used online. PII, as described in US privacy law and information security, is information that can be used on its own or with other information to identify, contact, or locate a single person, or to identify an individual in context. Please read our privacy policy carefully to get a clear understanding of how we collect, use, protect or otherwise handle your Personally Identifiable Information in accordance with our website.
                      <br><strong>What personal information do we collect from the people that visit our blog, website or app?</strong>
                      <br>When mining, withdrawing or registering on our site, as appropriate, you may be asked to enter your name, email address or other details to help you with your experience.
                      <br><strong>When do we collect information?</strong>
                      <br><ul>We collect information from you when you register on our site or enter information on our site.
                        <li>Name</li>
                        <li>Email</li>
                        <li>Monero Wallet address </li>
                      </ul>
                      <br><strong>How do we use your information?</strong>
                      <br>We may use the information we collect from you when you register, make a purchase, sign up for our newsletter, respond to a survey or marketing communication, surf the website, or use certain other site features in the following ways:
                      <br><ul>
                        <li> To personalize your experience and to allow us to deliver the type of content and product offerings in which you are most interested.</li>
                        <li>To quickly process your transactions.</li>
                      </ul>
                     <br><strong>How do we protect your information?</strong>
                    <br>We do not use vulnerability scanning and/or scanning to PCI standards.
                    <br>We only provide articles and information. We never ask for credit card numbers.
                    <br>We do not use Malware Scanning.
                    <br>Your personal information is contained behind secured networks and is only accessible by a limited number of persons who have special access rights to such systems, and are required to keep the information confidential. In addition, all sensitive/credit information you supply is encrypted via Secure Socket Layer (SSL) technology.
                    <br>We implement a variety of security measures when a user enters, submits, or accesses their information to maintain the safety of your personal information.
                    <br>All transactions are processed through a gateway provider and are not stored or processed on our servers.


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
