<template>
    <AuthLayout>
        <template v-slot:header>
            <h4 class="text-center">
                Forgot your password.
            </h4>
        </template>
        <template v-slot:body>
            <form
                action="#"
                v-on:submit.prevent="handlePasswordReset"
            >
                <div class="grid grid-cols-1 gap-5">
                    <!-- Email -->
                    <div class="form-group-vertical col-span-1">
                        <label
                            for="email"
                            class="form-label"
                        >
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
                    <!-- Submit Button -->
                    <div class="form-group-vertical col-span-1">
                        <FSubmitButton>
                            Email reset link.
                        </FSubmitButton>
                    </div>
                    <div class="col-span-1 flex justify-end mt-4">
                        <inertia-link
                            href="/partner/login"
                            class="font-serif text-sm text-right underline hover:text-accent-light"
                        >
                            Login instead.
                        </inertia-link>
                    </div>
                </div>
            </form>
        </template>
    </AuthLayout>
</template>

<script>
import AuthLayout from "@/Layouts/AuthLayout";
import FInputError from "@/Components/Framework/Form/FInputError";
import FSubmitButton from "@/Components/Framework/Form/FSubmitButton";

export default {
    name: 'ForgotPassword',
    components: {
        AuthLayout,
        FInputError,
        FSubmitButton,
    },
    data: function () {
        return {
            form: this.$inertia.form({
                email: '',
            }, {
                bag: 'default',
                resetOnSuccess: false,
            }),
        };
    },
    methods: {
        handlePasswordReset: function () {
            this.form.post('/partner/forgot-password')
                .then(() => {
                    if (this.form.successful) {
                        this.$inertia.get('/partner/password-reset-sent');
                    }
                });
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
