
<html>
    <head>

    </head>
    <body>
    <form method='POST'>
<h2>nhap ten vao</h2>
<input type="text" name='ten'>
<input type="submit" value="nhap ten">
    </form>
    <?php $name= $_POST['ten'] ;
echo "<h3>HELLO $name </h3>" ?>
    </body>
</html>