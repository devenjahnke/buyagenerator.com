<template>
    <AuthLayout>
        <template v-slot:header>
            <h4 class="text-center">
                Verification email sent.
            </h4>
        </template>
        <template v-slot:body>
            <p class="mt-0">
                A verification email has been sent to the email address you created your account with. Check you email and use the link to verify your account. If you don't seem to have received the email <strong>check your spam</strong> before sending another.
            </p>
            <form
                action="#"
                v-on:submit.prevent="handleSendEmail"
            >
                <FSubmitButton class="mt-6">
                    Send another email.
                </FSubmitButton>
            </form>
            <div class="flex justify-end mt-5">
                <a
                    href="#"
                    class="font-serif text-sm text-right underline hover:text-accent-light"
                    v-on:click.prevent="handleLogout"
                >
                    Logout instead.
                </a>
            </div>
        </template>
    </AuthLayout>
</template>

<script>
import AuthLayout from "@/Layouts/AuthLayout";
import FSubmitButton from "@/Components/Framework/Form/FSubmitButton";
export default {
    name: 'VerifyEmail',
    components: {
        AuthLayout,
        FSubmitButton,
    },
    methods: {
        handleSendEmail: function () {
            this.$inertia.post('/partner/email/verification-notification');
        },
        handleLogout: function () {
            this.$inertia.post('/partner/logout');
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
