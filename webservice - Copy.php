<?php
$search_param = $_POST["search"];
$search_area = $_POST["area"];

if(isset($_POST["search"]) && isset($_POST["area"])){

$host = ;
$dbuser = ;
$dbname = ;
$dbpass = ;

$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

$sql = "SELECT * FROM `Doctors_table` WHERE DoctorArea like '%".$search_area."%' and DoctorCategory like '%".$search_param."%'";

$result = $conn->query($sql);
$doctor_data = '';
$data = '';

if($result->num_rows > 0){
    $x = 0;
    while($row = $result->fetch_assoc()) {
        $doctorid = $row["Id"];
        $doctorname = $row["DoctorName"];
        $doctorinformation = $row["DoctorInformation"];
        $doctorcat = $row["DoctorCategory"];
        $doctorar = $row["DoctorArea"];
        $doctorimage = $row["DoctorImage"];
        $x = $x + 1;

        $doctor_data = $doctor_data.'
        <div style="background-color:#F3F7FF; font-family:roboto; margin:10vh 0px 0px 0px; padding: 25px; text-align: center;">
          <div style="margin: 5px 0px;">
            <img
              alt="doctor image"
              src='.$doctorimage.'
            />
          </div>
          <h3>'.$doctorname.'</h3>
          <p>'.$doctorcat.'</p>
          <p>'.$doctorinformation.'</p>
          <p>'.$doctorar.'</p>
        </div>';
    }
    if($x==1){$data = '<h1 style="background-color:#F3F7FF; font-family:roboto; padding:25px; margin:0; text-align: center;">'.$x.' Doctor Found In Your Area!</h1>';}
    else{
    $data = '<h1 style="background-color:#F3F7FF; font-family:roboto; padding:25px; margin:0; text-align: center;">'.$x.' Doctors Found In Your Area!</h1>';}
}
else{
    $data = '<h1 style="background-color:#F3F7FF; font-family:roboto; margin:0; padding:25px; text-align: center;">No Doctor Found In Your Area!</h1>';
}

//echo json_encode($data);
}else{
    $data = '<h1 style="background-color:#F3F7FF; font-family:roboto; padding:25px; margin:0; text-align: center;">Bad Query!</h1>';
}

$data=$data.$doctor_data;
echo $data;

?>