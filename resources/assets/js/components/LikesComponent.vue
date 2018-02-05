<template>
    <div>
        <ul class="list-group">
            <like v-for="(like, index) in likes" :key="index" :like="like"></like>
            <li class="list-group-item like">
                <input type="text" class="form-control" v-model="newLike">
                <button class="btn btn-primary" @click="addLike">hinzufügen</button>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: ['likes'],

        data() {
            return {
                newLike: ''
            };
        },

        methods: {
            addLike() {
                this.likes.push(this.newLike);
                this.newLike = '';
            }
        },

        mounted() {

        }
    }
</script>
