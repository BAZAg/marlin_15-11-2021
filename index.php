<?php
    $items = [
        [
            ["href"=> "description_task_1.php", "text"=>"Описание"],
            ["href"=> "task_1.html", "text" => "Задача"],
            ["href"=> "solution_task_1.php", "text"=>"Решение"]
        ],
        [
            ["href"=> "description_task_2.php", "text"=>"Описание"],
            ["href"=> "task_2.html", "text" => "Задача"],
            ["href"=> "solution_task_2.php", "text"=>"Решение"]
        ],
        [
            ["href"=> "description_task_3.php", "text"=>"Описание"],
            ["href"=> "task_3.html", "text" => "Задача"],
            ["href"=> "solution_task_3.php", "text"=>"Решение"]
        ],
        [
            ["href"=> "description_task_4.php", "text"=>"Описание"],
            ["href"=> "task_4.html", "text" => "Задача"],
            ["href"=> "solution_task_4.php", "text"=>"Решение"]
        ],
        [
            ["href"=> "description_task_5.php", "text"=>"Описание"],
            ["href"=> "task_5.html", "text" => "Задача"],
            ["href"=> "solution_task_5.php", "text"=>"Решение"]
        ] ,
        [
            ["href"=> "description_task_6.php", "text"=>"Описание"],
            ["href"=> "task_6.html", "text" => "Задача"],
            ["href"=> "solution_task_6.php", "text"=>"Решение"]
        ],
        [
            ["href"=> "description_task_7.php", "text"=>"Описание"],
            ["href"=> "task_7.html", "text" => "Задача"],
            ["href"=> "solution_task_7.php", "text"=>"Решение"],
            ["href"=> "db_users.json", "text"=>"json"]

        ]
    ];
?>


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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <div class="bg-warning-100 border border-warning rounded">
                                    <ol id="js-list-msg">
                                        <?php foreach($items as $item):?>
                                            <li>
                                                <?php foreach($item as $link):?>
                                                    <a href="<?php echo $link["href"]; ?>"><span><?php echo $link["text"]; ?></span></a> 
                                                <?php endforeach; ?>
                                            </li>                                        
                                        <?php endforeach; ?>
                                                </ol>
                                    <div class="filter-message js-filter-message mt-0 fs-sm"></div>
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