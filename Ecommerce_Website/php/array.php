<?php
$age = array("jack"=> "4", "Lynsey"=>"5");

echo "<pre>";
print_r($age);
echo "</pre>";

foreach($age as $key => $value){
    echo "my name is " .$key. " and I am " .$value. " years old <br><br>" ;
}

//MULTIDIMENSIONAL ARRAY
$myarray = array( 

    //default key for each will start from 0
    array("Ankit", "Ram", "Shyam"),
    array("Unnao", "Trichy", "Kanpur")
);
//display the array info
print_r($myarray);

//display specific array
echo "<br><br>".$myarray[1][2];

//FOR EACH MULTIDIMENSIONAL ARRAY
$data =[
    'Game of Thrones' => ['Jaime Lannister', 'Catelyn Stark', 'cersei Lannister'],
    'Black Mirror' => ['Nannette Cole', 'Selma Telse', 'Karin Parke']
];

echo "<pre>";
print_r($data);
echo "</pre>";
 
echo '<h1>Famous TV Series and Actors';
foreach($data as $series => $actors){
    echo "<h2>$series</h2>";
     foreach($actors as $actor){
        echo "<div>$actor</div>";
     }
}

echo "<br><br>" .$data['Game of Thrones'][2];

?>
