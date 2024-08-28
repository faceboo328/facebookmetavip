<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        .container h1 {
            color: #333;
        }
        .container form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container input[type="text"], 
        .container input[type="email"], 
        .container textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .container button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .container button:hover {
            background-color: #45a049;
        }
        .thank-you {
            margin-top: 20px;
            color: #777;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Send Request</h1>
    <form action="#" method="post">
        <input type="text" name="visitor_name" placeholder="Your Name" required>
        <input type="text" name="exam_year" placeholder="Exam Year" required>
        <input type="text" name="fb_username" placeholder="Facebook Username" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="text" name="school" placeholder="School" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" rows="4" placeholder="Your Request" required></textarea>
        <button type="submit">Send</button>
    </form>
    <p class="thank-you">Thank you for visiting our page!</p>
</div>

</body>
</html>
