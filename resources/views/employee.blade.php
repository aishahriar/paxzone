<h2>User Data input</h2>

<form action="/store" method="POST">
    @csrf
  <label >First name:</label><br>
  <input type="text"  name="fname"><br>
  <label >Last name:</label><br>
  <input type="text" name="lname"><br><br>
  <label >Email:</label><br>
  <input type="email" name="email"><br><br>
  <input type="submit" value="Submit">
</form> 