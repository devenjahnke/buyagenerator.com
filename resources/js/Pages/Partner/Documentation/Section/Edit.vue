<template>
    <PartnerLayout>
        <section class="page-section bg-primary-light">
            <div class="wrapper">
                <div class="flex flex-row justify-between items-center">
                    <h3>Manage Section</h3>
                    <div class="">
                        <a
                            href="#"
                            class="block py-2 px-4 w-full bg-primary-dark rounded-sm font-serif font-normal text-base text-center text-white hover:bg-accent-light transition shadow"
                            v-on:click.prevent="handleDeleteSection"
                        >
                            Delete section.
                        </a>
                    </div>
                </div>
                <hr class="mt-4" />
                <FCard class="mt-8">
                    <template #body>
                        <form
                            action="#"
                            v-on:submit.prevent="handleUpdateSection"
                        >
                            <DocumentationPageSectionForm
                                :form="form"
                                v-on:sectionFormSubmit="handleUpdateSection"
                            >
                                <template #submitButton>
                                    Update section.
                                </template>
                            </DocumentationPageSectionForm>
                        </form>
                    </template>
                </FCard>
            </div>
        </section>
    </PartnerLayout>
</template>

<script>
import PartnerLayout from "@/Layouts/PartnerLayout";
import FCard from "@/Components/Framework/FCard";
import FButton from "@/Components/Framework/FButton";
import DocumentationPageSectionForm from "@/Components/Application/DocumentationPageSectionForm";

export default {
    name: 'Edit',
    components: {
        DocumentationPageSectionForm,
        PartnerLayout,
        FCard,
        FButton,
    },
    props: {
        page: {
            required: true,
        },
        section: {
            required: true,
        },
    },
    data: function () {
        return {
            form: this.$inertia.form({
                '_method': 'PUT',
                title: this.$props.section.title,
                content: this.$props.section.content,
            }, {
                bag: 'default',
                resetOnSuccess: false,
            }),
        };
    },
    methods: {
        handleUpdateSection: function () {
            this.form.post('/partner/documentation/page/' + this.$props.page.id + '/section/' + this.$props.section.id);
        },
        handleDeleteSection: function () {
            this.$inertia.post('/partner/documentation/page/' + this.$props.page.id + '/section/' + this.$props.section.id, {
                '_method': 'delete'
            });
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
