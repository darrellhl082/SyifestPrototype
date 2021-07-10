<?php 
$conn = mysqli_connect("localhost","root","","syifest");
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
function add($data){
	$nama = htmlspecialchars($data["nama"]);
	$asal = htmlspecialchars($data["asal"]);
	$lomba = htmlspecialchars($data["lomba"]);
	global $conn;
 	$query = "INSERT INTO peserta 
			VALUES 
			(not null,'$nama','$lomba','$asal')";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
?>