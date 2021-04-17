<template>
    <div class="cell">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                Link
                <span>
                    <a :href="editUrl"><i class="fa fa-pencil text-success" aria-hidden="true"></i></a>
                    <i class="fa fa-trash text-danger ml-2" aria-hidden="true"></i>
                </span>
            </div>
            <div class="card-body text-center">
                <a :href="url" :class="'btn btn-' + color">
                    Click me!
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['url', 'color', 'editUrl'],
}
</script>

<style scoped>

</style>
