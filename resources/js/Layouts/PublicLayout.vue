<template>
    <div class="flex flex-col min-h-screen">
        <!-- Header -->
        <header class="w-full h-16 bg-primary-dark">
            <!-- Responsive Container -->
            <div class="flex items-center justify-between h-full wrapper">
                <!-- Logo/Title -->
                <a
                    href="/"
                    class="font-serif text-xl font-bold text-white hover:underline"
                >
                    BuyAGenerator
                </a>
                <!-- Navigation -->
                <Navigation></Navigation>
            </div>
        </header>

        <!-- Page Content -->
        <main class="flex-1">
            <slot></slot>
        </main>

        <!-- Footer -->
        <footer class="flex items-center w-full page-section bg-primary-dark">
            <!-- Responsive Container -->
            <div class="wrapper">
                <!-- Navigation -->
                <nav class="flex flex-col items-center space-y-4">
                    <a
                        href="#"
                        class="inline-block font-sans text-base font-normal text-white hover:underline"
                    >
                        Our network.
                    </a>
                    <a
                        href="#"
                        class="inline-block font-sans text-base font-normal text-white hover:underline"
                    >
                        Our documentation.
                    </a>
                    <a
                        href="#"
                        class="inline-block font-sans text-base font-normal text-white hover:underline"
                    >
                        Our tools.
                    </a>
                </nav>
                <!-- Legal -->
                <div class="mt-16 text-center">
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
import Navigation from "@/Components/Application/Navigation";

export default {
    name: 'PublicLayout',
    components: {
        Navigation,
    },
}
</script>

<style lang="css" scoped>

</style>
