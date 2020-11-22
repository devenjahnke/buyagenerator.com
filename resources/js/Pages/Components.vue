<template>
    <div class="container mx-auto p-8">
        <FCard>
            <template v-slot:sub-heading>
                Our Network
            </template>
            <template v-slot:heading>
                Talk to an expert.
            </template>
            <p class="">
                Choosing a generator that satisfies all of your needs can be tricky. To help, we've hand curated a network of local generator companies you can trust. Use our search tool to start a conversation with your local contact today.
            </p>
            <template v-slot:footer>
                <FButton class="font-bold">Start a conversation.</FButton>
            </template>
        </FCard>
    </div>
</template>

<script>

import FButton from "@/Components/Framework/FButton";
import FCard from "@/Components/Framework/FCard";


export default {
    components: {
        FButton,
        FCard
    }
}

</script>
