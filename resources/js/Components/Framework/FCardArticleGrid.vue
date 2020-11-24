<template>
    <div class="f-card-article-grid grid grid-cols-1 lg:grid-cols-4 2xl:grid-cols-6 gap-12 md:gap-16">
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: 'FCardGrid'
}
</script>

<style lang="scss" scoped>
.f-card-article-grid {
    &:nth-child(n) {
        @apply col-span-1;
    }
}
@screen lg {
    .f-card-article-grid {
        * {
            @apply col-span-2;
            &:last-child:nth-child(2n-1) {
                grid-column-end: -2;
            }
        }
    }
}

@screen 2xl {
    .f-card-article-grid {
        * {
            &:last-child:nth-child(3n) {
                grid-column-end: -1;
            }
            &:last-child:nth-child(3n-1) {
                grid-column-end: -2;
            }

            &:nth-last-child(2):nth-child(3n+1) {
                grid-column-end: 4;
            }

            &:last-child:nth-child(3n-2) {
                grid-column-end: 5;
            }
        }
    }
}
</style>
