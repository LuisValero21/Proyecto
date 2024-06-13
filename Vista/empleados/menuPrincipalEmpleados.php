<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>

    <?php include "../../componentes/Includes/imports.php" ?>
</head>

<style>
    #registro {
        text-align: justify;
        color: white;
        display: block;
    }

    footer {
        width: 100%;
    }
</style>

<body>
    <!--Navbar-->
    <?php include "../../componentes/Includes/navEmpleados.php" ?>

    <section>
        <!--Logo-->
        <div>
            <h1 class="logo text-center" style="font-family: arial, sans-serif; font-size: 60px;"><b>AsoRON</b></h1>
        </div>

        <!--Searchbar-->
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />

        <div class="max-w-2xl mx-auto" style="margin-top: 20px;">

            <form class="flex items-center">
                <label for="simple-search" class="sr-only">Buscar...</label>
                <div class="relative w-full">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
                </div>
                <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-gray-700 rounded-lg border border-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </form>

            <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
        </div>

        <!--Cards-->
        <div class="flex flex-wrap justify-between h-full">

            <!--Card 1-->
            <div class="flex-1 rounded-lg flex flex-col items-center justify-center p-4 space-y-2 m-2">
                <div class="relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                    <div class="relative mx-4 mt-4 h-80 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700 shadow-lg">
                        <img src="https://www.licoresmundiales.com/pub/media/catalog/product/cache/6d1a366ec4c28c9c58646a10a644e322/r/o/ron-roble-ultra-anejo-1_1.jpg" alt="profile-picture" />
                    </div>
                    <div class="p-6 text-center">
                        <h4 class="mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                            Roble Viejo Maestro
                        </h4>
                        <p class="block bg-gradient-to-tr from-pink-600 to-pink-400 bg-clip-text font-sans text-base font-medium leading-relaxed text-transparent antialiased">
                            Fabricado por...
                        </p>
                    </div>
                    <!-- Button -->
                    <button type='button' class='flex break-inside bg-black rounded-3xl px-4 py-4 mb-4 w-full dark:bg-slate-800 dark:text-white' style="width: 200px; height: 20px; margin-left: 30px;">
                        <div class='flex items-center justify-between flex-1'>
                            <span class='text-lg font-medium text-white'>ver detalles</span>
                            <svg width='17' height='17' viewBox='0 0 17 17' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                <path fillRule='evenodd' clipRule='evenodd' d='M0 8.71423C0 8.47852 0.094421 8.25246 0.262491 8.08578C0.430562 7.91911 0.658514 7.82547 0.896201 7.82547H13.9388L8.29808 2.23337C8.12979 2.06648 8.03525 1.84013 8.03525 1.60412C8.03525 1.36811 8.12979 1.14176 8.29808 0.974875C8.46636 0.807989 8.6946 0.714233 8.93259 0.714233C9.17057 0.714233 9.39882 0.807989 9.5671 0.974875L16.7367 8.08499C16.8202 8.16755 16.8864 8.26562 16.9316 8.3736C16.9767 8.48158 17 8.59733 17 8.71423C17 8.83114 16.9767 8.94689 16.9316 9.05487C16.8864 9.16284 16.8202 9.26092 16.7367 9.34348L9.5671 16.4536C9.39882 16.6205 9.17057 16.7142 8.93259 16.7142C8.6946 16.7142 8.46636 16.6205 8.29808 16.4536C8.12979 16.2867 8.03525 16.0604 8.03525 15.8243C8.03525 15.5883 8.12979 15.362 8.29808 15.1951L13.9388 9.603H0.896201C0.658514 9.603 0.430562 9.50936 0.262491 9.34268C0.094421 9.17601 0 8.94995 0 8.71423Z' fill='white' />
                            </svg>
                        </div>
                    </button>
                </div>
                <!-- stylesheet -->
                <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />
            </div>

            <!--Card 2-->
            <div class="flex-1 rounded-lg flex flex-col items-center justify-center p-4 space-y-2 m-2">
                <div class="card2">
                    <div class="relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                        <div class="relative mx-4 mt-4 h-80 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700 shadow-lg">
                            <img src="https://www.licoresmundiales.com/pub/media/catalog/product/cache/6d1a366ec4c28c9c58646a10a644e322/r/o/ron-roble-ultra-anejo-1_1.jpg" alt="profile-picture" />
                        </div>
                        <div class="p-6 text-center">
                            <h4 class="mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                Roble Viejo Maestro
                            </h4>
                            <p class="block bg-gradient-to-tr from-pink-600 to-pink-400 bg-clip-text font-sans text-base font-medium leading-relaxed text-transparent antialiased">
                                Fabricado por...
                            </p>
                        </div>
                        <!-- Button -->
                        <button type='button' class='flex break-inside bg-black rounded-3xl px-4 py-4 mb-4 w-full dark:bg-slate-800 dark:text-white' style="width: 200px; height: 20px; margin-left: 30px;">
                            <div class='flex items-center justify-between flex-1'>
                                <span class='text-lg font-medium text-white'>ver detalles</span>
                                <svg width='17' height='17' viewBox='0 0 17 17' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                    <path fillRule='evenodd' clipRule='evenodd' d='M0 8.71423C0 8.47852 0.094421 8.25246 0.262491 8.08578C0.430562 7.91911 0.658514 7.82547 0.896201 7.82547H13.9388L8.29808 2.23337C8.12979 2.06648 8.03525 1.84013 8.03525 1.60412C8.03525 1.36811 8.12979 1.14176 8.29808 0.974875C8.46636 0.807989 8.6946 0.714233 8.93259 0.714233C9.17057 0.714233 9.39882 0.807989 9.5671 0.974875L16.7367 8.08499C16.8202 8.16755 16.8864 8.26562 16.9316 8.3736C16.9767 8.48158 17 8.59733 17 8.71423C17 8.83114 16.9767 8.94689 16.9316 9.05487C16.8864 9.16284 16.8202 9.26092 16.7367 9.34348L9.5671 16.4536C9.39882 16.6205 9.17057 16.7142 8.93259 16.7142C8.6946 16.7142 8.46636 16.6205 8.29808 16.4536C8.12979 16.2867 8.03525 16.0604 8.03525 15.8243C8.03525 15.5883 8.12979 15.362 8.29808 15.1951L13.9388 9.603H0.896201C0.658514 9.603 0.430562 9.50936 0.262491 9.34268C0.094421 9.17601 0 8.94995 0 8.71423Z' fill='white' />
                                </svg>
                            </div>
                        </button>
                    </div>

                    <!-- stylesheet -->
                    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />
                </div>
            </div>

            <!--Card 3-->
            <div class="flex-1 rounded-lg flex flex-col items-center justify-center p-4 space-y-2 m-2">
                <div class="card3">
                    <div class="relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                        <div class="relative mx-4 mt-4 h-80 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700 shadow-lg">
                            <img src="https://www.licoresmundiales.com/pub/media/catalog/product/cache/6d1a366ec4c28c9c58646a10a644e322/r/o/ron-roble-ultra-anejo-1_1.jpg" alt="profile-picture" />
                        </div>
                        <div class="p-6 text-center">
                            <h4 class="mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                Roble Viejo Maestro
                            </h4>
                            <p class="block bg-gradient-to-tr from-pink-600 to-pink-400 bg-clip-text font-sans text-base font-medium leading-relaxed text-transparent antialiased">
                                Fabricado por...
                            </p>
                        </div>
                        <!-- Button -->
                        <button type='button' class='flex break-inside bg-black rounded-3xl px-4 py-4 mb-4 w-full dark:bg-slate-800 dark:text-white' style="width: 200px; height: 20px; margin-left: 30px;">
                            <div class='flex items-center justify-between flex-1'>
                                <span class='text-lg font-medium text-white'>ver detalles</span>
                                <svg width='17' height='17' viewBox='0 0 17 17' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                    <path fillRule='evenodd' clipRule='evenodd' d='M0 8.71423C0 8.47852 0.094421 8.25246 0.262491 8.08578C0.430562 7.91911 0.658514 7.82547 0.896201 7.82547H13.9388L8.29808 2.23337C8.12979 2.06648 8.03525 1.84013 8.03525 1.60412C8.03525 1.36811 8.12979 1.14176 8.29808 0.974875C8.46636 0.807989 8.6946 0.714233 8.93259 0.714233C9.17057 0.714233 9.39882 0.807989 9.5671 0.974875L16.7367 8.08499C16.8202 8.16755 16.8864 8.26562 16.9316 8.3736C16.9767 8.48158 17 8.59733 17 8.71423C17 8.83114 16.9767 8.94689 16.9316 9.05487C16.8864 9.16284 16.8202 9.26092 16.7367 9.34348L9.5671 16.4536C9.39882 16.6205 9.17057 16.7142 8.93259 16.7142C8.6946 16.7142 8.46636 16.6205 8.29808 16.4536C8.12979 16.2867 8.03525 16.0604 8.03525 15.8243C8.03525 15.5883 8.12979 15.362 8.29808 15.1951L13.9388 9.603H0.896201C0.658514 9.603 0.430562 9.50936 0.262491 9.34268C0.094421 9.17601 0 8.94995 0 8.71423Z' fill='white' />
                                </svg>
                            </div>
                        </button>
                    </div>

                    <!-- stylesheet -->
                    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />
                </div>
            </div>

            <!--Card 4-->
            <div class="flex-1 rounded-lg flex flex-col items-center justify-center p-4 space-y-2 m-2">
                <div class="card4">
                    <div class="relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                        <div class="relative mx-4 mt-4 h-80 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700 shadow-lg">
                            <img src="https://www.licoresmundiales.com/pub/media/catalog/product/cache/6d1a366ec4c28c9c58646a10a644e322/r/o/ron-roble-ultra-anejo-1_1.jpg" alt="profile-picture" />
                        </div>
                        <div class="p-6 text-center">
                            <h4 class="mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                Roble Viejo Maestro
                            </h4>
                            <p class="block bg-gradient-to-tr from-pink-600 to-pink-400 bg-clip-text font-sans text-base font-medium leading-relaxed text-transparent antialiased">
                                Fabricado por...
                            </p>
                        </div>
                        <!-- Button -->
                        <button type='button' class='flex break-inside bg-black rounded-3xl px-4 py-4 mb-4 w-full dark:bg-slate-800 dark:text-white' style="width: 200px; height: 20px; margin-left: 30px;">
                            <div class='flex items-center justify-between flex-1'>
                                <span class='text-lg font-medium text-white'>ver detalles</span>
                                <svg width='17' height='17' viewBox='0 0 17 17' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                    <path fillRule='evenodd' clipRule='evenodd' d='M0 8.71423C0 8.47852 0.094421 8.25246 0.262491 8.08578C0.430562 7.91911 0.658514 7.82547 0.896201 7.82547H13.9388L8.29808 2.23337C8.12979 2.06648 8.03525 1.84013 8.03525 1.60412C8.03525 1.36811 8.12979 1.14176 8.29808 0.974875C8.46636 0.807989 8.6946 0.714233 8.93259 0.714233C9.17057 0.714233 9.39882 0.807989 9.5671 0.974875L16.7367 8.08499C16.8202 8.16755 16.8864 8.26562 16.9316 8.3736C16.9767 8.48158 17 8.59733 17 8.71423C17 8.83114 16.9767 8.94689 16.9316 9.05487C16.8864 9.16284 16.8202 9.26092 16.7367 9.34348L9.5671 16.4536C9.39882 16.6205 9.17057 16.7142 8.93259 16.7142C8.6946 16.7142 8.46636 16.6205 8.29808 16.4536C8.12979 16.2867 8.03525 16.0604 8.03525 15.8243C8.03525 15.5883 8.12979 15.362 8.29808 15.1951L13.9388 9.603H0.896201C0.658514 9.603 0.430562 9.50936 0.262491 9.34268C0.094421 9.17601 0 8.94995 0 8.71423Z' fill='white' />
                                </svg>
                            </div>
                        </button>
                    </div>

                    <!-- stylesheet -->
                    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />
                </div>
            </div>
        </div>
    </section>


</body>

</html>