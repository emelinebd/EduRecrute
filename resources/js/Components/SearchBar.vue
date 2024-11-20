<script setup>
import { ref } from 'vue';

// Define a reactive variable for the search query
const query = ref('');

// Handle search logic (could trigger a function or call API)
const search = () => {
    // You can use Inertia.js to make a request to a backend route or filter data.
    console.log("Searching for:", query.value);

    // Example: Trigger an Inertia visit or use an API to filter data
    // Inertia.visit(route('search.results', { query: query.value }));
};
</script>

<template>
    <div class="relative w-full max-w-sm">
        <!-- Champ de recherche avec une icône à l'intérieur -->
        <input
            type="text"
            v-model="searchQuery"
            @keyup.enter="search"
            placeholder="Search..."
            class="w-full py-2 pl-10 pr-4 border-none rounded-lg bg-yellow focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
        <!-- Icône de recherche à l'intérieur du champ -->
        <i
            class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"
            aria-hidden="true"
        ></i>
    </div>
</template>

<style scoped>

</style>
