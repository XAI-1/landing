<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Report Issue - XAITECH</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      padding: 40px;
      font-family: 'Playfair Display', serif;
      background-color: #000;
      color: #fff;
      text-align: center;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 20px;
    }

    form {
      max-width: 500px;
      margin: 0 auto;
      text-align: left;
    }

    label {
      display: block;
      margin-bottom: 5px;
      color: #ccc;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: none;
      border-radius: 5px;
      font-family: 'Playfair Display', serif;
    }

    button {
      padding: 10px 20px;
      background-color: white;
      color: black;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
      font-family: 'Playfair Display', serif;
    }
  </style>
</head>
<body>
  <h1>Report an Issue</h1>
  <form action="#" method="post">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="name" placeholder="Enter your name" required />

    <label for="issue">Issue Description</label>
    <textarea id="issue" name="issue" rows="5" placeholder="Describe the issue..." required></textarea>

    <button type="submit">Submit</button>
  </form>
</body>
</html>
