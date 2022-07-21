<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body class="text-center">

<main class="form-signin w-50 m-auto mt-5">
    <form action="../Controller/NumberController.php" id="IndexForm" method="post">
        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="57" fill="currentColor" class="bi bi-plus-slash-minus" viewBox="0 0 16 16">
            <path d="m1.854 14.854 13-13a.5.5 0 0 0-.708-.708l-13 13a.5.5 0 0 0 .708.708ZM4 1a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 4 1Zm5 11a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5A.5.5 0 0 1 9 12Z"></path>
        </svg>
        <h1 class="h3 my-3 fw-normal">Операции над комплексными числами</h1>
        <div class="container mb-4">
            <div class="row">
                <div class="col">
                    <div class="form-floating">
                        <input type="text" name="number1[]" class="form-control" id="floatingInput" placeholder=" " required>
                        <label for="floatingInput">Действительная часть</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="number1[]" class="form-control" id="floatingPassword" placeholder=" " required>
                        <label for="floatingPassword">Мнимая часть</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mt-4">
                        <select class="form-select py-0" name="action_name" aria-label="Default select example" required>
                            <option disabled selected>Выберите действие</option>
                            <option value="1">Сложение</option>
                            <option value="2">Вычитание</option>
                            <option value="3">Умножение</option>
                            <option value="4">Деление</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="text" name="number2[]" class="form-control" id="floatingInput" placeholder=" " required>
                        <label for="floatingInput">Действительная часть</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="number2[]" class="form-control" id="floatingPassword" placeholder=" " required>
                        <label for="floatingPassword">Мнимая часть</label>
                    </div>
                </div>
            </div>
        </div>
        <button class="w-100 btn btn-lg btn-primary" name="calculate_button" onclick="calculate()" type="button">Вычислить</button>
        <div id="result" class="mt-3">

        </div>
    </form>
</main>
</body>
</html>
<script>

    function calculate() {
        var data = $('#IndexForm').serialize();
        $.ajax({
            url: '../Controller/CalculateController.php',
            type: 'post',
            data: data,
            success: function(result) {
                $('#result').html(result);
            }
        });
    }
</script>