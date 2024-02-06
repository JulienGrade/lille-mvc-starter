<nav class="bg-gray-800">
    <div class="container mx-auto px-6 py-3 lg:flex lg:justify-between lg:items-center">
        <!-- Bouton de menu hamburger pour mobile -->
        <button id="menuButton" class="text-white focus:outline-none lg:hidden" type="button">
            <!-- Icône de menu hamburger -->
            <svg class="w-6 h-6" fill="none" stroke="currentColor"
                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Menu principal -->
        <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="mobileMenu">
            <ul class="lg:flex items-center justify-between text-base text-white pt-4 lg:pt-0">
                <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent lg:border-none hover:border-indigo-400" href="<?= URL ?>accueil">Accueil</a></li>
                <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent lg:border-none hover:border-indigo-400" href="<?= URL ?>page1">Page1</a></li>
                <li class="relative">
                    <button id="dropdownButton" class="lg:p-4 py-3 px-0 block border-b-2 border-transparent lg:border-none hover:border-indigo-400">
                        Liste déroulante
                    </button>
                    <ul id="dropdownMenu" class="absolute hidden text-gray-700 pt-1">
                        <li><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="<?= URL ?>page2">Page2</a></li>
                        <li><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="<?= URL ?>page3">Page3</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>



