<html>
<head>
  <style>
    body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url(bg.avif);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  min-height: 100vh;
}
h3 {
  text-align: center;
  margin-top: 10px;
}
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  padding: 20px;
}
.form-box {
  display: flex;
  background-color: #fdfdfd;
  border-radius: 12px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  max-width: 900px;
  width: 100%;
}
.image-side {
  flex: 1;
  background-color: #ffffff;
}
.image-side img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.form-side {
  flex: 1;
  padding: 40px;
}
.contact h2 {
  text-align: center;
  margin-bottom: 20px;
  color: #333; 
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #aa1d04;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

input[type=submit]:hover {
  background-color: #6c45a0;
}

  </style>
</head>
<body>

<h3>Talk to me Baaaby!</h3>

<div class="container">
<div class="form-box">
  <div class="image-side">
     <img src="log.avif" alt="feedback">
  </div>
  <div class="form-side">
  <form class="contact" action="process.php" method="post">
    <label for="fname">Name</label>
    <input type="text" id="name" name="name" placeholder="Your Name.." required>
     <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email adress.." required>

    <label for="rating">Rating</label>
    <select id="rating" name="rating">
      <option value="Rating">1</option>
      <option value="">2</option>
      <option value="">3</option>
       <option value="">4</option>
        <option value="">5</option>

      
    </select>

    <label for="subject">Comments</label>
    <textarea id="message" name="comments" placeholder="Message.." style="height:100px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
</div>
</div>
</body>
</html>
