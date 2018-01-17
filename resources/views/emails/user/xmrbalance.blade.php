@component('mail::message')
# Hello Admin,

Please find below withdrawl request details :

Username: {{ $user->username }}
Email: {{ $user->email }}
Withdrawl Amount: {{ $amount }}

Happy Mining,<br>
{{ config('app.name') }}
@endcomponent
