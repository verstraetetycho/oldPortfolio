<template>
  <div class="charts">
    <div v-for="category in categories" v-bind:key="category.id" class="chart chart--dev">
      <span class="chart__title">{{category.type}}</span>
      <ul class="chart--horiz">
        <li
          v-for="technology in window['technologies'+category.id]"
          v-bind:key="technology.id"
          class="chart__bar"
          :style="'width:'+technology.skill_perc+'%;'"
        >
          <span class="chart__label">{{technology.name}}</span>
        </li>
      </ul>
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
                console.log(this.window["technologies" + element.id]);
              });
          });
        });
    }
  }
};
</script>