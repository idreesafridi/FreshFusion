<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <style>
            .custom-input-bg {
                background-color: #e6f4f1; /* Light green to match the blueflame design */
            }
            .flame-icon {
                width: 40px;
                height: 40px;
                background: url('https://via.placeholder.com/40?text=🔥') no-repeat center;
                background-size: contain;
            }
            .container {
                 /* Solid white color, no transparency */
                padding: 2rem;
                border-radius: 15px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                width: 100%;
                max-width: 400px;
                text-align: center;
            }
            .container h2 {
                color: #2ecc71;
                margin-bottom: 1rem;
            }
            .form-group {
                margin-bottom: 1rem;
                text-align: left;
            }
            .form-group label {
                display: block;
                font-size: 0.9rem;
                color: #333;
                margin-bottom: 0.5rem;
            }
            .form-group input {
                width: 100%;
                padding: 0.75rem;
                border: 1px solid #ddd;
                border-radius: 25px;
                font-size: 1rem;
                background: #f0f4f8;
                box-sizing: border-box;
            }
            .form-group input:focus {
                outline: none;
            }
            .error {
                color: red;
                font-size: 0.8rem;
                margin-top: 0.25rem;
            }
            .form-footer {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-top: 1.5rem;
            }
            .form-footer a {
                color: #2ecc71;
                text-decoration: none;
                font-size: 0.9rem;
            }
            .form-footer a:hover {
                text-decoration: underline;
            }
            .btn {
                background: #2ecc71;
                color: white;
                padding: 0.75rem 1.5rem;
                border: none;
                border-radius: 25px;
                font-size: 1rem;
                cursor: pointer;
            }
            .btn:hover {
                background: #27ae60;
            }
            /* Hide scrollbar for the entire page */
            html, body {
                margin: 0;
                padding: 0;
                overflow: hidden; /* Hides scrollbar */
            }
            /* Ensure the main content area remains scrollable without a visible scrollbar */
            .min-h-screen {
                overflow-y: auto; /* Allows scrolling */
                scrollbar-width: none; /* Firefox */
                -ms-overflow-style: none; /* Internet Explorer and Edge */
            }
            .min-h-screen::-webkit-scrollbar {
                display: none; /* Chrome, Safari, and Opera */
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased" style="background-image: url('{{ asset('img/123.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container mx-auto p-6">
            <div>
                <a href="/">
                    {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                </a>
            </div>
            {{ $slot }}
        </div>
    </body>
    
</html>
