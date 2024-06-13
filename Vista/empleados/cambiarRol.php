<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>


    <?php include "../../componentes/Includes/imports.php" ?>

</head>

<style>
    footer {
        position: absolute;
        bottom: 0;
        width: 100%;
    }
</style>

<body>
    <header>
        <!--Navbar-->
        <?php include "../../componentes/Includes/nav.php" ?>
    </header>

    <section>
        <!--Regiatro de roles-->
        <div class="flex justify-center items-center">
            <div class="p-5 bg-gray-400 w-1/4 rounded-lg" style="margin-top:50px;">
                <form class="p-3 flex flex-col space-y-10" method="post" enctype="multipart/form-data">
                    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />

                    <div class="max-w-2xl mx-auto" style="margin-top: 10px;">

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
                        </form>

                        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
                    </div>
                    <button type="submit" class="p-2 bg-gray-100 rounded" style="width: 200px; height: 50px; margin-left: 20px; margin-top: 30px;"><a href="tablaEmpleados.php">Asignar rol</a></button>
                    <button type="submit" class="p-2 bg-gray-100 rounded" style="width: 200px; height: 50px; margin-left: 20px; margin-top: 30px;"><a href="registroRoles.php">Registrar nuevo rol</a></button>
                </form>
            </div>
            <div class="p-5 bg-gray-400 w-1/2 rounded-lg" style="margin-top:50px; margin-left:60px;">
                <div class="flex h-full flex-col justify-center">
                    <!-- Table -->
                    <div class="mx-auto w-full max-w-2xl rounded-sm border border-gray-200 bg-white shadow-lg">
                        <header class="border-b border-gray-100 px-5 py-4">
                            <div class="font-semibold text-gray-800">Manage Carts</div>
                        </header>

                        <div class="overflow-x-auto p-3">
                            <table class="w-full table-auto">
                                <thead class="bg-gray-50 text-xs font-semibold uppercase text-gray-400">
                                    <tr>
                                        <th class="p-2">
                                            <div class="text-left font-semibold">Product Name</div>
                                        </th>
                                        <th class="p-2">
                                            <div class="text-left font-semibold">Quantity</div>
                                        </th>
                                        <th class="p-2">
                                            <div class="text-left font-semibold">Total</div>
                                        </th>
                                        <th class="p-2">
                                            <div class="text-center font-semibold">Action</div>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="divide-y divide-gray-100 text-sm">
                                    <!-- record 1 -->
                                    <tr>
                                        <td class="p-2">
                                            <div class="font-medium text-gray-800">Samsung Galaxy Note 4</div>
                                        </td>
                                        <td class="p-2">
                                            <div class="text-left">1</div>
                                        </td>
                                        <td class="p-2">
                                            <div class="text-left font-medium text-green-500">RM 2,890.66</div>
                                        </td>
                                        <td class="p-2">
                                            <div class="flex justify-center">
                                                <button>
                                                    <svg class="h-8 w-8 rounded-full p-1 hover:bg-gray-100 hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- record 2 -->
                                    <tr>
                                        <td class="p-2">
                                            <div>
                                                <div class="font-medium text-gray-800">Logitech Keyboard</div>
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div class="text-left">1</div>
                                        </td>
                                        <td class="p-2">
                                            <div class="text-left font-medium text-green-500">RM 120.50</div>
                                        </td>
                                        <td class="p-2">
                                            <div class="flex justify-center">
                                                <button>
                                                    <svg class="h-8 w-8 rounded-full p-1 hover:bg-gray-100 hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- total amount -->
                        <div class="flex justify-end space-x-4 border-t border-gray-100 px-5 py-4 text-2xl font-bold">
                            <div>Total</div>
                            <div class="text-blue-600">RM <span x-text="total.toFixed(2)"></span></div>
                        </div>

                        <div class="flex justify-end">
                            <!-- send this data to backend (note: use class 'hidden' to hide this input) -->
                            <input type="hidden" class="border border-black bg-gray-50" x-model="selected" />
                        </div>
                    </div>
                </div>
    </section>

    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("app", () => ({
                total: 0,
                selected: [],

                toggleCheckbox(element, amount) {
                    if (element.checked) {
                        this.selected.push(element.value);
                        this.total += amount;
                    } else {
                        const index = this.selected.indexOf(element.value);

                        if (index > -1) this.selected.splice(index, 1);

                        this.total -= amount;
                    }
                },
            }));
        });
    </script>
    </div>
    </div>
    </section>
</body>

</html>