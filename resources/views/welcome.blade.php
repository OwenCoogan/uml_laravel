<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .welcome__logo-svg {
                width: 160px;
                height: 160px;
            }
            .welcome__title, .welcome__subtitle {
                text-align: center;
                color: #FFF;
            }
            .welcome__wrap-access {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .welcome__access-btn {
                padding: 8px 16px;
                background-color: #fff;
                color: #1a202c;
                border-radius: 4px;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:pt-0">
                    <svg class="welcome__logo-svg" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m341.473 376a18.38 18.38 0 0 0 -16.9 11.142l-19.221 44.858 33.616 8 6.384-8 18.878-25.382-5.86-4.994a18.383 18.383 0 0 0 -16.897-25.624z" fill="#f0bd9b"/><path d="m381.473 376a18.38 18.38 0 0 0 -16.9 11.142l-19.221 44.858 10.039 8 23.709 1.669 6.252-9.669 19.361-26.509-6.343-3.867a18.383 18.383 0 0 0 -16.897-25.624z" fill="#f5c19e"/><path d="m288 296v-24l16-16-16-16 16-16-16-16v-24h-64v112l32 32z" fill="#d9d9d9"/><rect fill="#878787" height="160" rx="40" width="144" x="184" y="24"/><path d="m296 88h-80v-16a16 16 0 0 1 16-16h48a16 16 0 0 1 16 16z" fill="#8bc89c"/><path d="m280 152h-48a16 16 0 0 1 -16-16v-16h80v16a16 16 0 0 1 -16 16z" fill="#fdb62f"/><path d="m264 208h-16v112l8 8 8-8z" fill="#b9b9b9"/><path d="m89.352 368h64v120h-64z" fill="#e4e4e2"/><path d="m421.291 376c-7.5.119-14.043 5.195-17 12.085l-18.815 43.915h-72.124l-16-16-1.352-8h-142.648v64l112 16 120.432-14.168a32 32 0 0 0 23.663-15.255l10.041-16.648a168.083 168.083 0 0 0 10.555-20.586l8.451-19.719a18.384 18.384 0 0 0 -17.203-25.624z" fill="#fec9a3"/><path d="m24 360h65.352v128h-65.352z" fill="#3474a6"/><g fill="#fdb62f"><path d="m368 272h16v16h-16z"/><path d="m344 296h16v16h-16z"/><path d="m392 296h16v16h-16z"/><path d="m368 320h16v16h-16z"/><path d="m104 56h16v16h-16z"/><path d="m80 80h16v16h-16z"/><path d="m128 80h16v16h-16z"/><path d="m104 104h16v16h-16z"/></g><path d="m384 88h16v16h-16z" fill="#fcd795"/><path d="m368 104h16v16h-16z" fill="#fcd795"/><path d="m400 104h16v16h-16z" fill="#fcd795"/><path d="m384 120h16v16h-16z" fill="#fcd795"/><path d="m136 232h16v16h-16z" fill="#fcd795"/><path d="m120 248h16v16h-16z" fill="#fcd795"/><path d="m152 248h16v16h-16z" fill="#fcd795"/><path d="m136 264h16v16h-16z" fill="#fcd795"/><path d="m153.352 376a53.9 53.9 0 0 1 44.848-24h14.311a53.893 53.893 0 0 1 44.844 24h48a16 16 0 0 1 16 16v16a8 8 0 0 1 -8 8h-160z" fill="#fec9a3"/><path d="m324.614 432-27.262-16h-73.352v16h89.351z" fill="#f7bb8f"/><path d="m224 184h64v16h-64z" fill="#b9b9b9"/></svg>
                </div>

                <h1 class="welcome__title">CarLoc ©</h1>

                <h2 class="welcome__subtitle">Société de location de véhicules <br> Interface de gestion</h2>

                @if (Route::has('login'))
                    <div class="welcome__wrap-access">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="welcome__access-btn">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="welcome__access-btn">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 welcome__access-btn">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

            </div>
        </div>
    </body>
</html>