<template>
    <div class="relative">
        <!-- Toggle Button -->
        <button
            class="bg-primary-light px-2 py-1 flex items-center rounded-sm hover:bg-accent-light hover:text-white"
            v-on:click="toggleIsActive"
        >
            Menu
            <PhList
                :size="20"
                class="ml-2"
            />
        </button>
        <!-- Navigation Menu -->
        <aside
            class="fixed right-0 top-0 w-full h-full z-30 transition duration-300 transform-gpu origin-left"
            :class="isActive ? '-translate-x-0 overflow-y-hidden' : 'translate-x-full'"
        >
            <div
                class="absolute block w-1/4 h-full left-0 bg-secondary-dark bg-opacity-0"
                v-on:click="toggleIsActive"
            ></div>
            <section class="absolute block w-3/4 h-full right-0 flex flex-col bg-secondary-light shadow-lg">
                <header class="px-8 h-16 flex justify-between items-center bg-secondary-dark">
                    <h4 class="font-sans text-white">
                        Navigation
                    </h4>
                    <button
                        class="text-white hover:text-accent-light"
                        v-on:click="toggleIsActive"
                    >
                        <PhXSquare
                            :size="32"
                        />
                    </button>
                </header>
                <nav class="flex-1 flex flex-col justify-evenly">
                    <a
                        href="#"
                        class="block h-full flex items-center justify-center bg-primary-light font-sans font-normal text-primary-dark text-lg transition hover:bg-accent-light hover:text-white"
                    >
                        Talk to an expert.
                    </a>
                    <a
                        href="#"
                        class="block h-full flex items-center justify-center bg-secondary-light font-sans font-normal text-primary-dark text-lg transition hover:bg-accent-light hover:text-white"
                    >
                        Explore our resources.
                    </a>
                    <a
                        href="#"
                        class="block h-full flex items-center justify-center bg-primary-light font-sans font-normal text-primary-dark text-lg transition hover:bg-accent-light hover:text-white"
                    >
                        Test out our tools.
                    </a>
                </nav>
            </section>
        </aside>
    </div>
</template>

<script>
import FButton from "@/Components/Framework/FButton";
import { PhList, PhXSquare } from "phosphor-vue";

export default {
    name: 'Navigation',
    components: {
        FButton,
        PhList,
        PhXSquare,
    },
    data: function () {
        return {
            isActive: false,
        };
    },
    methods: {
        toggleIsActive: function () {
            if (this.isActive) {

            }
            else {

            }
            this.isActive = !this.isActive;
        },
    },
}
</script>

<style lang="css" scoped>

</style>
