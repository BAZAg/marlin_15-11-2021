<?php
    $images = GetData();
    function GetData(){
        return json_decode(file_get_contents('db_task_15_2.json'), true);
    }
    function AddData($line){
        $data = GetData();
        $data[] = ["id"=> md5($line), "file"=>$line];
        file_put_contents('db_task_15_2.json', json_encode($data,true));
    } 
   
    function SaveFiles($field){
        $names = [];  
        for($i=0;$i<count($_FILES[$field]);++$i){
            $name = md5($_FILES[$field]["tmp_name"][$i].time()).".jpg";
            if(move_uploaded_file($_FILES[$field]["tmp_name"][$i], $name)){
                $names[] = $name;
            }
        }
        return  $names;
    }

    if(isset($_POST["submit"])) {     
       
        $files = SaveFiles("file");
        if(count($files) > 0) {
            foreach($files as $file) {
                AddData($file);
            }
            $images = GetData();
        }
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
            <div class="row">
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
                                    <div class="form-group">
                                        <form action="solution_task_15_2.php" enctype="multipart/form-data" method="POST">
                                            <div class="form-group">
                                                <label class="form-label" for="simpleinput">Image</label>
                                                <input name="file[]" type="file" id="simpleinput" class="form-control">
                                                <label class="form-label" for="simpleinput1">Image</label>
                                                <input name="file[]" type="file" id="simpleinput1" class="form-control">
                                                <label class="form-label" for="simpleinput2">Image</label>
                                                <input name="file[]" type="file" id="simpleinput3" class="form-control">
                                            </div>
                                            <button name="submit" class="btn btn-success mt-3">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div id="panel-1" class="panel">
                        <div class="panel-hdr">
                            <h2>
                                Загруженные картинки
                            </h2>
                            <div class="panel-toolbar">
                                <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            </div>
                        </div>
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="panel-content image-gallery">
                                    <div class="row">
                                        <?php foreach($images as $image):?>
                                            <div class="col-md-3 image"> <img width="100px" src="<?php echo $image["file"]; ?>" /> </div>
                                        <?php endforeach; ?>
                                    </div>
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
