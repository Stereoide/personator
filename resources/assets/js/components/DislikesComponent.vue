<template>
    <div>
        <ul class="list-group">
            <dislike v-for="(dislike, index) in dislikes" :key="index" :dislike="dislike"></dislike>
            <li class="list-group-item dislike">
                <input type="text" class="form-control" v-model="newDislike">
                <button class="btn btn-primary" @click="addDislike">hinzufügen</button>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: ['dislikes'],

        data() {
            return {
                newDislike: ''
            };
        },

        methods: {
            addDislike() {
                this.dislikes.push(this.newDislike);
                this.newDislike = '';
            }
        },

        mounted() {

        }
    }
</script>
