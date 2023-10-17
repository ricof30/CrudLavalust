<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&family=Oswald:wght@200&family=Playfair+Display&display=swap" rel="stylesheet">
<style>
    body {
  background-color: #f2f2f2;
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 500px;
  margin: 50px auto;
  padding: 20px;
  background-color: #ffffff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  margin-bottom: 20px;
  font-family:Lora;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
  font-family:'Playfair Display';
}

input[type="text"],
input[type="email"],
input[type="password"] {
  width: 95%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="submit"] {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

/* input:required:invalid {
  border: 1px solid red;
} */
</style>
</head>
<body>
  <div class="container">
    <h1>Insert User</h1>
    <form action="<?php site_url('/') ?>" id="registration-form" method="post">
      <div class="form-group">
      <input type="hidden" name="id" >
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>
  

  <script src="script.js"></script>
  <script>
    function changeAction() {
      // Get the form element
      var form = document.getElementById("registration-form");

      // Modify the action URL
      form.action = "/table";
    }
  </script>
</body>
</html>
