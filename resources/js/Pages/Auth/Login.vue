<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import Navbar from '@/Components/NavBar.vue';
import Footer from "@/Components/Footer.vue";


defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Navbar />
    <Head title="Se connecter" />

    <AuthenticationCard>

        <div class="p-16">
            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                {{ status }}
            </div>

            <div class="flex space-x-8">
                <!-- Bouton Connexion -->
                <Link :href="'/login'"
                      class="relative px-6 py-2 font-semibold text-[28px] text-cerise rounded-full bg-cerise-background">
                    Connexion
                </Link>


                <!-- Bouton Inscription -->
                <Link :href="'/register'" class="relative px-6 py-2 font-semibold text-[28px] text-orange rounded-full bg-white">
                    Inscription
                </Link>
            </div>

            <form @submit.prevent="submit" class="mt-12">
                <div>
                    <!-- <InputLabel for="email" value="Email" /> -->
                    <TextInput
                        id="email"
                        v-model="form.email"
                        type="email"
                        class="mt-1 block w-full bg-gris-bg-input"
                        required
                        autofocus
                        autocomplete="username"
                        placeholder="Email"
                    />
                    <InputError class="mt-2" :message="form.errors.email" />
                </div>

                <div class="mt-4">
                    <!-- <InputLabel for="password" value="Mot de passe" /> -->
                    <TextInput
                        id="password"
                        v-model="form.password"
                        type="password"
                        class="mt-1 block w-full bg-gris-bg-input"
                        required
                        autocomplete="current-password"
                        placeholder="Mot de passe"
                    />
                    <InputError class="mt-2" :message="form.errors.password" />
                </div>

                <div class="block mt-4">
                    <label class="flex items-center">
                        <Checkbox v-model:checked="form.remember" name="remember" />
                        <span class="ms-2 text-sm text-gray-600">Se souvenir de moi</span>
                    </label>
                </div>

                <div class="block mt-4">
                    <PrimaryButton class="" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Se connecter
                    </PrimaryButton>
                </div>

                <div class="flex items-center justify-center mt-4">
                    <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Mot de passe oublié ?
                    </Link>


                </div>
            </form>
        </div>

    </AuthenticationCard>
    <Footer />
</template>
