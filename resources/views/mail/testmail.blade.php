<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .content {
            padding: 20px;
            line-height: 1.6;
        }

        .footer {
            background-color: #f1f1f1;
            color: #777;
            text-align: center;
            padding: 10px;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        h2 {
            color: #333;
        }

        p {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <h2>Test Email</h2>
        </div>
        <div class="content">
            <h4>Hello, {{ $data['name'] }}</h4>
            <p>{{ $data['message'] }}</p>
            <p>From: {{ $data['email'] }}</p>
        </div>
        <div class="footer">
            <p>&copy; 2025 Test Email. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
