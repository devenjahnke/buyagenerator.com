<template>
    <PartnerLayout>
        <section class="page-section bg-primary-light">
            <div class="wrapper">
                <div class="flex flex-row justify-between items-center">
                    <h3 class="">
                        Documentation Pages
                    </h3>
                    <div class="">
                        <FButton
                            class=""
                            href="/partner/documentation/page/create"
                        >
                            Create Page
                        </FButton>
                    </div>
                </div>
                <hr class="mt-4" />
                <!-- Pages Grid -->
                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8">
                    <FCard
                        class="col-span-1"
                        v-for="(page, i) in $props.pages"
                        :key="i"
                    >
                        <template #header>
                            <h6>
                                {{ page.title }}
                            </h6>
                        </template>
                        <template #body>
                            <p class="mt-4">
                                {{ page.description }}
                            </p>
                        </template>
                        <template #footer>
                            <div class="mt-6">
                                <FButton
                                    class=""
                                    :href="'/partner/documentation/page/' + page.id + '/edit'"
                                >
                                    Manage Page
                                </FButton>
                            </div>
                        </template>
                    </FCard>
                </div>
            </div>
        </section>
    </PartnerLayout>
</template>

<script>
import PartnerLayout from "@/Layouts/PartnerLayout";
import FButton from "@/Components/Framework/FButton";
import FCard from "@/Components/Framework/FCard";

export default {
    name: 'Index',
    components: {
        PartnerLayout,
        FButton,
        FCard,
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
