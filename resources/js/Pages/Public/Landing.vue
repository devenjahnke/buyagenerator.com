<template>
    <PublicLayout>
        <!-- Hero -->
        <section class="page-section bg-primary-light">
            <div class="wrapper">
                <h1 class="text-primary-dark">
                    Don't get caught in the dark.
                </h1>
                <h3 class="mt-4 font-sans font-normal text-secondary-dark">
                    Invest in a backup generator and know you'll have electricity when you need it most.
                </h3>
                <FButton class="mt-12 text-lg">
                    Find your generator.
                </FButton>
            </div>
        </section>
        <!-- Prepare for the worst -->
        <section class="page-section bg-secondary-light">
            <div class="wrapper">
                <h3 class="">
                    Prepare for the worst.
                </h3>
                <p class="mt-3">
                    Electricity touches nearly every aspect of our lives, making it easy to take for granted. While utility companies boast great reliability, unexpectedly losing power can leave you feeling helpless.
                </p>
                <p class="">
                    Electricity touches nearly every aspect of our lives, making it easy to take for granted. While utility companies boast great reliability, unexpectedly losing power can leave you feeling helpless.
                </p>
            </div>
        </section>
        <!-- How we can help -->
        <section class="page-section bg-primary-light">
            <div class="wrapper">
                <h3 class="">
                    How we can help.
                </h3>
                <p class="mt-3">
                    Finding a generator perfect for your needs can prove more challenging than you'd think. To help, we've developed a custom suite of free services that streamline your experience, giving you the knowledge you need to feel confident in your purchase.
                </p>
                <!-- Card Article Grid -->
                <FCardArticleGrid class="mt-12">
                    <!-- Our Network -->
                    <FCardArticle class="">
                        <template v-slot:subtitle>
                            Our Network
                        </template>
                        <template v-slot:title>
                            Talk to an expert.
                        </template>
                        <template v-slot:body>
                            Choosing a generator that satisfies all of your needs can be tricky. To help, we've hand curated a network of local generator companies you can trust. Use our search tool to start a conversation with your local contact today.
                        </template>
                        <template v-slot:action>
                            Start a conversation.
                        </template>
                    </FCardArticle>
                    <!-- Our Documentation -->
                    <FCardArticle class="">
                        <template v-slot:subtitle>
                            Our Documentation
                        </template>
                        <template v-slot:title>
                            Discover our resources.
                        </template>
                        <template v-slot:body>
                            There's more to selecting the perfect generator than meets the eye. To help you feel confident in your investment, we've synthesized technical resources from across the internet into a beginner oriented knowledge base.
                        </template>
                        <template v-slot:action>
                            Explore our knowledge base.
                        </template>
                    </FCardArticle>
                    <!-- Our Tools -->
                    <FCardArticle class="">
                        <template v-slot:subtitle>
                            Our Tools
                        </template>
                        <template v-slot:title>
                            Crunch the numbers.
                        </template>
                        <template v-slot:body>
                            Between unfamiliar terminology and complex calculations, determining what to look for in a generator can prove surprisingly difficult. That's why we've developed a suite of free to use tools that make finding your generator a breeze.
                        </template>
                        <template v-slot:action>
                            Test out our tools.
                        </template>
                    </FCardArticle>
                </FCardArticleGrid>
            </div>
        </section>
        <!-- How to reach out -->
        <section class="page-section bg-secondary-light">
            <div class="wrapper">
                <h3 class="">
                    How to reach out.
                </h3>
                <p class="mt-3">
                    Have a questions or looking to raise a concern? Feel free to reach out and let us know what's on your mind. While we can't promise to have an answer for all of your questions, we'll do our best to put you in contact with an expert who does.
                </p>
                <!-- Contact Card -->
                <FCard class="mt-12">
                    <template v-slot:body>
                        <ContactForm></ContactForm>
                    </template>
                </FCard>
            </div>
        </section>
    </PublicLayout>
</template>

<script>
import PublicLayout from "@/Layouts/PublicLayout";
import FButton from "@/Components/Framework/FButton";
import FCardArticle from "@/Components/Framework/FCardArticle";
import FCard from "@/Components/Framework/FCard";
import ContactForm from "@/Components/Application/ContactForm";
import FCardArticleGrid from "@/Components/Framework/FCardArticleGrid";

export default {
    name: 'Landing2',
    components: {
        PublicLayout,
        FButton,
        FCardArticle,
        FCard,
        ContactForm,
        FCardArticleGrid,
    }
}
</script>

<style lang="css" scoped>

</style>
