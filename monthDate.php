<?php
    include("config.php");
    include("function.php");
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>

</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">従業員一覧</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> 登録</a>
                    </div>
                    
                    <table class="table table-borderd"> 
                        <thead>
                            <tr>
                                <th>日付</th>
                                <th> aa </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list as $month){ ?>
                                <tr>
                                    <td> <?php echo $month; ?> </td>
                                    <td> <?php
                                            $week = array('日', '月', '火', '水', '木', '金', '土');
                                            
                                            // date関数の場合
                                            $w = $week[date('w')].'曜日';
                                            echo $w; 
                                        ?> 
                                    </td>
                                </tr>
                            <?php } ?>
                            
                        </tbody>
                        </table>
                        
                </div>
            </div>        
        </div>
    </div>
</body>
</html>