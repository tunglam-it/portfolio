@component('mail::message')

  <p>New Message From: {{$contact_form_data['email']}}</p>

  <p>Name: {{$contact_form_data['name']}}</p>

  <p>Message: {{$contact_form_data['message']}}</p>

@endcomponent
