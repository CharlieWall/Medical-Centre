<?php
$data = $_POST;
$gender = '';
$signUp = '';
$groups = [];
$faculty = [];
$contacted = '';
$home = '';
$k1 = [];
$v1 = [];
foreach ($data['gender'] as $k => $v){
    if (!empty($v)){
        $gender = ['Male','Female','Gender Diverse'];
        $gender = $gender[$k];
    }
}
foreach ($data['signUp1'] as $k => $v){
    if (!empty($v)){
        $signUp = ['Yes','No'];
        $signUp = $signUp[$k];
    }
}
foreach ($data['contacted'] as $k => $v){
    if (!empty($v)){
        $contacted = ['Yes','No'];
        $contacted = $contacted[$k];
    }
}
foreach ($data['home'] as $k => $v){
    if (!empty($v)){
        $home = ['Yes','No'];
        $home = $home[$k];
    }
}
foreach ($data['groups'] as $k => $v){
    if (!empty($v)){
        $groupsData = ['European','Asian','Samoan','African','Tongan','Niuean','Chinese','Indian','Other '];
        $groups[] = $groupsData[$k];
    }
}
$groups = implode($groups,',');
foreach ($data['faculty'] as $k => $v){
    if (!empty($v)){
        $facultyData = ['Culture and Society','Health and Environmental Sciences','Business and Law','Design and Creative Technologies','Te Are Poutama','International House'];
        $faculty[] = $facultyData[$k];
    }
}
$faculty = implode($faculty,',');



$insData = [
    'surName' => $data['surName'],
    'firstName' => $data['firstName'],
    'preferredName' => $data['preferredName'],
    'studentNumber' => $data['studentNumber1'] . $data['studentNumber2'] . $data['studentNumber3'] . $data['studentNumber4'] . $data['studentNumber5'] . $data['studentNumber6'] . $data['studentNumber7'] . $data['studentNumber8'],
    'yearStudy' => $data['yearStudy'],
    'dateBirth' => $data['dateBirthD1'] .$data['dateBirthD2'] . $data['dateBirthM1'] . $data['dateBirthM2'] . $data['dateBirthY1'] . $data['dateBirthY2'] . $data['dateBirthY3'] . $data['dateBirthY4'],
    'gender' => $gender,
    'signUp' => $signUp,
    'groups' => $groups,
    'faculty' => $faculty,
    'contacted' => $contacted,
    'home' => $home,
    'pleaseState' => $data['pleaseState'],
    'telphoneOne' => $data['telphoneOne1'] . $data['telphoneOne2'] . $data['telphoneOne3'] .$data['telphoneOne4'].$data['telphoneOne5'].$data['telphoneOne6'].$data['telphoneOne7'].$data['telphoneOne8'].$data['telphoneOne9'].$data['telphoneOne10'].$data['telphoneOne11'].$data['telphoneOne12'].$data['telphoneOne13'],
    'telphoneTwo' => $data['telphoneTwo1'] . $data['telphoneTwo2'] . $data['telphoneTwo3'] .$data['telphoneTwo4'].$data['telphoneTwo5'].$data['telphoneTwo6'].$data['telphoneTwo7'].$data['telphoneTwo8'].$data['telphoneTwo9'].$data['telphoneTwo10'].$data['telphoneTwo11'].$data['telphoneTwo12'].$data['telphoneTwo13'],
    'telphoneThree' => $data['telphoneThree1'] . $data['telphoneThree2'] . $data['telphoneThree3'] .$data['telphoneThree4'].$data['telphoneThree5'].$data['telphoneThree6'].$data['telphoneThree7'].$data['telphoneThree8'].$data['telphoneThree9'].$data['telphoneThree10'].$data['telphoneThree11'].$data['telphoneThree12'].$data['telphoneThree13'],
    'telphoneFour' => $data['telphoneFour1'] . $data['telphoneFour2'] . $data['telphoneFour3'] .$data['telphoneFour4'].$data['telphoneFour5'].$data['telphoneFour6'].$data['telphoneFour7'].$data['telphoneFour8'].$data['telphoneFour9'].$data['telphoneFour10'].$data['telphoneFour11'].$data['telphoneFour12'].$data['telphoneFour13'],
    'homeAddressOne' => $data['homeAddressOne'],
    'homeAddressTwo' => $data['homeAddressTwo'],
    'email' => $data['email'],
    'photoId' => $data['photoId'],
    'medical' => $data['medical'],
    'acadmic' => $data['acadmic'],
    'Date' => $data['Date'],
    'Name' => $data['Name'],
    'Signature' => $data['Signature'],
    'groupsOther' => $data['groupsOther'],
    'zeal' => $data['zeal'],
    'relationship' => $data['relationship'],
    'contactedText' => $data['contactedText'],
    'homeText' => $data['homeText'],
];



$mysqli = new mysqli('cmslamp14.aut.ac.nz', 'cfc0597', 'abc12345', 'cfc0597');
$selectedDb = $mysqli->select_db('cfc0597');
if (!$selectedDb) {
    die("could not insert into the database\n" . mysqli_error());
}
else{
echo "Success";
}

$strk = '';
$strv = '';
foreach($insData as $k=>$v){
    $k1[] = '`'.$k.'`';  //将字段作为一个数组；
    $v1[] = '"'.$v.'"';  //将插入的值作为一个数组；

}
$strv.=implode(',',$v1);
$strk.=implode(",",$k1);
$sql = "insert into onefour ($strk) values ($strv)";
mysqli_query($mysqli,$sql);


// redirect to success page
header('Location: success.html');
exit();