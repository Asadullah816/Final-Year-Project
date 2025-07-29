<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Application Submitted</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px;">
    <table width="100%" cellpadding="0" cellspacing="0"
        style="max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 10px;">
        <tr>
            <td>

                <h2 style="color: #2c3e50;">📩 New Application Received</h2>
                <p style="color: #555; font-size: 16px;">
                    A new application has been submitted by <strong>{{ $user->name }}</strong>.
                </p>
                <h3 style="color: #2c3e50;">Applicant Details:</h3>
                <ul style="color: #555; font-size: 16px;">
                    <li><strong>Name:</strong> {{ $user->information->first_name }}
                        {{ $user->information->middle_name ?? '' }} {{ $user->information->last_name ?? '' }}</li>
                    <li><strong>Email:</strong> {{ $user->email }}</li>
                    <li><strong>Phone:</strong> {{ $user->information->phone ?? 'N/A' }}</li>
                    <li><strong>Course Applied:</strong> {{ $application->course->name }}</li>
                </ul>
                <p style="margin-top: 20px; font-size: 14px; color: #888;">
                    Please review the application in the admin panel.
                </p>
            </td>
        </tr>
    </table>
</body>

</html>
