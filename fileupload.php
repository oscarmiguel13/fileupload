<html>
    <head>
        <title>
            File Uploading
        </title>
    </head>
    <body>
        <form method="post" action="uploadtoserver.php" enctype="multipart/form-data">
            <label for="covername">Upload image:</label>
            <input type="file" name="file"/>
            <input type="submit" value="Upload" name="submit">
        </form>
    </body>
</html>