<template>
    <div class="grid">
        <div v-for="project in projects" v-bind:key="project.id" class="grid-item" :class="project.type">
            <a :href="'portfolio/' + project.titel.toLowerCase().replace(/\s/g, '')">
                <img :src="'images/' + project.titel.toLowerCase().replace(/\s/g, '') + '.jpg'" :alt="project.titel">
            </a>
            <div class="technologie v-flexer"><ion-icon :name="'logo-' + project.type"></ion-icon> {{project.titel}}</div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            projects: [],
            project: {
                id: '',
                titel: '',
                year: '',
                url: '',
                smalldescr: '',
                descr: '',
                type: '',
                company: ''
            }
        }
    },
    created() {
        this.fetchArticles();
    },
    methods: {
        fetchArticles() {
            for (let i = 1; i < 4; i++) {
                let temp = Math.floor((Math.random() * 8) + 1);
                fetch(`api/projects/${temp}`)
                .then(res => res.json())
                .then(res => {
                    this.projects.push(res);
                })
            }
            
        }
    }
}


</script>