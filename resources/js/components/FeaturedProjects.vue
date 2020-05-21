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
            let arr = [];

            let start;
            let stop;

            fetch('api/projects')
            .then(res => res.json())
            .then(res => {
                start = res[0].id;
                stop = start + res.length - 1;

                do {
                    let num = Math.floor((Math.random() * stop) + start);
                    arr.push(num);
                    arr = arr.filter((item, index) => {
                        return arr.indexOf(item) === index
                    });
                } while (arr.length < 3);
            });
                
            
            
            arr.forEach(element => {
                fetch(`api/projects/${element}`)
                .then(res => res.json())
                .then(res => {
                    this.projects.push(res);
                })
            });
            
        }
    }
}


</script>