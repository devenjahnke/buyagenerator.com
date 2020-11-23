<template>
    <div class="wrapper">
        <main class="flex justify-center items-center min-h-screen">
            <FCard id="card">
                <template v-slot:header>
                    <slot name="header"></slot>
                    <hr class="mt-3" />
                </template>
                <template v-slot:body>
                    <div class="mt-3">
                        <slot name="body"></slot>
                    </div>
                </template>
            </FCard>
        </main>
    </div>
</template>

<script>
import FCard from "@/Components/Framework/FCard";

export default {
    name: 'AuthLayout',
    components: {
        FCard,
    }
}
</script>

<style lang="scss" scoped>
#card {
    width: 500px;
}
</style>
