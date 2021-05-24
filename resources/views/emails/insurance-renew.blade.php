
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                    <td bgcolor="#ffffff"align="center" style="color: #0e4f6d; font-size: 24px; font-family: Quicksand, Calibri, sans-serif; font-weight:700;letter-spacing: 3px; line-height: 35px;" class="main-header">


                        <div style="line-height: 35px">

                            <h1>{{ config('app.name') }} - Insurance Renewal </h1><br><br>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td bgcolor="#ffffff" align="left">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td bgcolor="#ffffff" align="center" style="padding: 0px 30px 0px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                    <div style="line-height: 24px; color: #0e4f6d">
                                        Hello {{ $full_name }},<br><br>
                                        The Insurance of {{ $insurance_name }} that you have purchased is due to expire on {{ $expiry_date }}. Please renew your insurance to get rid of any further loss of the services.<br><br>
                                        Click <a href="{{ env('APP_FULL_URL').'/public/purchases' }}">here</a> to check your purchase insurance details. If your package is up to date, your service will not be interrupted.<br><br>


                                        Thanks,<br>
                                        {{ config('app.name') }}
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

</body>

</html>
