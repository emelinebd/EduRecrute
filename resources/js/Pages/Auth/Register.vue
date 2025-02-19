<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import Navbar from "@/Components/NavBar.vue";
import Footer from "@/Components/Footer.vue";

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
    role: 'teacher', // Valeur par défaut
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Register" />
    <Navbar />

    <AuthenticationCard>

        <div class="p-16">
            <div class="flex space-x-8">
                <!-- Bouton Connexion -->
                <Link :href="'/login'"
                      class="relative px-6 py-2 font-semibold text-[28px] text-cerise rounded-full bg-white">
                    Connexion
                </Link>


                <!-- Bouton Inscription -->
                <Link :href="'/register'" class="relative px-6 py-2 font-semibold text-[28px] text-orange rounded-full bg-orange-background">
                    Inscription
                </Link>
            </div>

            <form @submit.prevent="submit">
                <div class="mt-4">
                    <InputLabel for="role" value="Coordonnées" />
                    <TextInput
                        id="name"
                        v-model="form.name"
                        type="text"
                        class="mt-1 block w-full"
                        required
                        autofocus
                        autocomplete="name"
                        placeholder="Nom"
                    />
                    <InputError class="mt-2" :message="form.errors.name" />
                </div>

                <div class="mt-4">
                    <TextInput
                        id="email"
                        v-model="form.email"
                        type="email"
                        class="mt-1 block w-full"
                        required
                        autocomplete="username"
                        placeholder="Email"
                    />
                    <InputError class="mt-2" :message="form.errors.email" />
                </div>

                <div class="mt-4">
                    <TextInput
                        id="password"
                        v-model="form.password"
                        type="password"
                        class="mt-1 block w-full"
                        required
                        autocomplete="new-password"
                        placeholder="Mot de passe"
                    />
                    <InputError class="mt-2" :message="form.errors.password" />
                </div>

                <div class="mt-4">
                    <TextInput
                        id="password_confirmation"
                        v-model="form.password_confirmation"
                        type="password"
                        class="mt-1 block w-full"
                        required
                        autocomplete="new-password"
                        placeholder="Confirmer le mot de passe"
                    />
                    <InputError class="mt-2" :message="form.errors.password_confirmation" />
                </div>

                <div class="mt-6">
                    <InputLabel for="role" value="Type de profil" />
                    <select
                        id="role"
                        v-model="form.role"
                        required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                    >
                        <option value="teacher">Enseignant</option>
                        <option value="establishment">Établissement</option>
                    </select>
                    <InputError class="mt-2" :message="form.errors.role" />
                </div>

                <div v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature" class="mt-4">
                    <InputLabel for="terms">
                        <div class="flex items-center">
                            <Checkbox id="terms" v-model:checked="form.terms" name="terms" required />
                            <div class="ms-2">
                                J'accepte les <a target="_blank" :href="route('terms.show')" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Conditions d'utilisation</a> et la <a target="_blank" :href="route('policy.show')" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Politique de confidentialité</a>
                            </div>
                        </div>
                        <InputError class="mt-2" :message="form.errors.terms" />
                    </InputLabel>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        S'inscrire
                    </PrimaryButton>
                </div>
                <div class="flex items-center justify-center mt-4">
                    <Link :href="route('login')" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Déjà inscrit ? Se connecter
                    </Link>
                </div>
            </form>
        </div>
    </AuthenticationCard>
    <Footer />
</template>
