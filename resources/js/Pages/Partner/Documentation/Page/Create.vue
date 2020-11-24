<template>
    <PartnerLayout>
        <section class="page-section bg-primary-light">
            <div class="wrapper">
                <h3>Create Page</h3>
                <hr class="mt-4" />
                <FCard class="mt-8">
                    <template #body>
                        <form
                            action="#"
                            v-on:submit.prevent="handleCreatePage"
                        >
                            <DocumentationPageForm
                                :form="form"
                                v-on:pageFormSubmit="handleCreatePage"
                            >
                                <template #submitButton>
                                    Create page.
                                </template>
                            </DocumentationPageForm>
                        </form>
                    </template>
                </FCard>
            </div>
        </section>
    </PartnerLayout>
</template>

<script>
import PartnerLayout from "@/Layouts/PartnerLayout";
import DocumentationPageForm from "@/Components/Application/DocumentationPageForm";
import FCard from "@/Components/Framework/FCard";

export default {
    name: 'Create',
    components: {
        PartnerLayout,
        DocumentationPageForm,
        FCard
    },
    data: function () {
        return {
            form: this.$inertia.form({
                title: '',
                slug: '',
                description: '',
            }, {
                bag: 'default',
                resetOnSuccess: false,
            }),
        };
    },
    methods: {
        handleCreatePage: function () {
            this.form.post('/partner/documentation/page');
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
