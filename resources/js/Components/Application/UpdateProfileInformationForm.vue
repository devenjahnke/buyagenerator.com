<template>
    <form
        action="#"
        v-on:submit.prevent="handleProfileInformationUpdate"
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
            <!-- Submit Button -->
            <div class="form-group-vertical col-span-1">
                <FSubmitButton>
                    Update Profile
                </FSubmitButton>
            </div>
        </div>
    </form>
</template>

<script>
import FInputError from "@/Components/Framework/Form/FInputError";
import FSubmitButton from "@/Components/Framework/Form/FSubmitButton";

export default {
    name: 'UpdateProfileInformationForm',
    components: {
        FInputError,
        FSubmitButton
    },
    props: {
        user: {
            required: true,
        }
    },
    data: function () {
        return {
            form: this.$inertia.form({
                '_method': 'PUT',
                first_name: this.user.first_name,
                last_name: this.user.last_name,
                email: this.user.email,
                photo: null,
            }, {
                bag: 'updateProfileInformation',
                resetOnSuccess: false,
            }),
        };
    },
    methods: {
        handleProfileInformationUpdate: function () {
            this.form.post('/partner/user/profile-information', {
                preserveScroll: true,
            });
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
