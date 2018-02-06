<template>
    <div>
        <article class="message">
            <div class="message-header">
                {{ name }}
            </div>

            <div class="message-body">
                <likes :person-name="name" :person-id="id" :likes="likes"></likes>
                <dislikes :person-name="name" :person-id="id" :dislikes="dislikes"></dislikes>
            </div>
        </article>
    </div>
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
