<template>
    <div v-show="message">
        <p class="mt-1 font-sans font-normal text-sm text-red-600">
            {{ message }}
        </p>
    </div>
</template>

<script>
    export default {
        props: ['message']
    }
</script>
