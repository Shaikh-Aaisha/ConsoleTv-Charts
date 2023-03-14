<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Charts</title>
</head>
<body>
<div class="container">
    <h1>ConsoleTv Bar Chart</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="card rounded">
                <div class="card-body py-3 px-3">
    {!! $usersChart->container() !!}
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    {!! $usersChart->script() !!}
</body>
</html>