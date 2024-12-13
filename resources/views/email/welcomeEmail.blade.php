<!DOCTYPE html>
<html>
<head>
    <title>{{ $mailData['title'] }}</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">
    <div style="max-width: 600px; margin: auto; background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
        <h1 style="text-align: center; color: #333333;">{{ $mailData['title'] }}</h1>
        <p style="font-size: 16px; color: #555555;">{{ $mailData['body'] }}</p>
        <p style="font-size: 14px; color: #999999; text-align: center;">Thank you for joining us. We're excited to have you on board!</p>
    </div>
</body>
</html>
