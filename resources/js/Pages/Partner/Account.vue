<template>
    <PartnerLayout>
        <section class="page-section bg-primary-light">
            <div class="wrapper">
                <h3>Account Settings</h3>
                <hr class="mt-4" />
                <!-- Settings Grid -->
                <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <FCard class="col-span-1">
                        <template v-slot:header>
                            <h5>Profile information.</h5>
                            <hr class="mt-4" />
                        </template>
                        <template v-slot:body>
                            <UpdateProfileInformationForm
                                v-bind:user="$props.user"
                                class="mt-4"
                            />
                        </template>
                    </FCard>
                    <FCard class="col-span-1">
                        <template v-slot:header>
                            <h5>Browser sessions.</h5>
                            <hr class="mt-4" />
                        </template>
                        <template v-slot:body>
                            <div class="flex flex-col min-h-full">
                                <BrowserSessionsForm
                                    v-bind:sessions="$props.sessions"
                                    class="mt-4 flex-1"
                                />
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
import FCard from "@/Components/Framework/FCard";
import UpdateProfileInformationForm from "@/Components/Application/UpdateProfileInformationForm";
import BrowserSessionsForm from "@/Components/Application/BrowserSessionsForm";

export default {
    name: 'AccountSettings',
    components: {
        PartnerLayout,
        FCard,
        UpdateProfileInformationForm,
        BrowserSessionsForm,
    },
    props: {
        user: {
            required: true,
        },
        sessions: {
            required: true
        },
    }
}
</script>

<style lang="scss" scoped>

</style>
