<template>
    <PublicLayout>
        <!-- Hero -->
        <section class="page-section bg-primary-light">
            <div class="wrapper">
                <h1 class="text-primary-dark">
                    {{ $props.page.title }}
                </h1>
                <h3 class="mt-4 font-sans font-normal text-secondary-dark">
                    {{ $props.page.description }}
                </h3>
            </div>
        </section>
        <!-- Sections -->
        <section
            class="page-section odd:bg-primary-light even:bg-secondary-light"
            v-for="(section, i) in $props.sections"
            :key="i"
        >
            <div class="wrapper">
                <h4>
                    {{ section.title }}
                </h4>
                <div>
                    <p
                        class="first:mt-4"
                        v-for="(paragraph, j) in section.content.split('.')"
                        :key="i + j"
                    >
                        {{ paragraph }}
                    </p>
                </div>
            </div>
        </section>
    </PublicLayout>
</template>

<script>
import PublicLayout from "@/Layouts/PublicLayout";

export default {
    name: 'Show',
    components: {
        PublicLayout,
    },
    props: {
        page: {
            required: true,
        },
        sections: {
            required: true,
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
