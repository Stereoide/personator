<template>
    <div>
        <ul class="list-group dislikes">
            <dislike v-for="(dislike, index) in dislikes" :key="index" :dislike="dislike"></dislike>

            <li class="list-group-item dislike no-prefix">
                <div class="field is-grouped">
                    <div class="control is-expanded">
                        <input class="input" type="text" v-model="newDislike" :placeholder="placeholder">
                    </div>

                    <button class="button" @click="addDislike">hinzufügen</button>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: ['personId', 'personName', 'dislikes'],

        data() {
            return {
                newDislike: ''
            };
        },

        methods: {
            addDislike() {
                let self = this;

                if (this.newDislike != '') {
                    $.post(
                        window.ajaxPersonBase + '/' + this.personId + '/dislikes',
                        {
                            personId: this.personId,
                            name: this.newDislike
                        },
                        function(response) {
                            self.dislikes.push(response);
                        },
                        'json'
                    );

                    this.newDislike = '';
                }
            }
        },

        computed: {
            placeholder() {
                return 'was mag ' + this.personName + (this.dislikes.length > 0 ? ' noch' : '') + ' nicht?';
            }
        },

        mounted() {

        }
    }
</script>
