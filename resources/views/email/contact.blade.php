@component('mail::message')
# You've got a new message from {{$email->name}} ({{$email->email}}). Details below
@component('mail::panel')
{{$email->message}}
@endcomponent

<div style="text-align: center;">
{{ config('app.name') }}
</div>

@endcomponent
