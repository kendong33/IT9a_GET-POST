<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Uploaded Files</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="view.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">Uploaded Files</h2>
    </div>
</body>
</html>
<?php
include "connection.php";

$sql = "SELECT * FROM uploads";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='card mb-4 p-3 shadow-sm'>";
    echo "<h5 class='text-center'>" . $row['filename'] . "</h5>";

    if($row['filetype'] == "application/pdf"){
       echo '<div class="text-center"><iframe src="data:application/pdf;base64,' . base64_encode($row['filedata']) . '" width="500" height="300"></iframe></div>';
    
}
else{
    echo '<div class="text-center"><img class ="img-fluid rounder" src="data:' . $row['filetype'] . ';base64,' . base64_encode($row['filedata']) . '" width="300"></div>';
}
echo "</div>";
}
?>
