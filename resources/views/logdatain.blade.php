<h2>Log Data in form</h2>

<form action="/logstore" method="POST">
    @csrf
    <label>User Id:</label><br>
    <input type="text" name="user_id"><br>
    <label>First In:</label><br>
    <input type="text" name="fin"><br>
    <label >Last out:</label><br>
    <input type="text" name="lout"><br><br>
    <input type="submit" value="Submit">
</form>   