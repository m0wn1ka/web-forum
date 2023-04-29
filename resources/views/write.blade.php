<!--  a page in which user gets verifeed and fills his post -->
<html>
    <head>
        <title>
            login and posix_times</title>
</head>
<body>
    <form method="post">
        @csrf
        <input type="text" name="username">username<br>
        <input type="password" name="password">passowrd<br>
        <input type="text" name="topic">topic<br>
        <input type="content" name="content">content<br>
        <button type="submit" >click to post</button>
</form>