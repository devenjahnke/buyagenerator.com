<template>
    <AuthLayout>
        <template v-slot:header>
            <h4 class="text-center">
                Reset your password.
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
                    <!-- Password -->
                    <div class="form-group-vertical col-span-1">
                        <label
                            for="password"
                            class="form-label"
                        >
                            Password
                        </label>
                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-input"
                            autocomplete="new-password"
                            v-model="form.password"
                            required
                        >
                        <FInputError
                            :message="form.error('password')"
                            class=""
                        />
                    </div>
                    <!-- Password Confirmation -->
                    <div class="form-group-vertical col-span-1">
                        <label
                            for="password_confirmation"
                            class="form-label"
                        >
                            Confirm Password
                        </label>
                        <input
                            type="password"
                            name="password_confirmation"
                            id="password_confirmation"
                            class="form-input"
                            autocomplete="new-password"
                            v-model="form.password_confirmation"
                            required
                        >
                        <FInputError
                            :message="form.error('password_confirmation')"
                            class=""
                        />
                    </div>
                    <!-- Submit Button -->
                    <div class="form-group-vertical col-span-1">
                        <FSubmitButton>
                            Reset Password
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
    name: 'ResetPassword',
    components: {
        AuthLayout,
        FInputError,
        FSubmitButton,
    },
    props: {
        email: {
            required: true
        },
        token: {
            required: true
        },
    },
    data: function () {
        return {
            form: this.$inertia.form({
                email: this.$props.email,
                password: '',
                password_confirmation: '',
                token: this.$props.token,
            }, {
                bag: 'default',
                resetOnSuccess: false,
            }),
        };
    },
    methods: {
        handlePasswordReset: function () {
            this.form.post('/partner/reset-password');
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
