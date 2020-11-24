<template>
    <FModal
        :show="show"
        :max-width="maxWidth"
        :closeable="closeable"
        @close="close"
    >
        <header class="" v-if="hasHeader">
            <slot name="header"></slot>
        </header>
        <main class="flex-grow" v-if="hasBody">
            <slot name="body"></slot>
        </main>
        <footer class="" v-if="hasFooter">
            <slot name="footer"></slot>
        </footer>
    </FModal>
</template>

<script>
import FModal from "@/Components/Framework/FModal";

export default {
    name: 'FCardModal',
    components: {
        FModal,
    },
    props: {
        show: {
            default: false
        },
        maxWidth: {
            default: '2xl'
        },
        closeable: {
            default: true
        },
    },
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
    },
    methods: {
        close: function () {
            this.$emit('close');
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
