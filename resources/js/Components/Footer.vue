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
                    <form class="flex flex-col sm:flex-row items-center space-y-3 sm:space-y-0 sm:space-x-2">
                        <input
                            type="email"
                            placeholder="Inscrivez-vous à notre newsletter"
                            class="w-full sm:flex-grow px-4 py-2 border border-gray-300 rounded-md focus:outline-none"
                        />
                        <button
                            type="submit"
                            class="bg-gray-900 text-white px-4 py-2 rounded-md hover:bg-gray-700"
                        >
                            &gt;
                        </button>
                    </form>
                </div>

                <div id="reseaux">
                    <h4 class="font-bold text-lg mb-4">Suivez-nous !</h4>
                    <div class="flex justify-center sm:justify-start space-x-6 text-2xl">
                        <a href="#" class="text-gray-600 hover:text-gray-900">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-gray-900">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-gray-600 hover:text-gray-900">
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
        <div class="flex flex-col sm:flex-row justify-center sm:justify-end items-center mt-12 space-y-4 sm:space-y-0">
            <svg width="49" height="30" viewBox="0 0 49 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M49 0.100098H31.7V7.2001H49V0.100098ZM31.7 0.100098H24.5V29.4001H31.7H43.6V22.4001H31.7V18.4001H39.4V11.3001H31.7V0.100098Z" fill="#EF3062"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.2004 29.9V0.199951C22.3004 0.199951 6.90039 10.5 6.90039 10.5V19.6L22.2004 29.9Z" fill="#F4A500"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.2 11.6001L0 15.0001L5.2 18.5001V11.6001Z" fill="#6652FF"/>
            </svg>
            <p class="ml-2 text-lg font-medium">EduRecrute</p>
        </div>
    </footer>
</template>
