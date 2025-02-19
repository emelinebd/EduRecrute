<template>
    <div class="bg-[url('/images/Background.png')] bg-no-repeat min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <!--<div>
            <slot name="logo" />
        </div>-->
        <div class="flex items-center">
            <div class="text-center flex-1 flex justify-center items-center">
                <img src="/images/Frame215.png" alt="imgGauche" class="max-w-full h-auto object-contain">
            </div>
            <div class="flex-1">
                <slot />
            </div>
        </div>
    </div>
</template>
<script setup lang="ts">
</script>
