<script setup>
import { Link } from '@inertiajs/vue3';
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
    <div class="teacher bg-white rounded-bl border-2 rounded-tr-3xl " style="width: 295px; border-top-right-radius: 3.5rem; border-bottom-left-radius: 3.5rem;">
        <Link :href="`/teachers/${teacher.id}`">
            <div class="imageTeacher">
                <img
                    :src="`/images/teachers/${teacher.image}`"
                    alt="Teacher Photo"
                    class="rounded-tr-3xl"
                    style="border-top-right-radius: 3.5rem;"
                />
            </div>
            <div class="contentTeacher bg-white rounded-bl" style="border-bottom-left-radius: 3.5rem;">
                <div style="margin: 32px 3px;">
                <span v-for="star in 5" :key="star">
                    <i class="fas" :class="star <= teacher.rating ? 'fa-star' : 'fa-star-half-alt'"></i>
                </span>
                    <span>5 (684 avis) Bac +5 </span>
                    <div class="mt-4 grid grid-cols-2 gap-2">
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
            </div>
        </Link>
    </div>
</template>

<style scoped>

</style>
