<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="">
    @vite('resources/css/app.css')
    @vite('resources/js/apexchart.js')
</head>
<body class="font-sans">
    {{-- @include('admin.components.sidebar')
    @include('admin.components.navbar')
    @yield('content')
    @include('admin.components.footer') --}}
    <div class="md:container md:mx-auto">
        <div class="flex">
            <div class="sidebar w-1/4" style="background-color: #192231">
                <div class="flex items-center justify-between pt-5 px-5 text-cyan-400">
                    <div class="logo">
                        <img src="{{asset('images/logo-light.png')}}" alt="" srcset="" class="w-10">
                    </div>                
                    <div class="hamburger cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                        </svg>
                    </div>
                </div>
                <div class="flex items-center gap-2 ps-4 py-1 w-100 mt-8 border border-slate-500 rounded-md ms-5 me-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-slate-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                    <input type="text" name="search" id="search" class="p-2 w-full bg-transparent border-none outline-none text-slate-50" placeholder="Find...">
                </div>
                <div class="overflow-y-auto mt-5">
                    <ul class="list ms-6">
                        <li class="py-3">
                            <label class="font-display text-xs text-slate-200 uppercase font-semibold">Navigation</label>
                            <ul class="mt-2 ">
                                <li class="ps-3 border-l-2 border-sky-950 hover:border-sky-400 transition ease-in-out duration-400">
                                    <a href="#" class="p-2 w-100 flex items-center gap-3 text-slate-400 hover:text-sky-400">
                                        <div class="p-2 rounded-lg bg-slate-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
                                            </svg> 
                                        </div>                         
                                        <span class="text-xs uppercase">Dashboard</span>
                                    </a>
                                </li>
                                <li class="ps-3 border-l-2 border-sky-950 hover:border-sky-400 transition ease-in-out duration-400">
                                    <a href="#" class="p-2 w-100 flex items-center gap-3 text-slate-400 hover:text-sky-400">
                                        <div class="p-2 rounded-lg bg-slate-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8.25V18a2.25 2.25 0 0 0 2.25 2.25h13.5A2.25 2.25 0 0 0 21 18V8.25m-18 0V6a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 6v2.25m-18 0h18M5.25 6h.008v.008H5.25V6ZM7.5 6h.008v.008H7.5V6Zm2.25 0h.008v.008H9.75V6Z" />
                                            </svg>
                                        </div>
                                        <span class="text-xs uppercase">Widgets</span>
                                    </a>
                                </li>
                                <li class="ps-3 border-l-2 border-sky-950 hover:border-sky-400 transition ease-in-out duration-400">
                                    <a href="#" class="p-2 w-100 flex items-center gap-3 text-slate-400 hover:text-sky-400">
                                        <div class="p-2 rounded-lg bg-slate-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                            </svg>   
                                        </div>                       
                                        <span class="text-xs uppercase">Messages</span>
                                    </a>
                                </li>
                                <li class="ps-3 border-l-2 border-sky-950 hover:border-sky-400 transition ease-in-out duration-400">
                                    <a href="#" class="p-2 w-100 flex items-center gap-3 text-slate-400 hover:text-sky-400">
                                        <div class="p-2 rounded-lg bg-slate-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                            </svg>  
                                        </div>                                                 
                                        <span class="text-xs uppercase">Pages</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="py-3">
                            <label class="font-display text-xs text-slate-200 uppercase font-semibold">Accounts</label>
                            <ul class="mt-2">
                                <li class="ps-3 border-l-2 border-sky-950 hover:border-sky-400 transition ease-in-out duration-400">
                                    <a href="#" class="p-2 w-100 flex items-center gap-3 text-slate-400 hover:text-sky-400">
                                        <div class="p-2 rounded-lg bg-slate-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                                            </svg>
                                        </div>
                                        <span class="text-xs uppercase">Basic Users</span>
                                    </a>
                                </li>
                                <li class="ps-3 border-l-2 border-sky-950 hover:border-sky-400 transition ease-in-out duration-400">
                                    <a href="#" class="p-2 w-100 flex items-center gap-3 text-slate-400 hover:text-sky-400">
                                        <div class="p-2 rounded-lg bg-slate-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                            </svg>  
                                        </div>                        
                                        <span class="text-xs uppercase">Sudo Users</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="py-3">
                            <label class="font-display text-xs text-slate-200 uppercase font-semibold">Settings</label>
                            <ul class="mt-2">
                                <li class="ps-3 border-l-2 border-sky-950 hover:border-sky-400 transition ease-in-out duration-400">
                                    <a href="#" class="p-2 w-100 flex items-center gap-3 text-slate-400 hover:text-sky-400">
                                        <div class="p-2 rounded-lg bg-slate-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.098 19.902a3.75 3.75 0 0 0 5.304 0l6.401-6.402M6.75 21A3.75 3.75 0 0 1 3 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 0 0 3.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008Z" />
                                            </svg>
                                        </div>
                                        <span class="text-xs uppercase">Themes</span>
                                    </a>
                                </li>
                                <li class="ps-3 border-l-2 border-sky-950 hover:border-sky-400 transition ease-in-out duration-400">
                                    <a href="#" class="p-2 w-100 flex items-center gap-3 text-slate-400 hover:text-sky-400">
                                        <div class="p-2 rounded-lg bg-slate-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                            </svg>
                                        </div>
                                        <span class="text-xs uppercase">My Account</span>
                                    </a>
                                </li>
                                <li class="ps-3 border-l-2 border-sky-950 hover:border-sky-400 transition ease-in-out duration-400">
                                    <a href="#" class="p-2 w-100 flex items-center gap-3 text-slate-400 hover:text-sky-400">
                                        <div class="p-2 rounded-lg bg-slate-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25label.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                                            </svg> 
                                        </div>                         
                                        <span class="text-xs uppercase">Password</span>
                                    </a>
                                </li>
                                <li class="ps-3 border-l-2 border-sky-950 hover:border-sky-400 transition ease-in-out duration-400">
                                    <a href="#" class="p-2 w-100 flex items-center gap-3 text-slate-400 hover:text-sky-400">
                                        <div class="p-2 rounded-lg bg-slate-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                            </svg>  
                                        </div>                                                                       
                                        <span class="text-xs uppercase">Reports</span>
                                    </a>
                                </li>
                                <li class="ps-3 border-l-2 border-sky-950 hover:border-sky-400 transition ease-in-out duration-400">
                                    <a href="#" class="p-2 w-100 flex items-center gap-3 text-slate-400 hover:text-sky-400">
                                        <div class="p-2 rounded-lg bg-slate-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m6.75 7.5 3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0 0 21 18V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v12a2.25 2.25 0 0 0 2.25 2.25Z" />
                                            </svg>  
                                        </div>                                                                        
                                        <span class="text-xs uppercase">Terminal</span>
                                    </a>
                                </li>
                                <li class="ps-3 border-l-2 border-sky-950 hover:border-sky-400 transition ease-in-out duration-400">
                                    <a href="#" class="p-2 w-100 flex items-center gap-3 text-slate-400 hover:text-sky-400">
                                        <div class="p-2 rounded-lg bg-slate-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                                            </svg>
                                        </div>                                                                                                                 
                                        <span class="text-xs uppercase">Sign Out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content w-3/4">
                <div class="navbar sticky top-0 flex items-center justify-between bg-white w-50 py-4 px-5 z-100">
                    <div class="greetings">
                        <h5 class="text-xl font-medium">Dashboard</h5>
                    </div>
                    <div class="menu pe-4 flex items-center gap-10">
                        <ul class="list inline-flex items-center gap-5">
                            <li class="relative before:absolute before:right-0 before:top-1/4 before:h-1.5 before:w-1.5 before:-translate-y-1 before:rounded-full before:bg-sky-500">
                                <a href="#" class="block p-2 bg-slate-200 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                                    </svg>
                                </a>
                            </li>
                            <li class="relative before:absolute before:right-0 before:top-1/4 before:h-1.5 before:w-1.5 before:-translate-y-1 before:rounded-full before:bg-sky-500">
                                <a href="#" class="block p-2 bg-slate-200 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="relative before:absolute before:right-0 before:top-1/4 before:h-1.5 before:w-1.5 before:-translate-y-1 before:rounded-full before:bg-sky-500">
                                <a href="#" class="block p-2 bg-slate-200 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <img src="{{asset('images/avatar.jpg')}}" alt="" srcset="" class="w-10 rounded-lg">
                                    <div class="block ms-3 cursor-pointer">
                                        <p class="m-0 text-xs font-medium flex items-center gap-1">
                                            John Doe
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                                </svg>
                                            </span>
                                        </p>
                                        <p class="text-xs font-medium text-slate-900">@john23</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="px-5">
                    <div class="overview grid grid-cols-4 gap-4 mt-5">
                        <div class="col-span-3">
                           <div>
                                <nav class="text-xs font-medium mb-2">
                                    <ol class="list-none p-0 inline-flex">
                                        <li class="flex items-center">
                                            <a href="#" class="text-gray-500">Dashboard</a>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </li>
                                        <li class="flex items-center">
                                            <span class="text-gray-900">Home</span>
                                        </li>
                                    </ol>
                                </nav>
                                <h1 class="text-3xl font-semibold">Good Evening, Carl!</h1>
                                <p class="text-sm font-medium mt-1 text-slate-900">Here's the latest updates.</p>
                           </div>
                           <div class="grid grid-cols-4 gap-4 mt-5">
                                <div class="col-span-1 bg-orange-800 rounded-md text-slate-50">
                                    <div class="p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                                        </svg>
                                        <h3 class="text-xl mt-2 font-medium">20+</h3>
                                        <div class="flex items-center justify-between">
                                            <p class="text-sm font-semibold">Projects</p>
                                            <span class="mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-1 bg-yellow-800 rounded-md text-slate-50">
                                    <div class="p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                                        </svg>
                                        <h3 class="text-xl mt-2 font-medium">20+</h3>
                                        <div class="flex items-center justify-between">
                                            <p class="text-sm font-semibold">Visitors</p>
                                            <span class="mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-1 bg-red-800 rounded-md text-slate-50">
                                    <div class="p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672Zm-7.518-.267A8.25 8.25 0 1 1 20.25 10.5M8.288 14.212A5.25 5.25 0 1 1 17.25 10.5" />
                                        </svg>                                  
                                        <h3 class="text-xl mt-2 font-medium">5</h3>
                                        <div class="flex items-center justify-between">
                                            <p class="text-sm font-semibold">Socials</p>
                                            <span class="mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-1 bg-lime-800 rounded-md text-slate-50">
                                    <div class="p-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75 16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                                        </svg>                                                                 
                                        <h3 class="text-xl mt-2 font-medium">5</h3>
                                        <div class="flex items-center justify-between">
                                            <p class="text-sm font-semibold">Certificates</p>
                                            <span class="mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                           </div>
                           <div class="performance mt-12 bg-slate-100 p-3">
                                <div id="performance-chart" class="mt-5"></div>
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="grid grid-cols-1 gap-4">
                                <div class="col-span-1 bg-slate-100 p-4">
                                    <h5 class="text-xs font-medium">Recent Activities</h5>
                                    <hr class="mt-2">
                                    <ul class="list mt-3">
                                        <li class="flex items-center gap-3 mb-2">
                                            <div class="p-1 bg-gray-400 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-800">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                                                </svg>
                                            </div>
                                            <h5 class="text-xs font-base text-gray-600 line-clamp-2">@john23 logged in</h5>
                                        </li>
                                        <li class="flex items-center gap-3 mb-2">
                                            <div class="p-1 bg-gray-400 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-800">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                                </svg>                                                  
                                            </div>
                                            <h5 class="text-xs font-base text-gray-600 line-clamp-2">@john23 added a new admin</h5>
                                        </li>
                                        <li class="flex items-center gap-3 mb-2">
                                            <div class="p-1 bg-gray-400 rounded-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-800">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                                                </svg>                                                  
                                            </div>
                                            <h5 class="text-xs font-base text-gray-600 line-clamp-2">@john23 logged out</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>