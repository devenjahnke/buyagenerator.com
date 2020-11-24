<template>
    <PublicLayout>
        <!-- Hero -->
        <section class="page-section bg-primary-light">
            <div class="wrapper">
                <h1 class="text-primary-dark">
                    Our documentation.
                </h1>
                <h3 class="mt-4 font-sans font-normal text-secondary-dark">
                    Our technical resources make learning fundamental generator knowledge a breeze.
                </h3>
            </div>
        </section>
        <!-- Pages -->
        <section class="page-section bg-secondary-light">
            <div class="wrapper">
                <FCardArticleGrid>
                    <FCardArticle
                        class=""
                        v-for="(page, i) in $props.pages"
                        :key="i"
                        :href="'/documentation/' + page.slug"
                    >
                        <template #subtitle>
                            Article
                        </template>
                        <template #title>
                            {{ page.title }}
                        </template>
                        <template #body>
                            {{ page.description }}
                        </template>
                        <template #action>
                            Learn more.
                        </template>
                    </FCardArticle>
                </FCardArticleGrid>
            </div>
        </section>
    </PublicLayout>
</template>

<script>
import PublicLayout from "@/Layouts/PublicLayout";
import FCardArticleGrid from "@/Components/Framework/FCardArticleGrid";
import FCardArticle from "@/Components/Framework/FCardArticle";

export default {
    name: 'Index',
    components: {
        PublicLayout,
        FCardArticleGrid,
        FCardArticle,
    },
    props: {
        pages: {
            required: true,
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
