<template>
  <div>

<div class="container h2 mt-5"></div>
    <div v-if="IsUser==1" class="container" :class="$t('text_align')">


        <div class="row">
<div class="offset-md-2">

</div>
                <div class="col-md-8">

                    <div class=" container  h2 mt-2 text-dark" :dir="$t('directions')" :class="$t('text_align')">{{$t('open_project')}}</div>
          <div v-for="(project,index) in projects.data" :key="index" v-bind="project">
              <div class="p-descrip-box mt-3 container">

<div class="ml-3">
         <div class="font-weight-bold theme-color   ml-2 ">
             {{project.title}}</div>

    <div class="mt-2 text-muted ml-2">
            <span class=" d-block">
            <small class="fa fa-history text-muted " style="font-size:12px"></small><small>
                 <!-- {{created_at | luxon({ input: "server" }) }} -->
                 {{project.added_at}}
                  </small>
            <small class="fa  fa-ticket text-muted" ></small>


            <small >   ( {{project.count==null ? 0 : project.count}} ){{$t('Numbers_Offer')}}</small>
            </span>
    </div>



            <div class="mt-3 " style="padding:0 20px">
              <span v-if="project.note.length >  100">
             {{project.note.substr(0,80 )}}...
              </span>

              <div class="row mt-3">


                        <div class="col-6 ">
                          
                  <div class="pr-single m-0">
                      <div class="pr-desc">
											<span>{{$t('bed_rooms')}}</span>
											<p class="pr-des-title m-0" >  {{project.bedroom}}</p>

										</div>
										<div class="pr-icon"><i class="fa fa-bed"></i></div>

									</div>
                                     <div class="pr-single m-0 pr-2 pl-2">
                                         <div class="pr-desc">
											<span>{{$t('bathroom')}}</span>
											<p class="pr-des-title m-0" >  {{project.bathroom}}</p>

										</div>
										<div class="pr-icon"><i class="fa fa-bath"></i></div>

									</div>
                </div>





              </div>
              <router-link class="  theme-btn" :to="{name:'project',params:{id:project.id} }">{{$t('more')}}</router-link>
                 </div>


        </div>



</div>
          </div>





      </div>

      <div class="offset-md-2">

      </div>



        </div>
           <!-- <pagination :data="projects" @pagination-change-page="detailsTender"></pagination> -->

    </div>




    <div v-if="IsUser==6">
<div class="container">
      <div class="row mt-5">

     <div class="offset-md-2">
     </div>
<div class="col-md-8 col-sm-12">
<div class="p-descrip-box mt-3 container" v-for="(tender,index) in tenders.data" :key="index" v-show="tenders.data.length>0">

<div class="ml-3">
         <h1 class="font-weight-bold  h4 main-color" >
            {{tender.title}}</h1> <div class=" font-weight-bold text-right text-muted "> 
              <span class="main-color"> {{tender.id}}</span></div>





            <small class="fa fa-history text-muted " style="font-size:12px"></small> {{tender.added_at}}

            <small class="fa  fa-ticket text-muted" ></small>{{$t('Numbers_Offer')}} ( {{tender.count}})




            <div class=" " style="padding:0 20px">
              <span >
             {{tender.notes.substr(0,90 )}}...
              </span>


              <div class="row mt-3">
                  <div class="col-md-6  text-left main-color">
<span class="badge badge-light main-color">
    <all-uae :emirates="tender.emirates"></all-uae>
      

</span>

 <span v-for="roles , index in tender.role_id" :key="index">


                        <span v-if="roles.role_id==10">
                            <span class=" badge badge-light main-color">{{$t('owner')}}</span>
                        </span>

                        <span v-if="roles.role_id==1">
                            <span class="badge badge-light main-color"> {{$t('Engineering_Consulting_Office')}}  </span>
                        </span>
                </span>
                  </div>

<div class="col-6 font-weight-bold">


    <div>
        <button class="  theme-btn float-right" @click="Toredict(tender.id)">{{$t('more')}}</button>
    </div>


</div>

              </div>

                 </div>


        </div>



</div>
<div class="p-descrip-box mt-3 " v-show="tenders.data.length==0">
  {{$t('Thers_No_Tender')}}
</div>

</div>
<div class="offset-md-2">


</div>


</div>


      </div>
    </div>

    <div v-if="IsUser==5">
<div class="container">
      <div class="row mt-5">

<div class="offset-md-2">

</div>
<div class="col-md-8 col-sm-12">
            <div class="h1 text-right">{{$t('open_project')}}</div>

<div class="p-descrip-box mt-3 container" v-for="(tender,index) in tenders.data" :key="index">

<div class="ml-3">
         <h1 class="font-weight-bold  h4 theme-color" >
            {{tender.title}}</h1> <div class=" font-weight-bold text-right  "> {{$t('Tender_Num')}}<span class="main-color"> {{tender.id}}</span></div>





            <small class="fa fa-history text-muted " style="font-size:12px"></small> {{tender.added_at}}

            <small class="fa  fa-ticket text-muted" ></small>{{$t('Numbers_Offer')}} ( {{tender.count}})




            <div class=" " style="padding:0 20px">
              <span >
             {{tender.notes.substr(0,90 )}}...
              </span>


              <div class="row mt-3">
                  <div class="col-6 text-left main-color">
<span class="badge badge-custom-orange main-color">
   <all-uae :emirates="tender.emirates"></all-uae>


