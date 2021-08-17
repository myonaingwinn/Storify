@component('mail::message')
# Welcome to Storify

Hi {{ $user->name }}, thanks for using our app.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/login'])
Login now
@endcomponent

Best Regards,<br>
{{ config('app.name') }}
@endcomponent
