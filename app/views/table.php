  <!DOCTYPE html>
  <html>
  <head>
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&family=Oswald:wght@200&family=Playfair+Display&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>User Table</title>
    <style>
      body{
          display: flex;
        justify-content:center;
        align-items:center;
      }
      table {
        border-collapse: separate;
        border-color: red;
        width: 70%;
        border: 1px solid black;
      
      }
      td{
        font-family:Poppins;
      }

      th, td {
        text-align: center;
        padding: 8px;
       
      }

      th {
        background-color: #f2f2f2;
        font-family:Lora;
      }

      tr:nth-child(even) {
        background-color: #f9f9f9;
      }

      td button {
        padding: 5px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      td button.edit {
        background-color: #4CAF50;
        color: white;
        margin-right: 5px;
      }

      td button.delete {
        background-color: #f44336;
        color: white;
      }
      .delete{
       padding: 5px;
        background-color:red;
        color:white;
        border-radius:10px;
      }
      .edit{
       padding: 5px 10px;
       
        background-color:blue;
        color:white;
        border-radius:10px;
      }
      a{
        text-decoration:none;
      }

    </style>
  </head>
  <body>

    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Password</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($users as $user): ?>
     
        <tr>
          <td><?= $user['name'] ?></td>
          <td><?= $user['email'] ?></td>
          <td><?= $user['password'] ?></td>
          <td>
          <a href="edit/<?= $user['id'] ?>" class="edit">Edit</a>
          <a href="delete/<?= $user['id'] ?>" class="delete" >Delete</a>
    
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </body>
  </html>