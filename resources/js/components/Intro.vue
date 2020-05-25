<template>
  <div class="container intro panel">
    <div class="row justify-content-center">
      <div class="col-md-7">
        <h1>
          Hello
          <span>.</span>
        </h1>
        <p>
          My name is
          <span>Tycho Verstraete</span>. I’m a software engineer and a designer, heres is my portfolio. Have a look.
        </p>
        <div class="countgroup">
          <div class="count">
            <h3 class="counter" :data-count="projects.length">0</h3>
            <p>Projects done</p>
          </div>
          <div class="count">
            <h3 class="counter" :data-count="new Date().getFullYear()-2017">0</h3>
            <p>Years of experience</p>
          </div>
          <div class="count">
            <h3 class="counter" data-count="0">0</h3>
            <p>
              Earned
              <br />likes
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <img src="images/portrait.jpg" alt="foto" />
      </div>
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
        company: "",
        technologies: ""
      }
    };
  },
  created() {
    this.fetchArticles();
  },
  methods: {
    fetchArticles() {
      fetch("api/projects")
        .then(res => res.json())
        .then(res => {
          this.projects = res;
        });
    }
  }
};
</script>