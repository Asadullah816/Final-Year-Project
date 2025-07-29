<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Application Status</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px;">
    <table width="100%" cellpadding="0" cellspacing="0"
        style="max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 10px;">
        <tr>
            <td style="text-align: center;">

                @if ($application->status === 'approved')
                    <h2 style="color: green;">✅ Congratulations!</h2>
                    <p style="color: #555; font-size: 16px;">
                        Dear {{ $user->name }},
                    </p>
                    <p style="color: #555; font-size: 16px;">
                        Your application for <strong>{{ $application->course->name }}</strong> has been
                        <strong>approved</strong>! 🎉
                    </p>
                @elseif ($application->status === 'rejected')
                    <h2>Hello {{ $user->name }},</h2>

                    <p>We regret to inform you that your application for the course
                        <strong>{{ $application->course->name }}</strong> has been <span
                            style="color:red;">rejected</span>.
                    </p>

                    <p><strong>Reason:</strong> You are not eligible for this course at the moment.</p>

                    <p>If you have questions, please contact our support team.</p>

                    <p>Regards,<br>Institute Team</p>
                    </p>
                @endif

                <p style="margin-top: 20px; font-size: 14px; color: #888;">
                    Regards,<br>
                    <strong>Your Institute Name</strong>
                </p>
            </td>
        </tr>
    </table>
</body>

</html>
