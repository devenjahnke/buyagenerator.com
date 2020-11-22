<template>
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="h-16 w-full bg-primary-dark">
            <!-- Responsive Container -->
            <div class="wrapper h-full flex items-center justify-between">
                <!-- Logo/Title -->
                <a
                    href="/"
                    class="font-serif font-bold text-xl text-white hover:underline"
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
        <footer class="w-full py-16 flex items-center bg-primary-dark">
            <!-- Responsive Container -->
            <div class="wrapper">
                <!-- Navigation -->
                <nav class="flex flex-col items-center space-y-4">
                    <a
                        href="#"
                        class="inline-block font-sans text-white font-normal text-base hover:underline"
                    >
                        Our network.
                    </a>
                    <a
                        href="#"
                        class="inline-block font-sans text-white font-normal text-base hover:underline"
                    >
                        Our documentation.
                    </a>
                    <a
                        href="#"
                        class="inline-block font-sans text-white font-normal text-base hover:underline"
                    >
                        Our tools.
                    </a>
                </nav>
                <!-- Legal -->
                <div class="text-center mt-16">
                    <a
                        href="#"
                        class="font-sans text-white font-normal text-sm hover:underline"
                    >
                        Developed by Deven Jahnke
                    </a>
                    <p class="mt-3 font-sans text-white font-normal text-sm">
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
