@component('mail::message')
# Hello, {{ $user->name }}

The body of your message.

- one
- two
- three

@component('mail::button', ['url' => 'https://laracasts.com'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => 'https://laracasts.com'])
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum, augue quis pulvinar blandit, urna sapien suscipit dolor,
vitae varius augue justo nec nibh. In volutpat sapien tortor, ut pretium est vestibulum et.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
