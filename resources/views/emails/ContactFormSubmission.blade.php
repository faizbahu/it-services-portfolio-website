<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Email</title>
    <style>

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }


        body {
            background-color: #f5f5f5;
            color: #333333;
        }


        .container {
            padding: 20px;
        }


        .header {
            background-color: #ffffff;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }


        .body {
            background-color: #ffffff;
            padding: 20px;
        }


        .list {
            margin-bottom: 20px;
        }

        .list-item {
            margin-bottom: 10px;
        }

        .list-item label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Service Request</h1>
        </div>
        <div class="body">
            <div class="list">
                <div class="list-item">
                    <label>Full Name:</label>
                    <span>{{ $data['fullname'] }}</span>
                </div>
                <div class="list-item">
                    <label>Email:</label>
                    <span>{{ $data['email'] }}</span>
                </div>
                <div class="list-item">
                    <label>Phone:</label>
                    <span>{{ $data['phone'] }}</span>
                </div>
                <div class="list-item">
                    <label>Services:</label>
                    <ul>
                        @foreach ( $data['services'] as $service)
                            <li>{{ $service }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="list-item">
                    <label>Budget Required:</label>
                    <span>{{ $data['budget'] }}</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
