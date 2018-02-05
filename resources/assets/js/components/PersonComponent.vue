<template>
    <li class="list-group-item">
        {{ name }}<br />
        <likes :person-name="name" :person-id="id" :likes="likes"></likes>
        <dislikes :person-name="name" :person-id="id" :dislikes="dislikes"></dislikes>
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
