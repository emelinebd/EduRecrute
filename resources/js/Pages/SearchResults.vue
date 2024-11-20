<script setup>
defineProps({
    results: Array,
    query: String,
});
</script>

<template>
    <div>
        <h1 class="text-2xl mb-4">Search Results for "{{ query }}"</h1>
        <div v-if="results.length" class="space-y-4">
            <div v-for="result in results" :key="result.id" class="p-4 border rounded-md">
                <p>{{ result.name }}</p>
                <!-- Ajoute d'autres informations selon ton modèle -->
            </div>
        </div>
        <div v-else class="p-4 text-gray-500">
            No results found.
        </div>
    </div>
</template>

<style scoped>

</style>
