<template>
    <AuthLayout>
        <template v-slot:header>
            <h4 class="text-center">
                Reset link sent.
            </h4>
        </template>
        <template v-slot:body>
            <p class="mt-0">
                A password reset link has been sent to your account's email address. Check you email and use the link to reset your password in the next 60 minutes, otherwise you'll have to request a new link.
            </p>
            <div class="flex justify-end mt-4">
                <inertia-link
                    href="/partner/login"
                    class="font-serif text-sm text-right underline hover:text-accent-light"
                >
                    Login instead.
                </inertia-link>
            </div>
        </template>
    </AuthLayout>
</template>

<script>
import AuthLayout from "@/Layouts/AuthLayout";

export default {
    name: 'PasswordResetSent',
    components: {
        AuthLayout,
    }
}
</script>

<style lang="scss" scoped>

</style>
