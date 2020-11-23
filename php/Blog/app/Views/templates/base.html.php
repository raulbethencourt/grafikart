<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Test blog for OOP tutorial">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <title><?= (new App)->getTitle() ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php?p=posts.index">Navbar</a>
    </nav>

    <main role="main" class="container" style="padding-top: 100px">
        <div class="starter-template">
            <?php

            use App\Entity\Flash;
            use App\Entity\Session;
            use App\Entity\Cookie;
            use Core\Dic\DIC;

            $session = new Session();
            $cookie = new Cookie();
            $flash = new Flash($session);
            $flash->set('Il y a eu une errour', 'danger');

            $dic = new DIC();
            $dic->set('Cookie', function(){
                return new Cookie();
            });
            $dic->get('Cookie')->set('Timeout', $session);
        
            // TODO 26/31  9:37 

            var_dump($dic->get('Cookie'));
            ?>
            <?= $flash->get() ?>

            <?= $content; ?>
        </div>
    </main>
</body>

</html>