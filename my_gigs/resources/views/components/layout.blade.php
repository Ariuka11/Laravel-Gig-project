<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My GiGs</title>
    <link rel="icon" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity=""
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: '#ef3b2d'
                    }
                }
            }
        }
    </script>
</head>

<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        <a href="">
            Logo
        </a>
        <ul class="flex space-x-6 mr-6 text-lg">
            <li>
                <a href="register.html" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i>Register</a>
            </li>
            <li>
                <a href="register.html" class="hover:text-laravel"><i
                        class="fa-solid fa-arrow-right-to-bracket"></i>Login</a>
            </li>
        </ul>
    </nav>
    {{-- Hero
    @yield('hero') --}}
    <main>
        {{-- VIEW OUTPUT --}}
        {{ $slot }}
    </main>
    <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-20 mt-24 opacity-90 md:justify-center">
        <p class="ml-2">Copyright @copy 2022, All right reserved</p>
        <a href="create.html" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Post Job</a>
    </footer>
</body>


</html>
