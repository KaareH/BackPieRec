<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="icon" href="/resources/images/favicon.ico">

    <title>Pie Recorder</title>

    <link href="/resources/libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .container {
            width: auto;
            max-width: 680px;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row pt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Recorder</h3>
                    </div>
                    <div class="card-body control-buttons">
                        <button type="button" class="start-button btn btn-success">Record</button>
                        <button type="button" class="stop-button btn btn-danger">Stop</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Size (MiB)</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($recordings as $file) {?>
                        <tr>
                            <td><?=$file?></td>
                            <td><?=number_format(filesize($file)/1024/1024, 2, '.', ' ')?></td>
                            <td></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="/resources/libraries/jquery/jquery.min.js"></script>
    <script src="/resources/libraries/bootstrap/js/bootstrap.min.js"></script>
    <script src="/resources/libraries/underscore/underscore-min.js"></script>
    <script src="/resources/libraries/backbone.js/backbone-min.js"></script>
    <script src="/resources/js/home.js"></script>
</body>
</html>
