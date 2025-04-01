<script setup>
</script>

<template>
    <footer class="bg-yellow px-6 sm:px-12 lg:px-[100px] py-12">
        <div class="flex flex-wrap justify-between gap-x-8 text-gray-800">
            <div class="flex-[2] min-w-[150px] text-center sm:text-left">
                <div id="newsletter" class="mb-6">
                    <h4 class="font-bold text-lg mb-4">
                        Restez informé(e) : abonnez-vous maintenant !
                    </h4>
                    <form class="flex w-full max-w-md items-center space-x-2">
                        <input
                            type="email"
                            placeholder="Email"
                            class="flex-grow px-4 py-2 border border-gray-300 rounded-md focus:outline-none"
                        />
                        <button
                            type="submit"
                            class="bg-cerise text-white px-4 py-2 rounded-md hover:bg-bleu whitespace-nowrap"
                        >
                            Je m'abonne
                        </button>
                    </form>
                </div>

                <div id="reseaux">
                    <h4 class="font-bold text-lg mb-4">Suivez-nous !</h4>
                    <div class="flex justify-center sm:justify-start space-x-3 text-xl">
                        <a href="#" class="text-cerise hover:text-gray-900">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-cerise hover:text-gray-900">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-cerise hover:text-gray-900">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex-1 min-w-[150px] text-center sm:text-left">
                <h4 class="font-bold text-lg mb-4">Services</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-gray-900">Trouver mon poste</a></li>
                    <li><a href="#" class="hover:text-gray-900">Recruter</a></li>
                    <li><a href="#" class="hover:text-gray-900">Abonnement</a></li>
                </ul>
            </div>
            <div class="flex-1 min-w-[150px] text-center sm:text-left">
                <h4 class="font-bold text-lg mb-4">À propos</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-gray-900">Qui sommes-nous ?</a></li>
                    <li><a href="#" class="hover:text-gray-900">Nous contacter</a></li>
                    <li><a href="#" class="hover:text-gray-900">Mes retours</a></li>
                </ul>
            </div>
            <div class="flex-1 min-w-[150px] text-center sm:text-left">
                <h4 class="font-bold text-lg mb-4">Mentions légales</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-gray-900">Cookies</a></li>
                    <li><a href="#" class="hover:text-gray-900">CGU</a></li>
                    <li><a href="#" class="hover:text-gray-900">Politique de confidentialité</a></li>
                </ul>
            </div>
        </div>
    </footer>
</template>

