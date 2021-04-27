<?php
//php -S localhost:8000 -t courses/phpforms/
if('POST' == $_SERVER['REQUEST_METHOD']) {
    session_start();
//form processing
//print_r($GLOBALS);
    echo "\n\nSERVER\n";
    print_r( $_SERVER );
    echo "\n\nREQUEST\n";
    print_r( $_REQUEST );
    echo "\n\nGET\n";
    print_r( $_GET );
    echo "\n\nPOST\n";
    print_r( $_POST );
    echo "\n\nFILES\n";
    print_r( $_FILES );
    echo "\n\nENV\n";
    print_r( $_ENV );
    echo "\n\nCOOKIE\n";
    print_r( $_COOKIE );
    echo "\n\nSESSION\n";
    print_r( $_SESSION );

    echo $_POST['firstlastname'];
}
?><html>
<head>
    <title>PHP forms version 1</title>
</head>
<body>
<h1>PHP Forms</h1>
<form method="post" enctype="multipart/form-data">
    <label>Nume</label>
    <input type="text" name="firstlastname" />
    <input type="file" name="fisier" />
    <button type="submit">Submit</button>
</form>
</body>
</html>
