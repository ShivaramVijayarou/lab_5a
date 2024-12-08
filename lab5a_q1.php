<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 5a Q1</title>
</head>
<body>
 <?php
    $Name = "Shivaram";
    $matricNum = "CI220030";
    $course = "Software Engineering (BIP)";
    $yearofstudy = "Third Year First Sem";
  $address ="333 JALAN BUNGA KERTAS 11,TAMAN SRI MUHIBBAH";
 ?>


 <table border="20px">
<tr>
    <th> Name </th>
    <td><?php echo "$Name"; ?> </td>
</tr>

<tr>
    <th> Matric Number </th>
    <td><?php echo "$matricNum"; ?> </td>
</tr>

<tr>
    <th> Course </th>
    <td><?php echo "$course"; ?> </td>
</tr>

<tr>
    <th> Year of Study </th>
    <td><?php echo "$yearofstudy"; ?> </td>
</tr>

<tr>
    <th> Address </th>
    <td><?php echo "$address"; ?> </td>
</tr>

 </table>

</body>
</html>