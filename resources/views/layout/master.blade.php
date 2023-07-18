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
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>

        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#7845c4",
                        },
                    },
                },
            };
        </script>
        <title>
            @yield('title', 'TasnoGigs | Find Software Development Jobs & Projects')
        </title>
    </head>
    <body class="mb-48">

        @include('layout.navbar')

        <main>
            <div x-data="{ show: true, message: 'This is your flash message!' }" x-show="show"
             x-init="setTimeout(() => show = false, 3000)" 
             class="fixed bg-green-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm" @click="show = false">
             
                <p x-text="message"></p>
            </div>
            @yield('content')
        </main>


    </body>
    @include('layout.footer')

    </html>