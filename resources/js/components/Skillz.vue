<template>
    <div>
        <div v-for="category in categories" v-bind:key="category.id">
            <h3>{{ category.type }}</h3>
            <div class="light-slider">
                <div
                    v-for="technology in window['technologies' + category.id]"
                    v-bind:key="technology.id"
                    class="tile v-flexer"
                >
                    <p>{{ technology.name }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            window: {
                technologies1: [],
                technologies2: [],
                technologies3: []
            },
            categories: [],
            technology: {
                id: "",
                name: "",
                skill_perc: "",
                type: ""
            },
            category: {
                id: "",
                type: ""
            }
        };
    },
    created() {
        this.fetchTechnologies();
    },
    methods: {
        fetchTechnologies() {
            fetch("api/categories")
                .then(res => res.json())
                .then(res => {
                    this.categories = res;
                    this.categories.forEach(element => {
                        fetch(`api/technologies/${element.id}`)
                            .then(res => res.json())
                            .then(res => {
                                this.window["technologies" + element.id] = res;
                                console.log(
                                    this.window["technologies" + element.id]
                                );
                            });
                    });
                });
        }
    }
};
</script>
