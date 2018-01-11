@component('mail::message')
Beste lezer,
<br/><
Er is contact opgenomen voor PRJCT Amsterdam middels het contactformulier.
<br/><br/>
De volgende gegevens zijn achtergelaten:
<br/><br/>
<strong>Naam:</strong> {{ $form_data['name'] }}<br/>
<strong>Email:</strong> {{ $form_data['email'] }}<br/>
<strong>Telefoonnummer:</strong> {{ $form_data['phone_number'] }}<br/>
<strong>Bericht:</strong> {{ $form_data['message'] }}<br/></br>
Vriendelijke groet,
<br/><br/>
Mailserver PRJCT Amsterdam
<br/><br/>
namens,<br/>
<a href='https://www.mentechmedia.nl'>MEN Technology & Media</a>
@endcomponent