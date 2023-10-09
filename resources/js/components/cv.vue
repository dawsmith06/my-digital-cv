<template>
  <div class="row m-0 animate__animated animate__fadeIn animate__faster" v-show="ready" style="justify-content: space-between;">
    <div id="cover-container" class="col-12 col-md-3 text-center">
      <div class="image"></div>
    </div>
    <div id="top-bar" class="col-md-9 pt-2 pl-4 pr-5">
      <h4 class="text-white">{{ cv.me.full_name || "...." }}</h4>
      <h6 class="text-white pl-1 subtitle">
        {{ cv.me.role || "...." }}
        <span class="d-block mt-1 subtitle-line"></span>
      </h6>
      <p class="about-me text-white pt-2">
        {{ cv.me.about }}
      </p>
    </div>

    <section id="left-side" class="col-md-3 pl-3 pr-1">
      <ul id="contacts-list" class="mt-3 cv-list">
        <li v-for="(contact, key) in cv.contacts" :key="key">
          <img :src="contact.icon" width="20" height="20" />
          <span>
            {{ contact.value }}
          </span>
        </li>
      </ul>
      
      <h6 class="text-primary">SKILLS</h6>
      <hr />
      <ul id="skills-list" class="mt-3 cv-list text-center">
        <li v-for="(skill, key) in cv.skills" :key="key">
          {{ skill.name }}
        </li>
      </ul>

      <h6 class="mt-4 text-primary">LANGUAGES</h6>
      <hr />
      <ul id="languages-list" class="mt-3 cv-list">
        <li v-for="(language, key) in cv.languages" :key="key" class="mb-3">
          <h6 class="small">
            {{ language.name }}
            <small class="text-primary d-block pt-1">
              {{ language.level }}
            </small>
          </h6>
        </li>
      </ul>

      <h6 class="mt-4 text-primary">HOBBIES</h6>
      <hr class="mb-2" />
      <button v-for="(hobby, key) in cv.hobbies" :key="key" class="hobby-btn">
        {{ hobby.name }}
      </button>
    </section>

    <section id="right-side" class="col-md-9 pt-2 pl-4 pr-5">
      <h5 class="mt-4 text-primary"><b>WORK EXPIRIENCE</b></h5>
      <hr />
      <div id="experiences" v-for="(experience,key) in cv.experiences" :key="key">
        <h6 class="section-title text-primary">
          <b>{{experience.role}}</b>  
        </h6>
        <h6 class="section-subtitle">
          <span class="pr-2">{{experience.company}}</span>
          <small class="section-period text-primary">{{experience.period}}</small>
        </h6>
        <p class="section-description small text-justify">
          {{experience.description}}
        </p>
      </div>

      <h5 class="mt-4 text-primary"><b>EDUCATION</b></h5>
      <hr />
      <div id="education"  class="mb-2" v-for="(education,key) in cv.education" :key="key">
        <h6 class="section-title text-primary">
          <b>{{education.name}}</b>  
        </h6>
        <h6 class="section-subtitle">
          <span class="pr-2">{{education.school}}</span>
        </h6>
          <small class="section-period text-primary d-block">{{education.period}}</small>
      </div>

      <h5 class="mt-4 text-primary"><b>CERTIFICATES</b></h5>
      <hr />
      <div id="education"  class="mb-2" v-for="(certificate,key) in cv.certificates" :key="key">
        <h6 class="section-title text-primary">
          <span class="pr-2">
            {{certificate.name}}
          </span>
          <small class="section-period text-primary">{{certificate.period}}</small>
          <a :href="certificate.link" class="small d-block mt-1">Ver certificado</a>
        </h6>
      </div>

      <h5 class="mt-4 text-primary"><b>Personal Projects</b></h5>
      <hr />
      <div id="education"  class="mb-3" v-for="(project,key) in cv.personal_projects" :key="key">
        <h6 class="section-subtitle text-primary">
          <span class="pr-2">
            {{project.name}}
          </span>
          <small class="section-description text-muted d-block">{{project.description}}</small>
        </h6>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  data() {
    return {
      ready: false,
      cv: { me: {}, contact: [] },
    };
  },
  methods: {
    downloadCVData() {},
  },
  beforeMount() {
    axios.get("/me").then((response) => (this.cv = response.data));
  },
  watch: {
    cv() {
      this.ready = true;
      console.log(this.cv.experiences)
    },
  },
  mounted() {
    console.log("Component mounted.");
  },
};
</script>

<style>
#cover-container {
  height: 180px;
  width: 200px;
}
#cover-container .image {
  height: 180px;
  background-image: url(/img/cover.png);
  background-size: 100% 115%;
  background-repeat: no-repeat;
  background-position-y: 7px;
  background-position-x: 6px;
  border-radius: 50%;
  margin-top: -5px;
}
#top-bar {
  background: var(--primary-gradient);
  border-top-left-radius: 2px;
  border-bottom-left-radius: 5px;
}
.subtitle {
  font-size: 12.9px;
  letter-spacing: 0.5px;
}
.subtitle-line {
  border-top: 2px solid white;
  width: 163px;
}
.about-me {
  font-size: 11px;
  text-align: justify;
  letter-spacing: 0.2px;
  line-height: 23px;
  font-weight: 500;
}
.cv-list {
  list-style-type: none;
  padding: 0;
  padding-left: 1.5px;
}
#contacts-list li {
  font-size: 11px;
  display: flex;
  font-weight: 600;
  min-height: 35px;
  text-align: justify;
  word-break: break-all;
  cursor: pointer;
}
#contacts-list li span {
  padding-left: 0.8em;
  padding-top: 4px;
}
#contacts-list li img {
  margin-top: 3px;
}
#skills-list li {
  color: white;
  font-size: 13px;
  font-weight: 600;
  margin-bottom: 0.7em;
  background: var(--secondary-gradient);
  padding-top: 0.3em;
  height: 30px;
  border-radius: 3px;
  letter-spacing: 0.5px;
}
.hobby-btn {
  background-color: white;
  margin-right: 0.3em;
  font-size: 11px;
  border: 1px solid #d4d4d4;
  margin-bottom: 0.3em;
  border-radius: 3px;
  letter-spacing: 0.5px;
}
</style>