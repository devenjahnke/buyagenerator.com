<template>
    <article class="bg-white shadow-lg rounded-sm p-4 flex flex-col md:p-5 lg:p-6 xl:p-8">
        <header class="" v-if="hasHeader">
            <slot name="header"></slot>
        </header>
        <main class="flex-grow" v-if="hasBody">
            <slot name="body"></slot>
        </main>
        <footer class="" v-if="hasFooter">
            <slot name="footer"></slot>
        </footer>
    </article>
</template>

<script>
export default {
    name: 'Card',
    computed: {
        hasHeader: function () {
            return !!this.$slots['header'];
        },
        hasBody: function () {
            return !!this.$slots['body'];
        },
        hasFooter: function () {
            return !!this.$slots['footer'];
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
