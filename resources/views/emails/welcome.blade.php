@component('mail::message')
# Introduction

Thanks for registering!

@component('mail::button', ['url' => 'http://brewery.dev/'])
Go To The Website
@endcomponent

@component('mail::panel', ['url' => 'http://brewery.dev/'])
    The last beer store your ever need!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
