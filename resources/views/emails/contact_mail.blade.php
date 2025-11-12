@component('mail::message')
    <h4>Hello Admin,</h4>
    <p>Following contact has messaged you from the Contact Page of <a href="{{ env('APP_URL') }}" style="font-weight: bold; text-decoration: none; color: #007bff;">{{ env('APP_NAME') }}</a></p>

    <p><strong>Name:</strong> {{ $contactMessage->name }}</p>
    <p><strong>Email:</strong> {{ $contactMessage->emails }}</p>
    <p><strong>Phone Number:</strong> {{ $contactMessage->number }}</p>
    <p><strong>Message:</strong> {{ $contactMessage->message }}</p>

    <br>
    <p>Thanks,<br>
    {{ config('app.name') }}</p>
@endcomponent
