<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center fs-1 my-4 text-primary text-uppercase">Form php</h1>
            <form action="results.php" class="col-10">
                <div class="row align-items-center">
                    <div class="col-6">
                        <textarea class="form-control text-center" name="paragrafo" placeholder="Paragrafo da controllare"></textarea>
                    </div>
                    <div class="col-4">
                        <input type="text" name="parola" class="form-control text-center " placeholder="Parolaccia">
                    </div>
                    <input class="col-1 bg-success border-0 rounded-3 "  type="submit">
                </div>
                
            </form>
        </div>
    </div>

    <!-- link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
