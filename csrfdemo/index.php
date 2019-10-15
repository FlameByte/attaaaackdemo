<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="background:lightblue; display: flex; justify-content: center; align-items: center; height: 250px; margin-left: 10%; margin-right: 10%;">
        <h2>Send money to an user</h2>
        <form action="sendmoney.php" method="GET">
            <label for="id">
                <input name="id" type="number" value="1" style="display: none;">
            </label>
            <label for="user">
                <input type="text" name="user" placeholder="Insert the username">
            </label>
            <label for="amount">
                <input type="number" name="amount" placeholder="Enter the amount">
            </label>
            <button type="submit">Send the money</button>
        </form>
    </div>
    <br>
    <h2 style="display: flex; justify-content: center; margin-left: 10%; margin-right: 10%;">Upload a post to your feed</h2>
    <div class="feed" style="background:lightgray; display: flex; justify-content: center; align-items: center; height: 250px; margin-left: 10%; margin-right: 10%;">
        <form action="feed.php" method="POST" style="max-width: 210px">
            <label for="title">
                <input type="text" name="title" placeholder="Post title">
            </label>
            <label for="body">
                <textarea name="body" id="" cols="30" rows="10" placeholder="Post content"></textarea>
            </label>
            <button type="submit">Upload post</button>
        </form>
    </div>
    <h2 style="display: flex; justify-content: center; margin-left: 10%; margin-right: 10%;">Your feed</h2>

    <div style="margin-left: 10%; margin-right: 10%;">
    <?php include 'posts.php' ?>
    </div>
</body>
</html>