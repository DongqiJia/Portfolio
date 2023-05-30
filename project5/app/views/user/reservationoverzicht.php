<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/main.css">
    <title>User</title>
</head>
<body>
    <h6 style="text-align: center;"><?= $data['title']; ?></h6>
    <table style="border-collapse: collapse; text-align: center; margin-left:auto; margin-right:auto; width: 60%;">
        <thead>
           <th style="border: 1px solid black;">Naam</th>
           <th style="border: 1px solid black;">Datum</th>
           <th style="border: 1px solid black;">TijdVanaf</th>
           <th style="border: 1px solid black;">Stoelen</th>
           <th style="border: 1px solid black;">Kinderstoel</th>
           <th style="border: 1px solid black;">Delete</th>
        </thead>
        <tbody>
          <?= $data['rows']; ?>
        </tbody>
    </table>
    <?= $data['Foutmelding']; ?>
</body>
</html>