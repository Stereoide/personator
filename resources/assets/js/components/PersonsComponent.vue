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
                persons: [
                    {
                        id: 1,
                        name: 'Nisi',
                        likes: ['Schoki'],
                        dislikes: []
                    },
                    {
                        id: 2,
                        name: 'Jörn',
                        likes: ['Videospiele', 'Kino'],
                        dislikes: ['Schwimmen']
                    }
                ]
            };
        },

        methods: {
            addPerson() {
                let newPerson = {
                    id: this.nextPersonId++,
                    name: this.newPersonName,
                    likes: [],
                    dislikes: []
                };
                this.persons.push(newPerson);
                this.newPersonName = '';
            }
        },

        mounted() {

        }
    }
</script>
