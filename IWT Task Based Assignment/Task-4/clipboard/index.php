<!DOCTYPE html>
<html>
<head>
    <title>Clipboard App</title>

    <style>
        body {
            font-family: Arial;
            background-color: #dbeafe;
            text-align: center;
        }

        h1 {
            margin-top: 30px;
        }

        .box {
            background: white;
            width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 2px solid black;
        }

        textarea {
            width: 90%;
            padding: 5px;
        }

        input {
            padding: 5px;
        }

        button {
            margin-top: 10px;
            padding: 6px 12px;
            cursor: pointer;
        }

        hr {
            margin: 20px 0;
        }
    </style>

</head>
<body>

<h1>Clipboard App</h1>

<div class="box">

    <h3>Save Text</h3>
    <form action="save.php" method="post">
        <textarea name="text" rows="5"></textarea><br>
        <button type="submit">Save</button>
    </form>

    <hr>

    <h3>Get Text</h3>
    <form action="get.php" method="post">
        <input type="number" name="code" placeholder="Enter Code"><br>
        <button type="submit">Get</button>
    </form>

</div>

</body>
</html>