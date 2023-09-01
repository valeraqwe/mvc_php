<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
</head>
<body>
<form action="/add-user" method="post">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address"><br>

    <label for="telephone">Telephone:</label>
    <input type="tel" id="telephone" name="telephone"><br>

    <label for="comments">Comments:</label>
    <textarea id="comments" name="comments"></textarea><br>

    <label for="department">Department:</label>
    <select id="department" name="department">
        <!-- Options will be populated from the database -->
    </select><br>

    <input type="submit" value="Add User">
</form>
</body>
</html>

