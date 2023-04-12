<header>
    <div class="container mx-auto flex flex-wrap p-20 flex-col md:flex-row items-center">
        <a href="?page=<?php echo PAGE_HOME; ?>" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <img class="h-28" src="../assets/images/logo.svg" alt="aaa">
        </a>
        <nav class=" md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center uppercase hidden 2xl:block ">
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-gray-900  uppercase rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center " type="button">Cours <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>

            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-black" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="" class="block px-4 py-2 hover:text-orange-200 hover:bg-gray-100">TERRE</a>
                    </li>
                    <li>
                        <a href="" class="block px-4 py-2 hover:text-red-200 hover:bg-gray-100">FEU</a>
                    </li>
                    <li>
                        <a href="" class="block px-4 py-2 hover:text-cyan-200 hover:bg-gray-100">EAU</a>
                    </li>
                    <li>
                        <a href="" class="block px-4 py-2 hover:text-gray-200 hover:bg-gray-100">AIR</a>
                    </li>
                </ul>
            </div>
            <a href="?page=<?php echo PAGE_PACK; ?>" class="mr-5 hover:text-gray-900">Packs</a>
            <a href="#" class="mr-5 hover:text-gray-900">Contact</a>
            <a href="#" class="mr-5 hover:text-gray-900">Blog</a>
            <button type="button" class=" ml-52 text-white uppercase bg-black hover:bg-white hover:text-black hover:border-black  hover:border font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Inscription</button>
            <button type="button" class=" text-black border uppercase hover:bg-black hover:text-white font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Connexion</button>
        </nav>
        <button  class="text-black shadow z-40 font-medium rounded-lg text-3xl px-5 py-2.5 mr-2 mb-2 ml-auto 2xl:hidden fixed top-5 right-5" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
            <i class="fa-solid fa-bars"></i>
        </button>

    </div>
</header>

<div id="drawer-navigation" class="fixed top-0 left-0 z-40 w-full h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white bg-opacity-70 backdrop-blur"  tabindex="-1" aria-labelledby="drawer-navigation-label">
    <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center fixed" >
        <svg aria-hidden="true" class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
    <div class="py-4 overflow-y-auto text-center text-white">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="" class="flex items-center p-2 text-white rounded-lg">
                    <span class="flex-1 block box-border uppercase font-bold text-5xl drop-shadow-md">Accueil</span>
                </a>
            </li>
            <li >
                <button type="button" class=" mt-10 mx-auto flex items-center text-center p-2 text-black transition duration-75 rounded-lg group" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <span class="flex-1 uppercase font-light text-3xl text-neutral-100 drop-shadow-md whitespace-nowrap">Cours</span>
                    <svg class="w-6 h-6 text-neutral-200 drop-shadow-md" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <ul id="dropdown-example" class="hidden font-thin py-10 space-x-4 flex flex-row justify-center items-center">
                    <li>
                        <a href="" class="flex items-center w-full p-2 text-2xl text-white transition duration-75 rounded-lg group">TERRE</a>
                    </li>
                    <li>
                        <a href="" class="flex items-center w-full p-2 text-2xl text-white transition duration-75 rounded-lg  group">FEU</a>
                    </li>
                    <li>
                        <a href="" class="flex items-center w-full p-2 text-2xl text-white transition duration-75 rounded-lg  group">EAU</a>
                    </li>
                    <li>
                        <a href="" class="flex items-center w-full p-2 text-2xl text-white transition duration-75 rounded-lg group">AIR</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-black rounded-lg">
                    <span class="flex-1 whitespace-nowrap text-neutral-100 drop-shadow-md uppercase font-light text-3xl">Contact</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-black rounded-lg">
                    <span class="flex-1 whitespace-nowrap text-neutral-100 drop-shadow-md uppercase font-light text-3xl">Blog</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center mt-10 p-2 text-black rounded-lg">
                    <span class="flex-1 whitespace-nowrap text-neutral-100 drop-shadow-md uppercase font-light text-3xl">Inscription</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-black rounded-lg">
                    <span class="flex-1 whitespace-nowrap text-neutral-100 drop-shadow-md uppercase font-light text-3xl">Connexion</span>
                </a>
            </li>
        </ul>
    </div>
</div>
