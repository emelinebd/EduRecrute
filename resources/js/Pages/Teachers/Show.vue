<script setup>
import { defineProps } from 'vue';
import Navbar from "@/Components/NavBar.vue";
import Footer from "@/Components/Footer.vue";
import {Link} from "@inertiajs/vue3";

defineProps({
    teacher: Object
});

// Mapping des couleurs associées à chaque compétence
const skillColors = {
    "UX design": "border-cerise text-cerise",
    "UI design": "border-fushia text-fushia",
    "Product designer": "border-bleu text-bleu",
    "Design system": "border-menthe text-menthe",
};

// Fonction pour récupérer la classe associée à une compétence
const getSkillColor = (skill) => {
    return skillColors[skill] || "border-gray border-2 text-gray-600"; // Couleur par défaut si la compétence n'a pas de couleur associée
};

</script>

<template>
    <Navbar />
    <div class="p-6">
        <div class="flex">
            <img :src="`/images/teachers/${teacher.imgProfil}`" alt="Photo du Professeur" class="">
            <div class="ml-4 w-full">
                <div class="flex justify-between">
                    <h1 class="text-3xl font-bold">{{ teacher.name }}</h1>
                    <Link :href="'/'" class="bg-cerise text-white rounded-full p-2 hover:bg-bleu">Me contacter</Link>
                </div>
                <div>
                    <div class="mt-8 mb-8 flex flex-start gap-4">
                    <span
                        v-for="(skill, index) in teacher.skillsPro"
                        :key="index"
                        class="text-sm text-center border-2 rounded-full px-3 py-1"
                        :class="getSkillColor(skill)"
                    >
                        {{ skill }}
                    </span>
                    </div>
                </div>
                <div class="p-5 mt-8 mb-8 flex justify-around gap-4 border-2 border-solid border-orange rounded-tr-3xl rounded-bl-3xl text-center">
                    <div>
                        <p>Expérience</p>
                        <p>{{ teacher.experience}}</p>
                    </div>
                    <div>
                        <p>Localisation</p>
                        <p>{{ teacher.location}}</p>
                    </div>
                    <div>
                        <p>Heures de cours</p>
                        <p>{{ teacher.clasHour}}</p>
                    </div>
                    <div>
                        <p>Etablissement</p>
                        <p>{{ teacher.numberEtablishment}}</p>
                    </div>
                </div>


                <p class="text-lg">{{ teacher.email }}</p>
                <p class="text-lg">{{ teacher.phone }}</p>
            </div>

        </div>
        <h1 class="text-3xl font-bold">{{ teacher.expertise }}</h1>
        <p class="mt-4">{{ teacher.bio }}</p>
    </div>
    <Footer />
</template>


