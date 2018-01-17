@component('mail::message')
# Welcome {{ $user ->username}},

Your withdrawl is successful. Please find your balance below :

Balance: {{ $user->xmr_balance }}

Happy Mining,<br>
{{ config('app.name') }}
@endcomponent
