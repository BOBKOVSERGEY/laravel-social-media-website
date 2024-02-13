<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GroupItem from "@/Components/app/GroupItem.vue";

defineProps({

});
</script>

<template>
    <Head title="Social media website" />
    <div class="grid md:grid-cols-12 gap-3 p-4 h-full">
        <div class="col-span-3 bg-gray-100 py-6 px-3">
            <h2 class="text-2xl font-bold mb-3">My Groups</h2>
            <div v-if="false" class="text-gray-600 text-center">
                You are not joined to any groups
            </div>
            <div v-else>
                <GroupItem
                    v-for="index in 10" :key="index"
                    image="https://picsum.photos/200"
                    description="Lorem ipsum dolor sit amet, consectetur adipisicing"
                    :title="index + 'Laravel developers'"
                />
            </div>
        </div>
        <div class="col-span-6">
            Posts
        </div>
        <div class="col-span-3">
            Followers
        </div>
    </div>
</template>
