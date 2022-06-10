<?php
require_once DIR . '/vendor/autoload.php'; 
require_once DIR . '/employee.php';
?>
<?php
$employee[0]['firstname']= "Ludvík"; 
$employee[0]['lastname']= "Trpaslík"; 
$employee[0]['salary']= "45216";

$employee[1]['firstname']= "Luboš"; 
$employee[1]['lastname']= "Trudoš"; 
$employee[1]['salary']= "23465";

$employee[2]['firstname']= "Lucius"; 
$employee[2]['lastname']= "Travius"; 
$employee[2]['salary']= "651234";

$employee[3]['firstname']= "Lukáš"; 
$employee[3]['lastname']= "Trpáš"; 
$employee[3]['salary']= "48321";

$employee[4]['firstname']= "Lubomír"; 
$employee[4]['lastname']= "Trudomír"; 
$employee[4]['salary']= "52154";

$employee[5]['firstname']= "Ludendolf"; 
$employee[5]['lastname']= "Trpadolf"; 
$employee[5]['salary']= "88420";

$employee[6]['firstname']= "Marija"; 
$employee[6]['lastname']= "Tančídnes"; 
$employee[6]['salary']= "61488";

$employee[7]['firstname']= "Nalim"; 
$employee[7]['lastname']= "Aláh"; 
$employee[7]['salary']= "51417";

$employee[8]['firstname']= "Marty"; 
$employee[8]['lastname']= "Kok"; 
$employee[8]['salary']= "65712";

$employee[9]['firstname']= "Tomáš"; 
$employee[9]['lastname']= "Jedno"; 
$employee[9]['salary']= "-15147";

$employee[10]['firstname']= "Ludnemilá"; 
$employee[10]['lastname']= "Černá"; 
$employee[10]['salary']= "666420";

$employee[11]['firstname']= "Lin"; 
$employee[11]['lastname']= "Shu"; 
$employee[11]['salary']= "80003";

$employee[12]['firstname']= "Joe"; 
$employee[12]['lastname']= "Mama"; 
$employee[12]['salary']= "58008";

$employee[13]['firstname']= "Anna"; 
$employee[13]['lastname']= "Říhavá"; 
$employee[13]['salary']= "23145";

$employee[14]['firstname']= "Lenka"; 
$employee[14]['lastname']= "Sklenka"; 
$employee[14]['salary']= "34126";

$employee[15]['firstname']= "Kára"; 
$employee[15]['lastname']= "Brežněvová"; 
$employee[15]['salary']= "77721";

?>

<?php
$myDocument = new \Mpdf\Mpdf();
$myDocument->WriteHTML('<h1>Hello world!</h1>');
$myDocument->WriteHTML('<p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum</p>');
$myDocument->WriteHTML('<ul>');
$myDocument->WriteHTML("<li>Jméno: $firstname</li>");
$myDocument->WriteHTML("<li>Příjmení: $lastname</li>");
$myDocument->WriteHTML('</ul>');
$myDocument->Output();


$employee[0] = new Employee("Ludvík","Trpaslík","45216");
$employee[1] = new Employee("Luboš","Trudoš","23465");
$employee[2] = new Employee("Lucius","Travius","651234");
$employee[3] = new Employee("Lukáš","Trpáš","48321");
$employee[4] = new Employee("Lubomír","Trudomír","52154");
$employee[5] = new Employee("Ludendolf","Trpadolf","88420");
$employee[6] = new Employee("Marija","Tančídnes","61488");
$employee[7] = new Employee("Nalim","Aláh","51417");
$employee[8] = new Employee("Marty","Kok","65712");
$employee[9] = new Employee("Tomáš","Jedno","-15147");
$employee[10] = new Employee("Ludnemilá","Černá","666420");
$employee[11] = new Employee("Lin","Shu","80003");
$employee[12] = new Employee("Joe","Mama","58008");
$employee[13] = new Employee("Anna","Říhavá","23145");
$employee[14] = new Employee("Lenka","Sklenka","34126");
$employee[15] = new Employee("Kára","Brežněvová","77721");




for ($i=0; $i < count($employee); $i++) { 
    $myDocument->WriteHTML("<h2>Zaměstnanec číslo: " . ($i+1) . "</h2>");

    $myDocument->WriteHTML("<h2>Jméno: ". $employee[$i]['firstname'] ."</h2> ");
    $myDocument -> WriteHTML('</br>');
    $myDocument->WriteHTML("<li>Přijmení: ". $employee[$i]['lastname'] ."</li> ");
    $myDocument -> WriteHTML('</br>');
    $myDocument->WriteHTML("<p><strong>Mzda:</strong> ". $employee[$i]['salary'] ." kč</p> ");

}

$myDocument -> WriteHTML('</ul>');
$myDocument -> Output();
?>
