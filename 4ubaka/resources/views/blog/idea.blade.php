<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ideas</title>
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
            <a href="blog">  <img src="{{asset("blogg/content/img/header/1.jpg")}}" style="width: 200px;height: 100px;margin-top: 10px"> </a>
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
                    <a href="news">Новости</a><br>
                    <a href="connt">Контакты</a><br><br>

                    <a href="blog">На главную</a>

                </div>

            </div>
            <div class="col-xl-9">
                <div class="ideas">
                <h1 style="font-family: Pacifico; color:dodgerblue;">Мысли...</h1><hr style="margin-top: -1%">
                <p>
                    В данном разделе я (Номоконов Александр) буду делится своими наблюдениями в ходе развития навыков.<br>
                    Конечно, все можно найти в гугле, но помимо советов с форумов, мануалов буду описывать именно те трудноси и решения, которые возникнут на практике, 
                    а пока минутка юмора. <br> <br>

                    <img src="{{asset("blogg/content/img/idea.jpg")}}">
                </p>


                </div>
            </div>
        </div>
    </div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>

</body>
</html>