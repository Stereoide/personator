<template>
    <div>
        <ul class="list-group">
            <dislike v-for="(dislike, index) in dislikes" :key="index" :dislike="dislike"></dislike>
            <li class="list-group-item dislike no-prefix">
                <input type="text" class="form-control" v-model="newDislike" placeholder="was mag er/sie noch nicht?" />
                <button class="btn btn-primary" @click="addDislike">hinzufügen</button>
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

        mounted() {

        }
    }
</script>
