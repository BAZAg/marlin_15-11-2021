<?php
    $items = [       
        [
            "top" => [
                "class" => ["d-flex", "mt-2"],
                "title" =>"My Tasks",
            ],              
            "bottom" =>[
                "class"=>["progress","progress-sm","mb-3"],
                "progress" =>[ "class"=>["progress-bar","bg-fusion-400"] ]
            ],
            "data" =>[ "value" => 130, "min" => 0, "max" => 500, "unit" => ""]
        ],
        [
            "top" => [
                "class" => ["d-flex"],
                "title" =>"Transfered",
            ],              
            "bottom" =>[
                "class"=>["progress","progress-sm","mb-3"],
                "progress" =>[ "class"=>["progress-bar","bg-success-500"] ]
            ],
            "data" =>[ "value" => 440, "min" => 0, "max" => 1294, "unit" => " TB"]
        ],
        [
            "top" => [
                "class" => ["d-flex"],
                "title" =>"Bugs Squashed",
            ],              
            "bottom" =>[
                "class"=>["progress","progress-sm","mb-3"],
                "progress" =>[ "class"=>["progress-bar","bg-info-400"] ]
            ],
            "data" =>[ "value" => 77, "min" => 0, "max" => 100, "unit" => "%"]
        ],
        [
            "top" => [
                "class" => ["d-flex"],
                "title" =>"User Testing",
            ],              
            "bottom" =>[
                "class"=>["progress","progress-sm","mb-g"],
                "progress" =>[ "class"=>["progress-bar","bg-primary-300"] ]
            ],
            "data" =>[ "value" => 7, "min" => 0, "max" => 8, "unit" => " days"]
        ]                  
    ];   

    function JoinData($item){
        return implode(' ', $item["class"]);
    }
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
                            <?php foreach($items as $item):?>
                                <div class="<?php echo JoinData($item["top"]); ?>">
                                    <?php echo $item["top"]["title"]; ?>
                                    <span class="d-inline-block ml-auto">
                                        <?php
                                        if(empty($item["data"]["unit"])) echo $item["data"]["value"].' / '.$item["data"]["max"];
                                        else echo $item["data"]["value"].$item["data"]["unit"]; ?>
                                    </span>
                                </div>
                                <div class="<?php echo JoinData($item["bottom"]); ?>">
                                    <div class="<?php echo JoinData($item["bottom"]["progress"]); ?>" 
                                        role="progressbar" 
                                        style="width: <?php echo $item["data"]["value"]*100/$item["data"]["max"]; ?>%;" 
                                        aria-valuenow="<?php echo $item["data"]["value"]; ?>" 
                                        aria-valuemin="<?php echo $item["data"]["min"]; ?>" 
                                        aria-valuemax="<?php echo $item["data"]["max"]; ?>">
                                    </div>
                                </div>                             
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>       
    </body>
</html>
