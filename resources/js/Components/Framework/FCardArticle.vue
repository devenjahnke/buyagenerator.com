<template>
    <FCard class="mt-12">
        <template v-slot:header>
            <h6 class="font-sans text-sm text-secondary-dark">
                <slot name="subtitle"></slot>
            </h6>
            <h3 class="mt-1">
                <slot name="title"></slot>
            </h3>
        </template>
        <template v-slot:body>
            <p class="mt-3">
                <slot name="body"></slot>
            </p>
        </template>
        <template v-slot:footer>
            <FButton class="mt-8">
                <slot name="action"></slot>
            </FButton>
        </template>
    </FCard>
</template>

<script>
import FCard from "@/Components/Framework/FCard";
import FButton from "@/Components/Framework/FButton";

export default {
    name: 'FCardArticle',
    components: {
        FCard,
        FButton,
    }
}
</script>

<style lang="scss" scoped>

</style>
