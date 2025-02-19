@component('mail::message')
# Email Confirmation

Hello **{{'@'.$verify->user->username}}**, please confirm your email address.

If you did not create this account, please disregard this email.

@component('mail::button', ['url' => $verify->url()])
Confirm Email
@endcomponent

<p>This link expires after 24 hours.</p>
<br>
<small>
  If the link above is not working, please copy the following address into your web browser:
  <br><br>
  {{ $verify->url() }}
</small>
<br><br>

Thanks,<br>
<a href="{{ config('app.url') }}">{{ config('pixelfed.domain.app') }}</a>
@endcomponent
