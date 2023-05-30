<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/public/scss/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  
<?php $this->view("partials/navbar"); ?>



<div class="container">
        <div class="row text-center">
            <div class="col-11">
                <?= $data['title']; ?>
            </div>
            <div class="col-1"></div>
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
        <form action="<?= URLROOT; ?>/admin/updateSurvey" method="post">
  <table>
    <tbody>
        <tr>
            <td>
                <label for="Question" class="form-label">Vraag:</label>
                <input type="text" class="form-control"  name="Question" value="<?= $data["row"]->Question?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="Id" value="<?= $data["row"]->Id?>">
            </td>
        </tr>
        <tr>
            <td>
                <br>
                <input type="submit" class="btn btn-primary" value="Verzenden">
            </td>
        </tr>
    </tbody>
  </table>
</form>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<br>


<?php $this->view("partials/footer"); ?>

        <!-- Javascripts -->
    <!-- Javascripts -->
    <script src="./js/script.js"></script>
        <!-- Icon Javascripts -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>