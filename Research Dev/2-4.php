<?php
$data = $_POST;
$photoid=[];
$groups = [];
$marita = [];
$gender = [];
$currentstaff = [];
$receiveemails = [];
$currentstudent = [];
$declarationps  = [];
$agreenment   = [];
$smoke   = [];
$highuser   = [];
$iagree   = [];
foreach ($data['marita'] as $k => $v){
    if (!empty($v)){
        $marita = ['Single','Married','Divorced','Windowed','Separated'];
        $marita= $marita[$k];
    }
}
foreach ($data['gender'] as $k => $v){
    if (!empty($v)){
        $gender = ['Male','Female','Gender Diverse',];
            $gender = $gender[$k];
    }
}
if (!empty($gender) && $gender == 'Gender Diverse'){
    $gender = $data['genderstate'];
}
foreach ($data['currentstudent'] as $k => $v){
    if (!empty($v)){
        $currentstudent = ['Yes','No'];
        $currentstudent = $currentstudent[$k];
    }
}
foreach ($data['currentstaff'] as $k => $v){
    if (!empty($v)){
        $currentstaff = ['Yes','No'];
        $currentstaff = $currentstaff[$k];
    }
}
foreach ($data['receiveemails'] as $k => $v){
    if (!empty($v)){
        $receiveemails = ['Yes','No'];
        $receiveemails = $receiveemails[$k];
    }
}
foreach ($data['communitycard'] as $k => $v){
    if (!empty($v)){
        $communitycard = ['Yes','No'];
        $communitycard = $communitycard[$k];
    }
}
foreach ($data['smoke'] as $k => $v){
    if (!empty($v)){
        $smoke = ['Yes','No','Never'];
        $smoke = $smoke[$k];
    }
}
foreach ($data['highuser'] as $k => $v){
    if (!empty($v)){
        $highuser = ['Yes','No'];
        $highuser = $highuser[$k];
    }
}
foreach ($data['textmessage'] as $k => $v){
    if (!empty($v)){
        $textmessage = ['Yes','No'];
        $textmessage = $textmessage[$k];
    }
}
foreach ($data['patientportal'] as $k => $v){
    if (!empty($v)){
        $patientportal = ['Yes','No'];
        $patientportal = $patientportal[$k];
    }
}
foreach ($data['photoid'] as $k => $v){
    if(!empty($v)){
        $photoid = ['Yes', 'No'];
	$photoid = $photoid[$k];
	}
}
$data['cardnumber'] = $data['cardnumber1'].$data['cardnumber2'].$data['cardnumber3'].$data['cardnumber4'].$data['cardnumber5'].$data['cardnumber6'].$data['cardnumber7'].$data['cardnumber8'].$data['cardnumber9'].$data['cardnumber10'].$data['cardnumber11'];

foreach ($data['groups'] as $k => $v){
    if (!empty($v)){
        $groupsData = ['EuNew Zealand European','Maori','Samoan','Cook Island Maori','Tongan','Niuean','Chinese','Indian','Other such as (Dutch, Japanese, Tokelauan)'];
        $groups[] = $groupsData[$k];
    }
}
$data['groups'] = implode($groups,',');

foreach ($data['iagree'] as $k => $v){
    if (!empty($v)){
        $iagree = ['Yes','No','Not applicable'];
        $iagree = $iagree[$k];
    }
}

foreach ($data['declaration'] as $k => $v){
    if (!empty($v)){
        $declarationData = [
            'I am entitled to enrol because I am residing permanently in New Zealand',
            'I am a current student at AUT',
            'I am a staff member at AUT',
            'A',
            'B',
            'C',
            'D',
            'E',
            'F',
            'G',
            'H',
            'I',
            'J',
            'I confirm that, if requested, I can provide proof of my eligibility',
            'We will retain a copy for eligibility purposes only',
            ];
        $declarationps[] = $declarationData[$k];
    }
}
$data['declaration'] = implode($declarationps,',');

foreach ($data['agreenment'] as $k => $v){
    if (!empty($v)){
        $agreenmentData = [
            'I intend to use this practice',
            'I understand that by ',
            'I understand that if',
            'I have been given information',
            'I have read and I agree ',
            'I understand',
            'I agree to inform',
        ];
        $agreenment[] = $agreenmentData[$k];
    }
}
$data['agreenment'] = implode($agreenment,',');
$insData = [
    'legalname' => $data['legalname'],
    'title' => $data['title'],
    'surname' => $data['surname'],
    'firstname' => $data['firstname'],
    'middlename' => $data['middlename'],
    'marita' => $marita,
    'nhi' => $data['nhi'],
    'day' => $data['day'],
    'month' => $data['month'],
    'year' => $data['year'],
    'gender' => $gender,
    'placebirth' => $data['placebirth'],
    'occupation' => $data['occupation'],
    'countrybirth' => $data['countrybirth'],
    'studentid' => $data['studentid'],
    'currentstudent' => $currentstudent,
    'currentstaff' => $currentstaff,
    'streetnumber' => $data['streetnumber'],
    'streetname' => $data['streetname'],
    'suburb' => $data['suburb'],
    'city' => $data['city'],
    'postcode' => $data['postcode'],
    'homephone' => $data['homephone'],
    'work' => $data['work'],
    'mobile' => $data['mobile'],
    'email' => $data['email'],
    'receiveemails' => $receiveemails,
    'textmessage' => $textmessage,
    'patientportal' => $patientportal,
    'postaladdress' => $data['postaladdress'],
    'photoid' => $photoid,
    'smoke' => $smoke,
    'communitycard' => $communitycard,
    'cardnumber' => $data['cardnumber'],
    'cardexpiry' => $data['cardexpiry'],
    'highuser' => $highuser,
    'cartnumber' => $data['cartnumber'],
    'cartexpire' => $data['cartexpire'],
    'groups' => $data['groups'],
    'pleasestate' => $data['pleasestate'],
    'iagree' => $iagree,
    'previousname' => $data['previousname'],
    'medicalcentre' => $data['medicalcentre'],
    'address' => $data['address'],
    'faxnumber' => $data['faxnumber'],
    'signature' => $data['signature'],
    'title2' => $data['title2'],
    'surname2' => $data['surname2'],
    'firstname2' => $data['firstname2'],
    'relationship' => $data['relationship'],
    'address2' => $data['address2'],
    'phone2' => $data['phone2'],
    'mobile2' => $data['mobile2'],
    'declaration' => $data['declaration'],
    'agreenment' => $data['agreenment'],
    'signature2' => $data['signature2'],
    'date2' => $data['date2'],
];

$mysqli = new mysqli('cmslamp14.aut.ac.nz', 'cfc0597', 'abc12345', 'cfc0597');
$selectedDb = $mysqli->select_db('cfc0597');//选择数据库
if (!$selectedDb) {
    die("could not to the database\n" . mysqli_error());
}
else{
echo "Success";
}

$strk = '';
$strv = '';

foreach($insData as $k=>$v){
    if (!empty($v)) {
        $k1[] = '`' . $k . '`';  //将字段作为一个数组；
        $v1[] = '"' . $v . '"';  //将插入的值作为一个数组；
    }
}
$strk.=implode(",",$k1);
$strv.=implode(',',$v1);
$sql = "insert into twofour ($strk) values ($strv)";
mysqli_query($mysqli,$sql);

// redirect to success page
header('Location: success.html');
exit();

