<template>
    <div>
        <ul class="list-group likes">
            <like v-for="(like, index) in likes" :key="index" :like="like"></like>

            <li class="list-group-item like no-prefix">
                <div class="field is-grouped">
                    <div class="control is-expanded">
                        <input class="input" type="text" v-model="newLike" :placeholder="placeholder">
                    </div>

                    <button class="button" @click="addLike">hinzufügen</button>
                </div>
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

        computed: {
            placeholder() {
                return 'was mag ' + this.personName + (this.likes.length > 0 ? ' noch' : '') + '?';
            }
        },

        mounted() {

        }
    }
</script>
