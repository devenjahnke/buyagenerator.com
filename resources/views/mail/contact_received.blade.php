@component('mail::message')
    # Contact Received

    Hey {{ $contact->first_name }}!

    Thanks for reaching out. We'll be sure to get back to you as soon as we can.

    Thanks,
    {{ config('app.name') }}!
@endcomponent
