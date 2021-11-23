<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-content">
                            <div class="panel-content">
                            Задание 14.  <br>
Напишите простенькую авторизацию.  <br>
Подумайте, как можно выполнить проверку. А проверки у нас такие: <br>
1. Есть ли вообще такой человек с этим эл адресом. Если нет, то выводим сообщение: Неверный логин или пароль. <br>
2. Если есть, то подходит ли пароль. Так как у нас хранится хэш, нам нужно проверить введенный пароль относительного этого хеша. Для этого используйте функцию password_verify($password, $hash) <br>
Только после этого, как удостоверимся что такой пользователь имеется, и его пароль введен верно, мы можем авторизовать пользователя. То есть, записать данные пользователя в сессию. <br>
Логин пользователя, это запись его данных в сессию, чтобы они были доступны на всех страница сайта. <br>
Не пытайтесь сразу проверять пару эл адреса и пароля(SELECT * FROM users WHERE email=$email AND password=$password). Это не сработает, ведь введеный пароль и хэш — две разные строки, даже если пароль будет правильный. <br>
Задание должно быть выполенено с использованием отдельного файла — обработчика формы. Назовите файл task_14_handler.php <br>
Для выполнения задания, скачайте файл верстки по ссылке ниже. Далее добавьте его в папку со стилями и картинками которые у вас уже есть <br>
                            </div>
                    </div>            
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <div class="form-group">
                                    <div class="alert alert-danger fade show" role="alert">
                                        Неверный логин или пароль
                                    </div>
                                    <form action="">
                                        <div class="form-group">
                                        	<label class="form-label" for="simpleinput">Email</label>
                                        <input type="text" id="simpleinput" class="form-control">
                                        </div>

                                        <label class="form-label" for="simpleinput">Password</label>
                                        <input type="password" id="simpleinput" class="form-control">
                                        <button class="btn btn-success mt-3">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
