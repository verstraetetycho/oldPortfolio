<template>
    <div>
        <div class="button-group filter-button-group">
            <div data-filter="*" class="btn filter is-checked">All</div>
            <div
                v-for="x in projTech"
                v-bind:key="x"
                class="btn filter v-in-flexer"
                :data-filter="
                    '.' +
                        x
                            .toLowerCase()
                            .replace(/\s/g, '')
                            .replace(/\(/g, '')
                            .replace(/\)/g, '')
                "
            >
                <span>-</span>
                {{ x }}
            </div>
        </div>

        <div class="grid">
            <div
                v-for="project in projects"
                v-bind:key="project.id"
                class="grid-item"
                :class="
                    project.technologies.toLowerCase().replace(/[^\w\s]/g, '')
                "
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
                <h5 class="titel v-flexer">
                    <span>#</span> {{ project.titel }}
                </h5>
                <div class="technologie v-flexer">
                    {{ project.technologies }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            technologies: [],
            projects: [],
            categories: [],
            projTech: new Set(),
            project: {
                id: "",
                titel: "",
                year: "",
                url: "",
                smalldescr: "",
                descr: "",
                company: "",
                technologies: ""
            },
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
        this.fetchArticles(), this.fetchTechnologies(), this.fetchCategories();
    },
    methods: {
        fetchArticles() {
            fetch("api/projects")
                .then(res => res.json())
                .then(res => {
                    this.projects = res;
                    var filtprojlist = [];
                    this.projects.forEach(proj => {
                        filtprojlist.push(proj.technologies.split(", "));
                    });
                    filtprojlist.forEach(filt => {
                        for (let i = 0; i < filt.length; i++) {
                            const element = filt[i];
                            this.projTech.add(element);
                        }
                    });
                });
        },
        fetchTechnologies() {
            fetch("api/technologies")
                .then(res => res.json())
                .then(res => {
                    this.technologies = res;
                });
        },
        fetchCategories() {
            fetch("api/categories")
                .then(res => res.json())
                .then(res => {
                    this.categories = res;
                });
        }
    }
};
</script>
