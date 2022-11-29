<?php
$mahasiswa = ["bella","2120803028","sistem informasi","@belaaaaa"],
            ["ijal","2120803029","sistem informasi","@ijaljleg"],
            ["yyyy","2120803028","sistem informasi","@yyyy"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Array</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
<?php foreach($mahasiswa as $mhs): ?>
        <li> <?php echo $mhs; ?> </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>