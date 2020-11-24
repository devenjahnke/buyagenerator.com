<template>
    <PartnerLayout>
        <section class="page-section bg-primary-light">
            <div class="wrapper">
                <div class="flex flex-row justify-between items-center">
                    <h3>Manage Page</h3>
                    <div class="">
                        <a
                            href="#"
                            class="block py-2 px-4 w-full bg-primary-dark rounded-sm font-serif font-normal text-base text-center text-white hover:bg-accent-light transition shadow"
                            v-on:click.prevent="handleDeletePage"
                        >
                            Delete Page
                        </a>
                    </div>
                </div>
                <hr class="mt-4" />
                <FCard class="mt-8">
                    <template #body>
                        <form
                            action="#"
                            v-on:submit.prevent="handleUpdatePage"
                        >
                            <DocumentationPageForm
                                :form="form"
                                v-on:pageFormSubmit="handleUpdatePage"
                            >
                                <template #submitButton>
                                    Update Page
                                </template>
                            </DocumentationPageForm>
                        </form>
                    </template>
                </FCard>
            </div>
        </section>
        <section class="page-section bg-secondary-light">
            <div class="wrapper">
                <div class="flex flex-row justify-between items-center">
                    <h3 class="">
                        Page Sections
                    </h3>
                    <div class="">
                        <FButton
                            class=""
                            :href="'/partner/documentation/page/' + $props.page.id + '/section/create'"
                        >
                            Create Section
                        </FButton>
                    </div>
                </div>
                <hr class="mt-4 border-gray-300" />
                <!-- Sections Grid -->
                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8">
                    <FCard
                        class="col-span-1"
                        v-for="(section, i) in $props.sections"
                        :key="i"
                    >
                        <template #header>
                            <h6>
                                {{ section.order }}. {{ section.title }}
                            </h6>
                        </template>
                        <template #body>
                            <p class="mt-4 h-16 overflow-ellipsis overflow-hidden">
                                {{ section.content }}
                            </p>
                        </template>
                        <template #footer>
                            <div class="mt-6">
                                <FButton
                                    class=""
                                    :href="'/partner/documentation/page/' + page.id + '/section/' + section.id + '/edit'"
                                >
                                    Manage Section
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
import DocumentationPageForm from "@/Components/Application/DocumentationPageForm";
import FCard from "@/Components/Framework/FCard";
import FButton from "@/Components/Framework/FButton";

export default {
    name: 'Edit',
    components: {
        PartnerLayout,
        DocumentationPageForm,
        FCard,
        FButton,
    },
    props: {
        page: {
            required: true,
        },
        sections: {
            required: true,
        },
    },
    data: function () {
        return {
            form: this.$inertia.form({
                '_method': 'PUT',
                title: this.$props.page.title,
                slug: this.$props.page.slug,
                description: this.$props.page.description,
            }, {
                bag: 'default',
                resetOnSuccess: false,
            }),
        };
    },
    methods: {
        handleUpdatePage: function () {
            this.form.post('/partner/documentation/page/' + this.$props.page.id);
        },
        handleDeletePage: function () {
            this.$inertia.post('/partner/documentation/page/' + this.$props.page.id, {
                '_method': 'delete'
            });
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
