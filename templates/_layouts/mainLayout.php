<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        body {
            background: #87CEFA;
        }
    </style>
    <link rel="stylesheet" href="css/style.css">
    <title><?= $title ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="btn btn-outline-info my-2 my-sm-0" href="?t=site&a=home" role="button">Home</a><br>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="btn btn-sm btn-outline-info my-2 my-sm-0 dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tables</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <a class="dropdown-item" href="?t=tableOne&a=showtable">Ведомость</a>
                        <a class="dropdown-item" href="?t=tableTwo&a=showtable">Анекдоты</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-sm btn-outline-info my-2 my-sm-0" href="?t=TicTac&a=ShowField" role="button">TicTac<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-sm btn-outline-info my-2 my-sm-0" href="?t=feedback&a=ShowForm" role="button">FeedBack<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-sm btn-outline-info my-2 my-sm-0" href="?t=site&a=about" role="button">About <span class="sr-only">(current)</span></a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>

    <div id="maincontent">
        <?php $this->body(); ?>
    </div>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>