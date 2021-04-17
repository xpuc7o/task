<template>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
                <label class="input-group-text" for="color">
                    Color <span :class="'color-sample bg-' + selectedColor"></span>
                </label>
            </div>
            <select name="color" id="color" class="custom-select" v-model="selectedColor">
                <option v-for="(color, value) in colors" :value="value">
                    {{ color }}
                </option>
            </select>
        </div>
    </div>
</template>

<script>
export default {
    props: ['colors', 'selectedColor'],
    data() {
        return {
            selectedColor: this.selectedColor
        }
    },
    mounted() {
        console.log('Hello ?');
    }
}
</script>

<style scoped>
.color-sample {
    margin-left: 8px;
    display: inline-block;
    width: 15px;
    height: 15px;
}
</style>
