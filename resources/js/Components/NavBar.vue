<script setup>
import { Link, router, usePage } from "@inertiajs/vue3";
import AuthenticationCardLogo from "@/Components/AuthenticationCardLogo.vue";
import SearchBar from "@/Components/SearchBar.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import Dropdown from "@/Components/Dropdown.vue";
import { ref } from "vue";

const { props } = usePage();
const user = props.auth.user || null;
const showingNavigationDropdown = ref(false);
const isMenuOpen = ref(false); // État du menu pour mobile

const switchToTeam = (team) => {
    router.put(
        route("current-team.update"),
        { team_id: team.id },
        { preserveState: false }
    );
};

const logout = () => {
    router.post(route("logout"));
};
</script>

<template>
    <nav class="bg-white shadow-lg p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <!-- Logo + Search -->
            <div class="flex items-center space-x-6">
                <AuthenticationCardLogo />
                <SearchBar class="hidden md:block" />
            </div>

            <!-- Bouton menu mobile -->
            <button @click="isMenuOpen = !isMenuOpen" class="md:hidden p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path v-if="!isMenuOpen" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                    <path v-else stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Liens de navigation (Desktop) -->
            <div class="hidden md:flex space-x-4">
                <Link :href="'/'" class="hover:text-cerise">Accueil</Link>
                <Link :href="'/establishments'" class="hover:text-cerise">Écoles</Link>
                <Link :href="'/teachers'" class="hover:text-cerise">Intervenants</Link>
                <Link :href="'/messagerie'" class="hover:text-cerise">Messagerie</Link>

                <div v-if="!user">
                    <Link :href="'/login'" class="bg-cerise text-white rounded-full p-2 hover:bg-bleu">Se connecter</Link>
                    <!-- <Link :href="'/register'" class="hover:text-gray-400">S'inscrire</Link> -->
                </div>

                <!-- Profil Utilisateur (Desktop) -->
                <div v-if="user" class="flex items-center space-x-4">
                    <Dropdown align="right" width="48">
                        <template #trigger>
                            <button v-if="user.profile_photo_url" class="h-8 w-8 rounded-full overflow-hidden border">
                                <img class="h-full w-full object-cover" :src="user.profile_photo_url" :alt="user.name" />
                            </button>
                            <span v-else class="px-3 py-2 border rounded-md text-gray-500">{{ user.name }}</span>
                        </template>

                        <template #content>
                            <DropdownLink :href="route('profile.show')">Profil</DropdownLink>
                            <DropdownLink v-if="props.jetstream.hasApiFeatures" :href="route('api-tokens.index')">
                                Jetons API
                            </DropdownLink>
                            <div class="border-t border-gray-200" />
                            <form @submit.prevent="logout">
                                <DropdownLink as="button">Se déconnecter</DropdownLink>
                            </form>
                        </template>
                    </Dropdown>
                </div>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div v-if="isMenuOpen" class="md:hidden bg-white shadow-md mt-2 p-4 space-y-4">
            <Link :href="'/'" class="block hover:text-gray-400">Accueil</Link>
            <Link :href="'/establishments'" class="block hover:text-gray-400">Écoles</Link>
            <Link :href="'/teachers'" class="block hover:text-gray-400">Intervenants</Link>
            <Link :href="'/messagerie'" class="block hover:text-gray-400">Messagerie</Link>

            <div v-if="!user">
                <Link :href="'/login'" class="block hover:text-gray-400">Se connecter</Link>
                <!-- <Link :href="'/register'" class="block hover:text-gray-400">S'inscrire</Link> -->
            </div>

            <div v-if="user">
                <DropdownLink :href="route('profile.show')">Profil</DropdownLink>
                <DropdownLink v-if="props.jetstream.hasApiFeatures" :href="route('api-tokens.index')">
                    Jetons API
                </DropdownLink>
                <div class="border-t border-gray-200" />
                <form @submit.prevent="logout">
                    <DropdownLink as="button">Se déconnecter</DropdownLink>
                </form>
            </div>
        </div>
    </nav>
</template>

<style scoped>
</style>
