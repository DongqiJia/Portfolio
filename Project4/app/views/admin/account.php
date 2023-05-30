<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account</title>
    <link rel="stylesheet" href="/public/scss/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
</head>

<body>
    <?php $this->view("partials/navbar"); ?>

        <div class="container">
        <div class="row text-center">
                <div class="col-12">
                    <h1><?= $data['title']; ?></h1>
                </div>
            </div>
        <div class="col-2"><a class="btn btn-dark btn-lg " href="<?= URLROOT ?>/admin/dashboard">Terug</a></div>
        <div class="col-10"></div>
        </div>

      
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover table-striped table-secondary">
                        <thead>
                            <th>Id</th>
                            <th>Voornaam</th>
                            <th>Email</th>
                            <th>Achternaam</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            <?= $data['rows']; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

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