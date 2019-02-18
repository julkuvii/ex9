<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>Page Title</title>
</head>
<body>
    <h1>Person info</h1>
<form action="post">
    <?php 
        $person = array(
            array("fn"=> 'Jim', "ln"=> 'Smith')
        );
    ?>
    <?php  
        print_r($person);
    ?>
    <?php
    echo '<br>';
 
        foreach ($person as $pname) {
            echo 'First name is '.$pname['fn'].'<br>';
            echo 'Last name is '.$pname['ln'].'<br>';
        }
    ?>
</form>
</body>
</html>