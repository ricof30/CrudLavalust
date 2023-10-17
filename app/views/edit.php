<!DOCTYPE html>
<html>
<head>
  <title>Edit Form</title>
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&family=Oswald:wght@200&family=Playfair+Display&family=Poppins:wght@300&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }
    label{
      font-family:Lora;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      
    }
    h2{
      font-family:'Playfair Display';
      color: blue;
    }

    .container h2 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      font-weight: bold;
      display: block;
    }

    .form-group input {
      width: 95%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-group button {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .button{
        display:flex;
        align-items:center;
        justify-content:center;
    }
    .submit{
        background-color:blue;
        color:white;
        width:90%;
        height:35px;
        border-radius:10px;
        font-family:Poppins;
        font-size: 15px;
    }


  </style>
</head>
<body>
  <div class="container">
    <h2>Edit User Info</h2>
  
    <form action="<?= site_url('edit/' . $data['id'] )?>"  method="post">
 
      <div class="form-group">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" value="<?= $data['name'] ?>" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" value="<?= $data['email'] ?>" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="text" id="password" value="<?= $data['password'] ?>"  name="password" required>
      </div>
      <div class="button">
      <button class="submit" type="submit">Update</button>
      </div>
    
    </form>
    
  </div>
  
</body>
</html>