<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Route Documentation</title>
    <style>
        body {
            background-color: #2d3748;
            margin: 0;
        }
        header {
            padding: 16px;
            font-size: 22px;
            background-color: #718096;
            margin-bottom: 16px;
        }
        main {
            margin: 8px;
            background-color: #718096;
            padding: 16px;
        }
        .methods {
            display: flex;
            gap: 8px;
        }

        .method {
            padding: 2px 8px;
            border-radius: 8px;
            background-color: #2d3748;
            color: #a0aec0;
        }
    </style>
</head>
<body>
<header>
    <div class="logo">Route Documentation</div>
</header>
<main>
    {{ $slot }}
</main>
</body>
</html>
