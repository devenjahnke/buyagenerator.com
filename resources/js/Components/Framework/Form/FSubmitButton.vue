<template>
    <button
        type="submit"
        class="block py-2 px-4 w-full bg-primary-dark rounded-sm font-serif font-normal text-base text-center text-white hover:bg-accent-light transition shadow">
        <slot></slot>
    </button>
</template>

<script>
export default {
    name: 'FSubmitButton'
}
</script>

<style lang="scss" scoped>

</style>
