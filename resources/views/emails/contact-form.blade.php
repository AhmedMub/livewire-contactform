@component('mail::message')
# New Message

You have recived a new message

## Message from:
__Name:__ {{$data['name']}}<br />
__Email:__ {{$data['email']}}<br />

## Message Content:
{{$data['message']}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
