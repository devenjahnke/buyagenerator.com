<template>
    <PartnerLayout>
        <section class="page-section bg-primary-light">
            <div class=" wrapper">
                <h3>Actions Dashboard</h3>
                <hr class="mt-4" />
                <!-- Dashboard Grid -->
                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8">
                    <inertia-link
                        href="/partner/account"
                        class="dashboard-card"
                    >
                        Account settings.
                    </inertia-link>
                    <inertia-link
                        href="#"
                        class="dashboard-card dashboard-card-disabled"
                        v-if="$page.user.role.company"
                    >
                        Company details.
                    </inertia-link>
                    <inertia-link
                        href="#"
                        class="dashboard-card dashboard-card-disabled"
                        v-if="$page.user.role.company"
                    >
                        Generated leads.
                    </inertia-link>
                    <inertia-link
                        href="/partner/documentation"
                        class="dashboard-card"
                        v-if="$page.user.role.maintainer"
                    >
                        Documentation editor.
                    </inertia-link>
                </div>
            </div>
        </section>
    </PartnerLayout>
</template>

<script>
import PartnerLayout from "@/Layouts/PartnerLayout";
import FCardArticleGrid from "@/Components/Framework/FCardArticleGrid";
import FCard from "@/Components/Framework/FCard";

export default {
    name: 'Dashboard',
    components: {
        PartnerLayout,
        FCardArticleGrid,
        FCard,
    },
}
</script>

<style lang="scss" scoped>
.dashboard-card {
    @apply block col-span-1 h-40 flex items-center justify-center bg-white shadow-lg rounded-sm font-sans font-normal text-primary-dark text-lg text-center transition hover:bg-accent-light hover:text-white;
}
.dashboard-card-disabled {
    @apply cursor-not-allowed bg-secondary-light hover:bg-secondary-light hover:text-primary-dark;
}
</style>
