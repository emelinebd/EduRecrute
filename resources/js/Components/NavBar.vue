<script setup>
    import {Link} from '@inertiajs/vue3';
    import AuthenticationCardLogo from "@/Components/AuthenticationCardLogo.vue"; // Pour gérer les liens avec Inertia
    import SearchBar from "@/Components/SearchBar.vue"; // Pour gérer les liens avec Inertia
</script>

<template>
    <nav class="text-custom-gray shadow-lg p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex space-x-6">
                <AuthenticationCardLogo />
                <SearchBar />
            </div>
            <div class="flex space-x-4">
                <Link :href="'/about'" class="hover:text-gray-400">Accueil</Link>
                <Link :href="'/ecole'" class="hover:text-gray-400">Ecoles</Link>
                <Link :href="'/intervenant'" class="hover:text-gray-400">Intervenants</Link>
                <Link :href="'/messagerie'" class="hover:text-gray-400">Messagerie</Link>
                <Link :href="'/notification'" class="hover:text-gray-400">Notifications</Link>
                <Link :href="'/login'" class="hover:text-gray-400">Login</Link>
            </div>
        </div>
    </nav>
</template>

<style scoped>

</style>
