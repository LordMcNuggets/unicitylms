<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
<html>
    <head>
        <title>Lending</title>

    </head>
    <body>
        <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Title</td>
                <td>Author</td>
                <td>Topic</td>
            </tr>
        </thead>
        <tbody>
        <?php
            $connect = mysql_connect("localhost","root", "root");
            if (!$connect) {
                die(mysql_error());
            }
            mysql_select_db("book_lending");
            $results = mysql_query("SELECT * FROM lending");
            while($row = mysql_fetch_array($results)) {
            ?>
                <tr>
                    <td><?php echo $row['Id']?></td>
                    <td><?php echo $row['Title']?></td>
                    <td><?php echo $row['Author']?></td>
                    <td><?php echo $row['Topic']?></td>
                </tr>

            <?php
            }
            ?>
            </tbody>
            </table>
    </body>
</html>