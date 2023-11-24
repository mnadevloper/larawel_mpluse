<!doctype html>
<html lang="en">
<head>
<title>Title</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p>Hello {{$userName}},</p>

            {{-- <p>Click the link below to verify your email:</p> --}}
            <p>Click the verify button to verify your email:</p>

            {{-- <p><a href="{{$verificationLink}}">{{$verificationLink}}</a></p> --}}
          <a href="{{$verificationLink}}"><button style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer;">Verify</button></a>
            <p>If you didn't create an account, please ignore this email.</p>

        </div>
    </div>
</div>
</body>
</html>
