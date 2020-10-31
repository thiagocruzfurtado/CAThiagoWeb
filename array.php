<?php include('include/header.php');?> <!--including file table of header.php -->

<div class="div-table"><table class="table"> 

<tr>
    <th class="th-table">Country</th>
    <th class="th-table">Capital</th>
</tr>

<?php /* creating a table to display the data from an array  */
$country = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United
Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest",
"Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna",
"Poland"=>"Warsaw") ;

foreach($country as $key => $value ) { /* Condition foreach for array, Variables $country, $key, $valeu  */
    echo " <tr>
    <td>$key</td>
    <td>$value</td>
    </tr>";
}


if(isset($_POST["country"])){

    $search= ucfirst(strtolower($_POST["country"])); 

    if(array_key_exists($search, $country)){ /* If the country exist, display the name of the capital */
        echo'<h2><b>The capital of '. $search. ' is '. $country[$search] .'</b></h2>';
    }else{ /* If the country doest exist, display country is not in the list  */
        echo"This Country is not in the List";
    }

}

?>
</table>
<a href = "index.php">Home Page</a>
<a href = "form.php">Find the Capital</a></h1>

<?php include('include/footer.php');?> <!--including file table of footer.php -->