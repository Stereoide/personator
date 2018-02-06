<template>
    <div class="container">
        <person v-for="person in persons" :key="person.id" :id="person.id" :name="person.name" :likes="person.likes" :dislikes="person.dislikes"></person>

        <div class="modal is-active" v-show="isAddingPerson">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="box">
                    <h2>Neue Person hinzufügen</h2>

                    <div class="field">
                        <div class="control has-icons-left">
                            <input class="input" type="text" placeholder="Name" value="">
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                    </div>

                    <button class="button is-link" @click="addPerson">Person hinzufügen</button>
                    <button class="button is- is-right" @click="$emit('close-add-person-modal')">Abbrechen</button>
                </div>
            </div>

            <button class="modal-close is-large" aria-label="close" @click="$emit('close-add-person-modal')"></button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['isAddingPerson'],

        data() {
            return {
                nextPersonId: 3,
                newPersonName: '',
                persons: [],
                isShowingNewPersonModal: false
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

                    /* Close modal */

                    this.$emit('close-add-person-modal');
                } else {
                    /* Close modal */

                    this.$emit('close-add-person-modal');
                }
            }
        },

        mounted() {
            this.fetchPersons();
        }
    }
</script>
