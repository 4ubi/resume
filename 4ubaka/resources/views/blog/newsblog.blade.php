<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>News</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('blogg/css/blog.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Ubuntu+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
</head>

<body class="body">
    <div class="header">
        <div class="row" style="background: white">
        <div class="col-xl-2" style="background: white;margin-left: 8%">
            <a href="blog">  <img src="{{asset("blogg/content/img/header/1.jpg")}}" style="width: 200px;height: 100px;margin-top: 10px"></a>
        </div>
        <div class="col-xl-6" style="width:50%">
                 <h1 style="font-family: Pacifico;font-size: 60px; text-align: center;margin-top: 15px">Тыж программист</h1>
        </div>
        <div class="col-xl-2" style="background: white">
            <a href="blog">   <img src="{{asset("blogg/content/img/header/2.jpg")}}" style="width: 100px; height: 110px"> </a>
            </div>
            </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-xl-2">
                <div class="menu" id="aside1">
                    Меню<hr>
                    <a href="idea">Мысли</a><br>
                    <a href="connt">Контакты</a><br><br>

                    <a href="blog">На главную</a>

                </div>

            </div>
            <div class="col-xl-9">
                <div class="news">
                    <h1 style="font-family: Pacifico; color:dodgerblue;">Что нового ?</h1><hr style="margin-top: -1%">
                    <div class="news1">
                        <h4>Progressive Web Apps (PWA – прогрессивные веб-приложения)</h4>
                        <img src="{{asset("blogg/content/img/news/1.jpg")}}">
                        <p>
                            <?php
                                $conn = mysqli_connect('localhost','root','id82807426','4ubi');
                                if (!$conn) {
                                    $conn->connect_error;
                                }
                                $query = $conn->query("SELECT text FROM news WHERE id = '1'")->fetch_assoc()['text'];

                                printf ($query);
                            ?>
                            <a href="#">читать далее</a>
                        </p>
                    </div>

                    <div class="news1">
                        <h4>Тренды веб разработки: Блокчейн</h4>
                        <img src="{{asset("blogg/content/img/news/2.jpg")}}">
                        <p>
                            <?php
                          /*  $conn = mysqli_connect('localhost','root','id82807426','4ubi');
                            if (!$conn) {
                                $conn->connect_error;
                            }*/
                            $query = $conn->query("SELECT text FROM news WHERE id = '2'")->fetch_assoc()['text'];

                            printf ($query);
                            ?>
                            <a href="#">читать далее</a>
                        </p>
                    </div>

                    <div class="news1">
                        <h4>Motion UI – анимация и переходы</h4>
                        <img src="{{asset("blogg/content/img/news/3.jpg")}}">
                        <p>
                            <?php
                           /* $conn = mysqli_connect('localhost','root','id82807426','4ubi');
                            if (!$conn) {
                                $conn->connect_error;
                            }*/
                            $query = $conn->query("SELECT text FROM news WHERE id = '3'")->fetch_assoc()['text'];

                            printf ($query);
                            $conn->close();
                            ?>
                            <a href="#">читать далее</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <a href="#" title="Вернуться к началу" class="topbutton">Наверх</a>
    </div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>

</body>
</html>