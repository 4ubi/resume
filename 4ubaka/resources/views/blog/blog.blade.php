<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Junior Web</title>
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
                <img src="{{asset("blogg/content/img/header/1.jpg")}}" style="width: 200px;height: 100px;margin-top: 10px">
        </div>
        <div class="col-xl-6" style="width:50%">
                 <h1 style="font-family: Pacifico;font-size: 60px; text-align: center;margin-top: 15px">Тыж программист</h1>
        </div>
        <div class="col-xl-2" style="background: white">
                <img src="{{asset("blogg/content/img/header/2.jpg")}}" style="width: 100px; height: 110px">
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-xl-2">
                <div class="menu" id="aside1">
                    Меню<hr>
                    <a href="idea">Мысли</a><br>
                    <a href="news">Новости</a><br>
                    <a href="connt">Контакты</a><br><br><br>
                    <a href="main">Вернуться к резюме</a><br>

                </div>

            </div>
            <div class="col-xl-9">
               <h1 style="font-family: Pacifico;text-align: center;color: cadetblue">Рад видеть вас, на своем сайте</h1>
                <div class="interactive">
                     <img src="{{asset("blogg/content/img/welcome.png")}}"> <br><br><br>
                    На данный момент сайт находится в доработке. Скоро будет что-то интересное =)
                </div>
            </div>
        </div>
        <div class="footer">

        </div>
    </div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>

</body>
</html>