<?php
// Program Memunculkan Biodata
 $hobbies = Array('Belajar, Watching Anime, Reading News');
 $school_list = array(
     array(
         'university' => 'Universitas Sulawesi Barat',
         'year_in' => 2015, 'year_out' => 2019, 'major' => 'Informatics Engginer',
     ),
    );
$skills = array(
     array(
         'Skill Programmer' => 'PHP, Python, Java',
         'Level' => "Beginner"
     ),
    );
function bio($name,$age,$address,$hobbies,$is_married,$school_list,$skills,$interest_in_coding){
    $result = array('Nama' => $name, 'Age' => $age, 'Address' => $address, 'Hobbies' => $hobbies, 'Married' => $is_married, 'school' => $school_list, 'Skills' => $skills, 'Intereest in coding' => $interest_in_coding);
    echo json_encode($result);
}
bio("Wawan Firgiawan",23,"Majene, Sulawesi Barat",$hobbies,False,$school_list,$skills,True);

?>