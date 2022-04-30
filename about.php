<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" class="rel">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Контактная форма</title>
</head>

<body>


    <?php require "elements/header.php" ?>
    <div class="container mt-5">
        <h3>Контактная форма</h3>
        <form action="check.php" method="post">
            <input type="email" name="email" placeholder="Введите Email" class="form-control">
            <textarea name="message" class="form-control mt-2" placeholder="Введите сообщение"></textarea>
            <button type="submit" name="send" class="btn btn-success mt-2">Отправить</button>
        </form>
    </div>

    <?php require "elements/footer.php" ?>
</body>

</html>