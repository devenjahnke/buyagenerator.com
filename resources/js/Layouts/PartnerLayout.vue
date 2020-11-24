<template>
    <div class="flex flex-col min-h-screen">
        <!-- Header -->
        <header class="w-full h-16 bg-primary-dark">
            <!-- Responsive Container -->
            <div class="flex items-center justify-between h-full wrapper">
                <!-- Logo/Title -->
                <inertia-link
                    href="/partner/dashboard"
                    class="font-serif text-xl font-bold text-white hover:underline"
                >
                    BuyAGenerator <span class="font-sans">| Partner Portal</span>
                </inertia-link>
                <!-- Logout -->
                <a
                    href="#"
                    class="font-serif font-normal text-white underline text-sm md:text-base xl:text-lg hover:no-underline"
                    v-on:click.prevent="handleLogout"
                >
                    Logout
                </a>
            </div>
        </header>

        <!-- Page Content -->
        <main class="flex-1">
            <slot></slot>
        </main>

        <!-- Modal Portal -->
        <portal-target name="modal" multiple>
        </portal-target>

        <!-- Footer -->
        <footer class="flex items-center w-full bg-primary-dark py-8 md:py-12 lg:py-14 xl:py-16">
            <!-- Responsive Container -->
            <div class="wrapper">
                <!-- Legal -->
                <div class="text-center">
                    <a
                        href="#"
                        class="font-sans text-sm font-normal text-white hover:underline"
                    >
                        Developed by Deven Jahnke
                    </a>
                    <p class="mt-3 font-sans text-sm font-normal text-white">
                        Copyright © 2020 BuyAGenerator. All Rights Reserved.
                    </p>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
export default {
    name: 'PartnerLayout',
    methods: {
        handleLogout: function () {
            this.$inertia.post('/partner/logout');
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
