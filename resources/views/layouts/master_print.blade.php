<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-12">
                <img src="{{asset('images/ddu-header.jpg')}}" class="img-fluid" alt="header-images">
            </div>
        </div>
        @yield('print_body_section')
        <div class="row mt-5 fixed-bottom">
            <div class="col-12">
                <img src="{{asset('images/ddu-footer.jpg')}}" class="img-fluid" alt="footer-images">
            </div>
        </div>
    </div>
</body>
</html>