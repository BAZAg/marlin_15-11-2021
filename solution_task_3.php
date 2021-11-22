<?php
    // Вариант 1. Отбрасываю последний элемент в отдельную переменную
    $items = [       
            ["class"=>["breadcrumb-item"], "href"=> "index.php", "text"=>"Главная"],
            ["class"=>["breadcrumb-item"], "href"=> "#", "text" => "PHP"],
            ["class"=>["breadcrumb-item", "active"], "href"=> "#", "text"=>"Функции"]
    ];
    $last = array_pop($items);

    function JoinData($item){
        return implode(' ', $item["class"]);
    }
    // Вариант 2. Добавление поля отвечающего элемент ссылка или нет
    $items_new = [       
        ["is_link"=>true, "class"=>["breadcrumb-item"], "href"=> "index.php", "text"=>"Главная"],
        ["is_link"=>true, "class"=>["breadcrumb-item"], "href"=> "#", "text" => "PHP"],
        ["is_link"=>false, "class"=>["breadcrumb-item", "active"], "href"=> "#", "text"=>"Функции"]
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
                            <ol class="breadcrumb page-breadcrumb">                            
                            <?php foreach($items as $item):?>
                                <li class="<?php echo JoinData($item); ?>"><a href="<?php echo $item["href"]; ?>"><?php echo $item["text"]; ?></a></li>
                            <?php endforeach; ?>
                            <li class="<?php echo JoinData($last); ?>"><?php echo $last["text"]; ?></li>
                            </ol>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <ol class="breadcrumb page-breadcrumb">                            
                                <?php foreach($items_new as $item):?>
                                    <?php if($item["is_link"]):?>
                                        <li class="<?php echo JoinData($item); ?>"><a href="<?php echo $item["href"]; ?>"><?php echo $item["text"]; ?></a></li>
                                    <?php else: ?>
                                        <li class="<?php echo JoinData($item); ?>"><?php echo $item["text"]; ?></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>                            
                            </ol>
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
