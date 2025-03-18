<?php
  header("HTTP/1.1 403 Forbidden");
  header("Status: 403 Forbidden");
  header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unauthorized Access - HomeFortress</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        h1 {
            font-size: 3rem;
            color: #e74c3c;
            margin: 0;
        }

        p {
            font-size: 1.2rem;
            color: #555;
        }

        .fine-print {
            font-size: 0.9rem;
            color: #888;
            margin-top: 20px;
            padding: 0 20px;
        }

        .button {
            background-color: #e74c3c;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 30px;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

    <h1>Unauthorized Access</h1>
    <p>You do not have permission to access this page.</p>

    <a href="/" class="button">Go Back</a>

    <div class="fine-print">
        <p>All public-facing pictures and information on this site are strictly for the use of HomeFortress and its intended users within the network. Unauthorized access or use is prohibited and may be subject to legal action.</p>
    </div>

</body>
</html>
