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


    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center bg-white dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div>
             <div class="mt-16">
                 <div id="section1" class="pr-[100px] pl-[100px] mb-[50px] flex flex-col lg:flex-row items-center justify-evenly min-h-screen space-y-6 lg:space-y-0 lg:space-x-24 px-4">
                     <div class="text-center flex-1 flex justify-center items-center">
                         <img src="/images/imgGauche.png" alt="imgGauche" class="max-w-full h-auto">
                     </div>
                     <div class="content text-center lg:text-left flex-1">
                         <h2 class="text-2xl font-bold text-gray-800">Edurecrute</h2>
                         <h1 class="text-4xl lg:text-6xl font-extrabold text-gray-900 leading-snug mt-8">
                             Semez l'éducation,<br /> récoltez l'avenir!
                         </h1>
                         <p class="text-gray-600 text-2xl mt-8">
                             EduRecrute connecte les intervenants et les professeurs avec les établissements privés pour un enseignement enrichissant.
                         </p>
                         <div class="flex items-center justify-between mt-8">
                             <div class="grid grid-cols-2 gap-x-6 gap-y-4">
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
                                     <img src="/icons/contrats.svg" alt="Contractuels" class="w-6 h-6 text-blue-500" />
                                     <span class="text-gray-700 text-base font-medium">+3000 Contractuels</span>
                                 </div>
                             </div>
                         </div>
                         <div class="h-full flex items-center mt-6">
                             <a class="bg-cerise text-white w-[200px] h-[50px] rounded-full hover:bg-cerise p-3 text-center">
                                 Commencer
                             </a>
                         </div>
                     </div>
                 </div>
                 <div id="section2" class="pr-[100px] pl-[100px] mt-[25px] pt-[83px] bg-[url('/images/arriereplansection2.svg')] bg-cover">
                     <h2 class="text-center text-5xl font-medium">Adressez vous aux bons profils grâce à EduRecrute</h2>
                     <div id="etablissement" class="flex justify-evenly	items-center mt-[44px] p-20 pb-0">
                         <div class="content flex-1">
                             <h3 class="font-medium text-4xl mb-8">Un établissement</h3>
                             <p class="text-lg">Avide de transmettre vos connaissances, vous cherchez un emploi dans le domaine éducatif ? EduRectrute vous aide à trouver le job de vos rêves.</p>
                         </div>
                         <div class="img flex-1">
                             <img src="/images/etablissement.png" alt="etablissement" class="max-w-full h-auto">
                         </div>
                     </div>
                     <div id="intervenant" class="flex justify-evenly	items-center mt-[12px] p-20">
                         <div class="img flex-1">
                             <img src="/images/intervenant.png" alt="intervenant" class="max-w-full h-auto">
                         </div>
                         <div class="content flex-1 text-center lg:text-right">
                             <h3 class="font-medium text-4xl mb-8">Un intervenant</h3>
                             <p class="text-lg">Avide de transmettre vos connaissances, vous cherchez un emploi dans le domaine éducatif ? EduRectrute vous aide à trouver le job de vos rêves.</p>
                         </div>
                     </div>
                 </div>
                 <div id="section3" class="pr-[100px] pl-[100px] mt-6">
                     <h2 class="text-center text-5xl font-medium">Pourquoi nous choisir ?</h2>
                     <p class="text-gray-600 text-2xl mt-8 text-center">Professeur, intervenant, professionnel, chef d’établissement ou responsable <br/> pédagogique: nous sommes fait pour vous!</p>
                     <div class="flex mt-[86px] gap-x-5">
                         <div class="flex-1 flex flex-col items-center p-8 border-2 border-solid border-opa-bleu rounded-tr-3xl rounded-bl-3xl text-center space-y-4">
                             <img src="/images/chapeau.svg" alt="icoChapeau" class="w-32 h-auto">
                             <p class="text-2xl font-bold flex-grow">Engagement envers l'Excellence Éducative</p>
                             <p class="text-lg flex-grow">Avide de transmettre vos connaissances, vous cherchez un emploi dans le domaine éducatif ? EduRectrute vous aide à trouver le job de vos rêves.</p>
                             <a class="bg-opa-bleu text-white w-[200px] h-[50px] rounded-full hover:bg-bleu p-3 text-center">
                                 En savoir plus
                             </a>
                         </div>
                         <div class="flex-1 flex flex-col items-center p-8 border-2 border-solid border-opa-orange rounded-tl-3xl rounded-br-3xl text-center space-y-4">
                             <img src="/images/discu.svg" alt="icoDiscu" class="w-32 h-auto">
                             <p class="text-2xl font-bold flex-grow">Suivi continue</p>
                             <p class="text-lg flex-grow">EduRecrute soutient les enseignants après le recrutement pour une intégration et un enseignement réussis.</p>
                             <a class="bg-opa-orange text-white w-[200px] h-[50px] rounded-full hover:bg-orange p-3 text-center">
                                 En savoir plus
                             </a>
                         </div>
                         <div class="flex-1 flex flex-col items-center p-8 border-2 border-solid border-opa-menthe rounded-tr-3xl rounded-bl-3xl text-center space-y-4">
                             <img src="/images/heure.svg" alt="icoheure" class="w-32 h-auto">
                             <p class="text-2xl font-bold flex-grow">Engagement envers l'Excellence Éducative</p>
                             <p class="text-lg flex-grow">EduRecrute connecte rapidement les écoles et enseignants, afin de se concentrer sur les objectifs pédagogiques.</p>
                             <a class="bg-opa-menthe text-white w-[200px] h-[50px] rounded-full hover:bg-menthe p-3 text-center">
                                 En savoir plus
                             </a>
                         </div>
                     </div>
                 </div>
                 <div id="section4" class="mt-[100px]">
                     <img src="/images/bandeauvert.svg" alt="bandeauVert" class="max-w-full h-auto">
                     <img src="/images/bandeauRose.svg" alt="bandeauRose" class="max-w-full h-auto">
                 </div>
                 <div id="section5" class="pr-[100px] pl-[100px] mt-12">
                     <h3 class="text-center text-3xl">Ils nous recommandent</h3>
                     <div class="flex gap-x-5 mt-6">
                         <div class="flex-1 bg-opa-cerise p-6 rounded-tr-3xl rounded-bl-3xl">
                             <p>Skema business school</p>
                             <img src="/images/etoiles.svg" alt="etoile" class="max-w-full h-auto mt-2 mb-2">
                             <p>Grâce à EduRecrute, nous avons révolutionné notre processus de recrutement d'enseignants...</p>
                         </div>
                         <div class="flex-1 bg-opa-cerise p-6 rounded-tr-3xl rounded-bl-3xl">
                             <p>Jean-Paul Bard (intervenant science)</p>
                             <img src="/images/etoiles.svg" alt="etoile" class="max-w-full h-auto mt-2 mb-2">
                             <p>Collaborer avec EduRecrute a été une expérience exceptionnelle. Leur expertise dans le recrutement ...</p>
                         </div>
                         <div class="flex-1 bg-opa-cerise p-6 rounded-tr-3xl rounded-bl-3xl">
                             <p>My digital school</p>
                             <img src="/images/etoiles.svg" alt="etoile" class="max-w-full h-auto mt-2 mb-2">
                             <p>EduRecrute a été un partenaire clé dans notre recherche de formateurs experts en digital. Leur capacité à comprendre nos besoins spécifiques...</p>
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
