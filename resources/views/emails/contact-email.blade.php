
<h1>{{ config('app.name') }} - Contact Email</h1><br><br>

Hello Admin,<br>
You received an email from : {{ $name }}<br>
Here are the details:<br><br>
<b>Name: </b> {{ $name }}<br>
<b>Email: </b> {{ $email }}<br>
<b>Subject: </b> {{ $subject }}<br>
<b>Message: </b> {{ $message_content }}<br><br>

Thanks,<br>
{{ config('app.name') }}

