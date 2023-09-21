<?php 

?>
<html>
    <head></head>
    <body>
         <h2>File Uploading</h2>
        <form action="upprofilecode.php" method="post" enctype="multipart/form-data"> 
            Name
            <input type="text" name="name"/>
            <br/>
            Upload Pic
            <input type="file" name="file"/>
            <br/>
            <input type="submit"/>
        </form>
    </body>
</html>