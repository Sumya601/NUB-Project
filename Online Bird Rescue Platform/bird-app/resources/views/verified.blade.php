<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BD Birds</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/logoM.png" rel="icon">
  <link href="assets/img/logoM.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <style>

    body{
        background-color: #EDFEDD;
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        color: white;
        display: flex;
        justify-content: center;
    }

    .veri1{
        width:250px;
        height: 150px;
        background-color: #5F9548;
        text-align:center;
        padding: 12px 20px;
        border-radius: 5px;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }

    .veri1 h3, p{
        margin: 0;
    }


        .checkmark__circle{
            stroke-dasharray: 166;
            stroke-dashoffset: 166;
            stroke-width: 2;
            stroke-miterlimit: 10;
            stroke: #7ac142;
            fill: none;
            animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards
        }
        .checkmark{
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: block;
            stroke-width: 2;
            stroke: #fff;
            stroke-miterlimit: 10;
            margin: auto;
            box-shadow: inset 0px 0px 0px #7ac142;
            animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both
        }
        .checkmark__check{
            transform-origin: 50% 50%;
            stroke-dasharray: 48;
            stroke-dashoffset: 48;
            animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards
        }
        @keyframes stroke{100%{stroke-dashoffset: 0}}
        @keyframes scale{0%, 100%{transform: none}50%{transform: scale3d(1.1, 1.1, 1)}}@keyframes fill{100%{box-shadow: inset 0px 0px 0px 30px #7ac142}}

  </style>

<script>
        setTimeout(function() {
            window.close();
        }, 2500); // 3000 milliseconds = 3 seconds
    </script>
</head>

<body>
    <div class="veri1">
        <h3>Verified</h3>
        <p>Your email has been Verified</p>
        <div> <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"> <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/> <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
        </svg>
        </div>
</div>
</body>