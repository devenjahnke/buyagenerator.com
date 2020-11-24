<template>
    <inertia-link
        class="block py-2 px-4 w-full bg-primary-dark rounded-sm font-serif font-normal text-base text-center text-white hover:bg-accent-light transition shadow"
        :href="href"
        :class="disabled ? 'button-disabled' : ''"
    >
        <slot></slot>
    </inertia-link>
</template>

<script>

export default {
    name: "framework-button",
    props: {
        href: {
            default: '#'
        },
        disabled: {
            default: false,
        }
    }
}

</script>

<style lang="scss" scoped>
.button-disabled {
    @apply cursor-not-allowed bg-secondary-dark hover:bg-secondary-dark hover:text-white;
}
</style>
