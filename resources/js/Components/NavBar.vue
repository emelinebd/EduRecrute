<script setup>
import {Link, router, usePage} from '@inertiajs/vue3';  // Importation de usePage
import AuthenticationCardLogo from "@/Components/AuthenticationCardLogo.vue"; // Pour gérer les liens avec Inertia
import SearchBar from "@/Components/SearchBar.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import Dropdown from "@/Components/Dropdown.vue";
import {ref} from "vue";

// Utilisation de usePage pour accéder à $page
const {props} = usePage();
const user = props.auth.user || null;  // Accès sécurisé à auth.user

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <nav class="text-custom-gray shadow-lg p-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex space-x-6">
                <AuthenticationCardLogo/>
                <SearchBar/>
            </div>
            <div class="flex space-x-4">
                <Link :href="'/about'" class="hover:text-gray-400">Accueil</Link>
                <Link :href="'/ecole'" class="hover:text-gray-400">Ecoles</Link>
                <Link :href="'/intervenant'" class="hover:text-gray-400">Intervenants</Link>
                <Link :href="'/messagerie'" class="hover:text-gray-400">Messagerie</Link>
                <Link :href="'/notification'" class="hover:text-gray-400">Notifications</Link>

                <!-- Vérification si l'utilisateur est connecté pour afficher Se connecter / S'inscrire -->
                <div v-if="!user">
                    <Link :href="'/login'" class="hover:text-gray-400">Se connecter</Link>
                    <Link :href="'/register'" class="hover:text-gray-400">S'inscrire</Link>
                </div>

                <!-- Menu déroulant lorsque l'utilisateur est connecté -->
                <div v-if="user" class="hidden sm:flex sm:items-center sm:ms-6">
                    <div class="ms-3 relative">

                        <!-- Dropdown pour l'équipe -->
                        <Dropdown v-if="props.jetstream.hasTeamFeatures && user.current_team" align="right" width="60">
                            <template #trigger>
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ user.current_team.name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"/>
                                        </svg>
                                    </button>
                                </span>
                            </template>

                            <template #content>
                                <div class="w-60">

                                    <DropdownLink :href="route('teams.show', user.current_team)">
                                        Paramètres d'équipe
                                    </DropdownLink>

                                    <DropdownLink v-if="props.jetstream.canCreateTeams" :href="route('teams.create')">
                                        Créer une nouvelle équipe
                                    </DropdownLink>

                                    <!-- Switcher d'équipe -->
                                    <template v-if="user.all_teams.length > 1">
                                        <div class="border-t border-gray-200"/>

                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            Changer d'équipe
                                        </div>

                                        <template v-for="team in user.all_teams" :key="team.id">
                                            <form @submit.prevent="switchToTeam(team)">
                                                <DropdownLink as="button">
                                                    <div class="flex items-center">
                                                        <svg v-if="team.id == user.current_team_id"
                                                             class="me-2 h-5 w-5 text-green-400"
                                                             xmlns="http://www.w3.org/2000/svg" fill="none"
                                                             viewBox="0 0 24 24" stroke-width="1.5"
                                                             stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                        </svg>

                                                        <div>{{ team.name }}</div>
                                                    </div>
                                                </DropdownLink>
                                            </form>
                                        </template>
                                    </template>
                                </div>
                            </template>
                        </Dropdown>
                    </div>

                    <!-- Dropdown pour le profil de l'utilisateur -->
                    <div class="ms-3 relative">
                        <Dropdown align="right" width="48">
                            <template #trigger>
                                <button v-if="user.profile_photo_url"
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" :src="user.profile_photo_url"
                                         :alt="user.name"/>
                                </button>

                                <span v-else class="inline-flex rounded-md">
                                    <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ user.name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                        </svg>
                                    </button>
                                </span>
                            </template>

                            <template #content>

                                <DropdownLink :href="route('profile.show')">
                                    Profil
                                </DropdownLink>

                                <DropdownLink v-if="props.jetstream.hasApiFeatures" :href="route('api-tokens.index')">
                                    Jetons API
                                </DropdownLink>

                                <div class="border-t border-gray-200"/>

                                <!-- Déconnexion -->
                                <form @submit.prevent="logout">
                                    <DropdownLink as="button">
                                        Se déconnecter
                                    </DropdownLink>
                                </form>
                            </template>
                        </Dropdown>
                    </div>
                </div>

            </div>
        </div>
    </nav>
</template>

<style scoped>
</style>
