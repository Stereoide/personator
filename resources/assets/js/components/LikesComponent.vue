<template>
    <div>
        <ul class="list-group">
            <like v-for="(like, index) in likes" :key="index" :like="like"></like>
            <li class="list-group-item like no-prefix">
                <input type="text" class="form-control" v-model="newLike" placeholder="was mag er/sie noch?" />
                <button class="btn btn-primary" @click="addLike">hinzufügen</button>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: ['personId', 'personName', 'likes'],

        data() {
            return {
                newLike: ''
            };
        },

        methods: {
            addLike() {
                let self = this;

                if (this.newLike != '') {
                    $.post(
                        window.ajaxPersonBase + '/' + this.personId + '/likes',
                        {
                            personId: this.personId,
                            name: this.newLike
                        },
                        function(response) {
                            self.likes.push(response);
                        },
                        'json'
                    );

                    this.newLike = '';
                }
            }
        },

        mounted() {

        }
    }
</script>
