<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="w-full px-4 py-2 bg-cerise border border-transparent rounded-full font-semibold text-xs text-white text-[16px] tracking-widest hover:bg-bleu">
        <slot />
    </button>
</template>
