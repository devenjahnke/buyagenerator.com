<template>
    <PartnerLayout>
        <section class="page-section bg-primary-light">
            <div class="wrapper">
                <h3>Create Section</h3>
                <hr class="mt-4" />
                <FCard class="mt-8">
                    <template #body>
                        <form
                            action="#"
                            v-on:submit.prevent="handleCreateSection"
                        >
                            <DocumentationPageSectionForm
                                :form="form"
                                v-on:pageFormSubmit="handleCreateSection"
                            >
                                <template #submitButton>
                                    Create section.
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
import DocumentationPageSectionForm from "@/Components/Application/DocumentationPageSectionForm";
import FCard from "@/Components/Framework/FCard";

export default {
    name: 'Create',
    components: {
        PartnerLayout,
        DocumentationPageSectionForm,
        FCard
    },
    props: {
        page: {
            required: true,
        }
    },
    data: function () {
        return {
            form: this.$inertia.form({
                title: '',
                content: '',
            }, {
                bag: 'default',
                resetOnSuccess: false,
            }),
        };
    },
    methods: {
        handleCreateSection: function () {
            this.form.post('/partner/documentation/page/' + this.$props.page.id + '/section');
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
