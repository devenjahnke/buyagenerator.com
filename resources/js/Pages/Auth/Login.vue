<template>
    <AuthLayout>
        <template v-slot:header>
            <h4 class="text-center">
                Sign in.
            </h4>
        </template>
        <template v-slot:body>
            <form
                action="#"
                v-on:submit.prevent="handleLogin"
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
                            autocomplete="current-password"
                            v-model="form.password"
                            required
                        >
                        <FInputError
                            :message="form.error('password')"
                            class=""
                        />
                    </div>
                    <!-- Remember -->
                    <div class="form-group-horizontal items-center">
                        <input
                            type="checkbox"
                            id="remember"
                            class="rounded-sm"
                            v-model="form.remember"
                        >
                        <label
                            for="remember"
                            class="form-label"
                        >
                            Remember Me
                        </label>
                    </div>
                    <!-- Submit Button -->
                    <div class="form-group-vertical col-span-1">
                        <FSubmitButton>
                            Login
                        </FSubmitButton>
                    </div>
                    <div class="col-span-1 flex justify-between mt-4">
                        <inertia-link
                            href="/partner/register"
                            class="font-serif text-sm text-right underline hover:text-accent-light"
                        >
                            Create an account.
                        </inertia-link>
                        <inertia-link
                            href="/partner/forgot-password"
                            class="font-serif text-sm text-right underline hover:text-accent-light"
                        >
                            Forgot your password.
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
    name: 'Login',
    components: {
        AuthLayout,
        FSubmitButton,
        FInputError,
    },
    data: function () {
        return {
            form: this.$inertia.form({
                email: '',
                password: '',
                remember: '',
            }, {
                bag: 'default',
                resetOnSuccess: false,
            }),
        };
    },
    methods: {
        handleLogin: function () {
            this.form.post('/partner/login');
        },
    }
}
</script>

<style lang="scss" scoped>

</style>
