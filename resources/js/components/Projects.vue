<template>
    <div>
        <div class="button-group filter-button-group">
            <div data-filter="*" class="btn filter is-checked">
                All     
            </div>
            <div v-for="technology in technologies" v-bind:key="technology.id" class="btn filter" :data-filter="'.' + technology.name.toLowerCase().replace(/\s/g, '')">
                {{technology.name}}     
            </div>
        </div>
        
        <div class="grid">
            <div v-for="project in projects" v-bind:key="project.id" class="grid-item" :class="project.technologies.toLowerCase().replace(/[^\w\s]/g, '')">
                <a :href="'portfolio/' + project.titel.toLowerCase().replace(/\s/g, '')">
                    <img :src="'images/projects/' + project.titel.toLowerCase().replace(/\s/g, '') + '.jpg'" :alt="project.titel">
                </a>
                <div class="technologie v-flexer">{{project.technologies}}</div>
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
            project: {
                id: '',
                titel: '',
                year: '',
                url: '',
                smalldescr: '',
                descr: '',
                company: '',
                technologies: ''
            },
            technology: {
                id: '',
                name: '',
                skill_perc: '',
                type: ''
            },
            category: {
                id: '',
                type: ''
            }
        }
    },
    created() {
        this.fetchArticles(),
        this.fetchTechnologies(),
        this.fetchCategories()
    },
    methods: {
        fetchArticles() {
            fetch('api/projects')
            .then(res => res.json())
            .then(res => {
                this.projects = res;
            })
        },
        fetchTechnologies() {
            fetch('api/technologies')
            .then(res => res.json())
            .then(res => {
                this.technologies = res;
            })
        },
        fetchCategories() {
            fetch('api/categories')
            .then(res => res.json())
            .then(res => {
                this.categories = res;
            })
        }
    }
}


</script>