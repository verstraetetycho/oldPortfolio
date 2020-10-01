<template>
    <div class="grid">
        <div
            v-for="project in projects"
            v-bind:key="project.id"
            class="grid-item"
            :class="project.technologies.toLowerCase().replace(/[^\w\s]/g, '')"
        >
            <a :href="'portfolio/' + project.titel.toLowerCase()">
                <img
                    :src="
                        'images/projects/' +
                            project.titel.toLowerCase().replace(/\s/g, '') +
                            '.jpg'
                    "
                    :alt="project.titel"
                />
            </a>
            <h5 class="titel v-flexer"><span>#</span> {{ project.titel }}</h5>
            <div class="technologie v-flexer">{{ project.technologies }}</div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            projects: [],
            project: {
                id: "",
                titel: "",
                year: "",
                url: "",
                smalldescr: "",
                descr: "",
                type: "",
                company: ""
            }
        };
    },
    created() {
        this.fetchArticles();
    },
    methods: {
        fetchArticles() {
            let arr = [];

            let start;
            let stop;

            fetch("api/projects")
                .then(res => res.json())
                .then(res => {
                    start = res[0].id;
                    stop = start + res.length - 1;
                    let verschil = stop - start + 1;

                    do {
                        let num = Math.floor(Math.random() * verschil + 0);

                        let numstart = num + start;
                        arr.push(numstart);
                        arr = arr.filter((item, index) => {
                            return arr.indexOf(item) === index;
                        });
                    } while (arr.length < 3);

                    arr.forEach(element => {
                        fetch(`api/projects/${element}`)
                            .then(res => res.json())
                            .then(res => {
                                this.projects.push(res);
                            });
                    });
                });
        }
    }
};
</script>
