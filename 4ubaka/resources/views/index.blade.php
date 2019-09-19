<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Главная</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Ubuntu+Condensed" rel="stylesheet">
</head>

<body class="background">

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-4481610-59', 'auto');
    ga('send', 'pageview');

</script>

<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter39705265 = new Ya.Metrika({ id:39705265, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/39705265" style="position:absolute; left:-9999px;" alt="Yandex.Metrika" /></div></noscript> <!-- /Yandex.Metrika counter -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background:  #363636">
    <a class="navbar-brand" href="main"><i class="fas fa-user-secret"> 4ubi</i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">

    </button>

    <div class="collapse navbar-collapse " id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active ">
                <a class="nav-link" href="examples" style="color: orange">Примеры кода</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="linkme" style="color: orange">Связь со мной</a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<div class="contain">

    <div class="starter-template">
        <div class="left">
            <h1 style="font-family: 'Lobster', cursive">Номоконов Александр Андреевич</h1>
            <p class="lead">Junion developer</p>
        </div>
       <div class="right">
           <img src="{{asset('img/iam.jpg')}}" style=" width: 100%; margin: 15%; border:  1px solid #64d5ca;">
       </div>
        <div class="aboutme col-6">
            <h5>[alex@root]$ : ls -Education</h5>
            <p class="messages" >
               <ul style="color: #64d5ca">Бакалавриат:<ul>
                        <li>Сибирский государственный университет телекоммуникаций и информатики.<br>
                        Факультет информатики и вычислительной техники.<br>
                        Автоматизированные системы обработки информации и управления.<br>
                        Период обучения: 1.09.2014-22.06.2018.<br>
                        </li>
                    </ul>
                </ul>
                <ul style="color: #64d5ca">Магистратура:<ul>
                        <li>
                            Cибирский государственный университет телекоммуникаций и информатики.<br>
                            Факультет информатики и вычислительной техники.<br>
                            Направление: программирование (заочная форма обучения)<br>
                            Период обучения: 1.09.2018-20.06.2020.
                        </li>
                    </ul>
               </ul>
            </p>
            <h5>[alex@root]$ : ls -About me</h5>
            <p class="messages">
               <ul style="color: #64d5ca">Целеустремлен, обучаемый, ответственный <br>
                    Имеются навыки:
            <ul>
                    <li>PHP 7, SQL, Oracle Apex, Laravel</li>
                    <li>HTML, CSS (базовые навыки, умение читать и разбираться в чужом коде)</li>
                    <li>C/C++ (на уровне университетской программы)</li>
                    <li>Java  (самостоятельное изучение, базовые навыки)</li>
                    <li>Универский опыт team lead`а по созданию простой биллинг системы (реализация самой первой версии биллинга Ростелекома) и успешная ее реализация
                        <br>Опыт коммерческой разработки отсутствует</li>
            </ul></ul>
            </p>
            <h5>[alex@root]$ : ls -Experience</h5>
            <p class="messages">
                г. Новосибирск ООО "Т2 Мобайл<br>
                Инженер по строительству сети<br>
                Март 2018 — Апрель 2019.
            </p>

        </div>

    </div>
</div>
<!--<main role="main" class="container">

    <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    </div>

</main>-->
<!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
</body>
</html>
