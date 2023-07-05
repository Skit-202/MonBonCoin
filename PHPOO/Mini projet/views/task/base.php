<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Gestionnaire de tâches | <?= $title ?></title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center display-1"> <?= $title ?> </h1>
            <?php require_once "alert.php";?>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            
            <?= $content; ?>
        </div>
    </div>

    <div class="row">
        <footer>
            <div class="col-6 mx-auto bg-info py-2 text-white">
                <p class="text-center fw-bold">
                    &copy; 2023 - Made with &hearts; by <a href="#" class="text-decoration-none fw-bold text-white">Doranco promo 814</a>
                </p>
            </div>
        </footer>
    </div>

</div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>