<html>
<head>
  <style>
    body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

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

input[type=send] {
  background-color: #97aa04;
  color: white;
  padding: 10px 560px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.contact{
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
  </style>
</head>
<body>

<h3>Talk to me Baaaby!</h3>

<div class="contact">
  <form action="process.php" method="post">
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

    <button>Submit </button>
  </form>
</div>

</body>
</html>
