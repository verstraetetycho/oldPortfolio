<template>
  <div id="technologiescheck">
    <div
      v-for="category in categories"
      v-bind:key="category.id"
      class="button-group filter-button-group"
    >
      <p>{{category.id}}. {{category.type}}</p>
      <div
        v-for="technology in technologiesByCateg(category.id)"
        v-bind:key="technology.id"
        class="form-check form-check-inline"
      >
        <input
          class="form-check-input"
          type="checkbox"
          name="technologiescheck[]"
          :id="technology.name.toLowerCase().replace(/\s/g, '')"
          :value="technology.name"
        />
        <label
          class="form-check-label"
          :for="technology.name.toLowerCase().replace(/\s/g, '')"
        >{{technology.name}}</label>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      technologies: [],
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
    this.fetchTechnologies(), this.fetchCategories();
  },
  methods: {
    technologiesByCateg: function(tType) {
      return this.technologies.filter(x => x.type == tType);
    },
    fetchTechnologies() {
      fetch("../api/technologies")
        .then(res => res.json())
        .then(res => {
          this.technologies = res;
        });
    },
    fetchCategories() {
      fetch("../api/categories")
        .then(res => res.json())
        .then(res => {
          this.categories = res;
        });
    }
  }
};
</script>