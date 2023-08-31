@extends('master')

@section('content')

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>

    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class=" h-20 " src="https://img.freepik.com/vetores-premium/logotipo-do-design-de-alimentos-de-qualidade-para-catering_187482-593.jpg"
                    alt="logo">
                
            </a>
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Acesse o Cardapio
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="#">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-mail</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Senha</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                        required="">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500 dark:text-gray-300">Lembre-me</label>
                                </div>
                            </div>
                            <a href="#"
                                class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Esqueceu a senha?</a>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Entrar</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Ainda não possui conta? <a href="#"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">Criar</a>
                        </p>
                    </form>

                    <div class=" relative flex items-center justify-center ">
                        <button
                            class=" w-80 group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-blue-400 focus:bg-blue-50 active:bg-blue-100">
                            <div class="relative flex items-center space-x-4 justify-center">
                                <img src="https://tailus.io/sources/blocks/social/preview/images/google.svg"
                                    class="absolute left-0 w-5" alt="google logo">
                                <span
                                    class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-blue-600 sm:text-base">Acesse com Google</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>