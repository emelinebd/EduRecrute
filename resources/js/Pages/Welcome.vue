<script setup>
import Navbar from '@/Components/NavBar.vue';
import Footer from '@/Components/Footer.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});


</script>

<template>

    <Navbar />


    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center bg-white dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div>
            <div class="mt-16">
                <div id="section1" class="px-4 sm:px-8 md:px-16 lg:px-24 mb-12 flex flex-col lg:flex-row items-center justify-between min-h-screen space-y-6 lg:space-y-0 lg:space-x-12">
                    <div class="text-center flex-1 flex justify-center items-center">
                        <img src="/images/imgGauche.png" alt="imgGauche" class="max-w-full h-auto object-contain">
                    </div>
                    <div class="content text-center lg:text-left flex-1">
                        <h2 class="text-2xl font-bold text-gray-800">Edurecrute</h2>
                        <h1 class="text-4xl lg:text-6xl font-extrabold text-gray-900 leading-snug mt-8">
                            Semez l'éducation,<br /> récoltez l'avenir!
                        </h1>
                        <p class="text-gray-600 text-2xl mt-8">
                            EduRecrute connecte les intervenants et les professeurs avec les établissements privés pour un enseignement enrichissant.
                        </p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-8">
                            <div class="flex items-center space-x-3">
                                <img src="/icons/partenaires.svg" alt="Partenaires" class="w-6 h-6" />
                                <span class="text-gray-700 text-base font-medium">11000 Partenaires</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <img src="/icons/intervenant.svg" alt="Intervenants" class="w-6 h-6" />
                                <span class="text-gray-700 text-base font-medium">11 000 Intervenants</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <img src="/icons/prof.svg" alt="Professeurs" class="w-6 h-6" />
                                <span class="text-gray-700 text-base font-medium">9000 Professeurs</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <img src="/icons/contrats.svg" alt="Contractuels" class="w-6 h-6" />
                                <span class="text-gray-700 text-base font-medium">+3000 Contractuels</span>
                            </div>
                        </div>
                        <div class="flex justify-center lg:justify-start mt-6">
                            <a class="bg-cerise text-white w-full max-w-[200px] h-12 rounded-full hover:bg-cerise p-3 text-center">
                                Commencer
                            </a>
                        </div>
                    </div>
                </div>
                <div id="section2" class="px-6 sm:px-12 lg:px-[100px] pt-12 sm:pt-[83px] bg-[url('/images/arriereplansection2.svg')] bg-cover">
                    <h2 class="text-center text-3xl sm:text-3xl font-medium">
                        Recrutement Éducatif Simplifié : Connectez-vous aux Bonnes Opportunités !
                    </h2>
                    <p class="text-base sm:text-lg pt-2">
                        Que vous soyez un établissement scolaire privé cherchant à recruter des enseignants qualifiés ou un professeur en quête d’un emploi dans l’éducation privée, EduRecrute vous facilite la mise en relation.
                    </p>
                    <div id="etablissement" class="flex flex-col-reverse lg:flex-row justify-between items-center mt-10 sm:mt-[44px] p-6 sm:p-20 pb-0">
                        <div class="content flex-1 text-center lg:text-left">
                            <h3 class="font-medium text-2xl sm:text-4xl mb-4 sm:mb-8">Un établissement</h3>
                            <p class="text-base sm:text-lg">
                                Trouver des enseignants compétents peut être un défi. EduRecrute vous permet de recruter plus rapidement grâce à :
                                Une base de candidats qualifiés : Professeurs, intervenants et formateurs prêts à enseigner.
                                Un système de sélection efficace : Évaluation des compétences pédagogiques pour un recrutement optimisé.
                                Un gain de temps considérable : Accédez à des profils correspondant à vos critères en quelques clics.
                                Recrutez les meilleurs talents dès aujourd’hui !
                            </p>
                        </div>
                        <div class="img flex-1 flex justify-center lg:justify-end">
                            <img src="/images/etablissement.png" alt="établissement" class="max-w-full h-auto w-[80%] sm:w-[60%] lg:w-auto">
                        </div>
                    </div>

                    <div id="intervenant" class="flex flex-col lg:flex-row justify-between items-center mt-6 sm:mt-[12px] p-6 sm:p-20">
                        <div class="img flex-1 flex justify-center lg:justify-start">
                            <img src="/images/intervenant.png" alt="intervenant" class="max-w-full h-auto w-[80%] sm:w-[60%] lg:w-auto">
                        </div>
                        <div class="content flex-1 text-center lg:text-right">
                            <h3 class="font-medium text-2xl sm:text-4xl mb-4 sm:mb-8">Un intervenant</h3>
                            <p class="text-base sm:text-lg">
                                Vous souhaitez enseigner dans un établissement privé mais ne trouvez pas d’offres adaptées ? EduRecrute vous aide à décrocher un emploi rapidement !
                                Nos avantages pour les enseignants :
                                Offres d’emploi ciblées selon votre spécialité et votre expérience.
                                Mise en relation rapide avec des établissements à la recherche de votre profil.
                                Accompagnement personnalisé pour maximiser vos chances de recrutement.
                                Boostez votre carrière dans l’enseignement privé !
                            </p>
                        </div>
                    </div>
                </div>
                <div id="section3" class="px-6 sm:px-12 lg:px-[100px] mt-6">
                    <h2 class="text-center text-3xl sm:text-5xl font-medium">Pourquoi nous choisir ?</h2>
                    <p class="text-gray-600 text-lg sm:text-2xl mt-6 sm:mt-8 text-center">
                        Professeur, intervenant, professionnel, chef d’établissement ou responsable <br class="hidden sm:block"/> pédagogique : nous sommes faits pour vous !
                    </p>

                    <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="flex flex-col items-center p-6 sm:p-8 bg-bleu-background border-2 border-solid border-opa-bleu rounded-tr-3xl rounded-bl-3xl text-center space-y-4">
                            <img src="/images/chapeau.svg" alt="icoChapeau" class="w-20 sm:w-32 h-auto">
                            <p class="text-xl sm:text-2xl font-bold">Engagement envers l'Excellence Éducative</p>
                            <p class="text-base sm:text-lg">
                                Nous sélectionnons uniquement des enseignants qualifiés, compétents et motivés pour offrir un enseignement de qualité.
                                <br />
                                Évaluation des compétences pédagogiques avant chaque recrutement.
                                <br />
                                Des profils adaptés aux besoins des établissements privés.
                                <br />
                                Un processus de recrutement simplifié et optimisé.                            </p>
                            <a class="bg-opa-bleu text-white w-[160px] sm:w-[200px] h-[45px] sm:h-[50px] rounded-full hover:bg-bleu p-3 text-center">
                                En savoir plus
                            </a>
                        </div>
                        <div class="flex flex-col items-center p-6 sm:p-8 bg-orange-background border-2 border-solid border-opa-orange rounded-tl-3xl rounded-br-3xl text-center space-y-4">
                            <img src="/images/discu.svg" alt="icoDiscu" class="w-20 sm:w-32 h-auto">
                            <p class="text-xl sm:text-2xl font-bold">Suivi continu</p>
                            <p class="text-base sm:text-lg">
                                EduRecrute soutient les enseignants et les établissements tout au long du processus de recrutement pour garantir une intégration réussie.
                                <br />
                                Coaching & conseils pour aider les enseignants à décrocher un poste.
                                <br />
                                Outils de gestion pour faciliter le recrutement et l’intégration des nouveaux enseignants.
                                <br />
                                Évaluation continue pour assurer un enseignement efficace et performant                            </p>
                            <a class="bg-opa-orange text-white w-[160px] sm:w-[200px] h-[45px] sm:h-[50px] rounded-full hover:bg-orange p-3 text-center">
                                En savoir plus
                            </a>
                        </div>
                        <div class="flex flex-col items-center p-6 sm:p-8 bg-menthe-background border-2 border-solid border-opa-menthe rounded-tr-3xl rounded-bl-3xl text-center space-y-4">
                            <img src="/images/heure.svg" alt="icoheure" class="w-20 sm:w-32 h-auto">
                            <p class="text-xl sm:text-2xl font-bold">Connexion rapide aux écoles</p>
                            <p class="text-base sm:text-lg">
                                Nous connectons instantanément les établissements scolaires privés avec des professeurs qualifiés, réduisant ainsi les délais de recrutement.
                                <br />
                                Plateforme intuitive pour une mise en relation en quelques clics.
                                <br />
                                Base de données d’enseignants qualifiés et disponibles immédiatement.
                                <br />
                                Gagnez du temps et améliorez la gestion de votre établissement.                            </p>
                            <a class="bg-opa-menthe text-white w-[160px] sm:w-[200px] h-[45px] sm:h-[50px] rounded-full hover:bg-menthe p-3 text-center">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                </div>
                <div id="section4" class="mt-12">
                    <!-- <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                        <img src="/images/bandeauvert.svg" alt="Bandeau Vert" class="max-w-full sm:max-w-[48%] h-auto">
                        <img src="/images/bandeauRose.svg" alt="Bandeau Rose" class="max-w-full sm:max-w-[48%] h-auto">
                    </div> -->
                    <div id="section4" class="mt-[100px]">
                        <img src="/images/bandeauvert.svg" alt="bandeauVert" class="max-w-full h-auto">
                        <img src="/images/bandeauRose.svg" alt="bandeauRose" class="max-w-full h-auto">
                    </div>
                </div>
                <div id="section5" class="px-6 sm:px-12 lg:px-[100px] mt-12 mb-12">
                    <h3 class="text-center text-2xl sm:text-3xl font-semibold">Ils nous recommandent</h3>
                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-opa-cerise p-6 rounded-tr-3xl rounded-bl-3xl text-center space-y-3">
                            <p class="text-lg font-semibold">Skema Business School</p>
                            <img src="/images/etoiles.svg" alt="Avis 5 étoiles" class="w-24 mx-auto">
                            <p class="text-base">
                                Grâce à EduRecrute, nous avons révolutionné notre processus de recrutement d'enseignants...
                            </p>
                        </div>
                        <div class="bg-opa-cerise p-6 rounded-tr-3xl rounded-bl-3xl text-center space-y-3">
                            <p class="text-lg font-semibold">Jean-Paul Bard (intervenant science)</p>
                            <img src="/images/etoiles.svg" alt="Avis 5 étoiles" class="w-24 mx-auto">
                            <p class="text-base">
                                Collaborer avec EduRecrute a été une expérience exceptionnelle. Leur expertise dans le recrutement...
                            </p>
                        </div>
                        <div class="bg-opa-cerise p-6 rounded-tr-3xl rounded-bl-3xl text-center space-y-3">
                            <p class="text-lg font-semibold">My Digital School</p>
                            <img src="/images/etoiles.svg" alt="Avis 5 étoiles" class="w-24 mx-auto">
                            <p class="text-base">
                                EduRecrute a été un partenaire clé dans notre recherche de formateurs experts en digital...
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <Footer />
 </template>

 <style>
 .bg-dots-darker {
     background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
 }
 @media (prefers-color-scheme: dark) {
     .dark\:bg-dots-lighter {
         background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
     }
 }
 </style>
