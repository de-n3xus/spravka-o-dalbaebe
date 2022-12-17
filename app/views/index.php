<!DOCTYPE html>
<html lang="ru" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap-grid.min.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.45.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>

    <link rel="stylesheet" href="/assets/style.css">
    <script src="/assets/main.js"></script>

    <title>Выдать сертификат далбаёба</title>
</head>
<body>

<div class="home-content mt-auto mb-auto">

    <h2 class="text-center font-semibold mt-20">Выдайте сертификат далбаёба своему другу!</h2>
    <div style="max-width: 50%;" class="mr-auto ml-auto">
        <div class="row">
            <div class="col-sm">
                <form class="ml-auto mr-auto">
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Имя</label>
                        <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Александр Мышкин">
                    </div>
                    <button type="submit" class="mr-auto ml-auto text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Создать</button>
                </form>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm">
                <div id="result" class="ml-auto mr-auto pl-auto pr-auto"></div>
            </div>
        </div>
    </div>

</div>
<script>

$('form').submit(function(e)
{
    e.preventDefault();
    
    var name = $.trim($('#name').val());

    if($.trim($('#name').val()) == '')
    {
        toast('error', 'Введи имя!!!11', 5000);
        return false;
    }

    setTimeout(function()
    {
        toast('', 'Хатьпфу, готово!', 4000)
    }, 1000);

    setTimeout(function()
    {
        $('#result').html('<img src="/dalbaeb/' + name + '" alt="Ошибка" style="margin-right: auto; margin-left: auto;">')
    }, 1500);

});

</script>
<script src="https://static.cloudflareinsights.com/beacon.min.js"></script>
</body>
</html>