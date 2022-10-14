<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased bg-gray-100">
<div class="max-w-2xl mx-auto py-16">

    <form method="post" action="/" class="flex rounded-md shadow-sm mb-6">
        <div class="relative flex flex-grow items-stretch focus-within:z-10">
            <input
                type="text"
                name="task"
                id="task"
                class="block w-full rounded-none rounded-l-md border-gray-300 pl-6 focus:border-sky-700 focus:ring-indigo-500 sm:text-sm"
                placeholder="New task"
                title="Add new task"
                maxlength="30"
            />
        </div>
        <button
            type="button"
            class="relative -ml-px inline-flex items-center space-x-2 rounded-r-md border border-gray-800 bg-gray-700 px-4 py-2 text-sm font-medium text-white hover:bg-gray-800 focus:border-sky-700 focus:outline-none focus:ring-1 focus:ring-sky-700"
        >
            Add
        </button>
    </form>

    <ul role="list" class="divide-y divide-gray-200 rounded-md overflow-hidden shadow-sm">

        <li class="relative bg-white py-5 px-4 focus-within:ring-2 focus-within:ring-inset focus-within:ring-sky-700 hover:bg-gray-50 first:rounded-t-md last:rounded-b-md flex justify-between">
            <span class="block focus:outline-none truncate text-sm font-medium text-gray-900">
                Task name
            </span>
            <a href="/destroy" class="text-sm text-red-700">Remove</a>
        </li>

    </ul>
</div>
</body>
</html>
