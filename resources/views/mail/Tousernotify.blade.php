<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Enrollment Confirmation</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px;">
    <table width="100%" cellpadding="0" cellspacing="0"
        style="max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 10px;">
        <tr>
            <td style="text-align: center;">
                <h2 style="color: #2c3e50;">🎉 Thank You for Enrolling!</h2>
                <p style="color: #555; font-size: 16px;">
                    Dear {{ $user->name }},
                </p>
                <p style="color: #555; font-size: 16px;">
                    Thank you for enrolling in our course. We have received your application and will review it shortly.
                </p>
                <p style="color: #555; font-size: 16px;">
                    You will be notified by email once your application has been approved or rejected.
                </p>
                <p style="margin-top: 20px; font-size: 14px; color: #888;">
                    Regards,<br>
                    <strong>Your Institute Name</strong>
                </p>
            </td>
        </tr>
    </table>
</body>

</html>
