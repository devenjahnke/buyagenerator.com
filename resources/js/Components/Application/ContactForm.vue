<template>
    <form action="" class="form">
        <!-- First Name -->
        <div class="form-group">
            <label for="firstname" class="form-label">
                First Name
            </label>
            <input
                type="text"
                name="firstname"
                id="firstname"
                class="form-input"
                autocomplete="given-name"
            >
        </div>
        <!-- Last Name -->
        <div class="form-group">
            <label for="lastname" class="form-label">
                Last Name
            </label>
            <input
                type="text"
                name="lastname"
                id="lastname"
                class="form-input"
                autocomplete="family-name"
            >
        </div>
        <!-- Email -->
        <div class="form-group">
            <label for="email" class="form-label">
                Email
            </label>
            <input
                type="email"
                name="email"
                id="email"
                class="form-input"
                autocomplete="email"
            >
        </div>
        <!-- Message -->
        <div class="form-group">
            <label for="message" class="form-label">
                Message
            </label>
            <textarea
                name="message"
                id="message"
                cols="30"
                rows="10"
                class="form-textarea"
            ></textarea>
        </div>
        <!-- Submit Button -->
        <div class="form-group">
            <FButton class="">
                Send your message.
            </FButton>
        </div>
    </form>
</template>

<script>
import FButton from "@/Components/Framework/FButton";

export default {
    name: 'ContactForm',
    components: {
        FButton,
    }
}
</script>

<style lang="scss" scoped>

</style>
