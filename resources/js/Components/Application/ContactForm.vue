<template>
    <form
        action="#"
        class="form"
        v-on:submit.prevent="handleSubmitContact"
    >
        <!-- Form Input Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5">
            <!-- First Name -->
            <div class="form-group-vertical col-span-1">
                <label for="firstname" class="form-label">
                    First Name
                </label>
                <input
                    type="text"
                    name="firstname"
                    id="firstname"
                    class="form-input"
                    autocomplete="given-name"
                    v-model="form.first_name"
                    required
                >
                <FInputError
                    :message="form.error('first_name')"
                    class=""
                />
            </div>
            <!-- Last Name -->
            <div class="form-group-vertical col-span-1">
                <label for="lastname" class="form-label">
                    Last Name
                </label>
                <input
                    type="text"
                    name="lastname"
                    id="lastname"
                    class="form-input"
                    autocomplete="family-name"
                    v-model="form.last_name"
                    required
                >
                <FInputError
                    :message="form.error('last_name')"
                    class=""
                />
            </div>
            <!-- Email -->
            <div class="form-group-vertical col-span-1 md:col-span-2 xl:col-span-1">
                <label for="email" class="form-label">
                    Email
                </label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    class="form-input"
                    autocomplete="email"
                    v-model="form.email"
                    required
                >
                <FInputError
                    :message="form.error('email')"
                    class=""
                />
            </div>
            <!-- Message -->
            <div class="form-group-vertical col-span-full">
                <label for="message" class="form-label">
                    Message
                </label>
                <textarea
                    name="message"
                    id="message"
                    cols="30"
                    rows="10"
                    class="form-textarea"
                    v-model="form.message"
                    required
                ></textarea>
                <FInputError
                    :message="form.error('message')"
                    class=""
                />
            </div>
            <!-- Submit Button -->
            <div class="form-group-vertical col-span-full">
                <FSubmitButton class="">
                    Send your message.
                </FSubmitButton>
            </div>
        </div>
    </form>
</template>

<script>
import FButton from "@/Components/Framework/FButton";
import FSubmitButton from "@/Components/Framework/Form/FSubmitButton";
import FInputError from "@/Components/Framework/Form/FInputError";

export default {
    name: 'ContactForm',
    components: {
        FSubmitButton,
        FButton,
        FInputError,
    },
    data: function () {
        return {
            form: this.$inertia.form({
                first_name: '',
                last_name: '',
                email: '',
                message: '',
            }, {
                bag: 'default',
                resetOnSuccess: false,
            }),
        };
    },
    methods: {
        handleSubmitContact: function () {
            this.form.post('/contact', {
                preserveScroll: true
            }).then(() => {
                this.form.first_name = '';
                this.form.last_name = '';
                this.form.email = '';
                this.form.message = '';
            });
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
