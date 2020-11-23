<template>
    <AuthLayout>
        <template v-slot:header>
            <h4 class="text-center">
                Create an account.
            </h4>
        </template>
        <template v-slot:body>
            <form
                action="#"
                v-on:submit.prevent="handleRegister"
            >
                <div class="grid grid-cols-1 gap-5">
                    <!-- First Name -->
                    <div class="form-group-vertical col-span-1">
                        <label
                            for="first_name"
                            class="form-label"
                        >
                            First Name
                        </label>
                        <input
                            type="text"
                            name="first_name"
                            id="first_name"
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
                        <label
                            for="last_name"
                            class="form-label"
                        >
                            Last Name
                        </label>
                        <input
                            type="text"
                            name="last_name"
                            id="last_name"
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
                            Register
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
    name: 'Register',
    components: {
        AuthLayout,
        FInputError,
        FSubmitButton,
    },
    data: function () {
        return {
            form: this.$inertia.form({
                first_name: '',
                last_name: '',
                email: '',
                password: '',
                password_confirmation: '',
            }, {
                bag: 'default',
                resetOnSuccess: false,
            }),
        };
    },
    methods: {
        handleRegister: function () {
            this.form.post('/partner/register');
        },
    }
}
</script>

<style lang="scss" scoped>

</style>
