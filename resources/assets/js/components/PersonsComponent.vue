<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Persons</div>

                    <div class="panel-body">
                        <ul class="list-group">
                            <person v-for="person in persons" :key="person.id" :id="person.id" :name="person.name" :likes="person.likes" :dislikes="person.dislikes"></person>
                            <li class="list-group-item">
                                <input type="text" class="form-control" v-model="newPersonName">
                                <button class="btn btn-primary" @click="addPerson">Person hinzufügen</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                nextPersonId: 3,
                newPersonName: '',
                persons: []
            };
        },

        methods: {
            fetchPersons() {
                let self = this;

                $.getJSON(
                    window.ajaxPersonBase,
                    function(response) {
                        self.persons = response;
                    }
                );
            },

            addPerson() {
                let self = this;

                if (this.newPersonName != '') {
                    $.post(
                        window.ajaxPersonBase,
                        {
                            name: this.newPersonName
                        },
                        function(response) {
                            self.persons.push(response);
                        },
                        'json'
                    );

                    this.newPersonName = '';
                }
            }
        },

        mounted() {
            this.fetchPersons();
        }
    }
</script>
