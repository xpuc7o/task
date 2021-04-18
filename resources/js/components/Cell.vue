<template>
    <div class="cell">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                Link
                <span>
                    <a :href="editUrl"><i class="fa fa-pencil text-success cursor-pointer" aria-hidden="true"></i></a>
                    <a :href="deleteUrl">
                        <i @click.prevent="deleteCell"
                           class="fa fa-trash text-danger ml-2 cursor-pointer"
                           aria-hidden="true"></i>
                    </a>
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
    props: ['url', 'color', 'editUrl', 'deleteUrl'],
    methods: {
        deleteCell() {
            if (confirm('Are you sure want to reset this link?')) {
                axios.delete(this.deleteUrl)
                    .then(response => {
                        location.reload();
                    })
                    .catch(error => {
                        alert('Something went wrong. Please try again later.')
                    });
            }
        }
    }
}
</script>

<style scoped>

</style>
