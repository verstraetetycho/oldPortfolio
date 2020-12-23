<template>
  <ul id="searchUL">
    <li v-for="project in projects" v-bind:key="project.titel">
      <a
        :href="
          appURL +
            '/portfolio/' +
            project.titel.toLowerCase().replace(/\s/g, '%20')
        "
      >
        <strong>Project: </strong>{{ project.titel }}
      </a>
    </li>
    <li v-for="page in pages" v-bind:key="page">
      <a :href="page" class="page"> <strong>Page: </strong>{{ page }} </a>
    </li>
  </ul>
</template>

<script>
export default {
  data() {
    return {
      appURL: process.env.MIX_APP_URL,
      projects: [],
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
      pages: ['home', 'about', 'portfolio', 'contact']
    }
  },
  created() {
    this.fetchArticles()
  },
  methods: {
    fetchArticles() {
      fetch(this.appURL + '/api/projects')
        .then((res) => res.json())
        .then((res) => {
          this.projects = res
          let filtprojlist = []
          this.projects.forEach((proj) => {
            filtprojlist.push(proj.technologies.split(', '))
          })
          filtprojlist.forEach((filt) => {
            for (let i = 0; i < filt.length; i++) {
              const element = filt[i]
            }
          })
        })
    }
  }
}
</script>
