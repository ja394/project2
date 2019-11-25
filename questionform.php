<?php
$questionname = filter_input(INPUT_POST,'questionname');
$questionbody = filter_input(INPUT_POST,'questionbody');
$questionskills = filter_input(INPUT_POST,'questionskills');


// body validation //
if (empty($body)){
    echo("please type password ");
}
else {
    echo $questionname;
    echo "<br>";
    echo $questionbody;
    echo "<br>";
    echo $questionskills;
    echo"<br>";
}
if ($questionbody != strlen($questionbody) >= 500){
    echo("the password has to be less than 500 characters");
}
if (empty($questionskills)){
    echo("type in skills ");
}
{
    elif (strpos($questionskills, ',') == true);
}
{
    $Array = explose (',', $questionskills);
    echo '<pre>'; print_r($Array); echo "</pre>";
    echo array_keys($Array);
    print_r($Array);

}