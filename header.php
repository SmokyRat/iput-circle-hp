<?php
/*  * * * ヘッダー * * *
    $page_name - この引数にページの名前を指定するとそのページのCSSが読み込まれます.
*/
function head($page_name, $page_title) {
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <title><?php echo $page_title ?></title>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/style-<?php echo $page_name ?>.css" rel="stylesheet" type="text/css"/>

        <!-- CSS Bootstrap v5.0.2 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- CSS Bootstrap Icons v1.8.0 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
        <!-- Google Fonts Icon -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    </head>
    <body>
        <!-- ヘッダー -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #99CD00;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">IPUT学生団体</a>
                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#top-nav"
                            aria-controls="top-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="top-nav">
                        <ul class="navbar-nav">
                            <li class="nav-item ms-2 me-2">
                                <a class="nav-link active" aria-current="page" href="#">活動</a>
                            </li>
                            <li class="nav-item ms-2 me-2">
                                <a class="nav-link active" aria-current="page" href="#">ブログ</a>
                            </li>
                            <li class="nav-item ms-2 me-2">
                                <a class="nav-link active" aria-current="page" href="#">サークル</a>
                            </li>
                            <li class="nav-item ms-2 me-2">
                                <a class="nav-link active" aria-current="page" href="#">FAQ</a>
                            </li>
                            <li class="nav-item ms-2 me-2">
                                <a class="nav-link active" aria-current="page" href="#">お問い合わせ</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="nav-item ms-2 me-2 d-flex justify-content-end">
                                <button type="button" class="btn btn-light" style="border-radius: 20px">ログイン</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

<?php
}
?>