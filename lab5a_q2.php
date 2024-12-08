<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 5a Q2</title>
</head>
<body>


<?php
$students = [
    [
        'name' => 'Alice',
        'program' => 'BIP',
        'age' => 23 
    ],

    [
        'name' => 'Bob',
        'program' => 'BIS',
        'age' => 20 
    ],

    [
        'name' => 'Raju',
        'program' => 'BIT',
        'age' => 22 
        ]
    ];  
?>

<table border="10px">
<tr>
   <th>Name</th>
   <th>Program</th>
   <th>Age</th>
</tr>

<?php foreach($students as $student): ?>
        <tr>
            <td><?php echo htmlspecialchars($student['name']); ?></td>
            <td><?php echo htmlspecialchars($student['program']); ?></td>
            <td><?php echo htmlspecialchars($student['age']); ?></td>
        </tr>
   <?php endforeach; ?>

</table>


</body>
</html>