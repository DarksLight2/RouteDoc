<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add Tailwind CSS via CDN -->
    <title>API Doc</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.23.0/themes/prism.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
{{--    <script>--}}
{{--        document.addEventListener("themeChanged", () => {--}}
{{--            if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {--}}
{{--                document.documentElement.classList.add('dark')--}}
{{--            } else {--}}
{{--                document.documentElement.classList.remove('dark')--}}
{{--            }--}}
{{--        })--}}

{{--        document.addEventListener("toggleTheme", () => {--}}
{{--            console.log(localStorage.theme)--}}
{{--            if(localStorage.theme === 'dark')--}}
{{--                localStorage.theme = 'light'--}}
{{--            else--}}
{{--                localStorage.theme = 'dark'--}}
{{--            document.dispatchEvent(new Event("themeChanged"))--}}
{{--        })--}}
{{--    </script>--}}
    <style>
        pre.language-json {
            background: #fff;
        }
    </style>
</head>
<body class="bg-gray-200 p-10">
{{ $slot }}
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.23.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.23.0/components/prism-json.min.js"></script>
</body>
</html>
