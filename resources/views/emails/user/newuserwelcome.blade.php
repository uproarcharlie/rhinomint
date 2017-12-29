@component('mail::message')
# Welcome {{ $user ->username}},

Thanks for signing up to Rhinomint. The web app that allows you to mine cryptocurrencies at the click on a button.

@component('mail::button', ['url' => 'https://www.rhinomint.co'])
Start Mining Now $
@endcomponent

Happy Mining,<br>
{{ config('app.name') }}
@endcomponent
