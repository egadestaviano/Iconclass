<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Neon LMS : Certificate of Completion</title>

    <!-- External Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lobster+Two:400,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        /* Apply Lobster Two font to relevant elements */
        body, h1, h2, h3, h4, span, div {
            font-family: 'Lobster Two', cursive;
        }

        body {
            margin: 0;
            color: #37231a;
        }

        .certificate-wrapper {
            position: relative;
            text-align: center;
            height: 500px;
            padding-top: 100px;
        }

        .certificate-logo {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: 20%;
        }

        .certificate-text {
            position: absolute;
            left: 50%;
            top: 30%;
            transform: translateX(-50%);
            text-align: center;
            font-size: 24px;
            color: #37231a;
        }

        .certificate-text p {
            line-height: 1.5;
            margin: 10px 0;
            font-size: 30px;
            opacity: 0.9;
        }

        .font-weight-bold {
            font-weight: bolder;
        }

        .main-border {
            border: 20px solid darkred;
        }

        /* Ensure responsiveness */
        @media (max-width: 768px) {
            .certificate-wrapper {
                height: auto;
                padding-top: 30px;
            }

            .certificate-logo {
                bottom: 15%;
            }
        }
    </style>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid px-0 certificate-wrapper">
        <img class="certificate-logo" src="{{ public_path('storage/logos/' . config('logo_b_image')) }}" alt="Logo">
        <div class="certificate-text">
            <p>This is to certify that <span class="font-weight-bold">{{$data['name']}}</span> successfully completed</p>
            <p><span class="font-weight-bold">{{$data['course_name']}}</span></p>
            <p>on <span class="font-weight-bold">{{ config('app.name') }}</span> online course on <span class="font-weight-bold">{{$data['date']}}</span></p>
        </div>
        <img src="{{ public_path('images/certificate.jpg') }}" alt="Certificate Background" width="100%">
    </div>
</body>
</html>
