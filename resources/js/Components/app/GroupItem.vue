<script setup>
    defineProps({
        image: String,
        title: String,
        description: String
    })
</script>

<template>
    <div class="mb-3 hover:bg-gray-300 transition px-3 rounded-md cursor-pointer">
        <div class="flex items-start gap-3 py-2 ">
            <img  :src="image" alt="" class="w-[50px] rounded-full object-cover h-[50px] mr-1">
            <div>
                <h3 class="font-black text-lg">
                    {{ title }}
                </h3>
                <p class="text-sm">
                    {{ description }}
                </p>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
