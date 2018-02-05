<template>
    <li class="list-group-item">
        {{ name }}<br />
        <likes :likes="likes"></likes>
        <dislikes :dislikes="dislikes"></dislikes>
    </li>
</template>

<script>
    export default {
        props: ['id', 'name', 'likes', 'dislikes'],

        data() {
            return {

            };
        },

        methods: {

        },

        mounted() {

        }
    }
</script>
