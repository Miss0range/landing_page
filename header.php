<?php ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>MagicaJen</title>
    <style>
        <?php include 'CSS/styles.css';?>
    </style>
</head>
<body>
    <!-- navigation section -->
    <nav class = "navbar navbar-expand-md py-3 bg-light" id = "topNavBar">
        <div class="container-lg">
            <a id="brand" href="index.php" class="navbar-brand">
                <img id="icon" src="icon/icon.png" alt="icon">
                <span class="fw-bold text-secondary">MagicaJen</span>   
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target = "#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end align-items-center" id="main-nav">
                <ul class="navbar-nav me-3">
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#projects" class="nav-link">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://blogs.magicajen.com/" class="nav-link" target="_blank">Blogs</a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a href="#contact" class="nav-link">Contact Me</a>
                    </li>
                    <li class="nav-item ms-2 d-none d-md-inline">
                        <a href="#contact" class="btn btn-secondary">Contact Me</a>
                    </li>
                </ul>
                <!-- <form role = "search" class="d-flex">
                    <input type="search" class="form-control mx-2" placeholder="search" aria-label="search" >
                    <button class="btn btn-secondary" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>