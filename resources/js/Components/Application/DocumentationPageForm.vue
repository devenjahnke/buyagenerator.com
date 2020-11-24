<template>

    <div class="grid grid-cols-1 gap-5">
        <!-- Title -->
        <div class="form-group-vertical col-span-1">
            <label
                for="title"
                class="form-label"
            >
                Title
            </label>
            <input
                type="text"
                name="title"
                id="title"
                class="form-input"
                v-model="$props.form.title"
                required
            >
            <FInputError
                :message="$props.form.error('title')"
                class=""
            />
        </div>
        <!-- Slug -->
        <div class="form-group-vertical col-span-1">
            <label
                for="slug"
                class="form-label"
            >
                Slug
            </label>
            <input
                type="text"
                name="slug"
                id="slug"
                class="form-input"
                v-model="$props.form.slug"
                required
            >
            <FInputError
                :message="$props.form.error('slug')"
                class=""
            />
        </div>
        <!-- Description -->
        <div class="form-group-vertical col-span-1">
            <label
                for="description"
                class="form-label"
            >
                Description
            </label>
            <textarea
                name="description"
                id="description"
                cols="30"
                rows="10"
                class="form-textarea"
                v-model="$props.form.description"
            ></textarea>
            <FInputError
                :message="$props.form.error('description')"
                class=""
            />
        </div>
        <!-- Submit Button -->
        <div class="form-group-vertical col-span-1">
            <FSubmitButton>
                <slot name="submitButton"></slot>
            </FSubmitButton>
        </div>
    </div>
</template>

<script>
import FInputError from "@/Components/Framework/Form/FInputError";
import FSubmitButton from "@/Components/Framework/Form/FSubmitButton";

export default {
    name: 'DocumentationPageForm',
    components: {
        FInputError,
        FSubmitButton,
    },
    props: {
        form: {
            required: true
        }
    },
}
</script>

<style lang="scss" scoped>

</style>
