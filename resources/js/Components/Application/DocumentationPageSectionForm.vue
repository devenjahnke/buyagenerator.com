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
        <!-- Content -->
        <div class="form-group-vertical col-span-1">
            <label
                for="content"
                class="form-label"
            >
                Content
            </label>
            <textarea
                name="content"
                id="content"
                cols="30"
                rows="10"
                class="form-textarea"
                v-model="$props.form.content"
            ></textarea>
            <FInputError
                :message="$props.form.error('content')"
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
    name: 'DocumentationPageSectionForm',
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
