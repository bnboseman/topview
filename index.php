<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Coding Test</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row mt-2">
            <div class="col-md-3">
                <input class="form-control" name="limit" id="ticker-limit" type="number" min="0" max="22">
                <br />
                <button type="button" class="btn btn-primary update-ticker">Update</button>
            </div>

            <div class="col-md-9 mt-2">
                <table id="ticker-information" class="table table-responsive table-striped center-block">
                    <thead>
                        <tr>
                            <th>Currency</th>
                            <th>15m</th>
                            <th>last</th>
                            <th>buy</th>
                            <th>sell</th>
                            <th>symbol</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script src="resources/script.js" type="text/javascript"></script>
</body>

</html>