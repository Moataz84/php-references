<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/style.css">
  <title>Post</title>
</head>
<body>
  <div class="container">
    <?php include 'inc/menu.php'; ?>

    <h3>Post Something</h3>
    <form method="post">      
      <div>
        <label>Name</label>
        <input type="text" name="name" placeholder="Name" 
        onfocus="handleFocus(event)" onblur="handleBlur(event)" oninput="handleChange(event)">
      </div>

      <div>
        <label>Email</label>
        <input type="email" name="email" placeholder="Email"
        onfocus="handleFocus(event)" onblur="handleBlur(event)" oninput="handleChange(event)">
      </div>

      <div>
        <label>Comment</label>
        <textarea placeholder="Comment"
        onfocus="handleFocus(event)" onblur="handleBlur(event)" oninput="handleChange(event)"></textarea>
      </div>

      <button onclick="post(event)">Post</button>
    </form>

    <?php include 'inc/footer.php'; ?>
  </div>
  <script src="public/main.js"></script>
</body>
</html>