</span>


                  </div>

<div class="col-6 font-weight-bold">


    <div>
        <button class="  theme-btn float-right" @click="Toredict(tender.id)">{{$t('tender')}} </button>
    </div>


</div>

              </div>

                 </div>


        </div>



</div>
</div>
<div class="offset-md-2">

</div>


</div>


      </div>
    </div>

    <div v-if="IsUser==4">
<div class="container">
      <div class="row mt-5">

<div class="offset-md-2">

</div>
<div class="col-md-8 col-sm-12">
            <div class="h1 text-right">{{$t('open_project')}}</div>

<div class="p-descrip-box mt-3 container" v-for="(tender,index) in tenders.data" :key="index">

<div class="ml-3">
         <h1 class="font-weight-bold  h4 theme-color" >
            {{tender.title}}</h1> <div class=" font-weight-bold text-right  "> {{$t('Tender_Num')}}<span class="main-color"> {{tender.id}}</span></div>





            <small class="fa fa-history text-muted " style="font-size:12px"></small> {{tender.added_at}}

            <small class="fa  fa-ticket text-muted" ></small>{{$t('Numbers_Offer')}} ( {{tender.count}})




            <div class=" " style="padding:0 20px">
              <span >
             {{tender.notes.substr(0,90 )}}...
              </span>


              <div class="row mt-3">
                  <div class="col-6 text-left main-color">
<span class="badge badge-custom-orange main-color">
    <all-uae  :emirates="tender.emirates"></all-uae>
               

</span>


                  </div>

<div class="col-6 font-weight-bold">


    <div>
        <button class="  theme-btn float-right" @click="Toredict(tender.id)">{{$t('more')}}</button>
    </div>


</div>

              </div>

                 </div>


        </div>



</div>
</div>
<div class="offset-md-2">

</div>


</div>


      </div>
    </div>


    <div v-if="IsUser==3">
<div class="container">
      <div class="row mt-5">

<div class="offset-md-2">

          </div>
<div class="col-md-8 col-sm-12">
<div class="p-descrip-box mt-3 container" v-for="(tender,index) in tenders.data" :key="index">

<div class="ml-3">
         <h1 class="font-weight-bold  h4 theme-color" >
            {{tender.title}}</h1> <div class=" font-weight-bold text-right text-muted "> {{$t('Tender_Num')}}<span class="main-color"> {{tender.id}}</span></div>





            <small class="fa fa-history text-muted " style="font-size:12px"></small> {{tender.added_at}}

            <small class="fa  fa-ticket text-muted" ></small>{{$t('Numbers_Offer')}} ( {{tender.count}})




            <div class=" " style="padding:0 20px">
              <span >
             {{tender.notes.substr(0,90 )}}...
              </span>


              <div class="row mt-3">
                  <div class="col-6 text-left main-color">
<span class="badge badge-custom-orange main-color">
    <all-uae  :emirates="tender.emirates"></all-uae>



</span>

                  </div>

<div class="col-6 font-weight-bold">


    <div>
        <button class="  theme-btn float-right" @click="Toredict(tender.id)">{{$t('more')}}</button>
    </div>


</div>

              </div>

                 </div>


        </div>



</div>
</div>
<div class="offset-md-2">

          </div>


</div>


      </div>
    </div>





  </div>
</template>






<script>
import AllUae from '../auth/AllUae.vue';
import listproject from "./listproject.vue";
export default {
  components: { listproject, AllUae },

  data() {
    return {
      projects: null,
      users: null,
      tenders: [],
      count: null,
    };
  },
  methods:{

      detailsTender(page=1){
//   this.loading = true;



      if (this.IsUser== 1) {
        axios.get('/AllTenderConsulte?page ='+page).then((response) => {
          this.projects = response.data;
        });
      }

      if (this.IsUser== 6) {
        const request = axios.get("/AllTenderConsr?page="+page).then((response) => {
          this.tenders = response.data.data;
          this.loading = false;
        });
      }

       if (this.IsUser== 5) {
        const request = axios.get("/AllTenderInterior?page="+page).then((response) => {
          this.tenders = response.data.data;
          this.loading = false;
        });
      }


if(this.IsUser== 4) {
        const request = axios.get("/AllTenderHvac?page="+page).then((response) => {
          this.tenders = response.data.data;
          this.loading = false;
        });
}
if(this.IsUser== 3) {
        const request = axios.get("/AllTenderStone?page="+page).then((response) => {
          this.tenders = response.data.data;
          this.loading = false;
        });
}

      },
      Toredict(id){
          if(this.IsUser== 6) {
          console.log(id);
           this.$router.push({ name:'consrDetails',params:{id}});
          }
           if(this.IsUser== 4) {
          console.log(id);
           this.$router.push({ path: `/tenders/hvac/${id}`});
          }
          if(this.IsUser== 3) {
          console.log(id);
           this.$router.push({ path: `/tenders/stone/${id}`});
          }
           if(this.IsUser== 5) {
          console.log(id);
           this.$router.push({ path: `/tenders/interior/${id}`});
          }
      }


  },
  created() {

      this.detailsTender();

  },
     computed: {

     IsUser(){
            return this.$store.getters.IsUser
        },

  },
};
</script>

<style scoped>
.card{
    padding: 20px;
}
.badge{
padding: 10px;
border-radius: 10px;
}
</style>
