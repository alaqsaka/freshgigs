<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                    }
                },
            };
        </script>
        <title>freshgigs | Find Jobs and Gigs For Fresh Graduates</title>
    </head>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4 py-5">
            <a href="/" class="text-gray-400 text-3xl font-semibold ml-2">
                freshgigs
            </a>
            <ul class="flex space-x-6 mr-6 text-lg">
                <li>
                    <a href="/register" class="hover:text-laravel"
                        ><i class="fa-solid fa-user-plus"></i> Register</a
                    >
                </li>
                <li>
                    <a href="/login" class="hover:text-laravel"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                </li>
            </ul>
        </nav>

    <main>
        {{ $slot }}
    </main>
    

        <footer
            class="fixed bottom-0 left-0 w-full flex items-center justify-start bg-gray-400  text-white h-24 mt-24 md:justify-center"
        >
           
            <p class="ml-2">Made with ❤️ from Indonesia. freshgigs ©2022</p>

            <a
                href="/listings/create"
                class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
                >Post Job</a
            >
        </footer>

        <x-flash-message />
    </body>
</html>