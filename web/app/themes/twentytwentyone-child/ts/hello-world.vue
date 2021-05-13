<template>
    <div v-on:click="click" class="hello-world">{{ helloWorld }}</div>
</template>

<style lang="scss">    
    .hello-world {
        font-size: 36px;
        font-weight: bold;
        width: calc(100vw - 200px);
        text-align: center;
    }
</style>

<script lang="ts">
    import Vue from "vue";
    import Component from "vue-class-component";

    @Component
    export default class HelloWorld extends Vue {
        public helloWorld: string = 'VueJS Hello world! Click me...';
        private i = 0;
        
        click() {
            this.helloWorld = `Hello world! ${++this.i}`
        }
    }
</script>
