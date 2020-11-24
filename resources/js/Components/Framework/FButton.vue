<template>
    <inertia-link
        class="block py-2 px-4 w-full bg-primary-dark rounded-sm font-serif font-normal text-base text-center text-white hover:bg-accent-light transition shadow"
        :href="href"
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
    }
}

</script>
