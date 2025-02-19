<script setup>
import Navbar from '@/Components/NavBar.vue';
import Footer from '@/Components/Footer.vue';
import TeacherCard from "@/Components/TeacherCard.vue";
import { Head, Link } from '@inertiajs/vue3';

import { defineProps } from 'vue';

// Vérification des props
const props = defineProps({
    teachers: Array
});
console.log(props.teachers); // Pour vérifier les données reçues
</script>

<template>

    <Navbar />

    <div class="container mx-auto py-6 px-4">
        <h1 class="text-3xl font-bold text-center mb-8 text-2xl md:text-3xl lg:text-4xl">Enseignants</h1>
        <div v-if="teachers && teachers.length > 0" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <TeacherCard
                v-for="teacher in teachers"
                :key="teacher.id"
                :teacher="teacher"
            />
        </div>
        <!-- Message si aucun enseignant n'est trouvé -->
        <div v-else class="text-center text-gray-500 mt-4">
            Aucun enseignant trouvé.
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
